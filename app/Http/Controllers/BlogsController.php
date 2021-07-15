<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use App\Models\User;

class BlogsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
             'blog_image' => 'required|image|max:3000'
        ]);
        //
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
     
         $image = $request->file('blog_image');
         $imageName = time().'.'.$image->extension();
         $image->move(public_path('images'), $imageName);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::of($blog->title)->slug('-');
        $blog->body = $request->body;
         $blog->blog_image = $imageName;
        $user->blogs()->save($blog);
        return redirect('/')->with('success', 'Blog added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
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
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
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
        $this->validate($request,[
        'title'=>'required',
        'body' => 'required'
        ]);

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $imageName = '';
        if($request->hasFile('blog_image')){
        $image = $request->file('blog_image');
         $imageName = time().'.'.$image->extension();
         $image->move(public_path('images'), $imageName);
        }
        
        $blog = Blog::findOrFail($id);
        if($user_id === $blog->user_id){
       $blog->title = $request->title;
       $blog->slug = Str::of($blog->title)->slug('-');
       $blog->body = $request->body;
       if($request->hasFile('blog_image')){
        $blog->blog_image = $imageName;
       }
       $user->blogs()->save($blog);
       return redirect('/blogs'.'/'.$blog->id)->with('success', 'Post updated successfully');
    }
    else{
        return redirect('/blogs'.'/'.$blog->id)->with('error', 'You have no right to make changes to this blog');
    }
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
        $user_id = auth()->user()->id;
        $blog = Blog::findOrFail($id);
        if($user_id === $blog->user_id){
        $blog->delete();
        return redirect('/')->with('success', 'Blog deleted successfully');
    }
        else{
            return redirect('/blogs'.'/'.$blog->id)->with('error', 'You have no right to make changes to this blog');
        }
    }

    public function myBlogs(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $myBlogs = $user->blogs;
        //return $blogs;
        return view('blogs.myBlogs', compact('myBlogs'));


    }
    public function userBlogs($id){
      $user = User::find($id);
      $username = $user->name;
      $user_blogs = $user->blogs;
      return view('blogs.userblogs',compact('user_blogs', 'username'));
    }
   
}
