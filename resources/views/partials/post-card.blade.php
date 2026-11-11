
<div class="card bg-base-300 shadow-sm">

    @php
        $imageCount = $post->images->count();
    @endphp

    @if ($imageCount === 1)
        <figure>
            <img
                src="{{ $post->images->first()->path }}"
                alt="{{ $post->title }}"
                class="w-full h-64 object-cover"
            />
        </figure>

    @elseif ($imageCount > 1)
        <div class="carousel w-full rounded-box group scroll-smooth">

            @foreach ($post->images as $image)
                <div
                    id="post-{{ $post->id }}-slide-{{ $loop->iteration }}"
                    class="carousel-item relative w-full"
                >
                    <img
                        src="{{ $image->path }}"
                        alt="{{ $post->title }}"
                        class="w-full h-64 object-cover"
                    />

                    <div class="absolute flex justify-between left-3 right-3 top-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">

                        <button
                            type="button"
                            onclick="document.getElementById('post-{{ $post->id }}-slide-{{ $loop->iteration === 1 ? $imageCount : $loop->iteration - 1 }}').scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' })"
                            class="btn btn-circle"
                        >
                            ❮
                        </button>

                        <button
                            type="button"
                            onclick="document.getElementById('post-{{ $post->id }}-slide-{{ $loop->iteration === $imageCount ? 1 : $loop->iteration + 1 }}').scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' })"
                            class="btn btn-circle"
                        >
                            ❯
                        </button>

                    </div>
                </div>
            @endforeach

        </div>
    @endif

    <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>

        @isset($posts)
            <p>{{ $post->snippet }}</p>
        @else
            <p>{!! $post->displayBody !!}</p>
        @endisset

        <span class="text-base-content/70">{{ $post->user->name }}</span>
        <span class="text-base-content/70">{{ $post->created_at->diffForHumans() }}</span>

        <div class="card-actions justify-end">
            @isset($posts)
                <a href="{{ route('post', $post) }}" class="btn btn-primary">
                    @lang('Read more')
                </a>
            @endisset
        </div>
    </div>
</div>
