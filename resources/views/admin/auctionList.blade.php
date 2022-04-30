@extends('layout.admin')

@section('content')
@include('inc.auctionlist')

 



{{--     <div class="searchbox  pt-5">
        {!! Form::open(['action'=>'App\Http\Controllers\SearchController@search',
        'method'=>'GET']) !!} 
       
       {{Form::text('search','',['class'=>'form-control','style'=>'border:none; border-radius:0%;  border-bottom:1px #000000 solid;','placeholder'=>'Search'])}}
       {{Form::submit('Search',['class'=>'btn w-50 textalign-center','style'=>'border-radius:0%; color:#ffffff; background:#121212'])}} 
        {!! Form::close() !!} 
     </div> --}}
@endsection