@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
@endsection
