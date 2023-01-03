<!DOCTYPE html>
<html>
    <head>
        <style>
            div.main{
                width:50%;
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
            <form method="POST" action="/user">
                <input type="text" id="ID" aria-valuetext="ID">
                <input type="password" id="password" aria-valuetext="password">
                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>