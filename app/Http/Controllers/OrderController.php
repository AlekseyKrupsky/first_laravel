<?php

namespace App\Http\Controllers;
use \App\Model\Good;

use Illuminate\Http\Request;
use App\Model\Order;
use App\Http\Requests;

class OrderController extends Controller
{
    //
    public function order($id)
    {

        $user = \Auth::user();
        if($user) return view('order',['good'=>Good::find($id),'email'=>$user->email]);
        else return view('order',['good'=>Good::find($id),'email'=>'']);
    }

    public function newOrder(Request $request,$id)
    {
        $this->validate($request,['email'=>'required']);

        Good::find($id)->addorder($request->email);
        \Mail::send('emails.order', ['title' => 'Вы совершили заказ',
            'message' => 'message',
            'name'=>Good::find($id)->name],
            function ($message) use ($request)
        {
            $message->from('shop@laravel.io');
            $message->to($request->email);
        });

        return redirect()->route('good',$id);
    }
}
