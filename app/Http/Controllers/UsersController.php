<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Register";
        return view('pages.register',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'pnum'=>'required',
            'add'=>'required',
            'zipcode'=>'required',
            'uname'=>'required',
            'password'=>'required',
            'confPassword'=>'required',
            
            //bday - to be concatinated
            'month'=>'required',
            'day'=>'required',
            'year'=>'required',
        ]);

        $bdd = $request->input('day');
        $bmm = $request->input('month');
        $byy = $request->input('year');

        $birthday = ''.$bmm.'/'.$bdd.'/'.$byy.'';
        //table input
        $users=new Users;
        $users->fname=$request->input('fname');
        $users->lname=$request->input('lname');
        $users->email=$request->input('email');
        $users->pnum=$request->input('pnum');
        $users->address=$request->input('add');
        $users->zipcode=$request->input('zipcode');
        $users->username=$request->input('uname');
        $users->password=$request->input('password');
        $users->bday=$birthday;
        $users->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, Users $users)
    {
        //
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
