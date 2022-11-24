<?php 
    $con = mysqli_connect("localhost", "root", "", "gafi");
    if($con->errno)
    {
        die($con->error);
    }
    //Getting all data from add_to_cart
    $query = "SELECT * FROM add_to_cart";
    $result = $con->query($query);
    //var_dump($result2);
    //exit;
    if($result->num_rows > 0)
    {  
        while($row = $result->fetch_object())
        {
            //var_dump($row);
            echo "<br>";
            echo "<img src='$row->image' width='20%'>";
            echo "<br>";   
        }
    }
 
    


 

   

  
            
            





?>
