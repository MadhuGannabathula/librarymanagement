
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/css/form.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        
        
    </style>

</head>
<body>
    <div class="header">
        <h2>Login Here!</h2>
    </div>
      
    <form method="post" action="/employees/login" class="bookform">
        @csrf
        <div class="input-group-form">
            <label>Enter Email-ID</label>
            <input type="text" name="email" >
            @error('email')
            <div class="alert-danger">Email not registered</div>
            @enderror
        </div>
        <div class="input-group-form">
            <label>Enter Password</label>
            <input type="password" name="password">
            @error('password')
            <div class="alert-danger">Wrong Password Entered</div>
            @enderror
        </div>
        <div class="input-group-form">
            <button class="btn" type="submit" style="background: #2582A1;" name="submit">Login</button>
        </div>
    </form>
    </body>
 
 </html>
