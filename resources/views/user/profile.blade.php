@extends('layouts.master')

@section('content')
    <div class="container-table">
        <div class="container-row">
            <p>User Name</p>
        </div>
        <div class="container-row">
            <p>{{ $user->name }}</p>
        </div>

        <div class="container-row">
            <p>Email</p>
        </div>
        <div class="container-row">
            <p>{{ $user->email }}</p>
        </div>

        <div class="container-row">
            <p>Reset Password</p>
        </div>
        <div class="container-row">
            <p>{{ $user->password }}</p>
        </div>

        <div class="container-row">
            <p>Delete User</p>
        </div>
        <div class="container-row">
            <p>{{ $user->created_at }}</p>
        </div>
    </div>
@endsection
