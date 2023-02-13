@extends('layouts.master')

@section('content')
    <div class="container-lb">
        <div class="container">
            <p>User Name {{ $user->name }}</p>
        </div>
    </div>
@endsection
