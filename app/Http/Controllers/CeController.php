<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ce;
use App\User;

class CeController extends Controller
{
    //
         /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
           
            if((auth()->user()->type === 'ad')){
                $ces=ce::all()->where('deleted',0);
                return view('CE.index',compact('ces'));
            }
            else{
                $user= User::find(auth()->user()->id);
                $cycle=$user->find($user->id)->cycle;
                $ras = $cycle->ras->where('deleted',0);
                return view('CE.index',compact('ras'));
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
           return view('CE.create');
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
             $this->validate($request,['word'=>'required', 'description'=>'required', 'ra_id'=>'required', 'task_id'=>'required', 'mark'=>'required', 'deleted'=>'required']);
             ce::create($request->all());
             return redirect()->route('CE.index')->with('success','Registro creado satisfactoriamente');
         
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //return view('ce.create');
        
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $ce=ce::find($id);
            return view('CE.update',compact('ce'));
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
            $this->validate($request,['word'=>'required', 'description'=>'required', 'ra_id'=>'required', 'task_id'=>'required', 'mark'=>'required']);     
            ce::find($id)->update($request->all());
            return redirect()->route('ce.index')->with('success','Registro actualizado satisfactoriamente');
     
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            ce::find($id)->update([
                'deleted'=> '1'
            ]);
            return back()->with('message', ['success', __("CE eliminado correctamente")]);
       
        }
}
