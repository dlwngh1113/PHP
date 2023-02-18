<x-layout>
    <x-slot:title>
        Juho's Site
    </x-slot:title>
<div class="container-lb">
    <x-board/>
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
</x-layout>
