<div class="userloggedbar d-flex justify-content-end bg-white py-2 px-4">
    <div class="userloggedbar-content">
            <a> Signed in as:</a> <a href="/profile">
            <b>{{Session::get('username')}}</b></a> 
      
        <div class="" style="text-align: end">
            {!! Form::open(['action'=>'App\Http\Controllers\LogoutController@logout',
            'method'=>'POST']) !!}
            <i class="bi bi-arrow-left-short ps-1"></i>
            {{Form::submit('LOGOUT', ['class="logout btn"'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>

