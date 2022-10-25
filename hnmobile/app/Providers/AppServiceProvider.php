<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helper\CartHelper;
use App\Models\categories;
use Illuminate\Support\Facades\View;
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
        $categoies =categories::with('children')->limit(8)->get();
        View::share('categoies',$categoies);

    }
}
