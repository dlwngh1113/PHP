<!DOCTYPE html>
<html>
    <head>
        <style>
            div.banner{
                width:100%;
                text-align: center;
                align-content: center;
                font-size: 300%;
            }
            div.main{
                width:100%;
                text-align: center;
                align-content: center;
            }
        </style>
    </head>
    <body>
        <div class="banner"> This is Banner</div>
        <div class="main">
            <form method="post" action="/user">
                @csrf
                <div><label>ID <input type="text" name="id"></label></div>
                <div><label>password <input type="password" name="password"></label></div>
                <p><input type="submit" name="Login" value="Login"></p>
            </form>
        </div>
    </body>
</html>