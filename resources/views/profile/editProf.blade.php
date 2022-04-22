
@extends('layout.app')

    @section('content')
    @include('inc.usermenu')

    {!! Form::open(['action'=>['App\Http\Controllers\ProfileController@update',$data->id],
    'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="reg">

        <div class="d-flex ms-2 mt-5 py-4">
            <h2 class="px-5"><b> Edit Your Profile</b></h2>
        </div>


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