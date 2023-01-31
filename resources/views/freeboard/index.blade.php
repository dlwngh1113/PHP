@extends('welcome')

@section('content')

<ul>
@foreach ($posts as $post)
    <li>
        <p>{{ $post->user_id }} {{ $post->title }} {{ $post->created_at }}</p>
    </li>
@endforeach
</ul>

{{ $posts->links() }}

@endsection
