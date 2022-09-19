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
        $title = "Admin | Reports";
        return view('admin.reports',compact('title'));
    }

    public function invreport()
    {   
        $title = "Admin | Inventory Reports";
        $data = Inventory::orderBy('category','desc')->get();
        return view('reports.invRep',compact('title'))->with('data',$data);
        // $pdf = Pdf::loadView('reports.invRep');
        // return $pdf->stream();
    }

    public function fndreport(Request $request)
    {   
        $title = "Admin | Fund Reports";
        $data = Funds::orderBy('created_at','desc')
        ->where('status','=','approved')
        ->get();
        return view('reports.fndRep',compact('title'))->with('data',$data);
    }
}
