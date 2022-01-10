<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public static function storeU(Request $req)
    {
        $data= $req->input('user');
        $req->session()->flash('user',$data);
        return redirect('store');
    }
}
