@extends('layouts.app')

@section('content')
<h1>Blog Posts</h1>
<<<<<<< HEAD
 <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
=======
 <a href="" class="btn btn-primary">Create Post</a>
>>>>>>> origin/main
 <ul>
      @foreach($posts as $post)
      <li>
        <a href="{{ route('posts.show', $post->id)}}">{{ $post->title}}</a>
      </li>
      @endforeach
 </ul>
@endsection

