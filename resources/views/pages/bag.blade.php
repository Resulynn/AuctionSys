@extends('layout.app')
@section('content')
<a class=" d-flex mt-5 flex-shrink-0 p-3 link-dark text-decoration-none border-top border-bottom">
    <span class="fs-5 fw-semibold " style="margin:auto;">Your Bag</span>
  </a>
<div class="d-flex mb-5">
    <div class="bg-white mb-5" style="width: 60%; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
      @foreach ($products as $item)
      <div class="list-group list-group-flush border-bottom scrollarea">
          <div class="d-flex align-items-center">
            <div class="me-3">
              <img src="/itemImages/{{$item->itemImg}}" width="100px" height="100px" 
                style="object-fit: cover; border:1px #121212 solid;" 
                class="rounded-circle" >
            </div>
          
            <div class="">
              
                <label>ID:  </label>
                <label>Name: {{$item->prodname}}  </label>
                
              
              {{ Form::submit('REMOVE',['class' => 'userloggedbtn text-danger ms-5 mt-3 ','style'=>'border:0; padding:0%;  background:none;'])}}
            </div>
            <br>
          </div>
        </div>
      @endforeach
    </div>
  <div class="w-50" style="border: 1px #f0eeee solid;">
    <div class="mb-5">
      <h5 class="pt-3 text-center">BAG TOTAL</h5>
      <div class="ms-3 me-3">
        <hr>

        <hr>
        <label>SUB-TOTAL: </label><br>
        <label>TOTAL: </label>
      </div>
      
    </div>
    
    <div class="d-flex mt-5 justify-content-center">
      {!! Form::open(['action'=>'App\Http\Controllers\CheckoutController@index','method'=>'GET']) !!}
      {{Form::submit('CHECKOUT', ['class'=>' btn btn-dark  mb-3  ','style'=>'border-radius:0%;']) }}
  {!! Form::close() !!}
    </div>
  </div>
</div>

@endsection