@extends('layouts.master')

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        @section('top_banner')
            <p>This is Login Banner</p>
        @endsection

        @section('main')
            <form method="post" action="/user">
                @csrf
                <div><label>Email <input type="text" name="email"></label></div>
                <div><label>password <input type="password" name="password"></label></div>
                <p><input type="submit" name="Login" value="Login"></p>
                @if ($errors->any()) {{ $errors->first('email') }} @endif
            </form>
        @endsection

        @section('bottom_banner')
        @endsection
    </body>
</html>
