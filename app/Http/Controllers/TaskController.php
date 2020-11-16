<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class TaskController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
       $task = task::all();
        return view('Tasks.index',compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
       return view('Tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //
         $this->validate($request,['number'=>'required', 'description'=>'required', 'deleted'=>'required']);
         task::create($request->all());
         return redirect()->route('Tasks.index')->with('success','Registro creado satisfactoriamente');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$task=task::find($id);
        //return  view('task.show',compact('task'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task=task::find($id);
        return view('Tasks.update',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['number'=>'required', 'description'=>'required', 'deleted'=>'required']);
 
        task::find($id)->update($request->all());
        return redirect()->route('Tasks.index')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        task::find($id)->update([
            'deleted'=> '1'
        ]);
        return back()->with('message', ['success', __("Task eliminado correctamente")]);
   
    }
}
