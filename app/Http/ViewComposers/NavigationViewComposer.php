<?php
namespace App\Http\ViewComposers;

use App\Models\Blog;
use App\Models\User;

class NavigationViewComposer
{
    public function compose($view)
    {
        $view->with('myBlogs', User::find(auth()->user()->id)->blogs);
    }
}