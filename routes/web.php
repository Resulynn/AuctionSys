<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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


Route::get('/index','App\Http\Controllers\PagesController@index');
Route::get('/register','App\Http\Controllers\PagesController@register');
Route::get('/login','App\Http\Controllers\PagesController@login');

//admin module

Route::get('/add','App\Http\Controllers\PagesController@add');
Route::get('/fundings','App\Http\Controllers\PagesController@fundings');
Route::get('/list','App\Http\Controllers\PagesController@list');
Route::get('/shipreq','App\Http\Controllers\PagesController@shipreq');
Route::get('/shippings','App\Http\Controllers\PagesController@shippings');
Route::get('/shipcomplete','App\Http\Controllers\PagesController@shipcomplete');