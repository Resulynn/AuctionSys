<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Session;

class LoginsController extends Controller
{
    public function login(Request $request){
         $this->validate($request,
                [
                'uname'=>'required',
                'password'=>'required'
                ]);


            // return $request;
            $pass = md5(md5($request->password));
            $admin = 0;
            $user = 1;
            $check_uname =  Users::where('username','=',$request->uname)->first();
            $check_utype_admin = Users::where('username','=',$request->uname)->where('user_type','=',$admin)->first();
            $check_utype_user = Users::where('username','=',$request->uname)->where('user_type','=',$user)->first();
            $userlogin = Users::where('username','=',$request->uname)->where('password','=',$pass)->first();
            
            if($check_uname){
                if($check_utype_admin){
                    if ($userlogin) 
                    {
                    // $request->session()->put('loginID',$user->id);
                        return redirect('/admin/index')->with('success','Login Success - Admin.');
                    }
                    else{
                        return back()->withInput()->with('error','Wrong Password.');
                    }  
                }
                elseif($check_utype_user){
                    if ($userlogin) 
                    {
                    // $request->session()->put('loginID',$user->id);
                        return redirect('/index')->with('success','Login Success.-user');
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
