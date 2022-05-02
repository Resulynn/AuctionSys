@extends('layout.app')

    @section('content')
    {{-- @include('inc.usermenu') --}}
  <div class="reg mt-5">  
    <div class="d-flex ms-2 pt-5 py-4">
        <h2 class="px-5"><b> Edit Your Profile</b></h2>
    </div>
        <div class="py-1 text-center">
                    {!! Form::open(['action'=>['App\Http\Controllers\imgController@upload'],
                    'method'=>'POST', 'enctype'=>'multipart/form-data']) !!} 
                        <div class="profpic text-center mb-3">
                            <img src="/userPFP/{{$data->profileImage}}" width="200px" height="200px" style="object-fit: cover; " class="rounded-circle mb-3" >
                            <h5 class="" style="text-transform: uppercase; font-weight:bold;">{{Session::get('username')}}</h5>
                            <a>
                                User Type: <b>{{Session::get('usertype')}}</b><br>
                                User Status: <b>{{$data->user_status}}</b>
                            </a>
                        </div>
                        
                       <a>Upload Profile Picture</a> 
                          
                        <div class="text-center pb-4 d-flex align-items-center justify-content-center">
                                {{Form::file('pfpImg',['class'=>'form-control w-25 me-3','id'=>'pfpImg'])}}
                                <div class="save-prof">
                                    {{Form::submit('SAVE',['class'=>'userloggedbtn px-3 py-1'])}}
                                </div>
                        </div>
                        
                        {!! Form::close() !!}
        </div>
      

    {!! Form::open(['action'=>['App\Http\Controllers\ProfileController@update',$data->id],
    'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    
        <div class="reg-content">
            <div class="col-5">
                <fieldset disabled>
                    <div class="row ms-2">
                        {{Form::label('first name','First Name',['class'=>'lead text-dark'])}}
                        {{Form::text('fname', $data->fname,['class'=>'form-control text-muted','placeholder'=>'First Name'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('last name','Last Name',['class'=>'lead text-dark'])}}
                        {{Form::text('lname',$data->lname,['class'=>'form-control text-muted','placeholder'=>'Last Name'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('email address','Email Address',['class'=>'lead text-dark'])}}
                        {{Form::email('email',$data->email,['class'=>'form-control text-muted','placeholder'=>'Email Address'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('phone num','Phone Number',['class'=>'lead text-dark'])}}
                        {{Form::number('pnum',$data->pnum,['class'=>'form-control text-muted','placeholder'=>'Phone Number'])}}
                    </div>
                </fieldset>
                    <div class="row ms-2">
                        {{Form::label('address','Address',['class'=>'lead text-dark'])}}
                        {{Form::text('add',$data->address,['class'=>'form-control','placeholder'=>'Address'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('zipcode','Zip Code',['class'=>'lead text-dark'])}}
                        {{Form::number('zipcode',$data->zipcode,['class'=>'form-control','placeholder'=>'Zip Code'])}}
                    </div>
            </div>
                
            <div class="col-5 ms-5 pe-5">
                <fieldset disabled>
                    <div class="row ms-2">
                        {{Form::label('uname','User Name',['class'=>'lead text-dark'])}}
                        {{Form::text('uname',$data->username,['class'=>'form-control text-muted','placeholder'=>'User Name'])}}
                    </div>
                    <div class="row ms-2">
                        <label class="lead text-dark"> Birthday </label>                      
                                {{Form::text('month',$data->bday,['class'=>'form-control text-muted','placeholder'=>'MM'])}}
                    </fieldset>
                    {{Form::hidden('_method','PUT')}}
                        <div class="reg-button">
                            <div class="row mt-5 pt-5 justify-content-end">
                                {{Form::submit('Save Changes',['class'=>'btn btn-dark w-75 textalign-center', 'style'=>'border-radius: 0%;'])}}
                            </div>
                        </div>
                    </div>                
             {!! Form::close() !!}
            </div>
        </div>
    </div>

        
    @endsection