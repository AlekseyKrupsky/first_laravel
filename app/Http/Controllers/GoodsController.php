<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Good;

class GoodsController extends Controller
{
    //
    public function index()
    {
//        $goods = DB::table('Goods')->where('id','>=',2)->get();
//        dump($goods);

       // dump(Good::find(1));
       // $test =  Good::getItem();

       // dump($test);
       // return $goods;


        //add new

//        $new = new Good();
//        $new->name = 'Mobile phone';
//        $new->shop_description = 'Iphone 7';
//        $new->description= 'Iphone 7 64g';
//        $new->save();



//        dump(Good::where('name','Mobile phone'));
//        dump(Good::where('name','Mobile phone')->get());
//
//        // dump($new->getOneItem());
//
//        dump(Good::all());
        $goods=Good::all();
        $title='Hello World';
            return view('goods.index',['goods'=>$goods,'title'=>$title]);
    }

    public function show($id)
    {
        echo $id;
        dump(DB::table('Goods')->where('id',$id)->get());
    }


    public function create()
    {
        return view('goods.create');
    }


    public function store(Request $request)
    {
        dump($request->all());
        dump($request->icon);


        $this->validate($request,[
           'name'=>'required',
           'shop_description'=>'required' ,
            'description'=>'required',
            'icon'=>'required'
        ]);
//        $good = new Good();
//        $good->name=$request->name;
//           $good->shop_description=$request->short_desc;
//            $good->description=$request->desc;
//            $good->icon=$request->icon;
//        $good->save();

//        Good::create([
//            'name'=>$request->name,
//            'shop_description'=>$request->shop_description,
//            'description'=>$request->shop_description,
//            'icon'=>$request->icon,
//        ]);
        Good::create($request->all());

       return redirect('/create');
    }
}

