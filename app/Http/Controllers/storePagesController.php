<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;

class storePagesController extends Controller
{
    public function index(){
        $title = "Home";
        // $products= Auction::all()->take(5);
        $products= Auction::where('aucStatus','=',1)->take(6)->orderBy('id', 'DESC')->get();
        return view('pages.index',compact('title'))->with('products',$products);
    }

    
    public function store_index(){
        $title = "Store";
        // $products= Auction::all()->take(5);
        $products= Auction::where('aucStatus','=',1)->take(6)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }


    //Men
    public function menTops(){
        $title = "Men | Tops";
        $where = ['category'=>'M','type'=>'T','aucStatus'=>1];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function menPants(){
        $title = "Men | Pants";
        $where = ['category'=>'M','type'=>'P','aucStatus'=>1];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function menShorts(){
        $title = "Men | Shorts";
        $where = ['category'=>'M','type'=>'S','aucStatus'=>1];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function menShoes(){
        $title = "Men | Footwear";
        $where = ['category'=>'M','type'=>'Sh','aucStatus'=>1];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }


    //Women
    public function womenTops(){
        $title = "Women | Tops";
        $where = ['category'=>'W','type'=>'T','aucStatus'=>1];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function womenPants(){
        $title = "Women | Bottoms";
        $where = ['category'=>'W','type'=>'P','aucStatus'=>1];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function womenShorts(){
        $title = "Women | Shorts";
        $where = ['category'=>'W','type'=>'S','aucStatus'=>1];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
    public function womenShoes(){
        $title = "Women | Footwear";
        $where = ['category'=>'W','type'=>'Sh','aucStatus'=>1];
        $products= Auction::where($where)->get();
        return view('pages.store',compact('title'))->with('products',$products);
    }
}
