@extends('layouts.master')

@section('content')
    @if(session('data'))
        <div class="container mt-5">
            <h2>Formuliergegevens</h2>
            <pre>{{ print_r(session('data'), true) }}</pre>
            <hr>
        </div>
    @endif

    <div class="container mt-5">
        <h2>Admin Indexpagina</h2>
        <!-- Rest van de inhoud van de admin-indexpagina -->
    </div>
@endsection
