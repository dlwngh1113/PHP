<!DOCTYPE html>
<html>
    <body>
        <table cellpadding='10' border='1'>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                </tr>
            @endforeach
        </table>
    
        <hr align='center'>{{ $users->links() }}</hr>
    
    </body>
</html>