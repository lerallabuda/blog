@extends('partials.layout')

@section('content')
    <div class="container mx-auto w-2/3 flex flex-col gap-4">
        @include('partials.post-card')

        {{-- Comment form: only for logged in users --}}
        @auth
            <form action="{{ route('comments.store', $post) }}" method="POST" class="card bg-base-300 shadow-sm p-3">
                @csrf
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Add a comment</legend>
                    <textarea name="body" class="textarea h-24 w-full @error('body') textarea-error @enderror"
                        placeholder="Write a comment">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>
                <button class="btn btn-primary">Comment</button>
            </form>
        @endauth

        {{-- Comments --}}
        <h3 class="text-xl font-bold">Comments ({{ $post->comments->count() }})</h3>
        @foreach ($post->comments as $comment)
            <div class="card bg-base-300 shadow-sm">
                <div class="card-body">
                    <p>{{ $comment->body }}</p>
                    <div class="text-base-content/70">
                        <a href="{{ route('user', ['user' => $comment->user->id]) }}" class="btn btn-link">{{ $comment->user->name }}</a>
                        <span title="{{ $comment->created_at }}">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection