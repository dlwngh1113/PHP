@extends('layouts.master')

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        @section('top_banner')
            <p style="text-align: center; font-size: 200%">This is Login Banner</p>
        @endsection

        @section('main')
            <form method="post" action="/user">
                @csrf
                <div><label>ID <input type="text" name="id"></label></div>
                <div><label>password <input type="password" name="password"></label></div>
                <p><input type="submit" name="Login" value="Login"></p>
            </form>
        @endsection

        @section('bottom_banner')
        @endsection
    </body>
</html>