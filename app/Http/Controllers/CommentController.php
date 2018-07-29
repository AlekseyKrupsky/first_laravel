<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Good;
use App\Http\Requests;

class CommentController extends Controller
{
    //
    public function store(Request $request,$id)
    {
        $this->validate($request,['text'=>'required']);
        $item = Good::find($id)->addcomment($request->text);




        return back();
    }
}
