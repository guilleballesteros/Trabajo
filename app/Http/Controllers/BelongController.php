<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\belong;
use App\enterprise;
use App\User;

class BelongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $belongs=belong::all();
        return view('Belongs.index',compact('belongs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enterprises=enterprise::all();
        $students=User::all();
        return view('Belongs.create',compact('enterprises','students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(),[ 
            'student_id'=>'required',
            'enterprise_id'=>'required'
       ]);
       belong::create(request()->all());
       return redirect()->route('belong.index')->with('message',['success','Relation created succesfully']);
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
        $belong= belong::find($id);
        $enterprises=enterprise::all();
        $students=User::all();
        return view('Belongs.update',compact('belong','enterprises','students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $this->validate(request(),[ 
            'student_id'=>'required',
            'enterprise_id'=>'required'
       ]);
       belong:: find($id)->update(request()->all());
       return redirect()->route('belong.index')->with('message',['success','Relation modified successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $belong= belong::find($id)->update([
            'deleted'=> '1'
        ]);
        return back()->with('message', ['success', __("Relation destroyed succesfully")]);

    }
}
