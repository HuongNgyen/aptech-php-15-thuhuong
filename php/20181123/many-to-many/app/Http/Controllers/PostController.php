<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    // 
    public function index(){
        $post = Post::with('categories')->orderBy('title')->get();
        // dd($post);
        return view('posts.index', ['posts' => $post]);
    }
}
