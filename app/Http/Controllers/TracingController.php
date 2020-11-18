<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tracing;

class TracingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tracings = tracing::all();
        return view('Tracing.index',compact('tracings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Tracing.create');
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
            'type'=>'required',
            'reason'=>'required', 
            'observation'=>'required',
            'phone'=>'required', 
            'tutor_c_id'=>'required', 
       ]);
       tracing::create(request()->all());
       return redirect()->route('tracing.index')->with('message',['success','Tracing created correctly']);
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
        $tracing= Tracing::find($id);
        return view('Tracing.update',compact('tracing'));
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
            'type'=>'required',
            'reason'=>'required', 
            'observation'=>'required',
            'phone'=>'required', 
            'tutor_c_id'=>'required'
       ]);
       tracing:: find($id)->update(request()->all());
       return redirect()->route('tracing.index')->with('message',['success','Tracing modificado correctamente']);
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
        tracing::find($id)->update([
            'deleted'=> '1'
        ]);
        return back()->with('message', ['success', __("Tracing eliminado correctamente")]);
    }
}
