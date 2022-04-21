<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = \App\Models\employee::all();
        return view('employees',compact('employees'));

        $users = \App\Models\employee::all();
        return view('users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employeecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pass = $request->password;
        $request->validate([
           'name'=>'required|alpha',
           'age'=>"required|integer|max:60",
           'email'=>'email',
           'phonenumber'=>'required|integer|digits_between:10,11',
           'aadharnumber'=>'required|integer|digits:12',
           'password'=>'required'
        ]);
        $employee = new employee();
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->email = $request->email;
        $employee->phonenumber = $request->phonenumber;
        $employee->aadharnumber = $request->aadharnumber;
        $employee->password = $request->password;
        $employee->save();
        return redirect('/admin');



        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->password = $request->password;
        $user->address = $request->address;
        $employee->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //

        return view('employeeid',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {

        return view('editemployee',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->email = $request->email;
        $employee->phonenumber = $request->phonenumber;
        $employee->password = $request->password;
        $employee->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public static function destroy($id)
    {
        
        $employee = \App\Models\employee::find($id);
        $employee->delete();
        return redirect('/admin/employees');
        $email =  $request->email;
        $name = $request->name;
        $user = \App\Models\user::where('email', $email)->where('name', $name)->get();
    }

    public function login(Request $request){
        $email = $request->email;
        $employee = \App\Models\employee::where('email', $email)->get();
        if(count($employee)>0){
            if($employee[0]['password'] == $request->password){
                $id = $employee[0]['id'];
                session(['id' => $employee[0]['id']]);
                if($id == 1){
                    return redirect('/admin');
                }else{
                    return redirect('/emppage');
                }
            }
            else{
                $request->validate([
                    'password'=>'integer|boolean'
                ]);
            }
        }
        else{
            $request->validate([
                'email'=>'integer'
            ]);
        }

        
        
    }


    public function logout(Request $request){
        $request->session()->forget('id');
        return redirect('/');
    }

}
