@extends('layout.admin')
    @section('content')
    <div class="add-auc mt-5 w-75 mb-5"  style="background-color:#f0eeee;">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Details</th>
                <th scope="col">Category</th>
                <th scope="col">Type</th>
                <th scope="col">Starting Price</th>
                <th scope="col">Buy Out Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  @foreach ($data as $info)
                    <th scope="row">{{$info->id}}</th>
                    <td>{{$info->prodName}}</td>
                    <td>{{$info->prodDeets}}</td>
                    <td>{{$info->category}}</td>
                    <td>{{$info->type}}</td>
                    <td>{{$info->initialPrice}}</td>
                    <td>{{$info->buyPrice}}</td>
                  @endforeach
              </tr>
            </tbody>
          </table>
    </div>

        
    @endsection