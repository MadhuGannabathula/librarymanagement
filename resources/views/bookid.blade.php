@extends('menu')
@section('content')
<div class="card">
  <div class="card-header">
    {{$book->name}}
  </div>
  <div class="card-body">
    <h5 class="card-title">SWritten by: {{$book->authorname}} </h5>
    <p class="card-text">Book-ID: {{$book->id}} </p>
    <p class="card-text">Department: {{$book->idepartment}} </p>
    <p class="card-text">Section: {{$book->section}} </p>
    <p class="card-text">Total Copies: {{$book->taotal}} </p>
    <p class="card-text">Take home copies: {{$book->takehome}} </p>
    <p class="card-text">To read copies: {{$book->reading}} </p>
    <a href="/admin/books/{{$book->id}}/edit" class="btn btn-primary">Edit Book</a>
    <a href="/admin/books/{{$book->id}}/delete" class="btn btn-primary">Delet Book</a>
  </div>
</div>

@endsection