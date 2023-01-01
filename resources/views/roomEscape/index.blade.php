<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
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
    </body>
</html>