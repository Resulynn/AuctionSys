@extends('layout.app')

@section('content')
<div class="container  my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CREATE YOUR ACCOUNT') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="my-3 px-3"  >
                            <div class="py-1 text-center">
                                <img src="" width="150px" height="150px" >
                            </div>
                            
                                <div class="up-photo" style="padding-top: 5px; ">
                                   <h4> <label for="pfpImg">Upload Profile Photo</label></h4>
                                    <input id="pfpImg" type="file" class="form-control @error('pfpImg') is-invalid @enderror" name="pfpImg" value="{{ old('pfpImg') }}" required autocomplete="pfpImg" autofocus>
                                </div>
                          </div>
                        <div class="row mb-3">
                            <div class="col">
                                 <label for="fname" class="col-form-label text-md-end">{{ __('First Name') }}</label>
                                <div class="col">
                                    <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="col">
                                    <label for="lname" class="col-form-label text-md-end">{{ __('Last Name') }}</label>
                                    <div class="col">
                                        <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                        @error('lname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="email" class=" col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col">
                                <label for="bday" class="col-form-label text-md-end">{{ __('Birth Date') }}</label>
                                    <input id="bday" type="date" class="form-control @error('email') is-invalid @enderror" name="bday" value="{{ old('bday') }}" required autocomplete="bday">

                                    @error('bday')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            
                            <div class="col">
                                <label for="pnum" class="col-form-label text-md-end">{{ __('Phone Number') }}</label>
                                <div class="col">
                                    <input id="pnum" type="number" class="form-control @error('pnum') is-invalid @enderror" name="pnum" value="{{ old('pnum') }}" required autocomplete="pnum" autofocus>

                                    @error('pnum')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="username" class="col-form-label text-md-end">{{ __('Username') }}</label>
                                <div class="col">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col">
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                        <div class="col">
                                <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="row mb-4">
                                <div class="w-75">
                                    <div class="col">
                                        <label for="address" class="  col-form-label text-md-end">{{ __('Address') }}</label>
                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="w-25">
                                    <div class="col">
                                        <label for="zipcode" class="col-form-label text-md-end">{{ __('Zip Code') }}</label>
                                        <div class="col">
                                            <input id="zipcode" type="number" class=" form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" required autocomplete="pnum" autofocus>

                                            @error('zipcode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-dark w-75 mb-2" style="border-radius: 0%;">
                                    {{ __('Register') }}
                                </button> 
                                <a href="/login">
                                    <p>Already have an account? <b>Log in</b> instead.</p>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
