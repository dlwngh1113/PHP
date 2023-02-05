@extends('layouts.master')

@section('content')
    <div class="container-lb">
        <form method="POST" action="{{ route('verification.email') }}">
            @csrf
            <button type="submit" onclick="{{ route('verification.email') }}">Send Email Verification</button>
        </form>
    </div>
@endsection
