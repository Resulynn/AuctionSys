<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Session;

class imgController extends Controller
{
    public function upload(Request $request, $id){
        $this->validate($request,[
            'profileImage'=>'required',
        ]);

        $data = Users::find($id);
        $imgName = Session::get('username');
        
        $filename= $imgName.".".$request->file('pfpImg')->getClientOriginalExtension();
        $request->file('pfpImg')->storeAs('userPFP',$filename,'public_uploads');

        $data->profileImage=$filename;
        $data->save();

        return redirect('/index')->with('success','Picture Changed.');
    }
}
