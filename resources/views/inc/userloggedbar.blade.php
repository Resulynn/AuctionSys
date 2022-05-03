<?php
    use App\Models\Users;

    $username = Session::get('username');
    $data = Users::where('username',$username)->first();
?>

<div class="userloggedbar d-flex align-items-center justify-content-end bg-white py-2 px-4">
    <div>
        <a href="/bag/{{$username}}" class="userloggedbtn btn" style="font-size: medium;">
            <i class="bi bi-bag pe-3"></i>
        </a>
    </div>
        <div class="userloggedbar-content ">
            <div class="dropdown" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                <img src="/userPFP/{{$data->profileImage}}" width="30px" height="30px" style="object-fit: cover;" class="rounded-circle me-1" >
                <a href="/profile" class="userloggedbtn"><b>{{$username}}</b></a> 
            </div>
            <div class="dropdown-menu dropdown-menu-right my-1" style="border-radius: 0%; border:1px #f0eeee solid;  background-color:#ffffff;">
                <div class="dropdown-item">
                    <a class="userloggedbtn" href="/profile">Profile</a>
                </div>
                <div class="dropdown-item">
                    {!! Form::open(['action'=>'App\Http\Controllers\LogoutController@logout','method'=>'POST']) !!}
                    <a href="#logout" class="userloggedbtn">Logout</a>
                </div>
            </div>
            
            <div id="logout" class="modal">
                <div class="modalcontent my-5" style="width:450px; height:250px;">
                    <h5 class="pb-3">YOUR ACCOUNT WILL BE LOGGED OUT.</h5>
                    <div class="d-flex">
                        {{Form::submit('OK', ['class'=>'userloggedbtn btn m-auto'])}}<br>
                        <a href="#" class="modalclose pt-3" style="text-decoration: none; font-size:small;">CLOSE</a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>

