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




Route::get('/index','App\Http\Controllers\storePagesController@index');
Route::resource('/item','App\Http\Controllers\InventoryController');
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
Route::resource('/postItem','App\Http\Controllers\AuctionController');
Route::resource('/adminprofile','App\Http\Controllers\AdminProfileController');


//profile module
Route::resource('/profile','App\Http\Controllers\ProfileController');
Route::resource('/biddings','App\Http\Controllers\BiddingController');
Route::post('/profiles','App\Http\Controllers\imgController@upload');
Route::resource('/bag','App\Http\Controllers\BagController');
Route::resource('/fundings','App\Http\Controllers\UserFundingsController');
Route::resource('/orders','App\Http\Controllers\UserOrdersController');
Route::resource('/history','App\Http\Controllers\UserPurchaseHistoryController');

//store Pages
Route::get('/store','App\Http\Controllers\storePagesController@store_index');
Route::get('/store/men/tops','App\Http\Controllers\storePagesController@menTops');
Route::get('/store/men/bottoms','App\Http\Controllers\storePagesController@menPants');
Route::get('/store/men/shorts','App\Http\Controllers\storePagesController@menShorts');
Route::get('/store/men/footwear','App\Http\Controllers\storePagesController@menShoes');

Route::get('/store/women/tops','App\Http\Controllers\storePagesController@womenTops');
Route::get('/store/women/bottoms','App\Http\Controllers\storePagesController@womenPants');
Route::get('/store/women/shorts','App\Http\Controllers\storePagesController@womenShorts');
Route::get('/store/women/footwear','App\Http\Controllers\storePagesController@womenShoes');