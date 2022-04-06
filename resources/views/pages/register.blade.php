@extends('layout.app')

    {{-- user status bar --}}
    @section('userbar')
        <div class="d-flex justify-content-end bg-light border-bottom border-dark">
            <a class="text-decoration-none text-dark me-2" href="/login"><i class="bi bi-key pe-1"></i>Login</a>
            <a class="text-decoration-none text-dark pe-3" href="/register"><i class="bi bi-pen pe-1"></i>Register</a>
        </div>
    @endsection

    @section('content')
    
    <div class="d-flex ms-5 me-5 mt-5">
        <h1 class="ms-4"> Create Your Account </h1>
    </div>
    {!! Form::open(['action'=>'App\Http\Controllers\UsersController@store',
    'method'=>'POST']) !!}
    <div class="reg">
        <div class="col-5 ms-5">
            <div class="row ms-2">
                {{Form::label('first name','First Name',['class'=>'lead text-dark'])}}
                {{Form::text('fname','',['class'=>'form-control','placeholder'=>'First Name'])}}
            </div>
            <div class="row ms-2">
                {{Form::label('last name','Last Name',['class'=>'lead text-dark'])}}
                {{Form::text('lname','',['class'=>'form-control','placeholder'=>'Lirst Name'])}}
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
        </div>

        <div class="col-5 ms-5 pe-5">
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

                    <div class="row mt-5 pt-5 justify-content-end">
                        {{Form::submit('Register',['class'=>'btn btn-dark w-50'])}}
                    </div>
            </div>
        {!! Form::close() !!}
        </div>
    </div>

        
    @endsection
