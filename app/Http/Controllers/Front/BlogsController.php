<?php

namespace App\Http\Controllers\Front;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogs()
    {
        //checking if there is a search query for blogs
        $search = request()->query('search');
        if($search){
            $blogs = Blog::where('title','LIKE', "%{$search}%")
            ->orWhere('body','LIKE', "%{$search}%")
            ->simplePaginate(5);
        }
        else{
            $blogs = Blog::simplePaginate(5);
        }
            
        $categories = Category::all();
        return view('front.blogs')
        ->with('blogs', $blogs)
        ->with('mainThreeBlogs', Blog::all()->random(3))
        ->with('categories', $categories)
        ->with('recentBlogs', Blog::orderBy('created_at', 'desc')->take(3)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        //$blog = Blog::findOrFail($slug);
        $blog = Blog::where('slug', $slug)->first();
        return view('front.singleblog')->with('blog', $blog)
               ->with('categories', Category::all())
               ->with('featuredBlogs', Blog::all()->random(2))
               ->with('recentBlogs', Blog::orderBy('created_at', 'desc')->take(3)->get());
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
