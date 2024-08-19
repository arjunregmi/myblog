@extends('layouts.admin_layout')

@section('content')
    <div class="container">
        <h1>All Posts</h1>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->status }}</td>
                        <td>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
