@extends('layout.app')
@section('content')
<div class="bg-white my-5 mx-5 " style=" border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
    <a href="" class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
      
      <span class="fs-5 fw-semibold text-center w-100">My Funds</span>
    </a>

    <?php
        $refnum=Auth::user()->id.date('ymdHis');
    ?>

    <div class="align-items-center list-group list-group-flush border-bottom scrollarea ">
        <h3>Your current funds is: {{Auth::user()->funds}}</h3>

        <p>Your Reference number is {{$refnum}}</p>
        <p>Your Account name is {{Auth::user()->username}}</p>
        {!! Form::open(['action'=>['App\Http\Controllers\fundController@fundReq'],
                    'method'=>'POST']) !!} 
        <div>
        {{Form::text('reqAmt','',['class'=>'form-control','placeholder'=>'Enter Amount','style'=>'border-radius:0%; background:none; border:none; border-bottom:1px #000000 solid;'])}}  
        </div>

        {{Form::submit('ADD FUNDS',['class'=>' btn my-5 btn-dark w-100 textalign-center', 'style'=>'border-radius:0%;'])}}
        {{Form::hidden('refnum',$refnum)}}
        {{Form::hidden('accname',Auth::user()->username)}}
        {!! Form::close() !!}
    </div>
</div>
     

@endsection