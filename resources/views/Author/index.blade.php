@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @session('status')
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endsession
                <div class="card">
                    <div class="card-header">
                        <h4>My Blog Post
                            <a href="{{ route('posts.create') }}" class="btn btn-primary float-end">Create New Post</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('posts.show', $post->id) }}"class="btn btn-info">Show</a>

                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
