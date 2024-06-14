@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h2>Details van zoekertje {{ $id }}</h2>
        <p><strong>Naam:</strong> {{ $data['Naam'] }}</p>
        <p><strong>Beschrijving:</strong> {{ $data['Beschrijving'] }}</p>
    </div>
@endsection
