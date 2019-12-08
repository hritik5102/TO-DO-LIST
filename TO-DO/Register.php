<?php
    include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Registration</h2>
                <br>
                <form action="Register.php" method="post">
                    
                    <div class="form-group">
                        <b><label>Username</label></b>
                        <input type="text" name="username" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <b><label>Email</label></b>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <b><label>Password </label></b>
                        <input type="Password" name="pass1" id="pass1" class="form-control">
                    </div>

                    <div class="form-group">
                        <b><label>Confirm password </label></b>
                        <input type="Password" name="pass2" id="pass2" class="form-control">
                    </div>

                    <button type="submit" name="register" class="btn btn-primary">Submit</button>

                    <p>
                        Already a member ? <a href="login_form.php">Sign-in</a>
                    </p>
                
                </form>
            </div>

  

        </div>
    </div>
</body>
</html>