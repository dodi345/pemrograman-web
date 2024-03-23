
@extends('layout.app')

@section('content')

<div class="container mb-4 mt-3">
    <h1>Post Category</h1>
</div>

<div class="container">
    <div class="row">

        @foreach ($categories as $category )
        <div class="col-md-4">
            <a href="/categories/{{ $category->slug }}">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}"">
                    <div class="card-img-overlay d-flex justify-content-center">
                        <h5 class="card-title align-self-center">{{ $category->name }}</h5>
                    </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection

