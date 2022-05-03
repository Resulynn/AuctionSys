@extends('layout.app')
@section('content')
<a class=" d-flex flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
    <span class="fs-5 fw-semibold " style="margin:auto;">Your Bag</span>
  </a>
<div class="bg-white mb-5" style="width: 60%; border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
    <div class="list-group list-group-flush border-bottom scrollarea">
      <a href="/admin/auction/" class="list-group-item list-group-item-action  py-3" aria-current="true">
        <div class="d-flex align-items-center">
          <div class="me-3">
            <img src="/itemImages/" width="100px" height="100px" 
              style="object-fit: cover; border:1px #121212 solid;" 
              class="rounded-circle" >
          </div>
          <div>
            <div class="d-flex w-100 align-items-center justify-content-between">
              <strong class="mb-1"></strong><br>
              <small></small>
            </div>
            <div class="col-10 mb-1 ">
             
            </div>
            <div class="col-10 mb-1 ">
            
            </div>
            <div class="" style="">
              <div>
               
              </div>
              <div>
               
              </div>
            </div>
          </div>
        </div>
      </a>
   
    </div>
  </div>
@endsection