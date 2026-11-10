
@extends('partials.layout')

@section('content')
<div class="container mx-auto">
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>

    <div class="card bg-base-300 shadow-sm p-5">

        @if ($post->image_path && filter_var($post->image_path, FILTER_VALIDATE_URL))
            <img src="{{ $post->image_path }}"
                 alt="{{ $post->title }}"
                 class="w-full max-w-2xl rounded-lg mb-5">
        @endif

        <h1 class="text-2xl font-bold">{{ $post->title }}</h1>

        <p class="my-4">{{ $post->body }}</p>

        <p>Created: {{ $post->created_at }}</p>
        <p>Updated: {{ $post->updated_at }}</p>

    </div>
</div>
@endsection
