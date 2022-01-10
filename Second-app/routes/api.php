<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstApi;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'],function()
{
    //all secure url
    Route::apiResource("member",MembersController::class);


    
});


Route::get("dataapi",[FirstApi::class, 'getDataFromApi']);

//Route::get("list1",[DeviceController::class,'list1']);
Route::get("list1/{id?}",[DeviceController::class,'listOne']);
Route::post("adddevice",[DeviceController::class,'addDevice']);
Route::put("updatedevice",[DeviceController::class,'updateDevice']);
Route::delete("deletedevice/{id}",[DeviceController::class,'deleteDevice']);
Route::get("searchdevice/{name}",[DeviceController::class,'searchDevice']);
Route::post("validatedevice",[DeviceController::class,'validateData']);


Route::post("login",[UserController::class,'login']);

Route::post("uploadfile1",[FileController::class,'uploadFile']);
