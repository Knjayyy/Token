@extends('base')

@section('content')
<div class="container col-md-6 offset-md-3 mt-5">

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h1 class="text-center"> Login Page</h1>
    <form action="/dashboard" method="POST">
    {{ csrf_field() }}

    <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="d-flex">
        <div class="flex-grow-1">
            <a href="{{ '/register' }}">Sign up</a>
        </div>
        <button class="btn btn-primary px-5" type="submit">Login</button>
    </div>
</form>
</div>
@endsection
