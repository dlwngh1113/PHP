@extends('board.index')

@section('content')

    <form method="POST" action="{{ route('post.store') }}">
        @csrf
        <input type="text" name="title">
        @error('title')

        @enderror
    </form>
@endsection
