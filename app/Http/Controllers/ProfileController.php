<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   
        $title = "Profile";
        $username = Session::get('username');
        $data = Users::where('username',$username)->first();
        return view('profile.profile',compact('title'))->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //temporarily here for debugging purposes only; once session is working move to edit function!
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {   
        $username = Session::get('username');
        $data = Users::where('username',$username)->first();
        $title = "Profile Edit";
        
        return view('profile.editProf',compact('title'))->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $data = Users::find($id);

        $data->address=$request->input('add');
        $data->zipcode=$request->input('zipcode');
        

        $data->save();
        $type = Session::get('usertype');

        if($type == 'Administrator'){
            return redirect('/admin/index')->with('success','Profile Updated.');
        }

        return redirect('/profile')->with('success','Profile Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
