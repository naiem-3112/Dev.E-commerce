<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Currency;
use App\Language;

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
        $categories = Category::where('status', 1)->orderBy('position_id', 'DESC')->get();
        view()->share('categories', $categories);

        $currencies = Currency::all();
        view()->share('currencies', $currencies);

        $languages = Language::all();
        view()->share('languages', $languages);

        
    }
}
