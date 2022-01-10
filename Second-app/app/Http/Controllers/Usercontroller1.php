<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Usercontroller1 extends Controller
{
   public static function index()
    {
    
      // return DB::select("select * from users");
      $data=  Http::get("https://reqres.in/api/users?page=1");
   return view('users2',['collection'=>$data['data']]);
    
    }
    

   /* public static function getData()
    {
        return User::all();
    }
*/
   public static function testRequest(Request $req)
    {
       echo "form submitted"." <br>";
       
       return  $req->input();
    }
    
 
}
