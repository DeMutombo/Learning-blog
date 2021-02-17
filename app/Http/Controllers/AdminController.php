<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $post = Post::all();
        return view('admin.index', ['posts' => $post]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $posts = new Post();
        $posts->title = request('title');
        $posts->body = request('body');
        $posts->slug = request('exert');

        // if ($request->hasFile('post_image')) {
        //     $name = $request->file('post_image')->getClientOriginalName();
        //     $path = $request->file('post_image')->store('public/images');
        //     $posts->post_image = $name;
        // }

        if ($request->hasFile('post_image')) {
            $filename = $request->file('post_image')->getClientOriginalName();
            $request->file('post_image')->move(public_path('images'), $filename);
            $posts->post_image = $filename;
        }

        $user->posts()->save($posts);

        return redirect('/');
    }
}
