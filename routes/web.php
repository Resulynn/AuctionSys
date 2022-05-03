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




Route::resource('/index','App\Http\Controllers\InventoryController');
Route::resource('/item','App\Http\Controllers\InventoryController');
Route::get('/store','App\Http\Controllers\PagesController@store');
Route::resource('/register','App\Http\Controllers\UsersController');
Route::get('/login','App\Http\Controllers\PagesController@login');
Route::post('/login','App\Http\Controllers\LoginsController@login');
Route::post('/logout','App\Http\Controllers\LogoutController@logout');
Route::get('/historypage','App\Http\Controllers\PagesController@historypage');
Route::get('/confirmEmail','App\Http\Controllers\EmailController@index');


//admin module
Route::get('/admin/index','App\Http\Controllers\PagesController@adminindex');
Route::get('/add','App\Http\Controllers\PagesController@add');
Route::get('/fundings','App\Http\Controllers\PagesController@fundings');
Route::resource('/admin/list','App\Http\Controllers\itemListController');
Route::resource('/admin/auctionlist','App\Http\Controllers\AuctionDetailsController');
Route::resource('/admin/auction','App\Http\Controllers\AuctionDetailsController');
Route::get('/shipreq','App\Http\Controllers\PagesController@shipreq');
Route::resource('/admin/shippings','App\Http\Controllers\ToShipController');
Route::resource('/admin/shipped','App\Http\Controllers\ShippedController');
Route::resource('/admin/toPay','App\Http\Controllers\ToPayController');
Route::resource('/admin/completed','App\Http\Controllers\CompletedTransactionController');
Route::resource('/admin/blockedusers','App\Http\Controllers\BlockedUsersController');
// Route::get('/search','App\Http\Controllers\itemListController@search');
Route::post('/itemimgup','App\Http\Controllers\imgController@itemImage');



//profile module
Route::resource('/profile','App\Http\Controllers\ProfileController');
Route::resource('/biddings','App\Http\Controllers\BiddingController');
Route::post('/profiles','App\Http\Controllers\imgController@upload');
Route::resource('/adminprofile','App\Http\Controllers\AdminProfileController');
Route::resource('/bag','App\Http\Controllers\BagController');
