@extends('layout.app')
    @section('content')
    <div class="bg-white my-5 mx-5 " style=" border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
      <a href="" class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
        <span class="fs-5 fw-bold text-center w-100">Purchase History</span>
      </a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Item Name</th>
              <th scope="col">Price</th>
              <th scope="col">Status</th>
              <th scope="col">Payment Method</th>
              <th scope="col">Reference #</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $info)
              <tr>
                <th scope="row">{{$info->id}}</th>
                <td>{{$info->uname}}</td>
                <td>{{$info->amount}}</td>
                <td>{{$info->status}}</td>
                <td></td>
                <td>{{$info->refnum}}</td>
                <td>{{$info->updated_at}}</td>
                <td>
                  <a href="/feedback/{{$info->id}}" class="btn userloggedbtn text-success ">Add Feedback</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>   
    </div>
  @endsection
  