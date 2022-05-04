@extends('layout.admin')
    @section('content')

    
    @foreach ($data as $info)
    
    <div class="bg-white" style="width:100%; max-width:100%; border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
      <div class="list-group list-group-flush border-bottom scrollarea ">
          <div class="d-flex">
            <div class="me-3 ps-3">
              <img src="/itemImages/{{$info->itemImg}}" width="100px" height="100px" 
                style="object-fit: cover; border:1px #121212 solid;" 
                class="rounded-circle mt-2">
            </div>  
              <div class="d-flex w-100">
                <div class="w-50 pt-3">
                  <ul style="list-style: none; ">
                    <small>
                      <li><b>ID:</b> {{$info->id}}</li>
                      <li><b>Name:</b> {{$info->prodName}}</li>
                      <li><b>Details:</b> {{$info->prodDeets}}</li>
                      <li><b>Category:</b> {{$info->category}}</li>
                    </small>
                  </ul>
                </div>
                <div class="w-25 pt-3">
                  <ul style="list-style: none;">
                    <small>
                      <li><b>Type:</b> {{$info->type}}</li>
                      <li><b>Quantity:</b> {{$info->qty}}</li>
                      <li><b>Starting Price:</b> {{$info->initialPrice}} PHP</li>
                      <li><b>Buyout Price:</b> {{$info->buyPrice}} PHP</li> 
                    </small>
                  </ul>
                </div>
                <div class="d-flex w-25 ms-3 align-items-center justify-content-center" >
                  <a href="list/{{$info->id}}/edit" class="userloggedbtn ps-3 pe-5" style="font-size: 15px;">Edit</a>

                    {!! Form::open(['action'=>['App\Http\Controllers\itemListController@destroy',$info->id],
                    'method'=>'POST'])!!}
                    {{ Form::hidden('_method','DELETE') }}
                    {{ Form::submit('Delete',['class' => 'text-danger','style'=>'border:0; padding:0%;  background:none;'])}}
                    {!! Form::close() !!} 
                  @if ($info->qty<1)
                    <a class="userloggedbtn ps-3 pe-5" style="font-size: 15px;">Out Of Stock!</a>                      
                  @else
                    {!! Form::open(['action'=>['App\Http\Controllers\AuctionController@show',$info->id],
                    'method'=>'POST'])!!}
                    {{ Form::hidden('_method','GET') }}
                    {{ Form::submit('Post',['class' => 'text-dark ps-2','style'=>'border:0; padding:0%;  background:none;'])}}
                    {!! Form::close() !!} 
                  @endif
             
                    

                </div>
              </div>
            </div>
          </div>
        </div>

  @endforeach

  @endsection