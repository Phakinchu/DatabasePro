<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // return $posts;
        return view('posts.index', [
          'title' => 'Post',
          'posts' => $posts
        ]);
    }

    public function view($id)
    {
        $post = Post::findOrFail($id);
        return $post;
    }
}
