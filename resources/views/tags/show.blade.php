@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        <a href="{{ route('tags.index') }}" class="btn btn-primary">Back</a>
        <div class="card bg-base-300 shadow-sm">
            <table class="table table-zebra">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $tag->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $tag->name }}</td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td>{{ $tag->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Updated</th>
                        <td>{{ $tag->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="text-xl font-bold mt-4">Posts with this tag ({{ $tag->posts->count() }})</h3>
        <table class="table table-zebra">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Created</th>
            </thead>
            <tbody>
                @forelse ($tag->posts as $post)
                    <tr class="hover:bg-base-300">
                        <td>{{ $post->id }}</td>
                        <td><a href="{{ route('post', $post) }}" class="link">{{ $post->title }}</a></td>
                        <td>{{ $post->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No posts with this tag.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection