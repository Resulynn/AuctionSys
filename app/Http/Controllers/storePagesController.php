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
    public function menTees(){
        $title = "Men | Tops";
        $where = ['category'=>'M','type'=>'T'];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function menPants(){
        $title = "Men | Bottoms";
        $products= Auction::all();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function menShorts(){
        $title = "Men | Shorts";
        $products= Auction::all();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function menShoes(){
        $title = "Men | Footwear";
        $products= Auction::all();
        return view('pages.store',compact('title'))->with('products',$products);
    }


    //Women
    public function womenTees(){
        $title = "Women | Tops";
        $products= Auction::all();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function womenPants(){
        $title = "Women | Bottoms";
        $products= Auction::all();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function womenShorts(){
        $title = "Women | Shorts";
        $products= Auction::all();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function womenShoes(){
        $title = "Women | Footwear";
        $products= Auction::all();
        return view('pages.store',compact('title'))->with('products',$products);
    }
}
