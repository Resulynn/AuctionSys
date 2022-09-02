<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $title = "Home";
        // $products= Auction::all()->take(5);
        $products= Auction::where('aucStatus','=',1)->take(6)->orderBy('endDate', 'DESC')->get();
        return view('pages.home',compact('title'))->with('products',$products);
    }
}
