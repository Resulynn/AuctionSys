<div class="bg-white" style="margin:0%; width: 500px; border-right:1px #f0eeee solid; border-left:1px #f0eeee solid;">
    <a href="/admin/list" class="d-flex flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-5 fw-semibold">Auction List</span>
    </a>
  
    <div class="list-group list-group-flush border-bottom scrollarea">
    @foreach ($auctions as $info)
      <a href="/admin/auction/{{$info->id}}" class="list-group-item list-group-item-action  py-3" aria-current="true">
        <div class="d-flex align-items-center">
          <div class="me-3">
            <img src="/itemImages/{{$info->itemImg}}" width="100px" height="100px" 
              style="object-fit: cover; border:1px #121212 solid;" 
              class="rounded-circle" >
          </div>
          <div>
            <div class="d-flex w-100 align-items-center justify-content-between">
              <strong class="mb-1">{{$info->prodName}}</strong><br>
              <small></small>
            </div>
            <div class="col-10 mb-1 ">
              {{$info->prodDeets}}
            </div>
            <div class="col-10 mb-1 ">
              Time Left: 
            </div>
            <div class="" style="">
              <div>
                 Highest Bid: <b>{{$info->initialPrice}}</b>
              </div>
              <div>
                Buyout Price: <b>{{$info->buyPrice}}</b>
              </div>
            </div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>