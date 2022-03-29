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
        <h1 class="ms-4"> Login </h1>
    </div>

    <div class="d-flex m-auto pb-2 bg-secondary justify-content-center w-50">

        <div class="col-5 ms-5">
            <div class="row ms-2">
                <label class="lead text-light"> Username </label>
                <input class="form-control" type="text" placeholder="Username">
            </div>
            <div class="row ms-2">
                <label class="lead text-light"> Password</label>
                <input class="form-control" type="text" placeholder="Password">
            
                <button type="button" class="btn btn-outline-dark">Login</button>
            </div>
           
        </div>

        
        
    </div>

        
    @endsection
