<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Inventory;
use App\Models\Funds;
use Barryvdh\DomPDF\Facade\Pdf;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reportsController extends Controller
{
    public function index()
    {
        $title = "Reports";
        return view('admin.reports',compact('title'));
    }

    public function invreport()
    {   
        $data = Inventory::orderBy('category','desc')->get();
        return view('reports.invRep')->with('data',$data);
        // $pdf = Pdf::loadView('reports.invRep');
        // return $pdf->stream();
    }

    public function fndreport(Request $request)
    {   
        $data = Funds::orderBy('created_at','desc')
        ->where('status','=','approved')
        ->get();
        return view('reports.fndRep')->with('data',$data);
    }
}
