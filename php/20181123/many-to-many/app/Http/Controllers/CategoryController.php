<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        $category = Category::with('posts')->get();
        // dd($category);
        return view('categories.index', ['categories' => $category]);
    }
}
