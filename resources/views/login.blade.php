@extends('layouts.master')

@section('content')

<div style="padding: 5%"></div>

@if ($message = Session::get('success'))
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
            @if ($errors->has('email'))
                <p class="text-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div>
            <p class="input-control" style="text-align: left">Password</p>
            <input class="input-control" type="password" name="password">
            @if ($errors->has('password'))
                <p class="text-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>
        <div style="text-align: right; padding-top: 20px;">
            <a href="{{ route('reset_password') }}">forgot your password?</a>
            <button class="input-control" type="submit">Login</button>
        </div>
    </form>
</div>

@endsection
