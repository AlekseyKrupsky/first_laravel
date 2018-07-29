<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Menu;

class TestProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $links = Menu::getLinks();
        view()->composer('admin.layouts.menu',function ($view) use($links) {
            $view->with('links', $links);

        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
       // App::bind('App')
    }
}
