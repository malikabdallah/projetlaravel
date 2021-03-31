<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;


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
Route::get('/users', 'App\Http\Controllers\UserController@getInfos');
Route::post('/users', 'App\Http\Controllers\UserController@postInfos');

Route::get('/login','App\Http\Controllers\LoginController@getLoginForm');
Route::post('/login','App\Http\Controllers\LoginController@postLoginForm');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/vue1', function()
{
    return view('vue1');
});


Route::get("/testsession",'App\Http\Controllers\LoginController@testSession');

Route::get('/form','App\Http\Controllers\FormulaireController@getFormulaire');


Route::get('/email', 'App\Http\Controllers\EmailController@getForm');

Route::post('/email', 'App\Http\Controllers\EmailController@postForm');
