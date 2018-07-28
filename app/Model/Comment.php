<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
//use App\Model\Good;


class Comment extends Model
{
    //
    protected $fillable = ['text','goods_id'];


    public function goods()
    {
        return $this->belongsTo(Good::class);
    }
}
