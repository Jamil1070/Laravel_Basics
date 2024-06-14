@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary">Advertentie 1</h5>
                    <p class="card-text">Dit is een beschrijvende zin voor advertentie 1.</p>
                    <a href="{{ route('item.detail', ['id' => 1]) }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary">Advertentie 2</h5>
                    <p class="card-text">Dit is een beschrijvende zin voor advertentie 2.</p>
                    <a href="{{ route('item.detail', ['id' => 2]) }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary">Advertentie 3</h5>
                    <p class="card-text">Dit is een beschrijvende zin voor advertentie 3.</p>
                    <a href="{{ route('item.detail', ['id' => 3]) }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
    </div>
@endsection
