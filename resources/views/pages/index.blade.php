@extends('layout.app')
@section('userbar')
<div class="d-flex justify-content-end bg-light border-bottom border-dark">
    <a class="text-decoration-none text-dark me-2" href="/login"><i class="bi bi-key pe-1"></i>Login</a>
    <a class="text-decoration-none text-dark pe-3" href="/register"><i class="bi bi-pen pe-1"></i>Register</a>
</div>
@endsection

@section('content')
    <div class="show text-center pt-5"><h4><b>2022 RELEASES AND COLLECTION</b></h4>
        <p><a href ="/store">SHOW MORE</a></p>
    </div>

  <div class ="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
      <div class="whats-new container">
          <div class="row">
            <div class ="col px-5">
              <a href="/store">SEE MORE</a>
            </div>
            <div class = "col">
              <h3>What's New! </h3>
            </div>
          </div>

          <div
              id="carouselMultiItemExample"
              class="carousel slide carousel-dark text-center"
          >
          
          <div class="carousel-inner py-4">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card">
                      <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp"
                        class="card-img-top"
                        alt="Waterfall"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk
                          of the card's content.
                        </p>
                      <b> <a href="/productpage"> VIEW AUCTION </a></b>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="card">
                      <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp"
                        class="card-img-top"
                        alt="Sunset Over the Sea"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk
                          of the card's content.
                        </p>
                        <b> <a href="/productpage"> VIEW AUCTION </a></b>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="card">
                      <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp"
                        class="card-img-top"
                        alt="Sunset over the Sea"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk
                          of the card's content.
                        </p>
                        <b> <a href="/productpage"> VIEW AUCTION </a></b>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
      </div>
      

      <div class="hot-auc container">
        <div class="row">
           <div class = "col">
            <h3>Hot Auctions! </h3>
            
          </div>
          <div class = "col">
            <a href="/store">SEE MORE</a>
          </div>
        </div>
        <div class="carousel slide carousel-dark text-center">
          <div class="carousel-inner py-4">
            <div class="row">
              <div class="col">
                <div class="carousel-item active">
                  <div class="container">
                    <div class="row">

                      <div class="col-lg-4">
                        <div class="card">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp"
                            class="card-img-top"
                            alt="Waterfall"
                          />
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                              Some quick example text to build on the card title and make up the bulk
                              of the card's content.
                            </p>
                            <b> <a href="/productpage"> VIEW AUCTION </a></b>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp"
                            class="card-img-top"
                            alt="Sunset Over the Sea"
                          />
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                              Some quick example text to build on the card title and make up the bulk
                              of the card's content.
                            </p>
                            <b> <a href="/productpage"> VIEW AUCTION </a></b>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp"
                            class="card-img-top"
                            alt="Sunset over the Sea"
                          />
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                              Some quick example text to build on the card title and make up the bulk
                              of the card's content.
                            </p>
                            <b> <a href="/productpage"> VIEW AUCTION </a></b>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
            <div class="row">
              <div class="col">
                <div class="carousel-item active">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="card">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp"
                            class="card-img-top"
                            alt="Waterfall"
                          />
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                              Some quick example text to build on the card title and make up the bulk
                              of the card's content.
                            </p>
                            <b> <a href="/productpage"> VIEW AUCTION </a></b>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp"
                            class="card-img-top"
                            alt="Sunset Over the Sea"
                          />
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                              Some quick example text to build on the card title and make up the bulk
                              of the card's content.
                            </p>
                            <b> <a href="/productpage"> VIEW AUCTION </a></b>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                          <img
                            src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp"
                            class="card-img-top"
                            alt="Sunset over the Sea"
                          />
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                              Some quick example text to build on the card title and make up the bulk
                              of the card's content.
                            </p>
                            <b> <a href="/productpage"> VIEW AUCTION </a></b>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  
    </div>
    @endsection
    
    
