<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    public static function getData()
    {
        return DB::table('employee')
        ->join('company','employee.id', '=', 'company.employee_id')
      //  ->select('company.*','employee.*')

      ->where("employee.id","2")
      ->get();
    }
}
