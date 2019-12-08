
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
            <div class="col-lg-6">
                    <h2>Login</h2>
                    <br>
                        <form action="login_form.php" method="post">
                            
                            <div class="form-group">
                                <b><label>Username</label></b>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <b><label>Password </label></b>
                                <input type="Password" name="pass" id="pass" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <p>
                                New member ? <a href="Register.php">Sign-up</a>
                            </p>
                
                        </form>
            </div>



        </div>
    </div>
    </div>
</body>
</html>