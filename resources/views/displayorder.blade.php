@extends('menu')
@section('content')
<div class="row">
  <div class="col-sm-6">
  <div class="card">
  <h5 class="card-header">Order #{{$order->id}}</h5>
  <div class="card-body">
    <h5 class="card-title">Student Name: {{$order->studentname}} </h5>
    <p class="card-text">Order-ID: {{$order->id}}</p>
    <p class="card-text">Student-ID: {{$order->studentid}}</p>
    <p class="card-text">Book-ID: {{$order->bookid}}</p>
    <p class="card-text">Issued Date: {{$order->issued}}</p>
    <p class="card-text">Status: {{$order->status}}</p>
    <p class="card-text">Returned Date: {{$order->returned}}</p>
  </div>
  </div>
  </div>
</div>

@endsection