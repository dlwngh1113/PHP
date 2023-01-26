@extends('welcome')

@section('content')

<form action="{{ route('validate_register') }}" method="POST">
    @csrf
    <input type="text" name="name" >
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    <input type="text" name="email">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    <input type="password" name="password">
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    <button type="submit">Register</button>
</form>
@endsection
