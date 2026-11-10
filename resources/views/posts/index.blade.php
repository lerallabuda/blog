
@extends('partials.layout')

@section('content')
<div class="container mx-auto">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>

    {{ $posts->links() }}

    <table class="table table-zebra">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr class="hover:bg-base-300">
                    <td>{{ $post->id }}</td>

                    <td>
                        @if ($post->image_path && filter_var($post->image_path, FILTER_VALIDATE_URL))
                            <img src="{{ $post->image_path }}"
                                 alt="{{ $post->title }}"
                                 class="w-32 h-24 object-cover rounded">
                        @else
                            <span>No image</span>
                        @endif
                    </td>

                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>

                    <td>
                        <div class="join">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                            <button form="delete-form-{{ $post->id }}"
                                    type="submit"
                                    class="btn btn-error">Delete</button>
                        </div>

                        <form id="delete-form-{{ $post->id }}"
                              action="{{ route('posts.destroy', $post) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
</div>
@endsection
