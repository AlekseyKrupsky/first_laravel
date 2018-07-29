<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;



use App\Http\Requests;
use App\Http\Requests\TestRequest;
use App\Http\Controllers\Controller;
use App\Model\Good;
use App\Model\Comment;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        //
        $goods = Good::all();



        return view('admin.goods.index',['goods'=>$goods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('admin.goods.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestRequest $request)
    {
        //

//        $this->validate($request,[
//            'name'=>'required',
////           'shop_description'=>'required' ,
////           'description'=>'required',
////           'icon'=>'required'
//        ]);
        Good::create($request->all());
        return redirect('/admin/goods');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Good $good)
    {
        //
       // $good = Good::find($id);

       // dump($good->comments);
      //  dump(Comment::find(1)->goods);
        //dump($good->photos);

      // dump($good->addresses);

        return view('admin.goods.each',['good'=>$good]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Good $good)
    {
        //

      //  $good = Good::find($id);

        return view('admin.goods.change',['good'=>$good]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Good::find($id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Good::find($id)->delete();
        return back();
    }
}
