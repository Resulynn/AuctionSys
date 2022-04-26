<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Session;

class imgController extends Controller
{
    public function upload(Request $request){
        $this->validate($request,[
            'pfpImg'=>'required'
        ]);

        $data = Users::where('username',Session::get('username'))->first();;
        $imgName = Session::get('username');
        
        $filename= $imgName.".".$request->file('pfpImg')->getClientOriginalExtension();
        $request->file('pfpImg')->storeAs('userPFP',$filename,'public_uploads');

        $data->profileImage=$filename;
        $data->save();
        $link = "/profile/$data->username/edit";
     
        return redirect($link)->with('success','Picture Changed.');
    }
}
