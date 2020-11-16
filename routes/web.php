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
Route::post('/userU','UserController@update');
Route::get('/modUser/{user}','UserController@show');
Route::Delete('DelUser/{user}','UserController@destroy');
Auth::routes();
Route::resource('User','UserController');

Route::get('/enterprises','EnterpriseController@index');
Route::get('/cycles','CycleController@index');
//Route::get('/modenterprise/{enterprise}','EnterpriseController@show');
//Route::Delete('Delenterprise/{enterprise}','EnterpriseController@destroy');