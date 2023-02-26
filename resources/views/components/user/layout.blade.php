<!DOCTYPE html>
<html>
    <head>
        <title>{{ $title ?? 'User' }}</title>
        <style>
            .container-login{
                float:left;
                width: 100%;
                display: grid;
                place-items: center;
            }
            .input-control{
                font-size: 140%;
            }
        </style>
    </head>
    <body>
        <x-header/>

        @error('message')
            <x-popup type="info" message="{{ $message }}"/>
        @enderror

        <div class="container-login">
            {{ $slot }}
        </div>
    </body>
</html>
