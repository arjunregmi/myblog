<?php

// app/Http/Controllers/UserPostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Fetch all posts by admins and authors
        $posts = Post::whereIn('user_id', function($query) {
            $query->select('id')
                  ->from('users')
                  ->whereIn('role', ['admin', 'author']);
        })->paginate(10);

        return view('user.posts.index', compact('posts'));
    }
}

