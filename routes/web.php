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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome/{name}/{id}', function ($name, $id) {
//     echo '<h1>Weclome to Laravel, ' .$name. '';
//     echo 'Your User ID is ' .$id. '!</h1>';
// });

// Route::get('/about', function () {
//     return view('About');
// });

// Route::get('/index', function () {
//     return view('pages.index');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/services', function () {
//     return view('pages.services');
// });

Route::get('/index','App\Http\Controllers\PagesController@index');
Route::get('/register','App\Http\Controllers\PagesController@register');