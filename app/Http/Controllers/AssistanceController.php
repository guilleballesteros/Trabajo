<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\assistance;
use App\User;

class AssistanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::find(auth()->user()->id);
        $assistances = $user->assistances->where('deleted',0);
        return view('assistances.index',compact('assistances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users=User::all()->where('deleted',0);
        return view('assistances.create',compact('users'));
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
            'date'=>'required', 
            'assistance'=>'required',
       ]);
       User::create(request()->all());
       return redirect()->route('assistances.index')->with('message',['success','Asistencia creada correctamente']);
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
        $assistances=assistance::all();
        $users= User::find($id);
        return view('assistances.edit',compact('assistances','users'));
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
            'date'=>'required', 
            'assistance'=>'required',
       ]);
       assitence:: find($id)->update(request()->all());
       return redirect()->route('assistances.index')->with('message',['success','assistance modificada correctamente']);
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
        assitence::find($id)->update([
            'deleted'=> '1'
        ]);
        return back()->with('message', ['success', __("assistance eliminada correctamente")]);
    }
}