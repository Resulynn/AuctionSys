
  <nav class="navbar  text-center navbar-expand-lg ps-4" style="background-color: #f0eeee;">
  <a class="navbar-brand" href="/index"><i class="bi bi-globe pe-2"></i> <b>True North Garments</b></a>
  
  <div class="collapse navbar-collapse align-items-center" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="/store" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Men
        </a>
        <div class="dropdown-menu py-3 w-100" style="border-radius: 0%;" aria-labelledby="navbarDropdownMenuLink">
          <div class = "row px-2">
            <div class = "col">
              <a><b>READY TO WEAR</b></a> 
                  <a class="dropdown-item" href="/store/men/tops">Tees</a>
                  <a class="dropdown-item" href="/store/men/bottoms">Pants</a>
                  <a class="dropdown-item" href="/store/men/shorts">Shorts</a>
            </div>
            <div class = "col">
              <a><b>SHOES</b></a> 
                  <a class="dropdown-item" href="/store/men/footwear">Sneakers</a>
            </div>
          </div>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="/store" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Women
        </a>
        <div class="dropdown-menu" style="border-radius: 0%;" aria-labelledby="navbarDropdownMenuLink">
          <div class = "row px-2">
            <div class = col-sm-12>
              <a><b>READY TO WEAR</b></a> 
                  <a class="dropdown-item" href="/store/women/tops">Tees</a>
                  <a class="dropdown-item" href="/store/women/bottoms">Pants</a>
                  <a class="dropdown-item" href="/store/women/shorts">Shorts</a>
            </div>
            <div class = col-sm-12>
              <a><b>SHOES</b></a> 
                  <a class="dropdown-item" href="/store/women/footwear">Sneakers</a>
            </div>
          </div>
        </div>
      </li>

      <li class="nav-item dropdown ">
        <a class="nav-link" href="/store" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Accesories
        </a>
        <div class="dropdown-menu px-2" style="border-radius: 0%;" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/store">Necklace</a>
            <a class="dropdown-item" href="/store">Bracelets</a>
            <a class="dropdown-item" href="/store">Rings</a>
            <a class="dropdown-item" href="/store">Earrings</a>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/store" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Others
        </a>
      </li>
    </ul>

    <div class="search-box justify-content-end">
     {{--  {!! Form::open(['action'=>'',
      'method'=>'POST']) !!} --}}
      {{Form::text('search','',['class'=>'search form-control mr-sm-1 ','style'=>'width:200px;','placeholder'=>'Search'])}}
      {{-- {!! Form::close() !!} --}}
    </div>
  </div>
</nav>

