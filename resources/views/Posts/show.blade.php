{{-- @extends('layouts.app')

@section('content')
<h1>Blog Posts Details</h1>
<a href="{{ url()->previous()}}">Back</a>
 <ul>
     
      <li>ID: {{ $post->id}}</li>
      <li>Title: {{ $post->title}}</li>
      <li>Content: {{ $post->content}}</li>
     
 </ul>
@endsection
 --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Blog Post Details
                            <a href="{{ route('posts.index') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>ID:</label> <span>{{ $post->id }}</span>

                        </div>

                        <div class="mb-3">
                            <label>Title:</label> <span>{{ $post->title }}</span>
                        </div>
                        <div class="mb-3">
                            <label>Content:</label> <span>{{ $post->content }}</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
