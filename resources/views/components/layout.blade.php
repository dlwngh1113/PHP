<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title ?? 'main' }}</title>
        <style>
            .container-lb{
                float: left;
                width: 70%;
                display: grid;
            }
            .container-rb{
                float: left;
                width: 30%;
            }
        </style>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <x-header/>

        <div class="container-lb">
            <x-board/>
            {{ $slot }}
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
    </body>
</html>
