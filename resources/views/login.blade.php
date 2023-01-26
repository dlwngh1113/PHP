@extends('welcome')

@section('content')

@if ($message = Sesson::get('succeess'))
    <div class="alert alert-info">
        {{ $message }}
    </div>
@endif

@endsection
