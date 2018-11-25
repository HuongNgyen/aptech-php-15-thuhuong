<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    //
    public function index(){
      
        $categories = Category::with('posts')->get();
        // dd($categories);
       return view('categories.index', ['categories' => $categories]);
        }
    public function demo(){
        $categories = Category::all();
        // dd($categories);
        return view('categories.demo',['categories' => $categories]);
    }
    public function show($id){
        $category = Category::find($id);
        return view('categories.show', ['category'=> $category]);
    }
    public function destroy($id){
        // $category = Category::find($id);
        $category = Category::find($id);
        $category->posts()->delete();
        // $post->save();
        Category::destroy($id);
        // 1 query comment co p_id = $id
        // Comment::where('p_id',$id)->delete();

        return redirect()->route('categories.demo');
    }
    
    public function create(){
        return view('categories.create');
    }
    public function store(Request $request){
        Category::create([
            'name'=>$request->name
        ]);
        return redirect()->route('categories.demo');
    }
    public function edit($id){
        $category = Category::find($id);
        return view('categories.edit',['category' =>$category]);
    }
    public function update(Request $request,$id){
        $category = Category::find($id);

        $category -> update([
            'name' => $request ->name
        ]);
        return redirect()->route('categories.demo', $id);
    }
    
}
