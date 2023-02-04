@extends('welcome')

@section('main')

<table class="container-table">
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

<button><a href="{{ route('freeboard.store') }}"></a></button>

@endsection
