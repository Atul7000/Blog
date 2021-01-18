<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class members extends Controller
{
    //
    function operation()
    {
   return DB::table('members')
   ->where('id',21)
   ->update([
      'name'=>'atul',
   'email'=>'atpatel@gmail.com',
   'address'=>'uk'
   ]);
    }

}
