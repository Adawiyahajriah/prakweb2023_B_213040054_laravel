<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhen('slug', request('category'));
            $title = ' in ' . $category;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by '. $author;
        }
        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            "posts" => Post::lates()->filter(request(['search', 'category', 'author']))
            ->paginate(7)->withQuerString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
        "title" => "Single Post",
        "active" => 'posts',
        "post" => $post
    ]);
    }
}
