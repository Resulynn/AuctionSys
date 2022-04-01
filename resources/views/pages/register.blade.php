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

    <div class="reg">
        <div class="col-5 ms-5">
            <div class="row ms-2">
                <label class="lead text-light"> First Name </label>
                <input class="form-control" type="text" placeholder="First Name">
            </div>
            <div class="row ms-2">
                <label class="lead text-light"> Last Name </label>
                <input class="form-control" type="text" placeholder="Last Name">
            </div>
            <div class="row ms-2">
                <label class="lead text-light"> Email Address </label>
                <input class="form-control" type="Email Address" placeholder="Email Address">
            </div>
            <div class="row ms-2">
                <label class="lead text-light"> Phone Number </label>
                <input class="form-control" type="Number" placeholder="Phone Number">
            </div>
            <div class="row ms-2">
                <label class="lead text-light"> Address </label>
                <input class="form-control" type="text" placeholder="Address">
            </div>
            <div class="row ms-2">
                <label class="lead text-light"> Zip Code </label>
                <input class="form-control" type="Number" placeholder="Zip Code">
            </div>
        </div>

        <div class="col-5 ms-5 pe-5">
            <div class="row ms-2">
                <label class="lead text-light">Username </label>
                <input class="form-control" type="text" placeholder="Username">
            </div>
            <div class="row ms-2">
                <label class="lead text-light"> Password </label>
                <input class="form-control" type="password" placeholder="Password">
            </div>
            <div class="row ms-2">
                <label class="lead text-light"> Confirm Password </label>
                <input class="form-control" type="password" placeholder="Confirm Password">
            </div>
            <div class="row ms-2">
                <label class="lead text-light"> Birthday </label>
                    <div class="col">
                        <input class="form-control" type="text" placeholder="MM">
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" placeholder="DD">
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" placeholder="YYYY">
                    </div>

                    <div class="row mt-5 pt-5 justify-content-end">
                    <button type="button" class="btn btn-dark w-50">Register</button>
                    </div>
            </div>
        </div>
    </div>

        
    @endsection
