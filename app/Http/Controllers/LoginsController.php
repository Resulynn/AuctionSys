<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Users;


class LoginsController extends Controller
{
    public function login(Request $request){
         $this->validate($request,
                [
                'uname'=>'required',
                'password'=>'required'
                ]);

            $pass = md5(md5($request->password));
            $check_uname =  Users::where('username','=',$request->uname)->first();
            $check_utype_admin = Users::where('username','=',$request->uname)->where('user_type','=',0)->first();
            $userlogin = Users::where('username','=',$request->uname)->where('password','=',$pass)->first();
            
            if($check_uname){
               
                if($check_utype_admin){
                    if ($userlogin) 
                    {
                        Session::put('username',$request->uname);
                        Session::put('logged', 1);
                        return redirect('/admin/index')->with('success','Login Success.');

                    }
                    else{
                        return back()->withInput()->with('error','Wrong Password.');
                    }  
                }
                else{
                    if ($userlogin) 
                    {
                        Session::put('username',$request->uname);
                        Session::put('logged', 1);
                        return redirect('/index')->with('success','Login Success.');
                        
                    }
                    else{
                        return back()->withInput()->with('error','Wrong Password.');
                    }  
                }
            }
            else{
                return back()->withInput()->with('error','User not found.');
            }
    }
}
