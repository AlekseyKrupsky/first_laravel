<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends MainController
{
    //
    public function show()
    {

//        dump(collect(\Route::getRoutes())->map(function ($routes){
//            return $routes->uri();
//        }));

        return view('admin.index');
    }
}
