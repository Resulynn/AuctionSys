@extends('layout.admin')
@section('content')
<div class="bg-white my-5 mx-5 " style=" border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
  <a href="" class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
    <span class="fs-5 fw-semibold text-center w-100">To Pay</span>
  </a>
  <div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Username</th>
          <th scope="col">Amount</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $info)
          <tr>
            <th scope="row">{{$info->id}}</th>
            <td>{{$info->uname}}</td>
            <td>{{$info->amount}}</td>
            <td>{{$info->status}}</td>
            <td>
              @if ($info->status == "Pending")
              {!! Form::open(['action'=>['App\Http\Controllers\ToPayController@update',$info->id],
              'method'=>'POST'])!!}

                  {{ Form::hidden('uname',$info->uname) }}
                  {{ Form::hidden('amt',$info->amount) }}
                  {{ Form::hidden('id',$info->id) }}


                  {{ Form::hidden('_method','PUT') }}
                  {{ Form::submit('Approve',['class' => 'btn userloggedbtn text-success ms-5'])}}
              {!! Form::close() !!}
              @else
                  <p>-----</p>
              @endif
              </td>
            <td>
              @if ($info->status != "Pending")
                 <p>-----</p>
              @else
                  {!! Form::open(['action'=>['App\Http\Controllers\ToPayController@deny',$info->id],
              'method'=>'POST'])!!}

                  {{ Form::hidden('uname',$info->uname) }}
                  {{ Form::hidden('amt',$info->amount) }}
                  {{ Form::hidden('id',$info->id) }}
                  {{-- {{ Form::hidden('_method','PUT') }} --}}
                  {{ Form::submit('Deny',['class' => 'btn userloggedbtn text-danger ms-5'])}}
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>       
  </div>
</div>
@endsection