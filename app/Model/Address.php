<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Good;

class Address extends Model
{
    //
    protected $fillable = ['address','goods_id'];

    public function goods()
    {
        return $this->belongsTo(Good::class);
    }
}
