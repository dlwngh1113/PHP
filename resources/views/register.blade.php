@extends('layouts.master')

@section('content')

<form action="{{ route('validate_register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name">
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    <input type="text" name="email" placeholder="email">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    <input type="password" name="password" placeholder="password">
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    <button type="submit">Register</button>
</form>
@endsection
