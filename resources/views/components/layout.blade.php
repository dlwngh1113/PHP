<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title ?? 'main' }}</title>
        <style>
            .header{
                width: 100%;
                float: left;
                text-align: center;
                font-size: 200%;
                font-weight: 700;
                color: black;
            }
            .container{
                float: left;
                align-content: center;
                text-align: center;
            }
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
        <div class="header">
            <div class="container">
                <a href="{{ route('home') }}"><img src="{{ asset('image/juhoBear.png') }}" alt="visit homepage image" width="100px"></a>
            </div>
            <div style="align-content: center; text-align: center">
                <p>Juho's Site</p>
            </div>
        </div>

        <div>
            {{ $slot }}
        </div>
    </body>
</html>
