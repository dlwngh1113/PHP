<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <table cellpadding='5' style="align-content: center; border: 1ch">
            <tr>
                <th> name </th>
                <th> playable_user_cnt </th>
                <th> play_time </th>
            </tr>
            @foreach ($themes as $theme)
            <tr><td> <a href="./@name"> {{ $theme->name }} </a> </td> <td> {{ $theme->playable_user_cnt }} </td> <td> {{ $theme->play_time }} min </td></tr>
            @endforeach
        </table>
    </body>
</html>