@extends('menu')
@section('content')
<?php $head="Edit employee"; ?>
<div class="header">
        <h2>Employee</h2>
    </div>
      
    <form method="POST" action="http://127.0.0.1:8000/admin/employees/{{$employee->id}}" class="bookform">
    @csrf
    {{method_field('PATCH')}}
        <div class="input-group-form">
            <label>Enter Name</label>
            <input type="text" name="name" value= {{$employee->name}} >
        </div>
        <div class="input-group-form">
            <label>Enter age</label>
            <input type="number" name="age" value= {{$employee->age}} >
        </div>
        <div class="input-group-form">
            <label>Enter Phone Number</label>
            <input type="number" name="phonenumber" value= {{$employee->phonenumber}} >
        </div>
        <div class="input-group-form">
            <label>Enter Email-ID</label>
            <input type="text" name="email" value=  {{$employee->email}}>
        </div>
        <div class="input-group-form">
            <label>Enter Phone Number</label>
            <input type="number" name="phonenumber" value=  {{$employee->phonenumber}} >
        </div>
        <div class="input-group-form">
            <label>Enter ardhar number</label>
            <input type="number" name="aadharnumber" value=  {{$employee->aadharnumber}} >
        </div>
        
        <div class="input-group-form">
            <label>Enter Password</label>
            <input type="password" name="password" value=  {{$employee->npassword}}>
        </div>
        <div class="input-group-form">
            <button class="btn" name="submit">Change details</button>
        </div>
    </form>
    @endsection