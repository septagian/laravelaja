<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class AboutController extends Controller
{
    public function index()
    {
        $title = "About";
        return view('admin.about.index', compact('title'));
    }
}
