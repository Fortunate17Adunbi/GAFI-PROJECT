<?php
    session_start();
	if(!isset($_SESSION['username']))
	{
	 	header("location: yform.php");

	}
	//else{
	//  	header("location: login.php");
	// }

	$con = mysqli_connect("localhost", "root", "", "gafi");
    if($con->errno)
    {
        die($con->error);
    }


	// if(!isset($_SESSION['username']))
	// {
	// 	header("location: login.php");
	// }
	
	


	

	


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel='stylesheet' href='userpage.css'>
</head>
<body>

    <!-- Top nav bar -->
	<nav>
		
		<div class="nav">

			<!-- logo -->
			<img src="img/GAFI.png" class="logo" alt="logo" >	<img src="icon/profile.png" class="profile" alt="Profile" style="float: right;">

			<!-- icons  -->
			<ul class="left">
				<li><a href="index.php" class="" alt="Home page" id='home'><img src="icon/house.png" alt="Home"  class='icon' width="40%" height="40%"></a></li>
				<li><a href="settings.html" alt='profile'><img src="icon/client.png" alt="Profile"  class="icon" width="40%" height="40%"></a></li>
				<li><a href="message.php" alt='Chat'><img src="icon/message.png" alt="Chat" class="icon" width="40%" height="40%"></a></li>
				<li class=""><a href="cart.php" alt="cart"><img src="icon/shopping-cart.png" alt="Add to cart" class="icon" width="40%" height="40%"></a></li>
				<li class=""><a href="settings.html" alt="settings"><img src="icon/settings.png" alt="Settings"  class="icon" width="40%" height="40%"></a></li>
				<a href='logout.php' alt='log out' class="log-out">log out</a>
				
						
			</ul>
		

					
		</div>

		
	</nav>
	
	<div class="side"></div>



	
	<div class="box-1">
		
	
			
		
		<img src="img/1 (1).jpg" alt="" width="200px" height="300px">
		<img src="img/1 (2).jpg" alt="" width="200px" height="300px">
		<img src="img/1 (8).jpg" alt="" width="200px" height="300px">
		<img src="img/1 (3).jpg" alt="" width="200px" height="300px"><br><br>
		<button>Add To Cart</button>
		<button>Add To Cart</button>
		<button>Add To Cart</button>
		<button>Add To Cart</button>

	</div>

	<div class="box-1 box-2">
		<img src="img/1 (4).jpg" alt="" width="200px" height="300px">
		<img src="img/1 (5).jpg" alt="" width="200px" height="300px">
		<img src="img/1 (6).jpg" alt="" width="200px" height="300px">
		<img src="img/1 (7).jpg" alt="" width="200px" height="300px"><br><br>
		<button>Add To Cart</button>
		<button>Add To Cart</button>
		<button>Add To Cart</button>
		<button>Add To Cart</button>
	</div>







	<!-- icon refrence -->

	<!-- 
		<a href="https://www.flaticon.com/free-icons/settings" title="settings icons">Settings icons created by Freepik - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/account" title="account icons">Account icons created by SBTS2018 - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/add-to-cart" title="add to cart icons">Add to cart icons created by Pixel perfect - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/hacker" title="hacker icons">Hacker icons created by Freepik - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/user" title="user icons">User icons created by Freepik - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/user" title="user icons">User icons created by Maxim Basinski Premium - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/female" title="female icons">Female icons created by Pixel perfect - Flaticon</a> 

		<a href="https://www.flaticon.com/free-icons/live-chat" title="live chat icons">Live chat icons created by Freepik - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/real-estate" title="real estate icons">Real estate icons created by Freepik - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/profile" title="profile icons">Profile icons created by ASP - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/edit" title="edit icons">Edit icons created by iconixar - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/hands-and-gestures" title="hands and gestures icons">Hands and gestures icons created by Iconpro86 - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/client" title="client icons">Client icons created by Kalashnyk - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/mail" title="mail icons">Mail icons created by Freepik - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/hold" title="hold icons">Hold icons created by lakonicon - Flaticon</a>

		<a href="https://www.flaticon.com/free-icons/smart-cart" title="smart cart icons">Smart cart icons created by rukanicon - Flaticon</a>
	-->
</body>
</html>