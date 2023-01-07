<!DOCTYPE html>
<html>
    <head>
        <style>
            div.top_banner{
                width: 100%;
                background-color: #9ad442;
                color: white;
                font-size: 300%;
                text-align: center;
                align-content: center;
            }
            div.main{
                width: 100%;
                align-content: center;
                text-align: center;
            }
            div.bottom_banner{
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="top_banner" role="banner">
            @yield('top_banner')
        </div>

        <div class="main" role="main">
            @yield('main')
        </div>

        <div class="bottom_banner">
            @yield('bottom_banner')
        </div>
    </body>
</html>