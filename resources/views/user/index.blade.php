<!DOCTYPE html>
<html>
    <table>
        @foreach ($users as $user)
            <tr><td>{{ $user->name }}</td></tr>
        @endforeach
</table>

{{ $users->links() }}
    </html>