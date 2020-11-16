<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
       $ra=ra::orderBy('id','DESC')->paginate(3);
       return view('ra.index',compact('ra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
       return view('ra.create');
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
         $this->validate($request,['number'=>'required', 'description'=>'required', 'module_id'=>'required', 'deleted'=>'required']);
         ra::create($request->all());
         return redirect()->route('ra.index')->with('success','Registro creado satisfactoriamente');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //  return view('ra.create');
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ra=ra::find($id);
        return view('ra.edit',compact('ra'));
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
        $this->validate($request,['number'=>'required', 'description'=>'required', 'module_id'=>'required', 'deleted'=>'required']);
 
        ra::find($id)->update($request->all());
        return redirect()->route('ra.index')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ra::find($id)->update([
            'deleted'=> '1'
        ]);
        return back()->with('message', ['success', __("Ra eliminado correctamente")]);
   
    }
}
