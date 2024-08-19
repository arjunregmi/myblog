<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Post;
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
        //dd(auth()->user()->role?->name);
        $posts = Auth::user()->posts()->paginate(5);
        return view('Author.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('Author.create');
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
        return redirect()->route('author.index')->with('status','Post Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post){
        if(Auth::id() != $post->user_id){
            abort(403);
        }
        return view('Author.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('Author.edit',compact('post'));
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
        return redirect()->route('author.index')->with('status','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('author.index')->with('status','Post Deleted Successfully');  
    }
}
