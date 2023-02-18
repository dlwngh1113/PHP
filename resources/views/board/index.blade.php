@extends('welcome')

@section('main')

<table style="text-align: center">
    <th>title</th>
    <th>created_at</th>
    @foreach ($posts as $post)
        <tr>
            <td><a href="{{ route('post.show', ['post' => $post->id]) }}">{{ $post->title }}</a></td>
            <td>{{ $post->created_at }}</td>
        </tr>
    @endforeach
</table>

{{ $posts->links() }}

<button type="button" onclick="{{ route('post.store') }}">New Post</button>

@endsection
