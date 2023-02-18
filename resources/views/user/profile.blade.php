@extends('layouts.master')

@if ($message = Session::get('message'))
    <x-popup type="info" message="{{ $message }}"/>
@endif

@section('content')
    <div class="container-table">
        <div class="container-table">
            <div class="container-leftrow">
                <p>User Name</p>
            </div>
            <div class="container-rightrow">
                <p>{{ $user->name }}</p>
            </div>
        </div>

        <div class="container-table">
            <div class="container-leftrow">
                <p>Email</p>
            </div>
            <div class="container-rightrow">
                <p>{{ $user->email }}</p>
            </div>
        </div>

        <div class="container-table">
            <div class="container-leftrow">
                <p>Reset Password</p>
            </div>
            <div class="container-rightrow">
                <form method="POST" action="{{ route('user.reset_password') }}">
                    @csrf
                    <p>Enter New Password <input type="text" name="password" placeholder="password"></p>
                    @error('password')
                        <p class="text-danger">{{ $errors->first('password') }}</p>
                    @enderror
                    <p><button type="submit">Reset</button></p>
                </form>
            </div>
        </div>

        <div class="container-table">
            <form method="POST" action="{{ route('user.delete_user') }}">
                @csrf
                <button class="input-control" type="submit" style="color: rgb(255, 0, 0); background-color: #000000d0"><strong>Delete User</strong></button>
            </form>
        </div>
    </div>
@endsection
