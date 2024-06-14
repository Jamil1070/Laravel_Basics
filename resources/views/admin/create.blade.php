@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h2>{{ isset($id) ? 'Edit Item' : 'Create Item' }}</h2>
        <form method="POST" action="{{ isset($id) ? route('admin.edit.post', ['id' => $id]) : route('admin.create.post') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" placeholder="Enter content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($id) ? 'Edit Item' : 'Create Item' }}</button>
        </form>
    </di
@endsection
