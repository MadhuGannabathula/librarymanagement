<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dashboard(){
        $books = \App\Models\book::all();
        $bcount = count($books);
        $employees = \App\Models\employee::all();
        $ecount = count($employees);
        $issues = \App\Models\order::where('status', 'Issued')->get();
        $icount = count($issues);
        $returns = \App\Models\order::where('status', 'Returned')->get();
        $rcount = count($returns);
        $copies = 0;
        foreach($books as $book){
            $copies += $book->total;
        }
        return view('admin',compact('bcount','ecount','icount','rcount','copies'));



    }

}
