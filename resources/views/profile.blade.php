@extends('layouts.app')
@section('title', 'Profile')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@section('content')
<div class ="main-namecard">
    <section class = "left">
        <img src="{{ asset('MacMillan_CoD4.webp') }}">
    </section>
    <section class = "right">
    @foreach ($Identity as $identity)
        <ul>    
            <li>{{ $identity }}</li>
        </ul>
    @endforeach
    </section>
</div>
@endsection
