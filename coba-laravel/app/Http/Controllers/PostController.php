<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));

        // if(request('search')) {
        //     $post->where('title', 'like', '%' . request('search') . '%')
        //     ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' from ' . $author->name;
        }

        return view('posts', [
            "title" => "All Post" . $title,
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]); 
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}