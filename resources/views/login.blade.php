@extends('welcome')

@section('content')

@if ($message = Session::get('succeess'))
    <div class="alert alert-info">
        {{ $message }}
    </div>
@endif

@endsection
