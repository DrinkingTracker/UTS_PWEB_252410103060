@extends('layouts.app')

@section('title', 'Pengelolaan')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pengelolaan.css') }}">
@endpush

@section('content')
<div class="Pengelolaan">
    <h1>Pengelolaan</h1>

    <div class="Pengelolaan-list">
        <section class="ReportCard">
            <div class="ReportCard-header">
                <h2>Player Report</h2>
            </div>
            <div class="TableWrap">
                <table class="ReportTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Player ID</th>
                            <th>Cheat Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($PlayerReport as $report)
                            <tr>
                                <td>{{ $report['ID'] }}</td>
                                <td>{{ $report['Player ID'] }}</td>
                                <td>{{ $report['Cheat Type'] }}</td>
                                <td>{{ $report['Description'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <section class="ReportCard">
            <div class="ReportCard-header">
                <h2>Bug Report</h2>
            </div>
            <div class="TableWrap">
                <table class="ReportTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bug Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($BugReport as $report)
                            <tr>
                                <td>{{ $report['ID'] }}</td>
                                <td>{{ $report['Bug name'] }}</td>
                                <td>{{ $report['Description'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
@endsection
