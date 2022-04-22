@if (count($errors)>0)
    @foreach ($errors->all() as $error)
    <div class="alert my-5 w-25" style="text-align:center; border-radius:0%; border-style:solid; border-color:#9e464e; border-width:5px; margin:auto;">
        {{$error}}
    </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert my-5 w-25" style="text-align:center; border-radius:0%; border-style:solid; border-color:#a9ba9d; border-width:5px; margin:auto;">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert my-5 w-25" style="text-align:center; border-radius:0%; border-style:solid; border-color:#9e464e; border-width:5px; margin:auto;">
        {{session('error')}}
    </div>   
@endif