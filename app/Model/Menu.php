<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menu';

    public static function getLinks()
    {
        return Menu::all();
    }
    //
}
