
@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <article>
                <h2 class="mt-4">{{ $post->title }}</h2>

                <p>By, <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                {!! $post->body !!}
            </article>

            <a href="/blogs" class="d-block mt-3">Back</a>
        </div>
    </div>
</div>

@endsection

