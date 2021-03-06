@extends('layout.admin')
@section('content') 
<a href="/admin/auctionlist" class="d-flex flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
        <span class="fs-5 fw-semibold text-center w-100">Auction List</span>
</a>
<div class="d-flex">
      <div class="bg-white" style="margin:0%; width: 500px; ">
          <div class="list-group list-group-flush border-bottom scrollarea " style="border-right:1px #f0eeee solid;">
          @if(count($auctions)>0)
          @foreach ($auctions as $info)
            <a href="/admin/auction/{{$info->id}}" class="list-group-item list-group-item-action  py-3" aria-current="true">
              <div class="d-flex align-items-center">
                <div class="me-3">
                  <img src="/itemImages/{{$info->itemImg}}" width="100px" height="100px" 
                    style="object-fit: cover; border:1px #121212 solid;" 
                    class="rounded-circle" >
                </div>
                <div>
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">{{$info->prodName}}</strong><br>
                    <small></small>
                  </div>
                  <div class="col-10 mb-1 ">
                    {{$info->prodDeets}}
                  </div>
                  <div class="col-10 mb-1 ">
                    Time Left: 
                  </div>
                  <div class="" style="">
                    <div>
                       Highest Bid: <b>{{$info->initialPrice}}</b>
                    </div>
                    <div>
                      Buyout Price: <b>{{$info->buyPrice}}</b>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            @endforeach
            @else
            <p class="m-auto"> No Records Found! </p>
          @endif
          </div>
        </div>
<div class="w-100 d-flex"> 
    <div class="item-container" 
         style="display: flex;
                width:100%;
                height:1000px;">
        <div class="my-5"
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
</div>

  


{{--     <div class="searchbox  pt-5">
        {!! Form::open(['action'=>'App\Http\Controllers\SearchController@search',
        'method'=>'GET']) !!} 
       
       {{Form::text('search','',['class'=>'form-control','style'=>'border:none; border-radius:0%;  border-bottom:1px #000000 solid;','placeholder'=>'Search'])}}
       {{Form::submit('Search',['class'=>'btn w-50 textalign-center','style'=>'border-radius:0%; color:#ffffff; background:#121212'])}} 
        {!! Form::close() !!} 
     </div> --}}


    @endsection