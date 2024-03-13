
@extends('layout.app')

@section('content')
<div class="container">
    <h1>Halaman Blog Post</h1>
    <h5><a href="/categories" class="text-decoration-none">Category</a></h5>
</div>

@foreach ($posts as $post)
<div class="container">
    <article class="mb-4 mt-3 border-bottom pb-4">
        <h2><a href="/blogs/{{ $post->slug }} " class="text-decoration-none">{{ $post->title }}</a></h2>

        <p>By, Dodi Sopandi in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {{-- <h4>By: {{ $post["author"] }}</h4> --}}
        <p>{{ $post->excerpt }}</p>
        <a href="/blogs/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
    </article>
</div>

@endforeach
@endsection

