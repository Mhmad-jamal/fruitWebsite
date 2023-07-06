@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->short_description }}</p>
    <p>{{ $post->content }}</p>
    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} Image">
@endsection
