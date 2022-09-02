<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    function index(){
        $title = "Home";
        return view('pages.index',compact('title'));
    }
   
    function login(){

        if(Route::has('login')) {
            return redirect('/index')->with('error','Error.');
         }
         else{
            $title = "Login";
            return view('pages.login',compact('title')); 
         }
    }
    function store(){
        $title = "Store";
        return view('pages.store',compact('title'));
    }
    function productpage(){
        $title = "Product Page";
        return view('pages.productpage',compact('title'));
    }
    function historypage(){
        $title = "History Page";
        return view('pages.historypage',compact('title'));
    }
    function bag(){
        $title = "Bag";
        return view('pages.bag',compact('title'));
    }
    



    //admin pages
    function adminindex(){

        $title = "Admin";

        if(Auth::user()->user_type == 1){
            return redirect('/home');
        }
        else{
            return view('admin.index',compact('title'));
            }
    }
        
    

    function list(){
        $title = "Listings";
        
        if(Auth::user()->user_type == 1){
            return redirect('/home');
        }
        else{
            return view('admin.list',compact('title'));
            }
    }
    function add(){
        $title = "Add Auction";
        return view('admin.add',compact('title'));
    }
    function fundings(){
        $title = "User Funds";
        return view('admin.fundings',compact('title'));
    }
    function shipcomplete(){
        $title = "Completed Orders";
        return view('admin.shipcomplete',compact('title'));
    }
    function shipreq(){
        $title = "To Ship";
        return view('admin.shipreq',compact('title'));
    }
    function shippings(){
        $title = "Shippings";
        return view('admin.ships',compact('title'));
    }

}


