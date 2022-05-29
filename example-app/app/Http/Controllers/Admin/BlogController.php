<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $title = "Kelola Blog";
        
        $gian = Post::get();
        return view('admin.blog.index', compact('title', 'gian'));
    }

    public function create()
    {
        $title = "Tambah Blog";
        $kategori = Category::get();
        return view('admin.blog.create', compact('title', 'kategori'));
    }

    public function simpan(Request $request)
    {
        Post::create([
            'category_id' => $request->category_id,
            'user_id' => 1,
            'title' => $request->judul,
            'slug' => 'blog-1',
            'excerpt' => 'blog-1',
            'body' => $request->content
        ]);
        
        return redirect()->route('admin.blog.index');
    }
    
    public function edit($id)
    {
        $title = "Edit Blog";
        $kategori = Category::get();
        $blog = Post::where('id', $id)->first();
        
        if(!$blog) {
            return redirect()->route('admin.blog.index');
        }
        
        return view('admin.blog.edit', compact('title', 'blog', 'kategori'));
    }
    
    public function update(Request $request, $id)
    {
        Post::where('id', $id)->update([
            'title' => $request->judul,
            'category_id' => $request->category_id,
            'body' => $request->content
        ]);
        return redirect()->route('admin.blog.index');
    }
    
    public function hapus($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->route('admin.blog.index');
    }
}
