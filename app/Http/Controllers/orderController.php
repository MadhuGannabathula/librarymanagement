<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = \App\Models\order::where('status', 'Issued')->get();
        return view('issuedbooks',compact('orders'));
    }
    public function returned()
    {
        //
        $orders = \App\Models\order::where('status', 'Returned')->get();
        return view('returnedbooks',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $order = new order();
        $order->studentname = $request->studentname;
        $order->studentid = $request->studentid;
        $order->bookid = $request->bookid;
        $order->save();
        return redirect('/emppage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
        return view('displayorder',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
        $bookid = $request->bookid;
        $studentid = $request->studentid;
        $order = New order();
        $orders = \App\Models\order::where('bookid', $bookid)->where('studentid',$studentid)->where('status','Issued')->get();
        if(count($orders)>0){
            $order = $orders[0];
            $order->status = "Returned";
            $order->returned = date('y-m-d');
            $order->save();
            return redirect('/emppage');
        }
        else{
            $request->validate([
                'studentid'=>'boolean|integer'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
