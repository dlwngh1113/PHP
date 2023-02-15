@extends('layouts.master')

@section('content')

<div class="container-lb">
    <ul class="banner-label">
        @foreach ($boards as $board)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('board.index', $board->id) }}">{{ $board->name }}</a>
            </li>
        @endforeach
        <li class="nav-item">
            <a class="nav-link" href="{{ route('board.index') }}">자유게시판</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">tab2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">tab3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">tab4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">tab5</a>
        </li>
    </ul>
    @yield('main')
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
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
            </li>
        @endguest
    </ul>
</div>

@endsection
