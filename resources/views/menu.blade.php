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
   <!-- <link rel="stylesheet" href="./bootstrap.css"> -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form.css"> 
    <title>Header</title>
    <style>
        body{
            margin:0px auto;
        }
        .menubar{
            margin:0px;
            overflow: hidden;
            background-color: #333;
        }
        .menubar a{
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .menubar a:hover{
            background-color: rgb(1,175,245);
            color: white;
        }
        .menubar a:active{
            background-color: #ddd;
            color: black;
        }
        .row{ margin:10px;}
        #dashboard-row{
            height:400px;
            margin:10px;
        }
        .card-img-top{
            height:300px;
        }
        #dashboard-card{
            height:500px;
            align-content: center;
        }
    </style>
</head>
<body>
<div class="menubar">
        <a class="active" href="/admin">Home</a>
        <a class="active" href="/admin/books">Books</a>
        <a class="active" href="/admin/employees">Employees</a>
        <a class="active" href="/orders">Books Issued</a>
        <a class="active" href="/admin/orders/returned">Books Returned</a>
    </div>
    @yield('content')
</body>
</html>

