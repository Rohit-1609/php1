<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  
    public static function show()
    {
        return "Hello from UserController";
    }

    public static function show1($id)
    {
        return "Hello from UserController  $id" ;
    }

    public static function loaduserview()
    {
        return view("users");
    }

   
    public static function loaduserview1()
    {
        return view("users",["users"=>'Rohit']);
       
    }
 
    public static function loaduserview2()
    {
    
     //  return view("users",["users"=>['Rohit', 'Aniket', 'Rishabh']]);
     return view("users",["users"=>'Rishabh']);
 
    }

    
    public static function loaduserview3()
    {
  $data=['aniket', 'jivvitesh','prashant'];
  return view("loopsandcontrol",["users"=>$data]);
    }

  public static function getData(Request $req)
  {
    echo "Form Submitted";
    return $req->input();
   }

   public static function login(Request $request)
   {
       $user= User::where('email', $request->email)->first();
       // print_r($data);
           if (!$user || !Hash::check($request->password, $user->password)) {
               return response([
                   'message' => ['These credentials do not match our records.']
               ], 404);
           }
       
            $token = $user->createToken('my-app-token')->plainTextToken;
       
           $response = [
               'user' => $user,
               'token' => $token
           ];
       
            return response($response, 201);
   }

   public static function login1(Request $req)
   {
     //  return $req->input();
      $user= User::where(["email"=>$req->email])->first();
       if(!$user ||!Hash::check($req->password,$user->password))
       {
           return "username or password is not matched";
       }
       else{
           $req->session()->put('user',$user);
           return redirect('/product5');
       }
       
   }
   

}
