@extends('layout')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('store_productt') }}" method="POST">
        {{-- <form action="/product/store" method="POST"> --}}
        @csrf
        <div>
            <div class="form-floating mb-3">
                <input class="form-control" name="name" id="name" placeholder="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="image" id="image" placeholder="image">
                <label for="image">Image</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="description" id="description" placeholder="description">
                <label for="description">Description</label>
            </div>
            <button type="submit" class="btn btn-success">Create Product</button>
        </div>
    </form>
@endsection
