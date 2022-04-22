<div class="userloggedbar d-flex justify-content-end bg-white py-2 px-4">
    <div class="userloggedbar-content">
       {!! Form::open(['action'=>'App\Http\Controllers\LogoutController@logout',
        'method'=>'POST']) !!}
        <i class="bi bi-box-arrow-left px-2"></i>
        <a href="">{{Form::('LOGOUT', ['class="py-1 pe-1"'])}}
        {{Session::get('username')}}
        </a> 
        {{

            
        }}
        {!! Form::close() !!}
        
    </div>
</div>

