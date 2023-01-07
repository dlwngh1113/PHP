<!DOCTYPE html>
<html>
    <head>
        @section('style')
        {{ asset('app.css') }}
        @endsection
    </head>

    <body>
        <div class="top_banner">
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