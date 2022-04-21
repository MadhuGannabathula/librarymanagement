@extends('menu')
@section('content')
<?php $num = 1; ?>
<div class="row">
  @foreach($books as $b)
  <div class="col-sm-6">
  <div class="card">
  <h5 class="card-header">Book #{{$num}}</h5>
  <div class="card-body">
    <h5 class="card-title">Name: {{$b->name}} </h5>
    <p class="card-text">Written by: {{$b->authorname}}</p>
    <p class="card-text">Department: {{$b->department}}</p>
    <a href="/admin/books/{{$b->id}}/" class="btn btn-primary">Get Details</a>
    <a href="/admin/books/{{$b->id}}/edit" class="btn btn-primary">Edit Book</a>
    <a href="/admin/books/delete/{{$b->id}}" class="btn btn-primary">Delete Book</a>
  </div>
  </div>
  </div>
  <?php $num = $num +1; ?>
  @endforeach
</div>

@endsection