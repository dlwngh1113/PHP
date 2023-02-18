@extends('layouts.master')

@section('content')

    <form method="POST" action="{{ route('post.store') }}">
        @csrf
        <input type="text" name="title" placeholder="title">
        @error('title')
            <p class="error">{{ $errors->first('title') }}</p>
        @enderror
        <input type="text" name="content" placeholder="content" size="10vh">
        @error('content')
            <p class="error">{{ $errors->first('content') }}</p>
        @enderror
        <button type="submit">Put up</button>
    </form>
@endsection
