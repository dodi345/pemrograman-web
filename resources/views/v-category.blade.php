
@extends('layout.app')

@section('content')

<div class="container mb-4 mt-3">
    <h1>Post Category : {{ $category }}</h1>
</div>

@foreach ($posts as $post)
<div class="container">
    <article class="mb-4 mt-3">
        <h2><a href="/blogs/{{ $post->slug }}">{{ $post->title }}</a></h2>
        {{-- <h4>By: {{ $post["author"] }}</h4> --}}
        <p>{{ $post->excerpt }}</p>
    </article>
</div>

@endforeach
<div class="container">
    <h4><a href="/categories">Back</a></h4>
</div>
@endsection

