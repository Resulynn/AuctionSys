@extends('layout.app')
@section('content')
<div class="bg-white my-5 mx-5 " style=" border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
    <a href="" class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
      
      <span class="fs-5 fw-semibold text-center w-100">My Funds</span>
    </a>
     {{-- @foreach ($data as $info) --}}
    <div class="align-items-center list-group list-group-flush border-bottom scrollarea ">
        {{Form::submit('ADD FUNDS',['class'=>' btn my-5 btn-dark w-25 textalign-center', 'style'=>'border-radius:0%;'])}}

    </div>
</div>
     

@endsection