<?php
    use App\Models\Users;

    $username = Session::get('username');
    $data = Users::where('username',$username)->first();
?>

<div class="userloggedbar d-flex justify-content-end bg-white py-2 px-4">
    <div class="userloggedbar-content">

            <img src="userPFP/{{$data->profileImage}}" width="30px" height="30px" style="object-fit: cover;" class="rounded-circle me-1" >
            <a href="/profile"><b>{{$username}}</b></a> 
        
        <div class="" style="text-align: end">
            {!! Form::open(['action'=>'App\Http\Controllers\LogoutController@logout','method'=>'POST']) !!}
                <i class="bi bi-arrow-left-short"></i>
                {{Form::submit('LOGOUT', ['class="logout btn"'])}}
            {!! Form::close() !!}
        </div>

    </div>
</div>

