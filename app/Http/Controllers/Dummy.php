<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dummy extends Controller
{
    //
    function index(){
        \App\User::all();
    }
}
