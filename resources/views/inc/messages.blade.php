@if (count($errors)>0)
    @foreach ($errors->all() as $error)
    <div class="alert my-5 w-50" style="border-radius:0%; background:rgb(219, 165, 177); margin:auto;">
        {{$error}}
    </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert my-5 w-50" style="border-radius:0%; background:rgb(143, 207, 159); margin:auto;">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert my-5 w-50" style="border-radius:0%; background:rgb(219, 165, 177); margin:auto;">
        {{session('error')}}
    </div>   
@endif