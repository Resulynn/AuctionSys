<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biddings;
use App\Models\User;
use App\Models\Auction;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Route;
class BiddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index(Request $request)
    {
        $title = "Biddings";
        $data = Auction::join('bidtransactions','bidtransactions.prod_id','=','auctions.id')
        ->where('bidtransactions.user_id','=',Auth::user()->id)
        ->get();

        
        return view('profile.biddings', compact('title'))
                ->with('data',$data);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'bid_amt'=>'required'
        ]);

        $prod= Auction::where('id','=',$request->id)->first();

        if(($request->bid_amt) < $prod->initialPrice){
            Session::flash('error', "Insufficient Amount.");
            return redirect()->back()->withInput();
        }
        else{
            $data = new Biddings;
            $data->user_id = Auth::user()->id;
            $data->uname = Auth::user()->username;
            $data->prod_id = $request->id;
            $data->prodname = $prod->prodName;
            $data->bidamt = $request->bid_amt;
            $data->refnum = Auth::user()->id.date('ymdHis');
            $data->bidstatus = 1; //1/1 bid done
            $data->endDate = $prod->endDate;
            $data->save(); 


            Session::flash('success', "Bid Successfuly Placed!");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bid = Biddings::find($id);
        
        $bid->delete();

        Session::flash('success', "Bid Successfuly Retracted.");
        return redirect()->back();
        
    }

    public function win_bidding(){
        
    }

}
