@extends('layout.app')
    @section('content')
    <div class="bg-white my-5 mx-5" style="  border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
      <a href="" class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
        <span class="fs-5 fw-bold text-center w-100">Biddings</span>
      </a>
    
    @foreach ($data as $info) 
      <div class="list-group list-group-flush border-bottom scrollarea ">
          <div class="d-flex">
            <div class="d-flex">
              <a href="/item/{{$info->prod_id}}"><img src="/itemImages/{{$info->itemImg}} " width="125px" height="125px" 
                style="object-fit: cover; 
                        border:1px #666464 solid; 
                        margin:20px;
                  " 
                class="rounded-circle "></a>
            </div>  
              <div class="d-flex w-100">
                <div class="w-50 d-flex py-3">
                  <ul style="list-style: none; margin-top: auto; margin-bottom:auto;">
                    <small>
                      <li><h5><b>{{$info->prodName}}</b> </h5></li>
                      <li>Type: <b>{{$info->type}}</b></li>
                      <li>Category: <b>{{$info->category}}</b></li>
                      <li>Condition: <b>{{$info->cond}}</b></li>
                      <li>End Date: <b>{{$info->endDate}} (11:59 PM)</b></li>
                    </small>
                  </ul>
                </div>
                <div class="w-50 d-flex" style="border-right: 1px #f0eeee solid; ">
                  <ul class="pe-3" style="list-style: none;  margin-top: auto; margin-bottom:auto;">
                    <small>
                      <li>Bid Placed: <b>{{$info->bidamt}} PHP</b></li>
                      <li>Reference Num: <b>{{$info->refnum}}</b> </li>
                      <li>Starting Price: <b>{{$info->initialPrice}} PHP</b></li>
                      @if($info->winstatus == "Pending")
                        <li>Status: <b class="text-warning">{{$info->winstatus}}</b> </li>
                        @elseif($info->winstatus == "Lost")
                        <li>Status: <b class="text-danger">{{$info->winstatus}}</b> </li>
                        @elseif($info->winstatus == "Won")
                        <li>Status: <b class="text-success">{{$info->winstatus}}</b> </li>
                      @endif
                      
                    </small>
                  </ul>
                </div>
                <div class="d-flex w-50  align-items-center justify-content-center">
                
                  @if($info->winstatus == "Won")
                  <div class="text-center">
                    <form action="/addtobag" method="GET">
                        <button class="btn userloggedbtn mb-3" style="border-radius: 0%;">
                            <i class="bi bi-bag-plus" style="font-size: 18px;"></i>
                            Add to Bag
                        </button>
                      <input type="hidden" name="product_id" value={{$info->prod_id}}>
                    </form>
                    <button class="btn userloggedbtn text-success" style="border-radius: 0%;">
                      <i class="bi bi-bag-check text-success" style="font-size: 18px;"></i>
                      Checkout
                  </button>
                  </div>
                  
                  @elseif($info->winstatus == "Lost")
                  
                    <a href="/store" class="me-5 btn userloggedbtn " style="font-size: 14px;">View other Auctions</a>
                      
                      {!! Form::open(['action'=>['App\Http\Controllers\BiddingController@destroy',$info->id],
                      'method'=>'DELETE'])!!}
                      {{ Form::hidden('id',$info->id) }} 
                      
                      {{ Form::submit('Remove',['class' => 'btn userloggedbtn text-danger '])}}
                      {!! Form::close() !!}
                    
                  @else
                  <div>
                    {!! Form::open(['action'=>['App\Http\Controllers\BiddingController@destroy',$info->id],
                    'method'=>'DELETE'])!!}
                    {{ Form::hidden('id',$info->id) }}
                    <i class="bi bi-x-circle text-danger"></i>
                    {{ Form::submit('Retract Bid',['class' => 'btn userloggedbtn text-danger '])}}
                    {!! Form::close() !!}
                    
                  </div> 
                @endif                  
                </div>
              </div>
            </div>
          </div>
      @endforeach        
    </div>
@endsection
  