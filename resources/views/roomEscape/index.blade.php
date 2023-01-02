<!DOCTYPE html>
<html>
    <head>
    <style>
        div.row{
            width:100%;
        }
        div.left_column{
            width:70%;
            float: left;
            border: 1ch;
        }
        div.right_column{
            width:30%;
            float: right;
            border:1ch;
        }
    </style>
    </head>
    <body>
        <div id="container" role="main">
            <div id="contents" class="left_column">
                <table cellpadding='5' style="align-content: center; border: 1ch">
                    <tr>
                        <th> id </th>
                        <th> name </th>
                        <th> playable_user_cnt </th>
                        <th> play_time </th>
                    </tr>
                    @foreach ($themes as $theme)
                    <form method="post" action="/roomEscape">
                        @csrf
                        <tr>
                            <td> <input type="submit" name="id" value={{ $theme->id }}> </td>
                            <td> {{ $theme->name }} </td>
                            <td> {{ $theme->playable_user_cnt }} </td>
                            <td> {{ $theme->play_time }} min </td>
                        </tr>
                    </form>
                    @endforeach
                </table>

                <div class="row"> {{ $themes->links() }}</div>
            </div>
            <div id="login" class="right_column">
                <form method="POST" action="/roomEscape">
                <input type="text" value="id">
                <input type="password" value="password">
                <button type="submit"> Login</button>
                </form>
            </div>
        </div>

    </body>
</html>