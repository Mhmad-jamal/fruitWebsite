@extends('layouts.app')

@section('content')
    <h1>Edit Blog Post</h1>

    <form action="{{ route('blog.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>
        </div>

        <div>
            <label for="short_description">Short Description</label>
            <textarea name="short_description" id="short_description" required>{{ old('short_description', $post->short_description) }}</textarea>
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
