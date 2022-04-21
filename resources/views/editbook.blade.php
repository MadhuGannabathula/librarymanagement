@extends('menu')
@section('content')
<div class="header">
    <h2>CEdit book</h2>
</div>
<form method="post" action="/admin/books/{{$book->id}}" class="bookform">
        @csrf
        {{method_field('PATCH')}}
        <div class="input-group-form">
            <label>Name of the Book</label>
            <input type="text" name="name" value="{{$book->name}}" >
        </div>
        <div class="input-group-form">
            <label>Name of the author</label>
            <input type="text" name="authorname" value="{{$book->authorname}}">
        </div>
        <div class="input-group-form">
            <label>Department</label>
            <input type="text" name="department" value="{{$book->department}}">
        </div>
        <div class="input-group-form">
            <label>Section</label>
            <input type="text" name="section" value="{{$book->section}}">
        </div>
        <div class="input-group-form">
            <label>To read copies</label>
            <input type="number" name="reading" value="{{$book->reading}}">
        </div>
        <div class="input-group-form">
            <label>Take home copies</label>
            <input type="number" name="takehome" value="{{$book->takehome}}">
        </div>
        <div class="input-group-form">
            <label>Total additional copies</label>
            <input type="number" name="takehome">
        </div>
        <div class="input-group-form">
            <button class="btn" name="submit">Update</button>
        </div>
    </form>

@endsection