<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use App\User;

class TaskController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if((auth()->user()->type === 'ad')){
            $tasks=task::all()->where('deleted',0);
            return view('Tasks.index',compact('tasks'));
        }
        else{
            $user= User::find(auth()->user()->id);
            $cycle=$user->find($user->id)->cycle;
            $ras = $cycle->ras;
            return view('Tasks.index',compact('ras'));
        }
        
        
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
         $this->validate($request,['number'=>'required', 'description'=>'required']);
         task::create($request->all());
         return redirect()->route('task.index')->with('success','Registro creado satisfactoriamente');
     
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
        $this->validate($request,['number'=>'required', 'description'=>'required']);
 
        task::find($id)->update($request->all());
        return redirect()->route('task.index')->with('success','Registro actualizado satisfactoriamente');
 
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
