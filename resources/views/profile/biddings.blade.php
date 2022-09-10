@extends('layout.app')
    @section('content')
    <div class="bg-white my-5" style="width:100%; max-width:100%; border-right:1px #f0eeee solid; border-top:1px #f0eeee solid; border-left:1px #f0eeee solid;">
      <a href="" class="d-flex  flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
        <span class="fs-5 fw-bold text-center w-100">Biddings</span>
      </a>
    @foreach ($data as $info) 
      <div class="list-group list-group-flush border-bottom scrollarea ">
          <div class="d-flex">
            <div class="d-flex">
              <img src="/itemImages/{{$info->itemImg}} " width="100px" height="100px" 
                style="object-fit: cover; border:2px #f0eeee solid; margin:20px;" 
                class="rounded-circle ">
            </div>  
              <div class="d-flex w-100">
                <div class="w-50 d-flex ">
                  <ul style="list-style: none; margin-top: auto; margin-bottom:auto;">
                    <small>
                      <li><b>ID:</b> {{$info->id}} </li>
                      <li><b>Name:</b>  {{$info->prodName}} </li>
                      <li><b>Type:</b> {{$info->type}}</li>
                      <li><b>Category:</b> {{$info->category}}</li>
                    </small>
                  </ul>
                </div>
                <div class="w-50 d-flex" style="border-right: 1px #f0eeee solid;">
                  <ul class="pe-3" style="list-style: none;  margin-top: auto; margin-bottom:auto;">
                    <small >
                      <li><b>Bid Placed:</b>  {{$info->bidamt}} PHP</li>
                      <li><b>Reference Number:</b>  {{$info->refnum}} </li>
                      <li><b>Starting Price:</b>  {{$info->initialPrice}} PHP</li>
                      <li><b>Buyout Price:</b> {{$info->buyPrice}}  PHP</li> 
                    </small>
                  </ul>
                </div>
                <div class="d-flex w-100  align-items-center justify-content-center">
                  <div>
                    <small class="text-secondary ms-5 ">Add to Bag</small>  
                  </div>  
                  <div>
                    <small class="text-danger ms-5 ">Retract Bid</small>  
                  </div>                     
                </div>
              </div>
            </div>
          </div>
      @endforeach        
    </div>
@endsection
  