<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Device;
use App\Models\Product;


class ProductController extends Controller
{
    //
      function index()
    {
        return "Welcome to product page";
    }

    function list()
    {
    //  return DB::table('devices')->get();
   // return DB::connection('mysql2')->table('products')->get();
    return Product::all();
  }



}
