<?php
if(Session::has('id')){

}else{ ?>

    <script>
    window.location = "/";
  </script>
 <?php }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/form.css"> 
    <title>Home</title>
    <style>
        .bookform, .content {
            width: 60%;
        }
        .header {
            width: 60%;
            margin: 10px auto 0px;
        }
    </style>
</head>
<body>
    <div class="image-wrapper" id="homeup">
        <br>
        <h1>Success begins within here</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <form class="form-inline" method = "get" action="/search">
        <input type="text" placeholder="Book Name" name="name">
        <input type="text" placeholder="Author" name="authorname">
        <button type="submit">Submit</button>
        </form>
    </div>
    <div class="container-con" style="background-color:white;">
        <div class="image-wrapper1">
        <div class="header">
        <h2>Take Home</h2>
        </div>
        <form method="post" action="/orders" class="bookform">
            @csrf
        <div class="input-group-form">
            <label>Enter Book-ID</label>
            <input type="number" name="bookid" >
        </div>
        <div class="input-group-form">
            <label>Enter Student-ID</label>
            <input type="number" name="studentid">
        </div>
        <div class="input-group-form">
            <label>Enter Student Name</label>
            <input type="text" name="studentname">
        </div>
        <div class="input-group-form">
            <button class="btn" type="submt"style="background: #2582A1;" name="submit">Issue Book</button>
        </div>
        </form>
        </div>
        <div class="image-wrapper1">
        <div class="header">
        <h2>Return Book</h2>
        </div>
        <form method="post" action="/orders/1" class="bookform">
        @csrf
        {{method_field('PATCH')}}
        <div class="input-group-form">
            <label>Enter Book-ID</label>
            <input type="number" name="bookid" >
        </div>
        <div class="input-group-form">
            <label>Enter Student-ID</label>
            <input type="number" name="studentid">
            @error('studentid')
            <div class="" style="color:red;"><span>No record found.</span></div>
            @enderror
        </div>
        <div class="input-group-form">
            <button class="btn"style="background: #2582A1;" name="submit">Return</button>
        </div>
        </form>
        </div>
    <br><br><br>      
    </div>
    <div class="container-con" style="background-color:white;">
        <div class="content-display">
            <br><br><br><br><br><br><br>
            <h1 style="color:black;">Completed your work for the day?</h2>
            <br>
            <h4 style="color:rgb(5, 71, 82);">Let's get you out of here. Click that button and you can be out </h4>
            <br><br>
            <form action="/logout">
            <button class="btn-share" type="submit">Logout</button>
            </form>
        </div>
        <div class="image-wrapper1">
            <img src="./../images/librarymini.jpg" alt="">
        </div>
    </div>
</body>
</html>