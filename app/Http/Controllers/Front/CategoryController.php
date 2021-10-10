<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class CategoryController extends Controller
{
   public function NewsBlogs(Category $category){
       return view('categories.category', compact('category'))
       ->with('recentBlogs', Blog::orderBy('created_at', 'desc')->take(3)->get())
       ->with('categories', Category::all());
   }
}
