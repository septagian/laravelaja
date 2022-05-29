<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class postscontroller extends Controller
{
    public function index()
    {
        $posts = Post::paginate();
        $title = "Posts";
        return view('posts', compact('posts', 'title'));
    }
    
    public function show($id)
    {
        $post = Post::where('id', $id)->first();
        if(!$post) {
            return redirect()->route('posts');
        }

        $title = "Posts";
        return view('post', compact('post', 'title'));
    }

}
