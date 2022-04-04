<?php

namespace App\Http\Controllers;

use App\Models\tblUsers;
use App\Http\Requests\StoretblUsersRequest;
use App\Http\Requests\UpdatetblUsersRequest;

class TblUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoretblUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretblUsersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tblUsers  $tblUsers
     * @return \Illuminate\Http\Response
     */
    public function show(tblUsers $tblUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tblUsers  $tblUsers
     * @return \Illuminate\Http\Response
     */
    public function edit(tblUsers $tblUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetblUsersRequest  $request
     * @param  \App\Models\tblUsers  $tblUsers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetblUsersRequest $request, tblUsers $tblUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tblUsers  $tblUsers
     * @return \Illuminate\Http\Response
     */
    public function destroy(tblUsers $tblUsers)
    {
        //
    }
}
