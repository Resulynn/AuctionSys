@extends('layout.app')
@section('content')
@php
use App\Models\Bag;
use App\Models\Biddings;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
@endphp
<div class="bg-white my-5 mx-5 " style=" border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-bottom:1px #f0eeee solid;border-left:1px #f0eeee solid;">
    <a class=" d-flex mt-5 flex-shrink-0 p-3 link-dark text-decoration-none border-top border-bottom">
        <span class="fs-5 fw-bold " style="margin:auto;">Checkout</span>
    </a>
    <div class="d-flex">
        <div class="bg-white mb-5 w-75" style=" border-top:1px #f0eeee solid;">
        @foreach ($products as $item)
        <div class="list-group list-group-flush border-bottom scrollarea ps-3 py-3">
            <div class="d-flex align-items-center">
                <div class="">
                <img src="/itemImages/{{$item->itemImg}}" width="100px" height="100px" 
                    style="object-fit: cover; border:1px #121212 solid;" 
                    class="rounded-circle" >
                </div>
            @php
                $price = Biddings::select('bidtransactions.bidamt')
                            ->join('bag','bag.product_id','=','bidtransactions.prod_id')
                            ->where('bidtransactions.bagstatus',1)
                            ->where('bidtransactions.prod_id','=',$item->product_id)
                            ->where('bidtransactions.user_id', Auth::user()->id)
                            ->first();
            @endphp
            <input type="hidden" name="product_id" value={{$item->product_id}}>
            <div class="d-flex w-100">
                <div class="d-flex w-75 align-items-center">
                    <ul class="pe-3" style="list-style: none;   margin-bottom:auto;">
                        <li><h5><b>{{$item->prodName}} </b></h5></li>
                        <li class="mb-2">{{$item->prodDeets}}</li>
                        <li>Bid Placed: <b>{{$price->bidamt}} PHP</b></li>
                        <li>Condition: <b>{{$item->cond}}</b></li>
                    </small>
                    </ul>
                </div>
            </div>
                <br>
            </div>
        </div>
        @endforeach
        </div>
        <div class="w-50" style="border-left: 1px #f0eeee solid; border-top: 1px #f0eeee solid;">
            <div class="">
                <h5 class="pt-3 text-center">BAG TOTAL</h5>
                <div class="ms-3 me-3">
                <hr>
                <div class="d-flex w-100 px-1" >
                    <div class="w-100" >
                    @foreach($products as $item)
                        @php
                        $price = Biddings::select('bidtransactions.bidamt')
                                    ->join('bag','bag.product_id','=','bidtransactions.prod_id')
                                    ->where('bidtransactions.bagstatus',1)
                                    ->where('bidtransactions.prod_id','=',$item->product_id)
                                    ->where('bidtransactions.user_id', Auth::user()->id)
                                    ->first();
                        @endphp
                        <ul class="" style=" list-style: none; margin-bottom:auto;">
                        
                            <li><h6>{{$item->prodName}}</b></h6></li>
                        </ul>
                    @endforeach
                    </div>
                    <div align="right" class="w-50 me-4">
                    @foreach($products as $item)
                        @php
                        $price = Biddings::select('bidtransactions.bidamt')
                                    ->join('bag','bag.product_id','=','bidtransactions.prod_id')
                                    ->where('bidtransactions.bagstatus',1)
                                    ->where('bidtransactions.prod_id','=',$item->product_id)
                                    ->where('bidtransactions.user_id', Auth::user()->id)
                                    ->first();
                        @endphp
                        <ul class="" style="list-style: none;   margin-bottom:auto;">
                        <small>
                            <li><h6><b>{{number_format($price->bidamt,2)}} </b></h6></li>
                        </small>
                        </ul>
                    @endforeach
                    </div>
                </div>
                <hr>
                <div align="right" class="w-100 px-3">
                    <label><h5>Sub-Total: <b>{{number_format($total,2)}}</b></h5> </label><br>
                    @php
                    $del_fee =  number_format(45, 2);
                    $penalty = number_format(200,2);
                    $total_chk = $total + $del_fee + $penalty;
                    @endphp
                    <label>Shipping Fee: <b>{{$del_fee}}</b></label><br>
                    <label class="mb-2 " style="font-size: small;"> (J&T Express Delivery)</label> <br>
                    <label>Penalty Fee: <b class="text-danger">{{$penalty}}</b> </label><br>
                    <hr>
                    <label class= "px-3 pt-2" style="border:1px #3eb952 solid; "><h5>Total: <b style="color: #3eb952;">{{number_format($total_chk, 2)}} PHP</b></h5>  </label>
                </div>
                
                </div>
            </div>
            <div class=" mt-5 text-center mb-3 ">
                @if(Auth::user()->funds < $total_chk)  
                    {!! Form::open(['action'=>'App\Http\Controllers\CheckoutController@index','method'=>'GET']) !!}
                        {{Form::submit('PLACE ORDER', ['class'=>' btn btn-dark  mb-1  ','style'=>'border-radius:0%;','disabled']) }}
                    {!! Form::close() !!}
                    <small class="userloggedbtn ">By Placing Order, you agree to pay the Total amount using your Funds.</small>
                    <br>
                        <label for="">Funds: <b class="text-danger"> {{Auth::user()->funds}} </b></label>
                    <br>
                    <label for="">Funds after placing order: <b> {{(Auth::user()->funds) - $total_chk}}</b></label>
                    <div class="d-flex  justify-content-center">
                        {{Form::submit('CANCEL', ['class'=>' btn btn-dark  mb-3  ','style'=>'border-radius:0%;']) }} 
                    </div>
                @elseif(Auth::user()->funds > $total_chk || Auth::user()->funds = $total_chk )
                    {!! Form::open(['action'=>'App\Http\Controllers\CheckoutController@index','method'=>'GET']) !!}
                    {{Form::submit('PLACE ORDER', ['class'=>' btn btn-dark  mb-1  ','style'=>'border-radius:0%;']) }}
                    {!! Form::close() !!}
                    <small class="userloggedbtn ">By Placing Order, you agree to pay the Total amount using your Funds.</small>
                    <label for="">Funds: <b class="text-success"> {{Auth::user()->funds}}</b></label>
                    <br>
                    <label for="">Funds after placing order: <b> {{(Auth::user()->funds) - $total_chk}}</b></label>
                </div>
            <div class="d-flex  justify-content-center">
                {{Form::submit('CANCEL', ['class'=>' btn btn-dark  mb-3  ','style'=>'border-radius:0%;']) }} 
            </div>
            @endif
        </div>
    </div>
</div>
@endsection