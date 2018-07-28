<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{

    protected $fillable =['name','shop_description','description','icon'];
    //
    public static function getItem()
    {
       // return true;
        return static::find(1);
    }

    public function getOneItem()
    {
        return $this;
    }




}
