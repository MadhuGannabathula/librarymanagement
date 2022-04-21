<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyController extends Controller
{
    //
    function index(){
        App\Models\User::all();
    }
}
