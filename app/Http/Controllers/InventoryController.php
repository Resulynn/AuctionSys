<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Models\Auction;
use App\Models\Biddings;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Session;

class InventoryController extends Controller
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
     * @param  \App\Http\Requests\StoreInventoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInventoryRequest $request)
    {
        $this->validate($request,[
            'itemImg'=>'required',
            'prodName'=>'required',
            'prodDeets'=>'required',
            'category'=>'required',
            'type'=>'required',
            'initialPrice'=>'required',
            'buyPrice'=>'required',
            'qty'=>'required',
        ]);
        
        $filename= $request->input('prodName').".".$request->file('itemImg')->getClientOriginalExtension();
        $request->file('itemImg')->storeAs('itemImages',$filename,'public_uploads');

        $data=new Inventory;
        $data->itemImg=$filename;
        $data->prodName=$request->input('prodName');
        $data->prodDeets=$request->input('prodDeets');
        $data->category=$request->category;
        
        if($request->category == 'A' || $request->category == 'O'){
            $data->type="N/A";
        }
        else{
            $data->type=$request->type;
        }
        
        $data->initialPrice=$request->input('initialPrice');
        $data->buyPrice=$request->input('buyPrice');
        $data->qty=$request->input('qty');
        $data->cond=$request->input('cond');
        $data->save();

        Session::flash('success', "Item successfuly Added.");
        return redirect('/admin/list');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show($inventory)
    {
        //
        $title = 'Product Page';

        
        $item = Auction::find($inventory);
        $highest_bid = Biddings::select('*')->max('bidamt');
        if(Auth::check()){
            $my_max_bid = Biddings::where('user_id','=', Auth::user()->id)->max('bidamt');
            // $bid_status = Biddings::select('bidstatus')->where('user_id','=', Auth::user()->id)->find($inventory);
            
            
            $bid_status = Biddings::select('bidstatus')->where('user_id','=', Auth::user()->id)->where('prod_id','=',$inventory)->first();
            
        }
        else{
            $my_max_bid = 0;
            $bid_status = 0;
        }
        
                                    
        return view('pages.productpage',compact('title',
                                                'item',
                                                'highest_bid',
                                                'my_max_bid',
                                                'bid_status'
                                                ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInventoryRequest  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
    }

    
}
