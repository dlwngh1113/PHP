@extends('layouts.master')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-info">
        {{ $message }}
    </div>
@endif

<div>
    <form action="{{ route('validate_login') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="email" placeholder="Email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div>
            <input type="password" name="password" placeholder="Password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>

@endsection
