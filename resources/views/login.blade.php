@extends('layouts.app')
@section('title', 'Login')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')
<div class = "Credential-panel">
    <div class = "LoginForm-grid">
    <label class="LoginForm-field">
            <span>Email</span>
            <input type="text"/>
        </label>
        <label class="LoginForm-field">
            <span>Password</span>
            <input type="password"/>
        </label>
    </div> 
</div>
@endsection
