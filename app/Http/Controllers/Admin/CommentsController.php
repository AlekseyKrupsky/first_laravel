<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Comment;
use App\Model\Good;

class CommentsController extends MainController
{
    //

    public function store(Request $request, $id)
    {
//          Comment::create([
//              'text'=>$request->text,
//              'goods_id'=>$id
//          ]);
            //////OR////////
            $this->validate($request,['text'=>'required']);
            $item = Good::find($id)->addcomment($request->text);



            $user = \Auth::user();

        \Mail::send('emails.send', ['title' => 'title', 'message' => 'message','text'=>$request->text], function ($message) use ($user)
        {
            $message->from('no-reply@scotch.io');
            $message->to($user->email);
        });

          //  \Mail::to($user)->send(new SendComment($user));

            return back();
    }

    public function destroy($id)
    {
        Comment::find($id)->delete();
        return back();
    }
}
