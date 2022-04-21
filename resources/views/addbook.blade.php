@extends('menu')
@section('content')
<div class="header">
    <h2>Add book</h2>
</div>
<form method="post" action="/admin/books" class="bookform">
        @csrf
        <div class="input-group-form">
            <label>Name of the Book</label>
            <input type="text" name="name" >
        </div>
        <div class="input-group-form">
            <label>Name of the author</label>
            <input type="text" name="authorname">
        </div>
        <div class="input-group-form">
            <label>Department</label>
            <input type="text" name="department">
        </div>
        <div class="input-group-form">
            <label>Section</label>
            <input type="text" name="section">
        </div>
        <div class="input-group-form">
            <label>TO read copies</label>
            <input type="number" name="reading">
        </div>
        <div class="input-group-form">
            <label>Take home copies</label>
            <input type="number" name="takehome">
        </div>
        <div class="input-group-form">
            <button class="btn" name="submit">Add Book</button>
        </div>
    </form>

@endsection