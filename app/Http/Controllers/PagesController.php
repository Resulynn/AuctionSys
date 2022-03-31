<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        $title = "Home";
        return view('pages.index',compact('title'));
    }
    function register(){
        $title = "Register";
        return view('pages.register',compact('title'));
    }
    function login(){
        $title = "Login";
        return view('pages.login',compact('title'));
    }

    //admin pages

    function list(){
        $title = "Listings";
        return view('pages.admin.list',compact('title'));
    }
    function add(){
        $title = "Add Auction";
        return view('pages.admin.add',compact('title'));
    }
    function fundings(){
        $title = "User Funds";
        return view('pages.admin.fundings',compact('title'));
    }
    function shipcomplete(){
        $title = "Completed Orders";
        return view('pages.admin.shipcomplete',compact('title'));
    }
    function shipreq(){
        $title = "To Ship";
        return view('pages.admin.shipreq',compact('title'));
    }
    function shippings(){
        $title = "Shippings";
        return view('pages.admin.ships',compact('title'));
    }
}


