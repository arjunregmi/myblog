<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreateAndUpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $users = Post::get();
        return redirect()->route('admin.users.index')->with([
            'data' => $users,
            'message' => 'Users retrieve successfully!'
        ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateAndUpdatePostRequest $request)
    {
        Post::create($request->all());
        return redirect()->route('admin.users.index')->with('success', 'User created successfully!');
    }

    public function show(Post $user)
    {
        $user = Post::query()->find($user->id);
        return redirect()->route('admin.users.edit', compact('user'));
    }

    public function update(CreateAndUpdatePostRequest $request, Post $user)
    {
        $user->update($request->all());
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully!');
    }
    public function delete(Post $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully!');
    }
}
