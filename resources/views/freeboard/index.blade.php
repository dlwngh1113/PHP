@extends('welcome')

@section('main')

<table style="text-align: center">
    <th>user_name</th>
    <th>title</th>
    <th>created_at</th>
    @foreach ($posts as $post)
        <tr>
            <td><a href="{{ route('freeboard.show', ['post' => $post->id]) }}">{{ $post->name }}</a></td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->created_at }}</td>
        </tr>
    @endforeach
</table>

{{ $posts->links() }}

<button type="button" onclick="{{ route('freeboard.store') }}">New Post</button>

@endsection
