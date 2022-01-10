<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

class DeviceController extends Controller
{
    //
      function index(Request $req)
    {
        return "Some code";
    }

    function test(Device $key)
    {
      return $key;
    }

 /*   function list1()
    {
      return Device::all();
    }
*/
    function listOne($id=null)
    {
      return $id?Device::find($id):Device::all();
    }

    function addDevice(Request $req)
    {
      $device= new Device;
      $device->name=$req->name;
      $device->member_id=$req->member_id;
      $result= $device->save();
      if($result)
      {
        return ["result"=>"Data has been saved"];
      }
      else
      {
        return ["result"=>"add operation Failed"];
      }

    }

    function updateDevice(Request $req)
    {
      $device =Device::find($req->id);
      $device->name=$req->name;
      $device->member_id=$req->member_id;
      $result= $device->save();
      if($result)
      {
        return ["result"=>"Data has been Updated"];
      }
      else
      {
        return ["result"=>"update operation Failed"];
      }
    }

    function deleteDevice($id)
    {
      $device =Device::find($id);
     $result= $device->delete();
      if($result)
      {
        return ["result"=>"Data has been Deleted"];
      }
      else
      {
        return ["result"=>"delete operation Failed"];
      }
    }
    
    function searchDevice($name)
    {
      return Device::where("name","like","%".$name."%")->get();
   
    }

    function validateData(Request $req)
    {
      $rules=array(
        "member_id"=>"required | max:4",
        "name"=>"required",
      );
      $validate=Validator::make($req->all(),$rules);
      if($validate->fails())
      {
       // return $validate->errors();
       return response()->json($validate->errors(),401);
      }
      else
      {
        $device= new Device;
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result= $device->save();
        if($result)
        {
          return ["result"=>"Data has been saved"];
        }
        else
        {
          return ["result"=>"add operation Failed"];
        }
      }
    }
    

}
