<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel= "stylesheet" href= "\css\style.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>@yield('title','True North Garments')</title>
    
</head>

<body>
        <div class="sticky-top">
            @guest
                @if (Route::has('login')) 
                <div class="sticky-top">
                    @include('inc.userbar')
                    @include('inc.navbar')
                </div>
                    
                @endif
                @else
                <div class="sticky-top">
                    @include('inc.userloggedbar')  
                    @include('inc.navbar') 
                </div>
        </div>  
            @endguest
                    
            
        @guest
            @if (Route::has('login')) 
                @endif
                @else
                @include('inc.usermenu')
        @endguest
        
        
    <div class="justify-content-center">
        @if(Session::has('error'))
                <div class="d-flex w-100 mt-5 justify-content-center" style="background: none; margin:0%;">
                    <div class="alert alert-danger w-50 justify-content-center align-items-center d-flex">
                        {{Session::get('error')}}
                        <button class="btn userloggedbtn p-1 ms-3" style= "border: 1px #791e1e solid;  border-radius:0%;" data-dismiss="alert"><b class="text-danger">X</b></button>
                    </div>
                </div>
        @endif

        @if(Session::has('success'))
                <div class="d-flex w-100 mt-5 justify-content-center" style="background: none; margin:0%;">
                    <div class="alert alert-success w-50 justify-content-center align-items-center d-flex">
                        {{Session::get('success')}}
                        <button class="btn userloggedbtn p-1 ms-3" style= "border: 1px #074920 solid;  border-radius:0%;" data-dismiss="alert"><b class="text-success">X</b></button>
                    </div>
                </div>
        @endif
        @yield('content')
    </div>
    @include('inc.footer')
    <script src="\js\modals.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $("document").ready(function()
            {
                settimeout(function(){
                    $("div.alert").remove();
                },3000);
            }
        )
    </script>
</body>
</html>