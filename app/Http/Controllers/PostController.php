<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        // $posts = Post::all();
        //$posts = Auth::user()->posts;
        $posts = Auth::user()->posts()->paginate(1);
        return view('Posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255'
        ]);
        Post::create($request->all());
        return redirect()->route('posts.index')->with('status','Post Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post){
        if(Auth::id() != $post->user_id){
            abort(403);
        }
        return view('Posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('Posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255'
        ]);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('status','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('status','Post Deleted Successfully');  
    }

   }
