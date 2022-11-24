<?php
	session_start();
	//if user have not log redirect to formpage
	if(!isset($_SESSION['username']))
	{
	 	header("location: yform.php");
	}
	//establish a connection to db
	$con = mysqli_connect("localhost", "root", "", "gafi");
	//if connection is not sucessful return the connection error
	if($con->errno)
	{
		die($con->error);
	}
	//checks if the submit button is clicked to execute the block of code
	if(isset($_POST['submit'])){
		//name of hidden field in the form which contain the source of the image as the value
        $image = $_POST['image'];
        if($con->errno)
        {
            die($con->error);
        }
		//putting product into table add_to_cart		
        $query = "INSERT INTO add_to_cart
        VALUES(null,'$image')";
		$result = $con-> query($query);
		//if it successfully added it to the db alert the user
        if($result)
        {
            echo '<script>alert("Product added to cart")</script>'; 
        }
		//if it did not add to the db alert the user
        else
        {
            echo '<script>alert("Unable to add product to cart")</script>';
        }
    }
    if(isset($_POST['submit1']))
    {
        //$image = $_POST['image'];
        $image = $_POST['image'];
        if($con->errno)
        {
            die($con->error);
        }
        $query = "INSERT INTO add_to_cart
        VALUES(null,'$image')";
		//the query returns false if not successful and true if not successful
        $result = $con->query($query);
        if($result)
        {
            echo  '<script>alert("Product added to cart")</script>';; 
        }
        else
        {
            echo '<script>alert("Unable to add product to cart")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel='stylesheet' href='userpage.css'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<style>
		[data-component="slideshow"] .slide {
		display: none;
		}
		[data-component="slideshow"] .slide.active {
		display: block;
		}  
  	</style>

	<script>
		function addtocart(obj){
			event.preventDefault();
			console.log(obj);
			alert(obj);
		}
	</script>
</head>
<body>
	<!-- QUICK DESCRIPTION -->
	<div class="animie">
		<h1>Welcome to GAFI:WE <span class="auto-type"></span></h1>
		
	</div>
	<!-- nav bar -->

	<div class="container-fluid">
		<ul class="nav nav-pills">
			<li class="nav-item" ><a href="#" class="nav-link active" aria-current="page">Home</a> </li>
			<li class="nav-item">Conatct</li>
			<li class="ms-auto nav-item">Cart</li>
			<li class="nav-item">log out</li>
		</ul>
	</div>

	<div class="main-div">
		<div class="category">
			<!-- DEALS AND COLLECTION -->
			<ul>
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
		<div class="des3">
			<p class="cat-d"><a href="mencat.html" class="see-more">Casuals</a></p>
		</div>
		<div class="straight-image">
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="casuals/1 (9).jpg" alt="" width="150px" height="200px" class="note rounded img-fluid"><br>
					<input type="hidden" name="image" value='<?php echo "casuals/1 (9).jpg"; ?>'>
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>					
				</form>
			</div>			
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="casuals/1 (7).jpg" alt="" width="150px" height="200px" class="note rounded img-fluid"><br>
					<input type="hidden" name="image" value='<?php echo "casuals/1 (2).jpg"; ?>'>
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>
				</form>
			</div>			
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="casuals/1 (3).jpg" alt="" width="150px" height="200px" class="note rounded img-fluid"><br>
					<input type="hidden" name="image" value='<?php echo "casuals/1 (3).jpg"; ?>'>
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>					
				</form>
			</div>		
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="casuals/1 (1).jpg" alt="" width="150px" height="200px" class="note rounded img-fluid"><br>
					<input type="hidden" name="image" value='<?php echo "casuals/1 (1).jpg"; ?>'>
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>					
				</form>
			</div>
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="casuals/1 (12).jpg" alt="" width="150px" height="200px" class="note rounded img-fluid"><br>
					<input type="hidden" name="image" value='<?php echo "casuals/1 (12).jpg"; ?>'>
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>					
				</form>
			</div>
			<!-- <div class="over">
				<img src="casuals/1 (13).jpg" alt="" width="150px" height="200px" class="note"><br>
				<button class="ano" type="submit" name="submit">Add To Cart</button>
			</div> -->		
		</div>
	</div>
	<div class="box-1">
		<!-- description -->
		<div class="des2">
			<p class="cat-d"><a href="mencat.html" class="see-more">Suits</a></p>
		</div>				
		<div class="straight-image">
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="img/1 (4).jpg" alt="" width="150px" height="200px" class="note rounded " name="image"><br>
					<input type="hidden" value ='<?php echo "image/1 (4).jpg"; ?>'  name="img">
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>
				</form>					
			</div>								
			<div class="over">
				<form action='userpage.php' method='post'>
					<img src="img/1 (12).jpg" alt="" width="150px" height="200px" class="note rounded " name="image"><br>
					<input type="hidden" name="image" value='<?php echo "img/1 (12).jpg"; ?>'>
					<button class="ano" type="submit" name="submit1"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>
				</form>				
			</div>					
			<div class="over">
				<form action="userpage.php" method="post">
					<input type="hidden" name="image" value='<?php echo "img/1 (13).jpg"; ?>'>
					<img src="img/1 (13).jpg" alt="" width="150px" height="200px" class="note rounded "><br>
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>					
				</form>
			</div>					
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="img/1 (9).jpg" alt="" width="200px" height="200px" class="note rounded "><br>
					<input type="hidden" name="image" value='<?php echo "img/1 (9).jpg"; ?>'>
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>				
				</form>
			</div>					
		</div>
	</div>
	<div class="box-1">	
		<!-- discription -->
		<div class="des">
			<p class="cat-d"><a href="mencat.html" class="see-more">Shoes</a></p>
		</div>
		<div class="straight-image">
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="shoe-collection/1 (1).jpg" alt="" width="150px" height="200px" class="note rounded "><br>
					<input type="hidden" name="image" value='<?php echo "shoe-collection/1 (1).jpg"; ?>'>
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>					
				</form>
			</div>			
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="shoe-collection/1 (5).jpg" alt="" width="150px" height="200px" class="note rounded "><br>
					<input type="hidden" name="image" value='<?php echo "shoe-collection/1 (3).jpg"; ?>'>
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>					
				</form>
			</div>		
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="shoe-collection/1 (11).jpg" alt="" width="150px" height="200px" class="note rounded "><br>
					<input type="hidden" name="image" value='<?php echo "shoe-collection/1 (11).jpg"; ?>'>
					<button class="ano" type="submit" name="submit" onclick="addtocart(this)"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;" title='hello'> Add To Cart 1</button>					
				</form>
			</div>			
			<div class="over">
				<form action="userpage.php" method="post">
					<img src="shoe-collection/1 (12).jpg" alt="" width="150px" height="200px" class="note rounded "><br>
					<input type="hidden" name="image" value='<?php echo "shoe-collection/1 (9).jpg"; ?>'>
					<button class="ano" type="submit" name="submit"><img src="https://cdn-icons-png.flaticon.com/512/3737/3737372.png" alt="Add to cart" width="20%" style="float: left;"> Add To Cart</button>					
				</form>
			</div>			
		</div>
	</div>
	<div class="">
		<p id="demo" class="down" style="margin-left: 100px;"></p>
	</div>

	<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">


		<div class="col mb-3">
			<a href="https://www.facebook.com/michael.adunbi"><img src="icon/facebook.png" alt="Facebook" width="30%"></a><br><br>	 		
			<a href="https://www.instagram.com/michaeladebayo627/"><img src="icon/instagram.png" alt="Instagram" width="30%"></a><br><br>						
			<a href="https://twitter.com/Michael80722231"><img src="icon/twitter.png" alt="Twitter" width="30%"></a>
		</div>

		<div class="col mb-3">
			<h5>Section</h5>
			<ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
			</ul>
		</div>

		<div class="col mb-3">
			<h5>Section</h5>
			<ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
			</ul>
		</div>

		<div class="col mb-3">
			<h5>Section</h5>
			<ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
			</ul>
		</div>


		
  	</footer>

		

      <!-- logo and descrtiption -->
      <!-- <div class="lgde">
       <p class="down"><img src="img\GAFI.png" alt="GAFI" width="20%"></p>
      </div> -->
	
			<!-- <div class="column">
				<h4>About us</h4>
				<ul>
					<li><a href="#">contact</a></li>
					<li><a href="#">about</a></li>
					<li><a href="#">contact</a></li>
					<li><a href="#">about</a></li>
				</ul>
			</div>
			<div class="column">
				<h4>follow us</h4>
				<div class="social-media">
						
					<a href="https://www.facebook.com/michael.adunbi"><img src="icon/facebook.png" alt="Facebook" width="5%"></a>			
					<a href="https://www.instagram.com/michaeladebayo627/"><img src="icon/instagram.png" alt="Instagram" width="5%"></a>						
					<a href="https://twitter.com/Michael80722231"><img src="icon/twitter.png" alt="Twitter" width="5%"></a>
				</div>

			</div> -->

			
		

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	<script src="userpage.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function(){
			// addtocart();
			$(".button").click(function(){
				alert('')
				$.post("demo_test_post.asp",
				{
					name: "Donald Duck",
					city: "Duckburg"
				},
				function(data, status){
					alert("Data: " + data + "\nStatus: " + status);
				});
			});
		})
	</script>
</body>
</html>




