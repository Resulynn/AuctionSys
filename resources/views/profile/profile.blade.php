
@extends('layout.app')

    @section('content')
    @include('inc.usermenu')

    <div class="reg">

        <div class="d-flex ms-2 mt-5 py-4">
            <h2 class="px-5"><b> Your Profile</b></h2>
        </div>

        <div class="mb-3 px-3" style="width: 500px; margin-left:70px" >
            <div class="d-flex flex-row py-1">
                <img src="userPFP/{{$data->profileImage}}" width="200px" height="200px" style="object-fit: cover;" class="rounded-circle" >
                <div class="row-1 ms-3 w-100">

                {!! Form::open(['action'=>['App\Http\Controllers\imgController@upload'],
                    'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}    
                    
                    {{Form::label('','Change Profile Picture',['class'=>'h2'])}}
                    {{Form::file('pfpImg',['class'=>'form-control h-10 w-100','id'=>'pfpImg'])}}
                    <div class="reg-button">
                        <div class="d-flex">
                            {{Form::submit('Upload Image',['class'=>'btn btn-dark textalign-center mt-5'])}}
                        </div>
                {!! Form::close() !!}

                    </div>  
                </div>  
            </div>
          </div>

          {!! Form::open(['action'=>'App\Http\Controllers\ProfileController@store',
          'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}

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