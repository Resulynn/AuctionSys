@extends('layout.admin')


@section('content') 

<div class="d-flex">
   @include('inc.auctionlist')
    <div class="item-container my-3 " 
         style="display: flex;
                align-items: center;
                justify-content: center;
                width:100%;">
        <div class="py-3"
                style="
                justify-content:center;
                align-items:center;
                margin:auto;
                ">
                <div class="text-center">
                    <img
                    src="/itemImages/{{$auction->itemImg}}"
                    class="card-img-top  mx-auto mb-3" 
                    style="border-radius: 0%;
                           width: 300px;
                           height:300px;
                           border:1px #f0eeee solid;" />
                </div>
                    <h3 class="d-flex justify-content-center pb-2"><b>{{$auction->prodName}}</b></h3> 
                <div class="d-flex">
                    <div class="details mx-3">
                        <div class="item-det">
                            <h6><b>Category:</b> {{$auction->category}}</h6>
                            <h6><b>Initial Price:</b> {{$auction->initialPrice}} PHP</h6>
                            <h6><b>Buy Price:</b> {{$auction->buyPrice}} PHP</h6>
                            <h6><b>Auction Ends Date:</b> {{$auction->created_at}}</h6>
                        </div>
                    </div>
                    <div>
                        <div class="details mx-3">
                            <div class="item-det">
                                <h6><b>Type:</b> {{$auction->type}}</h6>
                                <h6><b>Status:</b> ACTIVE </h6>
                                <h6><b>Time Left:</b> HH:MM:SS</h6>
                                <h6><b>Highest Bid:</b> {{$auction->initialPrice}} PHP</h6>
                                <h6><b>Highest Bidder:</b>  Juan Delacruz <br>
                                    <b>UID:</b> 0123456 </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--     <div class="searchbox  pt-5">
        {!! Form::open(['action'=>'App\Http\Controllers\SearchController@search',
        'method'=>'GET']) !!} 
       
       {{Form::text('search','',['class'=>'form-control','style'=>'border:none; border-radius:0%;  border-bottom:1px #000000 solid;','placeholder'=>'Search'])}}
       {{Form::submit('Search',['class'=>'btn w-50 textalign-center','style'=>'border-radius:0%; color:#ffffff; background:#121212'])}} 
        {!! Form::close() !!} 
     </div> --}}
</div>

    @endsection