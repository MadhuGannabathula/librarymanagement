@extends('menu')
@section('content')
<div class="row" id="dashboard-row">
  <div class="col-sm-3">
    <div class="card" id="dashboard-card">
      <img class="card-img-top" src="/images/bookicon3.png" alt="Card image cap">
      <div class="card-body" id="dashboard-card">
        <h3 class="card-title" style="text-align: center;"> {{$bcount}} </h3>
        <p class="card-text" style="text-align: center;">Books</p>
        <a href="/admin/books" class="btn btn-primary" style="margin : 20px 0px 0px 40px;">All Books</a>
        <a href="/admin/books/create" class="btn btn-primary" style="margin : 20px 0px 0px 40px;">Add Book</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" id="dashboard-card">
      <img class="card-img-top " src="/images/empicon1.webp" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-title" style="text-align: center;">{{$ecount}}</h3>
        <p class="card-text" style="text-align: center;">Employeess</p>
        <a href="/admin/employees" class="btn btn-primary" style="margin : 20px 0px 0px 20px;">All Employees</a>
        <a href="/admin/employees/create" class="btn btn-primary" style="margin : 20px 0px 0px 20px;">Add Employee</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" id="dashboard-card">
      <img class="card-img-top" src="/images/booksicon2.webp" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center;"> {{$copies}} </h3>
        <p class="card-text" style="text-align: center;">Copies</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" id="dashboard-card">
      <img class="card-img-top" src="/images/issued3.png" alt="Card image cap">
      <div class="card-body" id="dashboard-card">
        <h5 class="card-title" style="text-align:center;">{{$icount}}</h5>
        <p class="card-text" style="text-align: center;">Books Isseud</p>
        <a href="/orders" class="btn btn-primary" style="margin : 20px 0px 0px 100px;">View Details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3" style="margin-top : 10px ;">
    <div class="card" id="dashboard-card">
      <img class="card-img-top" src="/images/borrowedicon.jpg" alt="Card image cap">
      <div class="card-body" id="dashboard-card">
        <h5 class="card-title" style="text-align:center;">{{$rcount}}</h5>
        <p class="card-text" style="text-align: center;">Books Returned</p>
        <a href="/admin/orders/returned" class="btn btn-primary" style="margin : 20px 0px 0px 100px;">View Details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3" style="margin-top : 10px ;">
    <div class="card" id="dashboard-card">
      <img class="card-img-top" src="/images/profile.png" alt="Card image cap">
      <div class="card-body" id="dashboard-card">
        <h5 class="card-title" style="text-align:center;">  </h5>
        <br>
        <p class="card-text" style="text-align: center;">Profile</p>
        <a href="/admin/employees/1" class="btn btn-primary" style="margin : 20px 0px 0px 40px;">Profile</a>
        <a href="/logout" class="btn btn-primary" style="margin : 20px 0px 0px 40px;">Logout</a>
      </div>
    </div>
  </div>
</div>
@endsection