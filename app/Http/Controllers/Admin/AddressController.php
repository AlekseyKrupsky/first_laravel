<?php

namespace App\Http\Controllers\Admin;

use App\Model\Address;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Good;

class AddressController extends MainController
{
    //
    public function store(Request $request,$id)
    {
        $good = Good::find($id);
        $good->addaddress($request->address);
        return back();
    }

    public function destroy($id)
    {
        Address::find($id)->delete();
        return back();
    }
}
