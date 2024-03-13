
@extends('layout.app')

@section('content')

<div class="container mb-4 mt-3">
    <h1>Post Category</h1>
</div>

@foreach ($categories as $category)
<div class="container">
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>

</div>

@endforeach
<div class="container">
    <h5><a href="/blogs">Back</a></h5>
</div>
@endsection

