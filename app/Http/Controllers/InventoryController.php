<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Home";
        $products= Inventory::all();
        return view('pages.index')->with('products',$products);
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
        ]);
        $filename= $request->input('prodName').".".$request->file('itemImg')->getClientOriginalExtension();
        $request->file('itemImg')->storeAs('itemImages',$filename,'public_uploads');

        $data=new Inventory;
        $data->itemImg=$filename;
        $data->prodName=$request->input('prodName');
        $data->prodDeets=$request->input('prodDeets');
        $data->category=$request->category;
        
        if($request->category == 'Accessories' || $request->category == 'Others'){
            $data->type="N/A";
        }
        else{
            $data->type=$request->type;
        }
        
        $data->initialPrice=$request->input('initialPrice');
        $data->buyPrice=$request->input('buyPrice');
        $data->save();

        return redirect('/admin/index')->with('success','Item Added');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item=Inventory::find($id);
        return view('pages.productpage')->with('item',$item);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
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
