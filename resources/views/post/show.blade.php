@extends('welcome')

@section('main')
<div style="text-align: center">
    <p>{{ $post->title }}</p>
    <p>{{ $post->created_at }}</p>
</div>
<div class="container-lb" style="text-align: center">
    <p>{{ $post->content }}</p>
</div>
@endsection
