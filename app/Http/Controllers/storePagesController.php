<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;

class storePagesController extends Controller
{
    public function index(){
        $title = "Home";
        $products= Auction::all()->take(5);
        return view('pages.index',compact('title'))->with('products',$products);
    }

    //Men
    public function menTops(){
        $title = "Men | Tops";
        $where = ['category'=>'M','type'=>'T'];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function menPants(){
        $where = ['category'=>'M','type'=>'P'];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function menShorts(){
        $title = "Men | Shorts";
        $where = ['category'=>'M','type'=>'S'];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function menShoes(){
        $title = "Men | Footwear";
        $where = ['category'=>'M','type'=>'Sh'];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }


    //Women
    public function womenTops(){
        $title = "Women | Tops";
        $where = ['category'=>'W','type'=>'T'];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function womenPants(){
        $title = "Women | Bottoms";
        $where = ['category'=>'W','type'=>'P'];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function womenShorts(){
        $title = "Women | Shorts";
        $where = ['category'=>'W','type'=>'S'];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function womenShoes(){
        $title = "Women | Footwear";
        $where = ['category'=>'W','type'=>'Sh'];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
}
