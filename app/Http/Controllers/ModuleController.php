<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\module;
use App\cycle;
use App\User;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if((auth()->user()->type === 'ad')){
            $modules=module::all()->where('deleted',0);
            return view('Modules.index',compact('modules'));
        }
        else{
            $user= User::find(auth()->user()->id);
            $cycle=$user->find($user->id)->cycle;
            $modules = $cycle->modules->where('deleted',0);
            return view('Modules.index',compact('modules'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $cycles=cycle::all()->where('deleted',0);
       return view('Modules.create',compact('cycles'));
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
         $this->validate($request,['name'=>'required', 'cycle_id'=>'required']);
         module::create($request->all());
         return redirect()->route('module.index')->with('success','Module creaded successfully');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$module=module::find($id);
        //return  view('module.show',compact('module'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module=module::find($id);
        $cycles=cycle::all()->where('deleted',0);
        return view('Modules.update',compact('module','cycles'));
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
        $this->validate(request(),['name'=>'required', 'cycle_id'=>'required']);
 
        module::find($id)->update(request()->all());
        return redirect()->route('module.index')->with('message',['success','Module modified successfully']);
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        module::find($id)->update([
            'deleted'=> '1'
        ]);
        return back()->with('message', ['success', __("Module deleted successfully")]);
   
    }
}
