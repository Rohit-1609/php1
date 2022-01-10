<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public static function uploadF(Request $req)
    {
    return $req->file('file')->store('img');
    }
}
