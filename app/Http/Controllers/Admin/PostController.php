<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
       
        $posts = Post::all();;
        return view('layouts.backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        if (!Auth::check() || !(Auth::user()->isAdmin() || Auth::user()->isAuthor()) ) {
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        return view('layouts.backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check() || !(Auth::user()->isAdmin() || Auth::user()->isAuthor())) {
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        $request->validate([
            'post_title' => 'required|string|max:255',
            'post_content' => 'required',
            'author' => 'required|string|max:255',
           
        ]);

        Post::create([
            'post_title' => $request->post_title,
            'post_content' => $request->post_content,
            'author' => $request->author,
            'user_id' => Auth::id(),
        ]);

       
        return redirect()->route('admin.posts.index')->with('status','Post Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post){
        if(Auth::id() != $post->user_id){
            abort(403);
        }
        return view('layouts.backend.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if (!Auth::check() || !(Auth::user()->isAdmin() || Auth::user()->isAuthor())) {
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        return view('layouts.backend.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if (!Auth::check() || !(Auth::user()->isAdmin() || Auth::user()->isAuthor())) {
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        $request->validate([
            'post_title' => 'required|string|max:255',
            'post_content' => 'required',
            'author' => 'required|string|max:255',
           
        ]);
        $post->update($request->all());
        return redirect()->route('admin.posts.index')->with('status','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (!Auth::check() || !(Auth::user()->isAdmin() || Auth::user()->isAuthor())) {
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        $post->delete();
        return redirect()->route('admin.posts.index')->with('status','Post Deleted Successfully');  
    }

   }
