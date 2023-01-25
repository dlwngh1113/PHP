@extends('layouts.master')

<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    @section('top_banner')
        <p>This is Header</p>
    @endsection

    @section('main')
        <a href="{{ route('login') }}">Login</a>
    @endsection

    @section('bottom_banner')

    @endsection
</body>
</html>
