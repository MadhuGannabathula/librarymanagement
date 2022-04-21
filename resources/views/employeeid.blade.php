@extends('menu')
@section('content')
<div class="card">
  <div class="card-header">
    {{$employee->name}}
  </div>
  <form action="" method="post">
  @csrf
  {{method_field('DELETE')}}
  <div class="card-body">
    <p class="card-text">Employee-ID: {{$employee->id}} </p>
    <h5 class="card-title">Age: {{$employee->age}} </h5>
    <p class="card-text">Aadhar Number: {{$employee->aadharnumber}} </p>
    <p class="card-text">Email-ID: {{$employee->emailid}} </p>
    <p class="card-text">Phone Number: {{$employee->phonenumber}} </p>
    <a href="/admin/employees/{{$employee->id}}/edit" class="btn btn-primary">Edit Details</a>
    <button  type="submit" class="btn btn-primary" value="DELETE">Delete</a>
  </div>
  </form>
</div>

@endsection