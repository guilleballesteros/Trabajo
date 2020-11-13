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
// Route::resource('users', 'TutorCController');
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
Route::get('/añadirUsuario',function(){
    return view('Users.create');
});
Route::post('/user','UserController@store');
Route::get('/modUser/{user}','UserController@show');
Auth::routes();



