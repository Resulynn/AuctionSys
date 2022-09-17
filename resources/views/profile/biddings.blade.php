@extends('layout.app')
    @section('content')
    <div class="bg-white my-5" style="width:100%; max-width:100%; border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
      <a href="" class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
        <span class="fs-5 fw-bold text-center w-100">Biddings</span>
      </a>
    @foreach ($data as $info) 
      <div class="list-group list-group-flush border-bottom scrollarea ">
          <div class="d-flex">
            <div class="d-flex">
              <img src="/itemImages/{{$info->itemImg}} " width="100px" height="100px" 
                style="object-fit: cover; border:2px #f0eeee solid; margin:20px;" 
                class="rounded-circle ">
            </div>  
              <div class="d-flex w-100">
                <div class="w-50 d-flex ">
                  <ul style="list-style: none; margin-top: auto; margin-bottom:auto;">
                    <small>
                      <li>Name: <b>{{$info->prodName}}</b> </li>
                      <li>Type: <b>{{$info->type}}</b></li>
                      <li>Category: <b>{{$info->category}}</b></li>
                      <li>Condition: <b>{{$info->cond}}</b></li>
                    </small>
                  </ul>
                </div>
                <div class="w-50 d-flex" style="border-right: 1px #f0eeee solid; ">
                  <ul class="pe-3" style="list-style: none;  margin-top: auto; margin-bottom:auto;">
                    <small>
                      <li>Bid Placed: <b>{{$info->bidamt}} PHP</b></li>
                      <li>Reference Number: <b>{{$info->refnum}}</b> </li>
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
                <div class="d-flex w-100  align-items-center justify-content-center">
                
                  @if($info->winstatus == "Won")
                  <div>
                    <form action="/addtobag" method="GET">
                        <button class="btn userloggedbtn" style="border-radius: 0%;">
                            <i class="bi bi-cart-plus" style="font-size: 18px;"></i>
                            Add to Cart
                        </button>
                      <input type="hidden" name="product_id" value={{$info->prod_id}}>
                    </form>
                  </div> 
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
  