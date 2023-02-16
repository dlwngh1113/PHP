@extends('welcome')

@section('main')

<table style="text-align: center">
    <th>user_name</th>
    <th>title</th>
    <th>created_at</th>
    @foreach ($posts as $post)
        <tr>
            <td><a href="{{ route('board.show', ['post' => $post->id]) }}">{{ $post->name }}</a></td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->created_at }}</td>
        </tr>
    @endforeach
</table>

{{ $posts->links() }}

<button type="button" onclick="{{ route('board.store') }}">New Post</button>

@endsection
