@extends('layouts.app')
@section('title', 'Dashboard')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@section('content')
<div class="Dashboard">
    <h1 class="Dashboard-greeting">Welcome, {{ $username }}</h1>

    <div class="Dashboard-cards">
        @foreach ($menu as $item)
            <div class="MenuCard">
                <h2>{{ $item['title'] }}</h2>
                <p></p>
                <button class="Button-green" type="button" onclick="document.getElementById('{{ $item['modal'] }}').showModal()">Submit Report</button>
            </div>
        @endforeach
    </div>
</div>

<dialog class="Modal" id="modal-player">
    <form method="dialog">
        <h2 class="Modal-title">Player Report</h2>
        <div class="Form-grid">
            <label class="Form-field">
                <span>Player ID</span>
                <input type="text" name="player_id"/>
            </label>
            <label class="Form-field">
                <span>Cheat Type</span>
                <select name="jenis_cheat">
                    @foreach ($CheatType as $type)
                        <option>{{ $type }}</option>
                    @endforeach
                </select>
            </label>
            <label class="Form-field">
                <span>Description</span>
                <input type="text" name="deskripsi"/>
            </label>
        </div>
        <div class="Modal-actions">
            <button class="Button-gray" type="submit">cancel</button>
            <button class="Button-green" type="submit">Submit Report</button>
        </div>
    </form>
</dialog>

<dialog class="Modal" id="modal-bug">
    <form method="dialog">
        <h2 class="Modal-title">Bug Report</h2>
        <div class="Form-grid">
            <label class="Form-field">
                <span>Bug Name</span>
                <input type="text" name="bug_name"/>
            </label>
            <label class="Form-field">
                <span>Description</span>
                <input type="text" name="description"/>
            </label>
        </div>
        <div class="Modal-actions">
            <button class="Button-gray" type="submit">Cancel</button>
            <button class="Button-green" type="submit">Submit Report</button>
        </div>
    </form>
</dialog>
@endsection
