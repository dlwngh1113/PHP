<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title ?? 'main' }}</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div style="width: 100%; float: left; text-align: center; font-size: 200%;font-weight: 700;color: black;">
            <div class="container">
                <a href="{{ route('home') }}"><img src="{{ asset('image/juhoBear.png') }}" alt="visit homepage image" width="100px"></a>
            </div>
            <div style="align-content: center; text-align: center">
                <p>Juho's Site</p>
            </div>
        </div>

        {{ $slot }}
    </body>
</html>
