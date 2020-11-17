<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\enterprise;
use App\cycle;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('Users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enterprises=enterprise::all();
        $cycles=cycle::all();
        return view('Users.create',compact('enterprises','cycles'));
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
             'name'=>'required',
             'firstname'=>'required', 
             'email'=>'required',
             'password'=>'required', 
             'phone'=>'required', 
             'cycle_id'=>'required',
             'enterprise_id'=>'required'
        ]);
        User::create(request()->all());
        return redirect()->route('User.index')->with('message',['success','Usuario creado correctamente']);
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
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
        $enterprises=enterprise::all();
        $cycles=cycle::all();
        $user= User::find($id);
        return view('Users.update',compact('user','enterprises','cycles'));
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
            'name'=>'required',
            'firstname'=>'required', 
            'email'=>'required', 
            'phone'=>'required', 
            'cycle_id'=>'required',
            'enterprise_id'=>'required'
       ]);
       User:: find($id)->update(request()->all());
       return redirect()->route('User.index')->with('message',['success','Usuario modificado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        User::find($id)->update([
            'deleted'=> '1'
        ]);
        return back()->with('message', ['success', __("Usuario eliminado correctamente")]);
    }
}
