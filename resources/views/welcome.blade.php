<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
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

    <div class="container mt-5">
        @yield('content')
    </div>
</body>

</html>
