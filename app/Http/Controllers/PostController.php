<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::latest();
        if (request('urutan')) {
            $post = Post::orderBy('id', request('urutan'));
        }

        return view('posts', [
            'title' => 'Postingan',
            'active' => 'posts',
            'categories' => Category::all(),
            'posts' => $post->filter(request(['search', 'kategori']))->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('singlePost', [
            'title' =>  "$post->title - IDK Team",
            'active' => 'single',
            'posts' => $post,
            // 'related' => $post->category,
            'postRealted' => Post::all()
        ]);
    }
}
