<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
      function index(Request $req)
    {
        return "Some code";
    }


    function uploadFile(Request $req)
    {
    //  return $req->file('xyz')->store('apiDocs');
       $result= $req->file('xyz1')->store('apiDocs');
       return ['result'=>$result];
    }
}
