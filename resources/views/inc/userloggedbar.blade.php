<div class="userbar d-flex justify-content-end bg-light border-bottom border-dark py-1 px-4">
    {!! Form::open(['action'=>'App\Http\Controllers\LogoutController@logout',
    'method'=>'POST']) !!}
    
    <a><i class="bi bi-key"></i>{{Form::submit('LOGOUT', ['class="btn"'])}}</a>
    <a href="/profile"><i class="bi bi-person"></i>{{Session::get('username')}}</a>
    
    

    {!! Form::close() !!}
</div>