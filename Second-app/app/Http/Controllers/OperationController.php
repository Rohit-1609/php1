<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    //
    public static function operations()
    {

          //  echo DB::table('members')->get();


   // $data= DB::table('members')->where('id', 5)->get();
    //   return view('list1',['data'=>$data]);


    //   return DB::table('members')->find(4);


     //  return DB::table('members')->count();


    // return DB::table('members')->insert(['name' =>'pankaj',
    //   'email'=>'pankaj123@gmail.com','address'=>'solapur'
   // ]);


     // return DB::table('members')->
    //  where('id','9')->
    //  update(['name' =>'pankaj',
    //   'email'=>'pankaj123@gmail.com',
     //  'address'=>'indore'
  // ]);


   //  return DB::table('members')->
   //   where('id','9')->
   //  delete();
   //

        echo DB::table('members')->max('id');
 }
}