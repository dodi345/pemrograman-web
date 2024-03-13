
@extends('layout.app')

@section('content')
<div class="container">
<article>
    <h2 class="mt-4">{{ $post->title }}</h2>

    <p>By, Dodi Sopandi in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>

<a href="/categories">Back</a>
</div>

@endsection

