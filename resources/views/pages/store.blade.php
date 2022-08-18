@extends('layout.app')
@section('content')
    <div class="store-container" style="text-align: center">
        <div class="carousel-inner py-4">
            <div class="row">
              <div class="col">
                <div class="carousel-item active">
                  <div class="container">
                    <div class="row">

                      @foreach ($products as $item)
                      <div class="col-lg-4 mb-5">
                        <div class="card" style="border-radius: 0%;  height:480px;">
                          <img
                            src="/itemImages/{{$item->itemImg}}"
                            class="card-img-top mx-auto"
                            style="border-radius: 0%;
                                  width: 300px;
                                  height: 300px;"
                          />
                          <div class="card-body">
                            <h5 class="card-title">{{$item->prodName}}</h5>
                            <p class="card-text">
                            {{$item->prodDeets}}
                            </p>
                            <b> <a href="/item/{{$item->id}}"> VIEW AUCTION </a></b>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
@endsection





