@extends('layout.app')
    @section('content')

@php
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
$date = date($item->endDate);
$time = date(' 23:59:59');
$date_today = $date.''.$time;
@endphp
    
<script type="text/javascript">
var count_id = "<?php echo $date_today ?>";
var countDownDate = new Date(count_id).getTime();

var x = setInterval(function(){

    var now  = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24 ))/(1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60))/(1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60))/1000);

document.getElementById("end_date").innerHTML = "<h5>Remaining Time: <b>" + days + "d " + hours + "h " + minutes + "m " + seconds + "s </b></h5>";

if(distance < 0){
    clearInterval(x);
    document.getElementById("end_date").innerHTML = "Remaining Time: Bidding ENDED";
}
},1000);
</script>


    <div class="bidding">
        <div class="bidding-container py-5 my-5">
            <div class="row">
                <div class="col">
                    <div class="title">
                        <h3><b>BIDDING</b></h3>
                    </div>
                </div>
                <div class="col">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48.165 48.165">
                            <path id="Icon_awesome-icons" data-name="Icon awesome-icons" d="M10.973,20.635a1.475,1.475,0,0,0,2.131,0l9.1-9.391a6.741,6.741,0,0,0-.462-9.772,6.432,6.432,0,0,0-8.775.64l-.928.954-.927-.954a6.433,6.433,0,0,0-8.776-.64,6.754,6.754,0,0,0-.47,9.772Zm13.539,9.453H20l-.666-1.34a2.577,2.577,0,0,0-2.414-1.673H10.171a2.577,2.577,0,0,0-2.414,1.673L7.1,30.088H2.583A2.582,2.582,0,0,0,0,32.671V45.582a2.581,2.581,0,0,0,2.58,2.582H24.512a2.582,2.582,0,0,0,2.58-2.582V32.671a2.582,2.582,0,0,0-2.58-2.583ZM13.546,44.026a4.892,4.892,0,1,1,4.892-4.892A4.892,4.892,0,0,1,13.546,44.026Zm33.433-10.9h-5.7l2.1-4.774c.2-.626-.37-1.243-1.146-1.243H35.127a1.138,1.138,0,0,0-1.176.856l-1.58,10.059a1.07,1.07,0,0,0,1.176,1.119h5.862l-2.277,7.808c-.178.626.4,1.214,1.151,1.214a1.247,1.247,0,0,0,1.027-.494L48,34.6c.459-.65-.109-1.477-1.023-1.477ZM44.974.031,31,2.18a2.947,2.947,0,0,0-2.4,2.978V15.2a7.831,7.831,0,0,0-1.505-.16c-3.325,0-6.021,2.021-6.021,4.515s2.7,4.515,6.021,4.515,6-2.006,6.021-4.483V9.375l10.536-1.62v4.438a7.832,7.832,0,0,0-1.505-.16c-3.325,0-6.021,2.021-6.021,4.515s2.7,4.515,6.021,4.515,6-2.006,6.021-4.483V3.01A2.872,2.872,0,0,0,44.974.031Z" transform="translate(0 0)"/>
                        </svg>
                    </div>
                </div>
            </div>
                <div class="item ">
                <div class="item-container ">
                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <img
                            src="/itemImages/{{$item->itemImg}}"
                            class="card-img-top" 
                            style="border-radius: 0%;
                            width: 300px;
                            height:300px;"
                            />
                        </div>
                        <div class="col">
                            <div class="details">
                                <div class="d-flex  align-items-center">
                                    <h3><b>{{$item->prodName}}</b></h3>
                                </div>
                                <div class="item-det">
                                    <h5>Category: {{$item->category}}</h5>
                                    <small><p class="pe-5" style="width: 500px; max-width:100%;">{{$item->prodDeets}} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, iusto nulla iure dolorem quas odio harum dignissimos facilis, suscipit minus praesentium quidem rerum blanditiis quis atque mollitia et eos repellat?</p></small>
                                        <h5>Auction Ends on:<b> {{ Carbon::parse($item->endDate)->isoFormat('MMM D, YYYY')}} (11:59 PM)</b></h5>
                                        <p id="end_date"></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container w-75 ">
                <div class="row">
                    <div class="col">
                        <div class="bidding-det">
                                <h5>Your Max Bid: <b>{{$my_max_bid}} PHP</b> </h5>
                                <h5>Starting Bid: <b>{{$item->initialPrice}} PHP</b></h5>
                                <h5>Highest Bid: <b>{{$highest_bid}} PHP </b></h5>
                                @if(Auth::check())
                                    @if($bid_status->bidstatus == 1)
                                        Done
                                    @elseif($bid_status->bidstatus == 0)
                                        Not yet
                                    @endif
                                    @else

                                @endif 
                                
                        </div>
                    </div>
                
                    <div class="col">
                        @guest
                            @if(Route::has('login'))
                            <a class="btn btn-dark w-50" style="border-radius:0%; text-decoration:none; color:#ffffff;" href="/login">Login</a>
                        @endif
                        @else
                            <div class="bid-amt">
                                <h5 class="mt-3">Enter your Bidding Amount</h5>
                                @if(Auth::user()->user_status == 0)
                                        {!! Form::number('bid_amt', '', ['class'=>'form-control','disabled']) !!}
                                        {{Form::submit('PLACE BID', ['class'=>'btn btn-dark mt-5 w-50 ','style'=>'border-radius:0%; ','disabled']) }}
                                    @else
                                        {!! Form::open(['action'=>'App\Http\Controllers\BiddingController@store','method'=>'POST',$item->id]) !!}
                                            {{Form::hidden('id',$item->id)}}
                                            {!! Form::number('bid_amt', '', ['class'=>'form-control','required']) !!}
                                            {{Form::submit('PLACE BID', ['class'=>' btn btn-dark mt-5 w-50 ','style'=>'border-radius:0%;']) }}
                                        {!! Form::close() !!}
                                @endif
                            </div>  
                        @endguest
                    </div>  
                </div> 
            </div>
        <div class="d-flex align-items-center justify-content-center">
            <div class="w-25 me-5">
                <hr>
            </div>
                OR
            <div class="w-25 ms-5">
                <hr>
            </div>
        </div>
        <div class="container w-75">
            <div class="buy-now">
                <div class="row">
                    <div class="col">
                        <h5>Buy for <b>{{$item->buyPrice}} PHP</b></h5>
                    </div>
                    <div class="col">
                        @if(Auth::check())
                            @if(Auth::user()->user_status == 0)
                                {!! Form::open(['action'=>'App\Http\Controllers\BiddingController@store','method'=>'GET']) !!}
                                    {{Form::submit('BUY NOW', ['class'=>' btn btn-dark  w-50 ','style'=>'border-radius:0%;' ,'disabled']) }}
                                {!! Form::close() !!}
                                @else
                                    {!! Form::open(['action'=>'App\Http\Controllers\BiddingController@store','method'=>'GET']) !!}
                                        {{Form::submit('BUY NOW', ['class'=>' btn btn-dark  mb-3 w-50 ','style'=>'border-radius:0%;']) }}
                                    {!! Form::close() !!}
                            @endif
                            @else
                            {!! Form::open(['action'=>'App\Http\Controllers\BiddingController@store','method'=>'GET']) !!}
                                        {{Form::submit('LOGIN TO BUY', ['class'=>' btn btn-dark  mb-3 w-50 ','style'=>'border-radius:0%;']) }}
                            {!! Form::close() !!}
                        @endif
                            
                        @if(Auth::check())
                            @if(Auth::user()->funds > $item->buyPrice)
                                Funds: <b class="text-success">{{Auth::user()->funds}}</b> 
                                @else
                                    <div class="align-items-center justify-content-center">
                                        Funds: <b class="text-danger">{{Auth::user()->funds}} (Insufficient)</b> 
                                        <a href="/fundings" class="userloggedbtn ms-1"> <i class="bi bi-wallet2" style="font-size: 15px;"></i> Add Funds</a>
                                    </div>
                            @endif 
                        @else
                            
                        @endif
                        
                    </div>  
                </div>
                {!! Form::open(['action'=>'App\Http\Controllers\storePagesController@store_index','method'=>'GET']) !!}
                    {{Form::submit('CANCEL', ['class'=>'btn btn-dark mt-5 w-25 ','style'=>'border-radius:0%;'])}}<br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>  
</div>
@endsection
