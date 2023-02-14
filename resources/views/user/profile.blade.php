@extends('layouts.master')

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
            <p>{{ $user->password }}</p>
        </div>

        <div class="container-leftrow">
            <p>Delete User</p>
        </div>
        <div class="container-rightrow">
            <p>{{ $user->created_at }}</p>
        </div>
    </div>
@endsection
