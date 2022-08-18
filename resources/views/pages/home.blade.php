@extends('layout.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="show text-center pt-4"><h4><b>2022 RELEASES AND COLLECTION</b></h4>
    <p><a href ="/store" style="font-size: small;">SHOW MORE</a></p>
</div>
  <div id="carouselExampleIndicators" class="carousel slide pb-5" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="\img\sample.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="\img\sample2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="\img\sample3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
    </div>
</div>
     
<div class="whats-new container pt-4">
  <div class="row justify-content-center align-items-center m-auto pb-4 pt-5 px-3">
    <div class ="col" style="text-align:left;">
      <a href="/store">SEE MORE</a>
    </div>
    <div class = "col" style=" text-align:right;">
      <h3>What's New! </h3>
    </div>
  </div>
    <div
        id="carouselMultiItemExample"
        class="carousel slide carousel-dark text-center"
    >
    <div class="carousel-inner pb-3">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">

@if(count($products)>0)
  @foreach($products as $prod)
        
            <div class="col-lg-4 pb-5">
              <div class="card" style="border-radius: 0%;  height:480px;">
                <img
                  src="/itemImages/{{$prod->itemImg}}"
                  class="card-img-top  mx-auto" 
                  style="border-radius: 0%;
                  width: 300px;
                  height: 300px;"
                />
                <div class="card-body">
                    <h5 class="card-title"><b>{{$prod->prodName}}</b></h5>
                    <p class="card-text">{{$prod->prodDeets}}</p>
                  
                </div>
                <div class="pb-5">
                  <b> <a href="/item/{{$prod->id}}"> VIEW AUCTION </a></b>
                </div>
                
              </div>
            </div>
          
              @endforeach
                @else
                <p> No Records Found! </p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      
<div class="carousel slide carousel-dark text-center pb-5">
  <div class="carousel-inner pb-5">
    <div class="row">
      <div class="col">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="row justify-content-center align-items-center m-auto pb-4 pt-5 px-3">
                <div class ="col" style="text-align:left;">
                  <h3>Hot Auctions!</h3>
                </div>
                <div class = "col" style=" text-align:right;">
                  <a href="/store">SEE MORE</a>
                </div>
              </div>

              @if(count($products)>0)
              @foreach($products as $prod)
                   
                        <div class="col-lg-4 pb-5">
                          <div class="card" style="border-radius: 0%;  height:480px;">
                            <img
                              src="/itemImages/{{$prod->itemImg}}"
                              class="card-img-top  mx-auto" 
                              style="border-radius: 0%;
                              width: 300px;
                              height: 300px;"
                            />
                            <div class="card-body">
                                <h5 class="card-title"><b>{{$prod->prodName}}</b></h5>
                                <p class="card-text">{{$prod->prodDeets}}</p>
                              
                            </div>
                            <div class="pb-5">
                              <b> <a href="/item/{{$prod->id}}"> VIEW AUCTION </a></b>
                            </div>
                            
                          </div>
                        </div>
                    
                          @endforeach
                            @else
                            <p> No Records Found! </p>
                        @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
@endsection
