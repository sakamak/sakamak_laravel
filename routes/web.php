<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\Http\Controllers\TopController@top');
Route::get('/regist', 'App\Http\Controllers\TopController@regist');
Route::post('/confirm', 'App\Http\Controllers\TopController@confirm');
Route::get('/payconfirm', 'App\Http\Controllers\TopController@payconfirm');
Route::post('/paidconfirm', 'App\Http\Controllers\TopController@paidconfirm');
Route::get('/treatRegist', 'App\Http\Controllers\TopController@treatRegist');
