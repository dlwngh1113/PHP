@extends('layouts.master')

@section('content')

<div style="padding: 5%"></div>

@if ($message = Session::get('message'))
    <div class="alert-info">
        <p class="text-danger">{{ $message }}</p>
    </div>
@endif

<div class="container-login">
    <form method="POST" action="{{ route('validate_login') }}">
        @csrf
        <div>
            <p class="input-control" style="text-align: left">Email</p>
            <input class="input-control" type="text" name="email">
            @error('email')
                <p class="text-danger">{{ $errors->first('email') }}</p>
            @enderror
        </div>
        <div>
            <p class="input-control" style="text-align: left">Password</p>
            <input class="input-control" type="password" name="password">
            @error('password')
                <p class="text-danger">{{ $errors->first('password') }}</p>
            @enderror
            <p>Remember Me
                <input class="input-control" type="checkbox" name="remember_me">
            </p>
        </div>
        <div style="text-align: right; padding-top: 20px;">
            <a href="#">forgot your password?</a>
            <button class="input-control" type="button" onclick="location.href='{{ route('register') }}'">Register</button>
            <button class="input-control" type="submit">Login</button>
        </div>
    </form>
</div>

@endsection
