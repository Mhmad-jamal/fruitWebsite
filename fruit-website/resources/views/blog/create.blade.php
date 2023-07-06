@extends('layouts.app')

@section('content')
    <h1>Create Blog Post</h1>

    <form action="{{ route('blog.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label for="short_description">Short Description</label>
            <textarea name="short_description" id="short_description" required>{{ old('short_description') }}</textarea>
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required>{{ old('content') }}</textarea>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" required>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
