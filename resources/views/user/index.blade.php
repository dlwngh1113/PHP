<!DOCTYPE html>
<html>
    <head>
        <style>
            div.main{
                width:100%;
                text-align: center;
                align-content: center;
            }
            div.banner{
                width:100%;
                text-align: center;
                align-content: center;
                font-size: 300%;
            }
        </style>
    </head>
    <body>
        <div class="banner"> This is Banner</div>
        <div class="main">
            <form method="post" action="/user">
                @csrf
                <input type="text" name="id" value="id">
                <input type="password" name="password" value="password">
                <input type="submit" name="Login" value="Login">
            </form>
        </div>
    </body>
</html>