<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
});
Route::get('/admin', function (){
    return view('admin.dashboard');
});
Route::get('/registro', function (){
    return view('auth.register');
});
Route::get('/usuarios','UserController@index');
Route::get('/añadirUsuario','UserController');

Auth::routes();



