{{-- resources/views/user/posts/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Posts</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at->format('d-m-Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No posts available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $posts->links() }}
    </div>
@endsection
