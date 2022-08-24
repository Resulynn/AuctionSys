@extends('layout.app')

    @section('content')
    {{-- @include('inc.usermenu') --}}
  <div class="reg my-5">  
    <div class="d-flex ms-2  pt-3">
        <h2 class="px-5"><b> Edit Your Profile</b></h2>
    </div>
        <div class="py-1 text-center">
                    {!! Form::open(['action'=>['App\Http\Controllers\imgController@upload'],
                    'method'=>'POST', 'enctype'=>'multipart/form-data']) !!} 
                        <div class="profpic text-center mb-3">
                            <img src="/userPFP/{{$data->profileImage}}" width="200px" height="200px" style="object-fit: cover; " class="rounded-circle mb-3" >
                            <h5 class="" style="text-transform: uppercase; font-weight:bold;">{{Auth::user()->username}}</h5>
                            <small>
                                User Type: <b>{{Auth::user()->user_type}}</b><br>
                                User Status: <b>{{$data->user_status}}</b>
                            </small>
                        </div>
                        <small>Upload Profile Picture</small> 
                        <div class="text-center pb-4 d-flex align-items-center justify-content-center">
                                {{Form::file('pfpImg',['class'=>'form-control w-25 me-3','id'=>'pfpImg'])}}
                                <div class="save-prof">
                                    {{Form::submit('SAVE',['class'=>'userloggedbtn px-3 py-1'])}}
                                </div>
                        </div>
                        
                        {!! Form::close() !!}
        </div>
  
        <div class="container  pb-5 ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-header">{{ __('PROFILE') }}</div>
        
                        <div class="card-body">
                          
                                @csrf
                              
                                <div class="row mb-3">
                                    <div class="col">
                                         <label for="fname" class="col-form-label text-md-end">{{ __('First Name') }}</label>
                                        <div class="col">
                                         <input type="text" class="form-control" value="{{ $data->fname }}">
                                        </div>
                                    </div>
        
                                        <div class="col">
                                            <label for="lname" class="col-form-label text-md-end">{{ __('Last Name') }}</label>
                                            <div class="col">
                                             <input type="text" class="form-control" value="{{ $data->lname }}">
                                            </div>
                                        </div>
                                </div>
        
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="email" class=" col-form-label text-md-end">{{ __('Email Address') }}</label>
                                        <input type="text" class="form-control" value="{{ $data->email }}">
                                    </div>
                                    <div class="col">
                                        <label for="bday" class="col-form-label text-md-end">{{ __('Birth Date') }}</label>
                                        <input type="date" class="form-control" value="{{ Carbon\Carbon::parse($data->bday)->format('Y-m-d') }}">
                                    </div>
                                    
                                    <div class="col">
                                        <label for="pnum" class="col-form-label text-md-end">{{ __('Phone Number') }}</label>
                                        <div class="col">
                                         <input type="number" class="form-control" value="{{ $data->pnum }}">
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="username" class="col-form-label text-md-end">{{ __('Username') }}</label>
                                        <div class="col">
                                         <input type="text" class="form-control" value="{{ $data->username }}">
                                        </div>
                                     </div>
                                    
                               
                                <div class="w-100">
                                    <div class="row mb-4">
                                        <div class="w-75">
                                            <div class="col">
                                                <label for="address" class="  col-form-label text-md-end">{{ __('Address') }}</label>
                                                <input type="text" class="form-control" value="{{ $data->address }}">
                                            </div>
                                        </div>
                                        <div class="w-25">
                                            <div class="col">
                                                <label for="zipcode" class="col-form-label text-md-end">{{ __('Zip Code') }}</label>
                                                <div class="col">
                                                 <input type="text" class="form-control" value="{{ $data->zipcode }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        
    @endsection