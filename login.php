<?php
    session_start();

    $con =  mysqli_connect("localhost", "root", "", "gafi");
    if($con->errno)
    {
        die($con->error);
    }

    if(isset($_POST['username']))
    {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM gafi_info WHERE username='$username' AND password = '$password'";
        $result = $con->query($query);
        var_dump($result);
        //exit;

        // if(!$con->errno){
        //     $result = $con->query($query);
        //     var_dump($result); exit;
        // }
        // else{
        //     var_dump($con->error);
        // }
    
        if($result->num_rows == 1)
        {
            $userdata = mysqli_fetch_object($result);
            //var_dump($userdata);
            //exit;
            $_SESSION['username'] = $userdata->username;
            //$_SESSION[''] = $userdata->password;

            // $query = "SELECT * FROM gafi_info WHERE username='$username' AND password = '$password'";
            // $result = $con->query($query);
            //var_dump($result);
            //exit;
    
            header("location: userpage.php");
        }
        else
        {
            // $query = "SELECT * FROM gafi_info WHERE username='$username' AND password = '$password'";
            // $result = $con->query($query);
            // var_dump($result);
            // exit;

            //alert
            echo "<script type='text/javascript'>";
            echo "alert('You have successfully signed in')";
            echo "</script>";
            
            header("location: login.php?<script type='text/javascript'>alert('You have successfully signed in');</script>;");
        }

        if($result)
        {
            echo "<script type='text/javascript'>";
            echo "alert('You have successfully signed in')";
            echo "</script>";
        }
    }

   
    
    

    

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            background-color: ;
            //background-image: url('img/GAFI.png');
            //background-repeat: no-repeat;
            //background-size: cover;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" id="username" placeholder="Enter your username"><br>
        <input type="password" name="password" id="password" placeholder="Enter your password"><br>
        <input type="submit" value="log in">
    </form>
</body>
</html> -->

