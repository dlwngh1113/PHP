<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title ?? 'main' }}</title>
        <style>
            .header{
                width: 100%;
                float: left;
            }
            .title{
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
            ul li { float: left; margin-left: 20px; list-style: none;}
            .navbar-nav{
                color: #c4db66;
            }
            .nav-link{
                color: black;
                text-decoration: none;
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
                <p class="title">Portfolio</p>
            </div>
        </div>

        <div>
            {{ $slot }}
        </div>
    </body>
</html>
