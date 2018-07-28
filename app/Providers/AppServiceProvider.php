<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
          // $collection = collect([['name'=>'orders','link'=>''],['name'=>'goods','link'=>'admin/goods']]);

//            view()->composer('admin.layouts.menu',function ($view) use($collection){
//            $view->with('collection',$collection->all());
//        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
