
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>

    <nav>
		<!--for menu-->
		<div class="pt1">
            GAFI
		</div>

        

		<!--for each of the heading-->
		<ul class="list">
			<li><a href="index.php" class="active" alt="Home page">Home</a></li>
			<li><a href="blog.php" alt="BLOGS">Blog</a></li>
			<li><a href="contact.php" alt="contact page">Contact</a></li>
			
		</ul>

		<!--for settings-->
		<div>

		</div>

		<!--sign in-->
		<!--<ul class="but">
			<a href="signin.php" class="but" alt="log in" role="button">log in</a></li>
		</ul>-->
	</nav>
    
    <form action="signin.php" method="post" class='container'>

        
        
        <div class='title'>Sign in</div>

        <!--logo-->
        <div class='logo'></div>

        <!--Input field-->
        <input type="text" name="fname" class="fname" autocomplete="off" autofocus placeholder="Enter your First Name" id="text"><br><br>

        <input type="text" name="lname" class="lname" placeholder="Enter your Last name" id="text"><br><br>

        <input type="number" name="phone" class="phone" placeholder="Enter Phone number" id="text"><br><br>

        <input type="text" name="username" class="username" placeholder="Enter your username"><br><br>

        <input type="password" name="password" class="pass" placeholder="Enter a password" id="text"><br>
            
        <label>Male</label>
        <input type="radio" name="gender"  id="Male" value="Male" ><br>

        <label>Female</label>
        <input type="radio" name="gender"  id="Female" value="female" checked><br>


        

        <button type="submit" id='sub'>sign in</button><br><br>

        <!--login button-->
        <a href="login.php" alt="log in" class="acc" name="acc">Already have an account.....</a>

            


    </form>
</body>
</html>

<?php

    "<link rel='stylesheet' href='style.css'>";

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
            echo "<script type='text/javascript'>";
            echo "alert('You have successfully signed in')";
            echo "</script>";

            header("location: userpage.php");
        }
    }

    if(isset($_POST['acc']))
    {
        echo "<form action='signin.php' method='post' class='container'>
            <input type='text' name='username' class='username' placeholder='Enter your Username'><br>
            <input type='password' name='' class='' placeholder='Enter your password'>
        </form>";
    }


    
    

    


?>