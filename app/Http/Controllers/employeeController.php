<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class employeeController extends Controller
{
    //
    function getData()
    {
        return DB::table('employee')
        ->join('company','employee.id','=','company.employee_id')
        ->where('employee.id',2)
        ->select('employee.name')
        ->get();
    }
}
