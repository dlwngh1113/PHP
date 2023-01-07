<!DOCTYPE html>
<html>
    <head>
        <app class="css"></app>
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