@extends('layout.app')
@include('inc.userbar')

    @section('content')
    
   

    <div class="d-flex flex-row justify-content-center">
        <div class="d-flex ms-2 mt-5 border border-dark w-50 justify-content-center">
            <div class="pt-4 pb-3 ps-4 pe-4">
                <p class="h4"><a href="#" class="text-decoration-none text-dark">Profile</a></p>
            </div>
            <div class="pt-4 pb-3 ps-4 pe-4">
                <p class="h4"><a href="#" class="text-decoration-none text-dark">Biddings</a></p>
            </div>
            <div class="pt-4 pb-3 ps-4 pe-4">
                <p class="h4"><a href="#" class="text-decoration-none text-dark">Fundings</a></p>
            </div>
            <div class="pt-4 pb-3 ps-4 pe-4">
                <p class="h4"><a href="#" class="text-decoration-none text-dark">To Recieve</a></p>
            </div>
            <div class="pt-4 pb-3 ps-4 pe-4">
                <p class="h4"><a href="#" class="text-decoration-none text-dark">History</a></p>
            </div>
        </div>
    </div>



    {!! Form::open(['action'=>'App\Http\Controllers\ProfileController@store',
    'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="reg">

        <div class="d-flex ms-2 mt-5 py-4">
            <h2 class="px-5"><b> Your Profile </b></h2>
        </div>

        <div class="mb-3 px-3" style="width: 500px; margin-left:70px" >
            <div class="py-1">
                <img src="userPFP/shinigamidreams.png" width="200px" height="200px" style="object-fit: cover;" class="rounded-circle" >
            </div>
          </div>


        <div class="reg-content">
            <div class="col-5">
                <fieldset disabled>
                    <div class="row ms-2">
                        {{Form::label('first name','First Name',['class'=>'lead text-dark'])}}
                        {{Form::text('fname','',['class'=>'form-control','placeholder'=>'First Name'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('last name','Last Name',['class'=>'lead text-dark'])}}
                        {{Form::text('lname','',['class'=>'form-control','placeholder'=>'Last Name'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('email address','Email Address',['class'=>'lead text-dark'])}}
                        {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email Address'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('phone num','Phone Number',['class'=>'lead text-dark'])}}
                        {{Form::number('pnum','',['class'=>'form-control','placeholder'=>'Phone Number'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('address','Address',['class'=>'lead text-dark'])}}
                        {{Form::text('add','',['class'=>'form-control','placeholder'=>'Address'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('zipcode','Zip Code',['class'=>'lead text-dark'])}}
                        {{Form::number('zipcode','',['class'=>'form-control','placeholder'=>'Zip Code'])}}
                    </div>
                </fieldset>
            </div>
                
            <div class="col-5 ms-5 pe-5">
                <fieldset disabled>
                    <div class="row ms-2">
                        {{Form::label('uname','User Name',['class'=>'lead text-dark'])}}
                        {{Form::text('uname','',['class'=>'form-control','placeholder'=>'User Name'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('pword','Password',['class'=>'lead text-dark'])}}
                        {{Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
                    </div>
                    <div class="row ms-2">
                        {{Form::label('cpword','Confirm Password',['class'=>'lead text-dark'])}}
                        {{Form::password('confPassword',['class'=>'form-control','placeholder'=>'Confirm Password'])}}
                    </div>
                    <div class="row ms-2 justify-content-around">
                        <label class="lead text-dark"> Birthday </label>
                            <div class="col">
                                {{Form::number('month','',['class'=>'form-control','placeholder'=>'MM'])}}
                            </div>
                            <div class="col">
                                {{Form::number('day','',['class'=>'form-control','placeholder'=>'DD'])}}
                            </div>
                            <div class="col">
                                {{Form::number('year','',['class'=>'form-control','placeholder'=>'YYYY'])}}
                            </div>
                    </fieldset>
                        <div class="reg-button">
                            <div class="row mt-5 pt-5 justify-content-end">
                                <a href="/profile/edit" class= "btn btn-dark w-75 textalign-center">Edit Profile</a>
                            </div>
                        </div>
                    </div>                
             {!! Form::close() !!}
            </div>
        </div>
    </div>

        
    @endsection