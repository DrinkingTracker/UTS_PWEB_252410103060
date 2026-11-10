@extends('layouts.app')
@section('title', 'Login')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')
<form class="Credential-panel" method="POST" action="{{ route('login.submit') }}">
    @csrf
    <div class="LoginForm-heading">
        <h1>Login</h1>
    </div>

    <div class="LoginForm-grid">
        <label class="LoginForm-field">
            <span>Username</span>
            <input type="text" name="username"/> 
        </label>
        <label class="LoginForm-field">
            <span>Password</span>
            <input type="password" name="password"/>
        </label>
    </div>

    @if ($errors -> any())
    <p class="LoginForm-error">{{ $errors -> first() }}</p>
    @endif

    <div class="LoginForm-actions">
        <button class="LoginForm-button" type="submit">Login</button>
    </div>
</form>
@endsection
