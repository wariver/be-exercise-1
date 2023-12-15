<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        // Using a closure
        View::composer('layouts.website', function ($view) {
            $categories = Category::all();
            $popular_posts = Post::orderBy('views_count', 'desc')->get()->take(4);
            $view->with('categories', $categories)->with('popular_posts', $popular_posts);
        });
    }
}
