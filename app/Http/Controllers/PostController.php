<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index()
    {
        //get post
        $posts = Post::latest()->paginate(5);
        //render view with post
        return view('posts.index', compact('posts'));
    }
}
