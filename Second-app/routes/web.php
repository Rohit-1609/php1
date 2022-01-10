<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController1;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Str;
use App\Http\Controllers\DeviceController;
use App\Mail\SampleMail;
use App\Http\Controllers\ProductController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});


Route::get("user",[UserController::class,'show']);
//Route::get("users",'UserController@show');


Route::get("user/{id}",[UserController::class,'show1']);

/*Route::get('/user/{name}', function ($name) {
    return view('user',["user"=>$name]);
}
);
*/

Route::get("users",[UserController::class,'loaduserview']);
Route::get("users",[UserController::class,'loaduserview1']);
Route::get("users1",[UserController::class,'loaduserview2']);

Route::get("users2",[UserController::class,'loaduserview3']);

Route::post("users1",[UserController::class,'getData']);
//Route::view("login","users1");



Route::view('three','three');
Route::view('four','four')->middleware('protectedAge');
Route::view('noaccess','noaccess');
Route::group(['middleware'=>['protectedPage']],function()
{
    
Route::view('one','one');
Route::view('two','two');

}
);

Route::get("index",[UserController1::class,'index']);


//Route::get("index",[UserController1::class,'getData']);
Route::view("login","users3");

Route::post("index1",[UserController1::class,'testRequest']);


//Route::view('users3','users3');
Route::view('profile','profile');
Route::post("index2",[UserAuth::class,'userLogin']);

Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user',null);
      }
      return redirect('users3');
});


Route::get('/users3', function () {
    if(session()->has('user'))
    {
      
      return redirect('profile');
      }
      return view('users3');
});

Route::view('store','storeuser');
Route::post("storeu",[StoreController::class,'storeU']);


Route::view('uploadfile','uploadfile');
Route::post("uploadfile",[UploadController::class,'uploadF']);

//Route::view('profile1','profile1');
Route::get('/profile1/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('profile1');
});


Route::view('add','addmember');
Route::post("add",[MemberController::class,'addMember']);

Route::get("list",[MemberController::class,'showMember']);
Route::get("delete/{id}",[MemberController::class,'deleteMember']);
Route::get("update/{id}",[MemberController::class,'showOneMember']);
Route::post("update",[MemberController::class,'updateMember']);


Route::get("list1",[OperationController::class,'operations']);

Route::get("employee",[EmployeeController::class,'getData']);


Route::get("member",[MemberController::class,'index']);
Route::get("member1",[MemberController::class,'index1']);

$info = "hi, welcome to laravel";
//$info1=Str::ucfirst($info);
//$info1=Str::replaceFirst("hi", "Hello", $info);
//$info1=Str::camel($info);
//$info1=Str::of($info)
 //           ->ucfirst($info)
 //           ->replaceFirst("hi", "Hello", $info)
 //           ->camel($info);;
//echo $info1;

Route::get("device/{key:name}",[DeviceController::class,'test']);

Route::get('/mail', function () {
    return new SampleMail();
});

Route::get("list",[ProductController::class,'list']);


Route::get('login1',function()
{
    return view('login1');
});

Route::post("login1",[UserController::class,'login1']);

Route::get("/product5",[ProductController::class,'index']);

