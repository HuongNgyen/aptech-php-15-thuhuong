<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostCategoryController extends Controller
{
    //
    public function index(){
     $posts = Post::with('category')->get();
    // dd($posts);
    return view('p-c.index', ['posts' => $posts]);
    }
    public function show(Post $id){
        $post = Post::with('category')->find($id->id);
        return view('p-c.show', ['post'=> $post]);
    }
    public function destroy($id){
        Post::destroy($id);
        return redirect()->route('p-c.index');
    }
    public function create(){
        return view('p-c.create');
    }
    public function store(Request $request){
        $post = Post::create(['category_id' => $request-> category_id,'title' => $request-> title, 'description' => $request-> description, 'content' => $request-> content]);
        
        return redirect()->route('p-c.index');
    }
    public function edit($id){
        $post = Post::find($id);
        return view('p-c.edit', ['post' => $post]);
    }
    public function update(Request $request, $id){
        $post = Post::find($id);
        $post-> update([
            'category_id' => $request-> category_id,
            'title' => $request-> title,
             'description' => $request-> description, 
             'content' => $request-> content
        ]);
        
        return redirect()->route('p-c.index');
    }
}
