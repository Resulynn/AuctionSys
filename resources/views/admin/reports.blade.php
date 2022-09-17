@extends('layout.admin')

@section('content')

<div class="bg-white " style=" border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
    <a href="" class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
      <span class="fs-5 fw-semibold text-center w-100">Reports</span>
    </a>
    INVENTORY REPORT
    {!! Form::open(['action'=>['App\Http\Controllers\reportsController@invreport'],
    'method'=>'GET', 'enctype'=>'multipart/form-data']) !!}
        {{Form::submit('generate report',['class'=>'btn btn-dark w-25 mb-5','style'=>'border-radius:0%;'])}}
    {!! Form::close() !!}

    FUND REPORT
    {!! Form::open(['action'=>['App\Http\Controllers\reportsController@fndreport'],
    'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

        <div class="d-flex">
            <label class="me-2">From:</label>
            {{ Form::date('from', \Carbon\Carbon::now(), ['class' => 'w-25 form-control ']) }}
        </div>
        <div class="d-flex">
            <label class="me-2">To:</label>
            {{ Form::date('to', \Carbon\Carbon::now(), ['class' => 'w-25 form-control ']) }}
        </div>

        {{Form::submit('generate report',['class'=>'btn btn-dark w-25 mb-5','style'=>'border-radius:0%;'])}}
    {!! Form::close() !!}

</div>

@endsection