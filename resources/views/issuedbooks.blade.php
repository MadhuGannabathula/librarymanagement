@extends('menu')
@section('content')
<?php $num = 1; ?>
<div class="row">
  @foreach($orders as $b)
  <div class="col-sm-6">
  <div class="card">
  <h5 class="card-header">Order #{{$num}}</h5>
  <div class="card-body">
    <h5 class="card-title">Student Name: {{$b->studentname}} </h5>
    <p class="card-text">Student-ID: {{$b->studentid}}</p>
    <p class="card-text">Book-ID: {{$b->bookid}}</p>
    <a href="/orders/{{$b->id}}" class="btn btn-primary">Get Details</a>
  </div>
  </div>
  </div>
  <?php $num = $num +1; ?>
  @endforeach
</div>

@endsection