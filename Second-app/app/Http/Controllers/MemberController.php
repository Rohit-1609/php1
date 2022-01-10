<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Company;
use App\Models\Device;

class MemberController extends Controller
{

    public static function addMember(Request $req)
    {
         $member= new Member;
         $member->name=$req->name;
         $member->email=$req->email;
         $member->address=$req->address;
         $member->save();
         return redirect('add');
    }

    public static function showMember()
    {
        $data=Member::all();
       //  $data=Member::paginate(2);
        return view('list',['members'=>$data]);
    }



    public static function deleteMember($id)
    {
        $data=Member::find($id);
        return view('list',['members'=>$data]);
    }

    public static function showOneMember($id)
    {
    $data =  Member::find($id);
    return view('update',['data'=>$data]);
    }


    public static function updateMember(Request $req)
    {
        $data=Member::find($req->id);
        $data->name=$req->name;
        $data->address=$req->address;
        $data->email=$req->email;
        $data->save();
        return redirect('list');
    }

   /* function index()
    {
        return Member::find(1);
    }

    */

    function index()
    {
     //   return Member::find(1)->CompanyData;
        return Member::find(1)->getDevice;
    }

    function index1()
    {
        $member=new Member;
        $member->name="rishikesh";
        $member->email="rishikesh123@gmail.com";
        $member->address="bihar";
        $member->save();
    }

}
