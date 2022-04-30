@extends('layout.admin')
    @section('content')

      <div class="item-list ms-5 mt-5 pt-3 p-3"  style="background-color:#f0eeee; border:1px #000000 solid;">
      <table class="table table-borderless">
            <thead class="text-center">
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
            @foreach ($data as $info)
            <tbody>
                <tr class="text-center">
                <th scope="row">{{$info->id}}</th>
                  <td> {{$info->prodName}}</td>
                  <td>{{$info->prodDeets}}</td>
                  <td>{{$info->category}}</td>
                  <td>{{$info->type}}</td>
                  <td>{{$info->initialPrice}}</td>
                  <td>{{$info->buyPrice}}</td> 
                </tr>
            </tbody> 
           @endforeach
        </table>
    </div>





    @endsection