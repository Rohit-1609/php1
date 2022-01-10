<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstApi extends Controller
{
    //
      function index(Request $req)
    {
        return "Some code";
    }

    function getDataFromApi()
    {
       return ["name"=>"Rohit",
       "email"=>"rohit123@gmail.com",
       "address"=>"Nagpur"];
    }
}
