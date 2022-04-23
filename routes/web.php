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
Route::get('/store','App\Http\Controllers\PagesController@store');
Route::resource('/register','App\Http\Controllers\UsersController');
Route::get('/login','App\Http\Controllers\PagesController@login');
Route::post('/login','App\Http\Controllers\LoginsController@login');

Route::post('/logout','App\Http\Controllers\LogoutController@logout');

Route::get('/productpage','App\Http\Controllers\PagesController@productpage');
Route::get('/historypage','App\Http\Controllers\PagesController@historypage');

//admin module
Route::get('/admin/index','App\Http\Controllers\PagesController@admin_index');
Route::get('/add','App\Http\Controllers\PagesController@add');
Route::get('/fundings','App\Http\Controllers\PagesController@fundings');
Route::get('/list','App\Http\Controllers\PagesController@list');
Route::get('/shipreq','App\Http\Controllers\PagesController@shipreq');
Route::get('/shippings','App\Http\Controllers\PagesController@shippings');
Route::get('/shipcomplete','App\Http\Controllers\PagesController@shipcomplete');



//profile module
Route::resource('/profile','App\Http\Controllers\ProfileController');
Route::resource('/biddings','App\Http\Controllers\BiddingController');
Route::post('/profiles','App\Http\Controllers\imgController@upload');
Route::resource('/adminprofile','App\Http\Controllers\AdminProfileController');