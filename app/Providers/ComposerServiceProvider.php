<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\View;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer(
            'layouts.adminlte', 'App\Http\ViewComposers\NavigationViewComposer'
        );

        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        // $myBlogs = $user->blogs;
        View::composer('layouts.adminlte', function($view){
            //$view->with('myBlogs', User::find(auth()->user()->id)->blogs);
        });
    }
}
