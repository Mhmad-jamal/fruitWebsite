@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>
    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->short_description }}</p>
            <a href="{{ route('blog.posts.show', $post->id) }}">Read More</a>
        </div>
    @endforeach
@endsection
