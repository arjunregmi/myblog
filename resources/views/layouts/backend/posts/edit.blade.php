@extends('layouts.admin')


@section('title',  'Edit Blog Post')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">{{  'Create Blog Post' }}</h2>

    <form action="{{  route('admin.posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Title Input -->
        <div class="mb-3">
            <label for="post_title" class="form-label">Post Title</label>
            <input type="text" class="form-control" id="post_title" name="post_title" 
                value="{{ old('title', $post->post_title) }}" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" 
            value="{{ old('author', $post->author) }}" required>
        </div>

        <!-- content Input -->
        <div class="mb-3">
            <label for="content" class="form-label">Post Content</label>
            <textarea class="form-control" id="content" name="post_content" rows="4" required>{{ old('content', $post->post_content) }}</textarea>
        </div>

      
        <!-- Submit Button -->
        <button type="submit" class="btn btn-danger">{{ 'Update Post' }}</button>
    </form>
</div>
@endsection
