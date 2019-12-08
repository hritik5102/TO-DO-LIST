

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootsrap.js"></script>

</head>
<body>
    <?php require_once 'process.php'; ?>
    <?php
        if(isset($_SESSION['message'])):
    ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
    </div>
    <?php endif ?>
    
    <div class="container">
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'location') or die(mysqli_error($mysqli));
        // display record from data dabase 
        $result = $mysqli->query('Select * from data') or die($mysqli->error);
     ?>
     <!-- display content-->
    <div class="row justify-content-center">
        <table class="table" style="margin:15px ; padding:10px;">
            <thead >
                <th>Name</th> 
                <th>Location</th>
                <th colspan="2">Action</th>   
            <thead>
        <?php
            while($row = $result->fetch_assoc()):
         ?>
            <tr>  
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['location'] ?></td>
                <td>
                    <a href="try.php?edit=<?php echo $row['id'];?>"
                        class="btn btn-info">Edit</a>
                    <a href="process.php?delete=<?php echo $row['id'];?>"
                        class="btn btn-danger">Delete</a>
                        
                </td>
            </tr>
                
            
        <?php endwhile;?>
        </table>
    </div>
    <?php   
        // print the field
        // pre_r($result);
        //print the data inside a database
        //pre_r($result->fetch_assoc());

        function pre_r($array)
        {   
            echo '<pre>';
            print_r($array);
            echo '</pre>' ;
        }
    ?>


    <div class="row justify-content-center">
        <form action="process.php" method="POST" style="margin:10px;padding:10px;">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            
        <div class="form-group">
            <br>
            <label >Name :</label>
            <input type="text" name="name" id="name" value="<?php echo $name?>" placeholder="Enter your name">
            </div>
            
            <div class="form-group">
            <label >location :</label>
            <input type="text" name="local" id="loc" value="<?php echo $location?>" placeholder="Enter your location">
            </div>
            
            <div class="form-group">
            <?php
                if($update==true):
            ?>
            <button type="submit" name="update" class="btn btn-info">update</button>
            <?php else:?>
            <button type="submit" name="save" class="btn btn-primary">Save</button>
            <?php endif;?>        
            </div>
        </form>
    </div>
    </div>    
</body>
</html>