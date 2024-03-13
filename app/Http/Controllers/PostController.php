<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view('v-blog', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}