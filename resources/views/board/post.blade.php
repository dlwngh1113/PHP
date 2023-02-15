@extends('layouts.master')

@section('content')
    <div style="text-align: center">
        <span>{{ $post->title }}</span>
        <span>{{ $post->created_at }}</span>
    </div>
    <div class="container-lb" style="text-align: center">
        <p>{{ $post->content }}</p>
    </div>
@endsection
