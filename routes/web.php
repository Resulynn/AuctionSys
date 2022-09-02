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
Route::get('/logout','App\Http\Controllers\LogoutController@logout');
Route::get('/historypage','App\Http\Controllers\PagesController@historypage');
Route::get('/confirmEmail','App\Http\Controllers\EmailController@index');


//admin module
Route::get('/admin/index','App\Http\Controllers\PagesController@adminindex')->middleware('auth');
Route::resource('/admin/usermanagement','App\Http\Controllers\UserManagementController')->middleware('auth');
Route::get('/add','App\Http\Controllers\PagesController@add')->middleware('auth');
Route::get('/fundings','App\Http\Controllers\PagesController@fundings')->middleware('auth');
Route::resource('/admin/list','App\Http\Controllers\itemListController')->middleware('auth');
Route::resource('/admin/auctionlist','App\Http\Controllers\AuctionDetailsController')->middleware('auth');
Route::resource('/admin/auction','App\Http\Controllers\AuctionDetailsController')->middleware('auth');
Route::get('/shipreq','App\Http\Controllers\PagesController@shipreq')->middleware('auth');
Route::resource('/admin/shippings','App\Http\Controllers\ToShipController')->middleware('auth');
Route::resource('/admin/shipped','App\Http\Controllers\ShippedController')->middleware('auth');
Route::resource('/admin/toPay','App\Http\Controllers\ToPayController')->middleware('auth');
Route::resource('/admin/completed','App\Http\Controllers\CompletedTransactionController')->middleware('auth');
Route::resource('/admin/blockedusers','App\Http\Controllers\BlockedUsersController')->middleware('auth');
// Route::get('/search','App\Http\Controllers\itemListController@search');
Route::post('/itemimgup','App\Http\Controllers\imgController@itemImage')->middleware('auth');
Route::resource('/postItem','App\Http\Controllers\AuctionController')->middleware('auth');
Route::resource('/adminprofile','App\Http\Controllers\AdminProfileController')->middleware('auth');
Route::resource('/admin/feedback','App\Http\Controllers\FeedbackController')->middleware('auth');

//profile module
Route::resource('/profile','App\Http\Controllers\ProfileController')->middleware('auth');
Route::resource('/biddings','App\Http\Controllers\BiddingController')->middleware('auth');
Route::post('/profiles','App\Http\Controllers\imgController@upload')->middleware('auth');
Route::resource('/bag','App\Http\Controllers\BagController')->middleware('auth');
Route::resource('/fundings','App\Http\Controllers\UserFundingsController')->middleware('auth');
Route::resource('/orders','App\Http\Controllers\UserOrdersController')->middleware('auth');
Route::resource('/history','App\Http\Controllers\UserPurchaseHistoryController')->middleware('auth');

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

