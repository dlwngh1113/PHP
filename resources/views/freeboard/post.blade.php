@extends('welcome')

@section('content')

<p>{{ $post->title }}</p>

<p>{{ $post->content }}</p>

@endsection
