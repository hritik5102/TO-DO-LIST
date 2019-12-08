<?php
$name = '';
$location = '';
$update = false;
    $mysqli = new mysqli('localhost', 'root' , '','location' ) or die(mysqli_error($mysqli));
    $id =0;
    session_start();

    if(isset($_POST['save']))
    {
        $name = $_POST['name'];
        $local = $_POST['local'];
        
        $mysqli->query("INSERT INTO data(name,location) VALUES ('$name' ,'$local')") or die($mysqli->error);
        
           
        $_SESSION['message'] = "record has been updated ";
        $_SESSION['msg_type'] = "success";
        
        header("location:try.php");
    }

    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $mysqli->query("DELETE from data where id=$id") or die($mysqli->error());
    
        $_SESSION['message'] = "record has been deleted";
        $_SESSION['msg_type'] = "danger";
        header("location:try.php");
    }

    if(isset($_GET['edit']))
    {
        $id = $_GET['edit'];
        $update = true;

        $result = $mysqli->query("SELECT * FROM data where id=$id") or die($mysqli->error());
        //record has been found out 
        if(count($result)==1)
        {
            $row = $result->fetch_array();
            $name = $row['name'];
            $location = $row['location'];
        }
    }

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $location = $_POST['local'];

        $mysqli->query("UPDATE data SET name='$name' , location='$location' WHERE id = $id") or 
            die($mysqli->error);
        
        $_SESSION['message'] = 'Record has been updated';
        $_SESSION['msg_type'] = 'warning';

        header("location:try.php");
    }

?>
