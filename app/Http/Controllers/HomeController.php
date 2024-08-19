<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        //return view('home');
        if(auth()->user()->role?->name=='admin'){
            return view('Admin.Post.index');

        }
        elseif(auth()->user()->role?->name=='author'){
            return view('Author.index');

        }
        else{
            return view('User.Posts.index');


        }
    }
}
