<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task_done;
use App\User;

class TaskDoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $task_dones = task_done::all()->where('deleted',0);
        return view('task_done.index',compact('task_dones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $task_dones=task_done::all()->where('deleted',0);
        $Users=User::all()->where('deleted',0);
        return view('task_done.create',compact('Users'));
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
        $this->validate(request(),[ 
            'student_id'=>'required',
            'task_id'=>'required', 
            'mask'=>'required',
       ]);
       task_done::create(request()->all());
       return redirect()->route('task_done.index')->with('message',['success','Task done creado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $task_dones=task_done::all();
        $Users=User::all();
        $task_done= task_done::find($id);
        return view('task_done.update',compact('task_done','Users'));
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
        //
        $this->validate(request(),[ 
            'student_id'=>'required',
            'task_id'=>'required', 
            'mask'=>'required', 
       ]);
       task_done:: find($id)->update(request()->all());
       return redirect()->route('task_done.index')->with('message',['success','Task_done modificado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        task_done::find($id)->update([
            'deleted'=> '1'
        ]);
        return back()->with('message', ['success', __("Task done eliminado correctamente")]);
    }
}
