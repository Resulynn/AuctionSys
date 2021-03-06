
<?php
    use App\Models\Users;

    $username = Session::get('username');
    $data = Users::where('username',$username)->first();
?>

<div class="userloggedbar d-flex align-items-center justify-content-end bg-white py-2 px-4">
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
                    <a class="btn userloggedbtn" id="open">Logout</a>
                </div>
            </div>
                
                <div class="mdl_container" id="mdl_container">
                    <div class="mdl">
                    <h5>ARE YOU SURE YOU WANT TO LOGOUT?</h5>
                    {!! Form::open(['action'=>'App\Http\Controllers\LogoutController@logout','method'=>'POST']) !!}
                    {{Form::submit('OK', ['class'=>'btn userloggedbtn text-danger m-auto py-2'])}}<br>
                    {!! Form::close() !!} 
                    <a class="btn userloggedbtn" id="close">CANCEL</a>
                    </div>
                </div> 
            </div>
        </div>



