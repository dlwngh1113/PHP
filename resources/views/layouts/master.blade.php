<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="header">
        <div class="container">
            <a href="{{ route('home') }}"><img src="{{ asset('image/juhoBear.png') }}" alt="visitt homepage image" width="100px"></a>
        </div>
        <div style="align-content: center; text-align: center">
            <p>Juho's Site</p>
        </div>
    </div>

    @yield('content')
</body>

</html>
