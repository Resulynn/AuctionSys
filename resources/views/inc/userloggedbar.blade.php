<div class="userbar d-flex justify-content-end bg-light border-bottom border-dark py-2">
    {!! Form::open(['action'=>'App\Http\Controllers\LogoutController@logout',
    'method'=>'POST']) !!}
    
    <a>{{Form::submit('LOGOUT', ['class="btn bi bi-box-arrow-right pe-1'])}}{{Session::get('username')}}</a>




    {!! Form::close() !!}
</div>