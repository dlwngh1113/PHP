@extends('layouts.master')

@if ($message = Session::get('message'))
    <div class="alert-info">
        <p class="text-danger">{{ $message }}</p>
    </div>
@endif

@section('content')
    <div class="container-table">
        <div class="container-leftrow">
            <p>User Name</p>
        </div>
        <div class="container-rightrow">
            <p>{{ $user->name }}</p>
        </div>

        <div class="container-leftrow">
            <p>Email</p>
        </div>
        <div class="container-rightrow">
            <p>{{ $user->email }}</p>
        </div>

        <div class="container-leftrow">
            <p>Reset Password</p>
        </div>
        <div class="container-rightrow">
            <form method="POST" action="{{ route('user.reset_password') }}">
                <p>Enter New Password <input type="text" placeholder="password"></p>
                <p><button type="submit>">Reset</button></p>
            </form>
        </div>

        <div class="container-leftrow">
            <p>Delete User</p>
        </div>
        <div class="container-rightrow">
            <p>{{ $user->created_at }}</p>
        </div>
    </div>
@endsection
