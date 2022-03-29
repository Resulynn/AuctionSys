<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        $title = "Welcome to laravel! ";
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
    
}


