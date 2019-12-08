<?php
    $user = "";
    $email = "";
    $errors = array(); 
    
    $mysqli = new mysqli("localhost", "root" ,"" , "location") or die(mysqli_error($mysqli));


    if(isset($_POST['register']))
    {
        $user = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $pass1 = mysql_real_escape_string($_POST['pass1']);
        $pass2 = mysql_real_escape_string($_POST['pass2']);
    
        if(empty($username))
        {
            array_push($errors , "Username is required");
        }
        if(empty($email))
        {
            array_push($errors , "Email is required");
        }
        if(empty($pass1))
        {
            array_push($errors , "Password is required");
        }

        if($pass1 != $pass2)
        {
            array_push($error , "Password are not matching ");
        }

        if(count($errors) == 0)
        {
            $pass1 = md5($pass1);
            
            $mysqli->query("INSERT INTO users (username,email,password) VALUES ('$user' ,'$email' , '$pass1')") or die($mysqli->error);

        }
    
    }
 
?>