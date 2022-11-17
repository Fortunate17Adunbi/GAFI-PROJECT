<?php 


    //"<link rel='stylesheet' href='style.css'>";

    $con = mysqli_connect("localhost", "root", "", "gafi");

    	
	if(isset($_POST['submit'])){

        $image = $_GET['add'];

        if($con->errno)
        {
            die($con->error);
        }

        
		
        $query = "INSERT INTO add_to_cart
        VALUES(null,'$image')";
		$result = $con -> query($query);
		// var_dump("$result");exit

		if($result)
        {
            header("location:cart.php");
            
        }
		else{
			echo "<script>";
			echo "alert('unsuccessful');";
			echo "</script>";

		}
    }


    
 
    


  $sql = "SELECT  FROM all_clothes";
  $result = mysqli_query("$con", "$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($con);

  header("Content-type: image/jpeg");
  echo $row['content'];


   

  
            
            





?>
