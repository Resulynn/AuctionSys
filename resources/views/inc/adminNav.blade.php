<nav class="navbar text-center navbar-expand-lg" style="background-color: #f0eeee;">
  <div class="justify-content-start align-items-center" style="display: flex;">
        <a class="navbar-brand" href="/admin/index"><i class="bi bi-globe ps-4 pe-2"></i><b>True North Garments</b></a>
        <a class="nav-link" href="/">Add Auction</a>
        <a class="nav-link" href="/">Listings</a>
        <a class="nav-link" href="/">Shippings</a>
        <a class="nav-link" href="/">Completed</a>
        <a class="nav-link" href="/">Fundings</a>
  </div>
 

    <div class="search-box justify-content-end" style="display:flex;">
     {{--  {!! Form::open(['action'=>'',
      'method'=>'POST']) !!} --}}
      {{Form::text('search','',['class'=>'search form-control mr-sm-1','placeholder'=>'Search'])}}
      {{-- {!! Form::close() !!} --}}
    </div>

</nav>
