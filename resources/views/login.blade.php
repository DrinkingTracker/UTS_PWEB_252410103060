@extends('layouts.app')
@section('title', 'Login')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')
<form class="Credential-panel" method="GET" action="/dashboard">
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
            <input type="password"/>
        </label>
    </div>

    <div class="LoginForm-actions">
        <button class="LoginForm-button" type="submit">Login</button>
    </div>
</form>
@endsection
