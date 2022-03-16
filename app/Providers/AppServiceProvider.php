<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
 
    public function boot() {
        try {
            $categories= Category::all();
            View::share('categories', $categories);
            $tags = Tag::all();
            View::share('tags', $tags);
           
        } catch (\Throwable $th) {
        dump("ALERT: Recuerda lanzar las migrations cuando acabes el clone");
        }
            Paginator::useBootstrap();
    }
}
