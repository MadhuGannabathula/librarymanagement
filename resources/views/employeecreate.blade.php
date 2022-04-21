
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form.css"> 
    <style>
        
        
    </style>

</head>
<body>
    <div class="header">
        <h2>Create Employee</h2>
    </div>
      
    <form method="post" action="/admin/employees" class="bookform">
    @csrf
        <div class="input-group-form">
            <label>Enter Name</label>
            <input type="text" name="name" >
            @error('name')
            <div class="alert-danger"> {{$message}}</div>
            @enderror
        </div>
        <div class="input-group-form">
            <label>Enter Email-ID</label>
            <input type="text" name="email" >
            @error('email')
            <div class="alert-danger"> {{$message}}</div>
            @enderror
        </div>
        <div class="input-group-form">
            <label>Enter age</label>
            <input type="number" name="age" >
            @error('age')
            <div class="alert-danger"> {{$message}}</div>
            @enderror
        </div>
        <div class="input-group-form">
            <label>Enter Phone Number</label>
            <input type="number" name="phonenumber" >
            @error('phonenumber')
            <div class="alert-danger"> {{$message}}</div>
            @enderror
        </div>
        <div class="input-group-form">
            <label>Enter Aardhar Number</label>
            <input type="number" name="aadharnumber" >
            @error('aadharnumber')
            <div class="alert-danger"> {{$message}}</div>
            @enderror
        </div>
        
        <div class="input-group-form">
            <label>Enter Password</label>
            <input type="password" name="password">
            @error('password')
            <div class="alert-danger"> {{$message}}</div>
            @enderror
        </div>
        <div class="input-group-form">
            <button class="btn" style="background" name="submit">Create</button>
        </div>
    </form>
    </body>
 
 </html>
