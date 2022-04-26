
@extends('layout.admin')

@section('content')
<div class="reg w-100  " style=" margin-left:10%; margin-top:5%; margin-bottom:5%;">
    <div class="d-flex  mt-5 py-5">
        <h3 class="px-5"><b> Your Profile</b></h3>
    </div>

    {!! Form::open(['action'=>'App\Http\Controllers\ProfileController@store',
    'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="profpic text-center mb-3">
        <img src="/userPFP/{{$data->profileImage}}" width="200px" height="200px" style="object-fit: cover; " class="rounded-circle mb-3" >
        <div class="profpic text-center mb-1">
            <h5 class="" style="text-transform: uppercase; font-weight:bold;">{{Session::get('username')}}</h5>
            <a>User Type: 
            <?php
            $utype = Session::get('usertype');
                if($utype = 2){?>
                    <b>Registered User</b>  
                <?php }?></a>
            <div>
                <a>User Status: <b>{{$data->user_status}}</b></a>
            </div>
        </div>
    </div>
            
    <div class="reg-content">
        <div class="col-5">
            <fieldset disabled>
                <div class="row ms-2">
                    {{Form::label('first name','First Name',['class'=>'lead text-dark'])}}
                    {{Form::text('fname', $data->fname,['class'=>'form-control','placeholder'=>'First Name'])}}
                </div>
                <div class="row ms-2">
                    {{Form::label('last name','Last Name',['class'=>'lead text-dark'])}}
                    {{Form::text('lname',$data->lname,['class'=>'form-control','placeholder'=>'Last Name'])}}
                </div>
                <div class="row ms-2">
                    {{Form::label('email address','Email Address',['class'=>'lead text-dark'])}}
                    {{Form::email('email',$data->email,['class'=>'form-control','placeholder'=>'Email Address'])}}
                </div>
                <div class="row ms-2">
                    {{Form::label('phone num','Phone Number',['class'=>'lead text-dark'])}}
                    {{Form::number('pnum',$data->pnum,['class'=>'form-control','placeholder'=>'Phone Number'])}}
                </div>
                <div class="row ms-2">
                    {{Form::label('address','Address',['class'=>'lead text-dark'])}}
                    {{Form::text('add',$data->address,['class'=>'form-control','placeholder'=>'Address'])}}
                </div>
                <div class="row ms-2">
                    {{Form::label('zipcode','Zip Code',['class'=>'lead text-dark'])}}
                    {{Form::number('zipcode',$data->zipcode,['class'=>'form-control','placeholder'=>'Zip Code'])}}
                </div>
            </fieldset>
        </div>
                    
            <div class="col-5 ms-5 pe-5">
                <fieldset disabled>
                    <div class="row ms-2">
                        {{Form::label('uname','User Name',['class'=>'lead text-dark'])}}
                        {{Form::text('uname',$data->username,['class'=>'form-control','placeholder'=>'User Name'])}}
                    </div>
                    <div class="row ms-2">
                        <label class="lead text-dark"> Birthday </label>                      
                        {{Form::text('month',$data->bday,['class'=>'form-control','placeholder'=>'MM'])}}
                    </div>
                </fieldset>
                <div class="reg-button">
                    <div class="row mt-5 pt-5 justify-content-end">
                        <a href="/profile/{{$data->username}}/edit" class= "btn btn-dark w-75 textalign-center" style="border-radius: 0%;">Edit Profile</a>
                    </div>
                </div>
            </div>                
                {!! Form::close() !!}
        </div>
    </div>
</div>

    
@endsection