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
Route::get('/inicio', function (){
    return view('inicio.inicio');
});
Route::get('/registro', function (){
    return view('auth.register');
});

Auth::routes();
Route::resource('User','UserController');

Route::resource('ce','CeController');
Route::resource('ra','RaController');
Route::resource('task','TaskController');
Route::resource('enterprise','EnterpriseController');
Route::resource('belong','BelongController');
Route::resource('module','ModuleController');
Route::resource('tracing','TracingController');
Route::resource('cycles','CycleController');
Route::resource('cycle','CycleController');
