<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Auction;
use App\Models\Bag;
use App\Models\Biddings;
use Illuminate\Support\Facades\Auth;
class BagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Bag";

                        
        $products = Biddings::join('bag','bidtransactions.prod_id','=','bag.product_id')
                            ->where('bidtransactions.user_id' , '=' , Auth::user()->id)
                            ->get();
        
        // $products = Biddings::join('bag','bidtransactions.prod_id','=','bag.product_id')
        // ->where('bidtransactions.user_id' , '=' , Auth::user()->id)
        // ->get();
       
        $total = Bag::join('bidtransactions','bag.product_id','=','bidtransactions.prod_id')
        ->where('bag.user_id', Auth::user()->id)
        ->where('bag.status', 0)
        ->sum('bidtransactions.bidamt');

        $status = Bag::where('user_id', Auth::user()->id)->get();

        return view('pages.bag')
                ->with(compact('title',
                            'products',
                            'total',
                            'status'
                            ));
    
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
        
    }
    function addToBag(Request $request){

            
            $bag = new Bag;
            $bag->product_id = $request->product_id;
            $bag->user_id = Auth::user()->id;
            $bag->status = 0;
            
            $bag->save();
    
            return back();
        }
    static function bag_qty(){
        $user_id = Auth::user()->id;
        return Bag::where('user_id',$user_id)->where('status','0')->count();
    }
}
