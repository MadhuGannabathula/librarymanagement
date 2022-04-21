<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Search</title>
</head>
<body>
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
    <a href="/emppage" class="btn btn-primary">Home</a>
  </div>
  </div>
  </div>
  <?php $num = $num +1; ?>
  @endforeach
</div>
</body>
</html>