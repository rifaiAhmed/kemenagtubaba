<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $data = [
            'title'     => 'Posts',
            'posts'     => $posts,
        ];
        return view('frontend.posts.blog', $data);
    }
    public function show(Post $post)
    {

        $data = [
            'title'     => 'Posts',
            'post'      => $post
        ];
        return view('frontend.posts.show', $data);
    }
}
