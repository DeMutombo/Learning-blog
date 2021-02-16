<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('admin.index', ['posts' => $post]);
    }

    public function create()
    {
        return view('admin.create');
    }
}
