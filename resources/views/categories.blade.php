@extends('layouts/main')

@section('container')
    <div class="container my-5">
        <h1 class="mb-4">Post Categories</h1>

        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4 mb-4">
                    <a href="/categories/{{ $category->slug }}" class="text-decoration-none text-dark">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $category->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
