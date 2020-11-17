<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cycle;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cycles = cycle::all();
        return view('Cycles.index',compact('cycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Cycles.create');
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
            'name'=>'required',
            'grade'=>'required', 
            'year'=>'required',
            'autor'=>'required', 
       ]);
       User::create(request()->all());
       return redirect()->route('Cycles.index')->with('message',['success','ciclo creado correctamente']);
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
        $cycle= cycle::find($id);
        return view('Cycles.edit',compact('cycle'));
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
            'name'=>'required',
            'grade'=>'required', 
            'year'=>'required', 
            'autor'=>'required', 
       ]);
       cycle:: find($id)->update(request()->all());
       return redirect()->route('Cycle.index')->with('message',['success','ciclo modificado correctamente']);
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
        cycle::find($id)->update([
            'deleted'=> '1'
        ]);
        return back()->with('message', ['success', __("Ciclo eliminado correctamente")]);
    }
}
