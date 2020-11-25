<?php

  require("includes/common.php");
		 
			

if(isset($_POST['submit']))
    {
				
                                
                                 
                               
                                $name=$_POST['name'];
				$bqrate=$_POST['rate'];
				$srate=$_POST['rate1'];
				$crate=$_POST['rate2'];
				$drate=$_POST['rate3'];
			
				$review_text=$_POST['review'];
                                $id=$_SESSION['customer_id'];
				
				
				$query="INSERT INTO reviews(restaurant_name,customer_id,status,restaurant_stars,food_taste_stars,food_quality_stars,customer_service_stars,review_text) VALUES ('$name','$id','Added','$bqrate','$srate','$crate','$drate','$review_text')";
                              
                                $result = mysqli_query($con, $query)or die($mysqli_error($con));
       
				
                              
	}
				

/*
$query = "SELECT * FROM ratings";
$result = mysqli_query($con, $query)or die($mysqli_error($con));


$count = mysqli_num_rows($result);
$sum=0.0;
while(count>0){
	$query = "SELECT orate FROM ratings";
$result = mysqli_query($con, $query)or die($mysqli_error($con));

	
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  echo "Please enter correct E-mail id and Password";
  
} else {  
  $row = mysqli_fetch_array($result);
  echo $num;
}
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
	}
	?>
	*/
       header('location:success.php');
        ?>