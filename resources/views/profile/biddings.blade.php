@extends('layout.app')
    @section('content')
    <div class="bg-white my-5" style="width:100%; max-width:100%; border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
      <a href="" class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
        
        <span class="fs-5 fw-semibold text-center w-100">Biddings</span>
      </a>
       {{-- @foreach ($data as $info) --}}
      <div class="list-group list-group-flush border-bottom scrollarea ">
          <div class="d-flex">
            <div class="d-flex">
              <img src="/itemImages/{{-- {{$info->itemImg}} --}}" width="100px" height="100px" 
                style="object-fit: cover; border:2px #f0eeee solid; margin:20px;" 
                class="rounded-circle ">
            </div>  
              <div class="d-flex w-100">
                <div class="w-50 d-flex ">
                  <ul style="list-style: none; margin-top: auto; margin-bottom:auto;">
                    <small>
                      <li><b>ID:</b> {{-- {{$info->id}} --}}</li>
                      <li><b>Name:</b> {{-- {{$info->prodName}} --}}</li>
                      <li><b>Details:</b>{{--  {{$info->prodDeets}} --}}</li>
                      <li><b>Category:</b> {{-- {{$info->category}} --}}</li>
                    </small>
                  </ul>
                </div>
                <div class="w-50 d-flex" style="border-right: 1px #f0eeee solid;">
                  <ul class="pe-3" style="list-style: none;  margin-top: auto; margin-bottom:auto;">
                    <small >
                      <li><b>Type:</b> {{-- {{$info->type}} --}}</li>
                      <li><b>Quantity:</b> {{-- {{$info->qty}} --}}</li>
                      <li><b>Starting Price:</b> {{-- {{$info->initialPrice}} --}} PHP</li>
                      <li><b>Buyout Price:</b>{{--  {{$info->buyPrice}} --}} PHP</li> 
                    </small>
                  </ul>
                </div>
                <div class="d-flex w-100 align-items-center">
                  <div class="d-flex w-100 m-auto">
                    {{-- <div>
                      <a href="list/{{$info->id}}/edit" class="userloggedbtn ms-5 px-5">Edit</a>
                    </div> --}}
                   {{--   <div>
                        {!! Form::open(['action'=>['App\Http\Controllers\itemListController@destroy',$info->id],
                       'method'=>'POST'])!!}
                        {{ Form::hidden('_method','DELETE') }}
                        {{ Form::submit('Delete',
                        ['class' => 'text-danger userloggedbtn px-5 w-100',
                         'style'=>' background:none;
                                    border-right: 1px #b6b5b5 solid;
                                    border-left: 1px #b6b5b5 solid;'])}}
                       {!! Form::close() !!} 
                     </div> --}}
                  

                {{--   @if ($info->qty<1) --}}
                  <div>
                    <small class="text-danger ms-5 ">Out Of Stock!</small>  
                  </div>                    
                {{--   @else
                  <div>
                    {!! Form::open(['action'=>['App\Http\Controllers\AuctionController@show',$info->id],
                    'method'=>'POST'])!!}
                        {{ Form::hidden('_method','GET') }}
                        {{ Form::submit('Post',['class' => 'btn userloggedbtn text-success ms-5'])}}
                    {!! Form::close() !!} 
                  </div> --}}
                 {{--  @endif --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        

{{--   @endforeach --}}

{{--   <a class="btn userloggedbtn" id="open">Logout</a>


<div class="mdl_container" id="mdl_container">
<div class="mdl">
<h5>ARE YOU SURE YOU WANT TO LOGOUT?</h5>
    {!! Form::open(['action'=>'App\Http\Controllers\LogoutController@logout','method'=>'POST']) !!}
    {{Form::submit('OK', ['class'=>'userloggedbtn text-danger btn m-auto pt-4'])}}<br>
    {!! Form::close() !!} 
    <a class="btn userloggedbtn" id="close">CANCEL</a>
</div>
</div> 
 --}}

  @endsection
  