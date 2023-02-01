@extends('layouts.master')

@section('content')

<form action="{{ route('validate_register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name">
    @error('name')
        <span class="text-danger">{{ $errors->first('name') }}</span>
    @enderror
    <input type="text" name="email" placeholder="email">
        @error('email')
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @enderror
    <input type="password" name="password" placeholder="password">
        @error('password')
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @enderror
    <button type="submit">Register</button>
</form>
@endsection
