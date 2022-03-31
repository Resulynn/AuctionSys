@extends('layout.app')

    {{-- user status bar --}}
    @section('userbar')
        <div class="d-flex justify-content-end bg-light border-bottom border-dark">
            <a class="text-decoration-none text-dark me-2" href="/login"><i class="bi bi-key pe-1"></i>Login</a>
            <a class="text-decoration-none text-dark pe-3" href="/register"><i class="bi bi-pen pe-1"></i>Register</a>
        </div>
    @endsection

    @section('content')
    
  
    <div class="text-center">
        <h1> Login</h1>
    </div>
    
    <div class="d-flex m-auto pb-2 bg-secondary justify-content-center w-50">
        <div class="col-5 pt-5">
            <div class="row">
                <label class="lead text-light text-center">Username </label>
                <input class="form-control" type="text" placeholder="Username">
            </div>
            <div class="row">
                <label class="lead text-light text-center"> Password </label>
                <input class="form-control" type="password" placeholder="Password">
            </div>
           

                    <div class="row mt-5 justify-content-center">
                    <button type="button" class="btn btn-dark w-50">Login</button>
                    </div>
            </div>
        </div>
    </div>

        
    @endsection
