<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
//use App\Model\Comment;
//use App\Model\Photo;
//use App\Model\Address;

class Good extends Model
{
    //
    protected $fillable =['name','shop_description','description','icon'];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'goods_id');
    }

    public function addcomment($text)
    {
        $this->comments()->create(['text'=>$text]);
    }


    public function photos()
    {
        return $this->belongsToMany(Photo::class,'good_photo','Good_id','Photos_id');
        //ключи для промежуточной таблицы
        //сохранение такое же как для комментариев


    }

    public function addresses()
    {
        return $this->hasMany(Address::class, 'goods_id');
    }

    public function addaddress($add)
    {
        $this->addresses()->create(['address'=>$add]);
    }

    public function orders()
    {
        return $this->hasMany('App\Model\Order','good_id');
    }

    public function addorder($email)
    {
        $this->orders()->create(['email'=>$email]);
    }

}
