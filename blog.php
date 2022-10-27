<?php
    session_start();
	if(!isset($_SESSION['username']))
	{
		header("location: yform.php");
	}

	$con = mysqli_connect("localhost", "root", "", "gafi");
    if($con->errno)
    {
        die($con->error);
    }

	
	


	

	


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
		<!--for menu-->
		<div class='pt1'>
			GAFI
		</div>

		<!--for each of the heading-->
		<ul class="list">
			<li><a href="index.php" alt="Home page">Home</a></li>
			<li><a href="blog.php"  class="active" alt="BLOGS">Blog</a></li>
			<li><a href="contact.php" alt="contact page">Contact</a></li>
			
		</ul>

		<!--for settings-->
		<div>

		</div>

		<!--sign in-->
		<ul class="but">
			<li><a href="yform.php" class="but" alt="log in" role="button">sign in</a></li>
		</ul>
	</nav>
    
</body>
</html>










