<?php 


//"<link rel='stylesheet' href='style.css'>";

$con = mysqli_connect("localhost", "root", "", "gafi");
if($con->errno)
{
    die($con->error);
}

if(isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];


    $query = "INSERT INTO gafi_info
    VALUES('$username', '$password', '$phone', '$fname', '$lname', '$gender')";

    $result = $con -> query($query);



    if($result)
    {
        // echo "<script type='text/javascript'>";
        // echo "alert('You have successfully signed in')";
        // echo "</script>";
        header("location: userpage.php");
    }
}

// if(isset($_POST['acc']))
// {
//     echo "<form action='signin.php' method='post' class='container'>
//         <input type='text' name='username' class='username' placeholder='Enter your Username'><br>
//         <input type='password' name='' class='' placeholder='Enter your password'>
//     </form>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="yform.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class='button-box'>
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
                 
            </div>

            <div class="logo">
                <img src="img/GAFI.png" alt="GAFI" width="20%" height="20%">
            </div>

            <!--  for social medial handle for logging in         -->
            <div class="special-icons">
                <img src="fb.png" alt="">
                <img src="tw.png" alt="">
                <img src="go.png" alt="">
            </div>
            <form class="input-group" id="login" action="login.php" method="post">
                <input type="text" name="username" class="input-field" placeholder="Enter your Username" required autocomplete="off"><br>
                <input type="password" name="password" class="input-field" placeholder="Enter Your password" required autocomplete="off"><br>
                
                <input type="checkbox" name="" class="check-box"><span>Rember Password</span><br>

                <button type="submit" class="submit-btn">Log in</button>
            </form>

            
            <form class="input-group" id="register" action="yform.php" method="post">
                <input type="text" name="fname" class="input-field" placeholder="Enter your First Name" required autocomplete="off"><br>
                <input type="text" name="lname" class="input-field" placeholder="Enter your last Name" required autocomplete="off"><br>
                <input type="text" name="phone" class="input-field" placeholder="Enter your Phone Number" required autocomplete="off"><br><br>
                <input type="text" name="username" class="input-field" placeholder="Enter your  Username" required autocomplete="off"><br>
                <input type="password" name="password" class="input-field" placeholder="Enter Your password" required><br>
                <label>Male</label>
                <input type="radio" name="gender"  id="Male" value="Male" ><br><br>
        
                <label>Female</label>
                <input type="radio" name="gender"  id="Female" value="Female" checked><br>
                <!-- <input type="text" name="fname" class="fname" autocomplete="off" autofocus placeholder="Enter your First Name" id="text"><br>

                <input type="text" name="lname" class="input-field" placeholder="Enter your Last name" id="text" required><br>
        
                <input type="number" name="phone" class="input-field" placeholder="Enter Phone number" id="text"><br>
        
                <input type="text" name="username" class="input-field" placeholder="Enter your username"><br>
        
                <input type="password" name="password" class="input-field" placeholder="Enter a password" id="text"><br>
                    
                <label>Male</label>
                <input type="radio" name="gender"  id="Male" value="Male" ><br>
        
                <label>Female</label>
                <input type="radio" name="gender"  id="Female" value="female" checked><br> -->
        
        
                
        
                <!-- <button type="submit" id='sub' class="submit-btn">sign in</button><br> -->
        
                
                <input type="checkbox" name="" class="check-box"><span>I agree to the terms & conditions</span><br>

                <button type="submit" class="submit-btn">Register </button>
            </form>
        </div>
        
        
    </div>
    <script>

        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }

    </script>
</body>
</html>