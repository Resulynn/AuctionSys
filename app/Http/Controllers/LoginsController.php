<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Hash;
use Session;

class LoginsController extends Controller
{
    public function pasok(Request $request){
        // $this->validate($request,
        //         [
        //         'uname'=>'required',
        //         'password'=>'required'
        //         ]);


            // return $request;
            $pass = md5(md5($request->password));
            $user = Users::where('username','=',$request->uname)->where('password','=',$pass)->first();

                if ($user) {
                // $request->session()->put('loginID',$user->id);
                    return redirect('/index')->with('success','Login Success');
                }
                else{
                    return back()->with('error','IncorrectCredentials');
                }  
    }
}
