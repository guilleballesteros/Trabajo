<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
       $users=Tutor_c::orderBy('id','DESC')->paginate(3);
       return view('Tutor_c.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
       return view('Tutor_c.create');
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
         $this->validate($request,[ 'name'=>'required', 'first_name'=>'required', 'email'=>'required', 'phone'=>'required', 'cycle_id'=>'required', 'deleted'=>'required']);
         Tutores_c::create($request->all());
         return redirect()->route('users.index')->with('success','Registro creado satisfactoriamente');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users=Tutores_c::find($id);
        return  view('users.show',compact('users'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=users::find($id);
        return view('users.edit',compact('users'));
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
        $this->validate($request,[ 'nombre'=>'required', 'resumen'=>'required', 'npagina'=>'required', 'edicion'=>'required', 'autor'=>'required', 'npagina'=>'required', 'precio'=>'required']);
 
        users::find($id)->update($request->all());
        return redirect()->route('users.index')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tutor_c::find($id)->delete();
        return redirect()->route('users.index')->with('success','Registro eliminado satisfactoriamente');
   
    }
}
