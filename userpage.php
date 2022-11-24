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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<style>
    [data-component="slideshow"] .slide {
      display: none;
    }

    [data-component="slideshow"] .slide.active {
      display: block;
    }
  
  </style>
</head>
<body>

	<!-- QUICK DESCRIPTION -->
	<div class="animie">
		<h1>Welcome to GAFI:WE <span class="auto-type"></span></h1>
		
	</div>


	<!-- Top nav bar -->
	<header>
		<div class="bar">
			<!-- logo -->
			<div>
				<img src="img/GAFI.png" class="logo" alt="logo" >
			</div>

			<!-- middle -->
			<div class="elem">
				<a href="index.php" class="" alt="Home page" id='home'><img src="icon/home.png" alt="Home"  class='icon'></a>

				<a href="message.php" alt='Chat'><img src="icon/live-chat.png" alt="Chat" class="icon"></a>
				<a href="cart.php" alt="cart"><img src="icon/add-to-cart.png" alt="Add to cart" class="icon" ></a>
				<a href='logout.php' alt='log out' class="icon" id="log-out">log out</a>
				<img src="icon/user (4).png"  class="icon" alt="Profile" width='4%' height='4%'  >

				
			</div>

			</div>

			<!-- right -->
			
		</div>
	</header>


	<div class="main-div">
		<div class="category">
			<!-- DEALS AND COLLECTION -->
			<ul >
				<li>Men Category</li>
				<li>Women Category</li>
				<li>Children Category</li>
				<li>Unisex</li>
				<li>Shoe collection</li>
				<li>Casual</li>
				<li></li>
			</ul> 
		</div>

		<div id="slideshow-example" data-component="slideshow" class="olo">
			<div role="list" class="show">
				<div class="slide">
					<img src="img/gafi2.jpeg" alt="" width="400px" height="400px">
				</div>
				<div class="slide">
					<img src="img/GAFI.png" alt="" width="400px" height="400px">
				</div>
				<div class="slide">
					<img src="img/1 (48).jpg" alt="" width="400px" height="400px">
				</div>
			</div>
  		</div>
	</div>	
		
  	


		
	
	<div class="box-1">
		
		<!-- category description -->
		<h1 class="cat-d"><a href="mencat.html" class="see-more">Casuals</a></h1>	
		<div class="straight-image">

			<div class="over">
				<img src="casuals/1 (9).jpg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
			
			<div class="over">
				<img src="casuals/1 (2).jpg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
			
			<div class="over">
				<img src="casuals/1 (3).jpg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
			
			<div class="over">
				<img src="casuals/1 (1).jpg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>

			<div class="over">
				<img src="casuals/1 (12).jpg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>

			<div class="over">
				<img src="casuals/1 (13).jpg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
			
			
		</div>
	
		

		<!--
		-->

	</div>

	<div class="vee">

		<!-- description -->
		<div>
			<h1 class="cat-d"><a href="mencat.html" class="see-more">Suits</a></h1>
		</div>
		<div class="straight-image">
			<div class="over">
				<form action="cart.php" method="post">
					<input type="image" src="img/1 (4).jpg" alt="" class="note" name="add" width="150px" height="200px"><br>
					<button class="ano" type="submit" name="submit">Add To Cart</button>
				</form>
					
			</div>
			
					
			<div class="over">
				<img src="img/1 (12).jpg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
					
			<div class="over">
				<img src="img/1 (13).jpg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
					
			<div class="over">
				<img src="img/1 (9).jpg" alt="" width="200px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
					
		</div>
		

	</div>

	<div class="box-1">

		<!-- discription -->
		<h1 class="cat-d"><a href="mencat.html" class="see-more">Agbada</a></h1>

		<div class="straight-image">

			<div class="over">
				<img src="img/1 (10).jpeg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
			
			<div class="over">
				<img src="img/1 (38).jpeg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
		
			<div class="over">
				<img src="img/1 (41).jpeg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
			
			<div class="over">
				<img src="img/1 (39).jpeg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div>
			
			
		</div>
	</div>

	<div class="">
		<p id="demo" class="down" style="margin-left: 100px;"></p>
	</div>



	

    <footer>

      <!-- logo and descrtiption -->
      <div class="lgde">
       <p class="down"><img src="img\GAFI.png" alt="GAFI" width="20%"></p>
      </div>
	
	 

		<div >



			<div class="reference">
				<span id="reference">Reference</span>
				<ul style="width:10%; float:left;">
					<li>About us</li>
					<li>Report a problem</li>
					<li>contact</li>
				</ul>

				<ul style="width:10%; float:right;">
					<li>About us</li>
					<li>Report a problem</li>
					<li>contact</li>
				</ul>
			</div><br>

			<div class="social">
				<p class="sode">Follow us on our social media handles</p>

				<!-- facebook -->
				<a href="https://www.facebook.com/michael.adunbi"><img src="icon/facebook.png" alt="Facebook" width="5%"></a>

				<!-- instagram -->
				<a href="https://www.instagram.com/michaeladebayo627/"><img src="icon/instagram.png" alt="Instagram" width="5%"></a>

				<!-- twitter -->
				<a href="https://twitter.com/Michael80722231"><img src="icon/twitter.png" alt="Twitter" width="5%"></a>

			</div>
		
			
			
			

		</div><br>


		<div class="wat">
			<img src="icon\whatsapp (2).png" alt="What'sApp" width="4%"><span class="no">+2348149155926</span>
		</div>

		<div class="copy">
			&copy; 2022 GAFI
		</div>
    </footer>





	<!-- icon refrence -->

	<!-- 
		<a href="https://www.flaticon.com/free-icons/whatsapp" title="whatsapp icons">Whatsapp icons created by Freepik - Flaticon</a>
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

		<a href="https://www.flaticon.com/free-icons/whatsapp" title="whatsapp icons">Whatsapp icons created by Gregor Cresnar Premium - Flaticon</a>

    <a href="https://www.flaticon.com/free-icons/instagram" title="instagram icons">Instagram icons created by Pixel perfect - Flaticon</a>
		
    <a href="https://www.flaticon.com/free-icons/twitter" title="twitter icons">Twitter icons created by Md Tanvirul Haque - Flaticon</a>

    <a href="https://www.flaticon.com/free-icons/facebook" title="facebook icons">Facebook icons created by Ruslan Babkin - Flaticon</a>
    
    <a href="https://www.flaticon.com/free-icons/smart-cart" title="smart cart icons">Smart cart icons created by rukanicon - Flaticon</a>
	-->


	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	<script src="userpage.js"></script>
</body>
</html>