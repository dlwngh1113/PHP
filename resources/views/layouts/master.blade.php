<!DOCTYPE html>
<html>
    <head>
        @section('style')
        {{ asset('app.css') }}
        @endsection
    </head>

    <body>
        <div class="banner">
            @yield('banner')
        </div>

        <div class="main" role="main">
            @yield('main')
        </div>
    </body>
</html>