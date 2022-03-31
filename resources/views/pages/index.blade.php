@extends('layout.app')
@section('userbar')
<div class="d-flex justify-content-end bg-light border-bottom border-dark">
    <a class="text-decoration-none text-dark me-2" href="/login"><i class="bi bi-key pe-1"></i>Login</a>
    <a class="text-decoration-none text-dark pe-3" href="/register"><i class="bi bi-pen pe-1"></i>Register</a>
</div>
@endsection

    @section('content')
        
    @endsection
