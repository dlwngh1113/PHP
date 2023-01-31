@extends('welcome')

@section('content')

<div class="container-lb">
    <table class="container-table">
        <th>user_id</th>
        <th>title</th>
        <th>created_at</th>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->user_id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
        @endforeach
    </table>

    {{ $posts->links() }}
</div>

@endsection
