@extends('layouts.master')

@section('content')

<div class="container-lb">
</div>
<div class="container-rb">
    <ul class="navbar-nav">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-item" href="{{ route('logout') }}">Logout</a>
            </li>
        @endguest
    </ul>
</div>
@endsection
