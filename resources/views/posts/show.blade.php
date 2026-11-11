
@extends('partials.layout')

@section('content')
<div class="container mx-auto">
    <a href="{{ url()->previous() }}" class="btn btn-primary mb-4">Back</a>

    <div class="card bg-base-300 shadow-sm p-5">

        @php
            $images = $post->images;
        @endphp

        @if ($images->count() > 0)
            <div class="relative w-full max-w-2xl mx-auto mb-5">

                <img
                    id="post-image"
                    src="{{ $images[0]->path }}"
                    alt="{{ $post->title }}"
                    class="w-full h-96 object-contain rounded-lg"
                >

                @if ($images->count() > 1)
                    <button
                        type="button"
                        onclick="changeImage(-1)"
                        class="btn btn-circle absolute left-2 top-1/2 -translate-y-1/2">
                        ❮
                    </button>

                    <button
                        type="button"
                        onclick="changeImage(1)"
                        class="btn btn-circle absolute right-2 top-1/2 -translate-y-1/2">
                        ❯
                    </button>

                    <p class="text-center mt-2">
                        <span id="image-counter">1</span> / {{ $images->count() }}
                    </p>
                @endif

            </div>
        @endif

        <h1 class="text-2xl font-bold">{{ $post->title }}</h1>

        <p class="my-4">{{ $post->body }}</p>

        <p>Created: {{ $post->created_at }}</p>
        <p>Updated: {{ $post->updated_at }}</p>

    </div>
</div>

@if ($images->count() > 1)
<script>
    const images = @json($images->pluck('path')->values());
    let currentImage = 0;

    function changeImage(direction) {
        currentImage = (currentImage + direction + images.length) % images.length;

        document.getElementById('post-image').src = images[currentImage];
        document.getElementById('image-counter').textContent = currentImage + 1;
    }
</script>
@endif

@endsection
