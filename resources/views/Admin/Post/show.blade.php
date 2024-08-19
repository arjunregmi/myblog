@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>Status: {{ $post->status }}</p>
        <div>
            <h3>Content</h3>
            <p>{{ $post->content }}</p>
        </div>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back to Posts</a>
    </div>
@endsection
