@extends('menu')
@section('content')
<?php $num = 1; ?>
<div class="row">
  @foreach($employees as $e)
  <div class="col-sm-6">
  <div class="card">
  <h5 class="card-header">Employee #{{$num}}</h5>
  <div class="card-body">
    <h5 class="card-title">{{$e->name}} </h5>
    <p class="card-text">Employee Code: {{$e->id}}</p>
    <p class="card-text">{{$e->age}}</p>
    <a href="/admin/employees/{{$e->id}}/edit" class="btn btn-primary">Edit Details</a>
    <a href="/admin/employees/{{$e->id}}" class="btn btn-primary">View Details</a>
    <a href="/admin/employees/delete/{{$e->id}}" class="btn btn-primary">Delete</a>
  </div>
  </div>
  </div>
  <?php $num = $num +1; ?>
  @endforeach
</div>

@endsection