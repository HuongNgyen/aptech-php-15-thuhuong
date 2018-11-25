<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //category trong with la lay ben model post
    // public function index(){
    // $posts = Post::with('category')->get();
    // // dd($posts);
    // return view('posts.index', ['posts' => $posts]);
    // }
    // public function show(Post $id){
    //     $post = Post::with('category')->find($id->id);
    //     return view('posts.show', ['post'=> $post]);
    // }
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        return view('posts.index', ['posts' => $posts]);
    }
    public function show($id){
        //dd($id); // kiểm tra trạng thái của các biến
        $post = Post::find($id);
        return view('posts.show', ['post'=> $post]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        Post::create([
            'title' => $request -> title,
            'description' => $request-> description,
            'content' => $request -> content,
            'category_id' => $request -> category_id
        ]);
        return redirect()->route('posts.index');
    }
    public function destroy($id){
        
        
        // $post = Post::find($id);
        Post::destroy($id);
        return redirect()->route('posts.index');
    }
    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }
    public function update(Request $request, $id){
        $post = Post::find($id);
       
        $post -> update([
            'title' => $request -> title,
            'description' => $request-> description,
            'content' => $request -> content,
            'category_id' => $request -> category_id
        ]);
        return redirect()->route('posts.show', $id);
    }
}
