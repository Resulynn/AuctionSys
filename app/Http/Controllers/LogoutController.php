<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    //
    public function logout(){
        Session::forget('logged');
        return redirect('/index')->with('success','Logged Out Successfully.');
    }

   
}
