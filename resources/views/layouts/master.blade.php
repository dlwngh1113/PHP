<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="header">
        <div class="container">
            <a href="{{ route('home') }}"><img src="{{ asset('image/jh.png') }}" alt="jh profile image" width="100px"></a>
        </div>
        <div class="container">
            <p>Juho's Site</p>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
