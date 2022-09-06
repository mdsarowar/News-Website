<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\News;
use Illuminate\Support\Facades\Schema;
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
    public function boot()
    {
        View::composer('frontend.includes.navbar',function($view){
            $view->with('newscategorys',Category::where('status',1)->take(10)->get());
        });

        View::composer('frontend.includes.navbar',function($view){
            $view->with('newscategorys1',Category::where('status',1)->take(5)->skip(10)->get());
        });
        View::composer('frontend.master',function($view){
            $view->with('logo',Logo::take(1)->latest()->first());
        });
        View::composer('frontend.includes.footer',function($view){
            $view->with('footer',Footer::take(1)->latest()->first());
        });

        View::composer('frontend.includes.right-side-bar',function($view){
            $view->with('newses',News::where('status',1)->take(5)->get());
        });
    }
}
