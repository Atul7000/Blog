<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;

class UserController extends Controller
{
    //
    function operation(Request $req)
    {
        return DB::table('member')->sum('id');

    }
}
