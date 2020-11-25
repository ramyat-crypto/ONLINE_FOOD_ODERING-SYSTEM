<?php

require("includes/common.php");

$user_id = $_SESSION['customer_id'];


//We will change the status of the items purchased by the user to 'Confirmed'
$t=time();
$today=date("Y-m-d",$t);
$query = "UPDATE orders_temp SET status='Confirmed' WHERE customer_id=" . $user_id ;
mysqli_query($con, $query) or die($mysqli_error($con));
$query1 = "UPDATE orders SET status='Confirmed' WHERE customer_id=" . $user_id ;
mysqli_query($con, $query1) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Restaurant</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
       <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
       <div class="header">
            <nav class="navbar  navbar-fixed-top" style="background-color: orangered">
  <div class="container-fluid">
    <div class="navbar-header">
	<div  class="navbar-brand" style="padding-top:5px"><img src="img/snacks.jpg" height="45" width="60" > </div>
        <DIV  class="navbar-brand" ><b>Zotato</b></DIV>
          
    </div>
   
      <ul class="nav navbar-nav">
          <li ><a href="success.php"style="color:#000000">Home</a></li>
      </ul>
      
    <ul class="nav navbar-nav navbar-right">
		  <?php
                if (isset($_SESSION['email'])) {
                    ?>
		<li><a href="history.php"><span class="glyphicon glyphicon-tasks" style="color:#000000"></span><span class="icon-text" style="color:#000000"> Order History</span> </a></li>			
        <li><a href = "review.php"><span class = "glyphicon glyphicon-star" style="color:#000000"></span><span class="icon-text" style="color:#000000"> Feedback</span> </a></li>
        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"style="color:#000000"></span><span class="icon-text" style="color:#000000"> Settings</span></a></li>
        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in" style="color:#000000"></span><span class="icon-text" style="color:#000000"> Logout</span></a></li>
                    
                    <?php
                } else {
                    ?>
                    <li><a href="login.php"><i class="fa fa-shopping-cart fa-2x"></i> <span class="glyphicon glyphicon-log-in"style="color:#000000"></span> <span class="icon-text" style="color:#000000" >Login</span></a></li>
      
                 <li><a  href='signup.php'><i class="fa fa-user fa-2x"></i><span class="icon-text"> <span class="glyphicon glyphicon-user"style="color:#000000"></span><span class="icon-text" style="color:#000000">SignUp  </span> </a></li>
                        <?php
                    }
                    ?>
        
        
        
        
        
    </ul>
  </div>
</nav>
</div>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                      
                      <div class="container">	
                    <center>
                        <div id="banner_content2">
                            <h4>ORDER WILL BE DELIVERED AT</h4>
                     <?php
                     $customer_id = $_SESSION['customer_id'];
                        $query1="SELECT * from CUSTOMER where customer_id=".$customer_id;
                        $result1= mysqli_query($con, $query1)or die($mysqli_error($con));
                         $row1 = mysqli_fetch_array($result1);
                         $add=$row1['delivery_address'];
                         echo "<h4> #".$add."</h4><br>";
						 echo "order will be delivered to you within one hour. \n To purchase any other food item click on the link below."
                       ?>
                        </div>
                    </center>
                </div>
                      
                      
                        <p align="center">Click <a href="trunc.php">here</a> to purchase any other item.</p>
                      <div class="container">	
                    <center>
                        <div id="banner_content1">
                            <h4>BILL</h4>
                     <?php
                     $customer_id = $_SESSION['customer_id'];
                        $query1="SELECT total_amt,bill_id from bill_temp where customer_id=".$customer_id;
                        $result1= mysqli_query($con, $query1)or die($mysqli_error($con));
                         $row1 = mysqli_fetch_array($result1);
                         $id=$row1['bill_id'];
                         
                        $query12="update orders_temp set bill_id='$id' where customer_id=".$_SESSION['customer_id'];
                        
                        mysqli_query($con, $query12)or die($mysqli_error($con));
                        
                        $query23="select bill_id,order_id from orders_temp where customer_id=".$_SESSION['customer_id'];
                         $result23=mysqli_query($con, $query23)or die($mysqli_error($con));
                        
                      
                      
                        while($row=mysqli_fetch_array($result23)){
                              $billid=$row['bill_id'];
                        
                        $query12="update orders set bill_id='$billid' where order_id=".$row['order_id'];
                         $res= mysqli_query($con, $query12)or die($mysqli_error($con));
                            
                        }
                         echo "<h4> #".$id."</h4><br>";
                         
                          $price=$row1['total_amt'];
                          $query = "SELECT orders_temp.price AS Price,orders_temp.frequency_ordered As freq, menu.item_code AS pid, menu.item_name AS Name FROM orders_temp JOIN menu ON orders_temp.item_code = menu.item_code WHERE orders_temp.customer_id='$customer_id' and status='Confirmed'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {
                           
                            $pr=$row['Price'];
                            echo $row['Name']."        x       ".$row['freq']."                =          ".$pr."<br/>";
                            
          
                        }
                       echo "<br><h3>".$price."<h3><br>";
					  
						$query="select * from bill_temp";
						$res= mysqli_query($con, $query)or die($mysqli_error($con));
						$row1=mysqli_fetch_array($res);
                        $billid=$row1['bill_id'];    
						
                       echo "<a href='cancel.php?id=" . $billid . "' class='btn btn-success'>Cancel Order</a>"      
                         ?>
                        </div>
                    </center>
                </div>
                      
                      
                      
                   
                </div>
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>