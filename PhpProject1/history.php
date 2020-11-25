<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Order History| Restaurant</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
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
                    <li><a href = "feedback.php"><span class = "glyphicon glyphicon-star" style="color:#000000"></span><span class="icon-text" style="color:#000000"> Feedback</span> </a></li>
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
            
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        
                             
                        $query = "SELECT * FROM orders where customer_id=".$_SESSION['customer_id'];
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $num = mysqli_num_rows($result);
                        if($num==0){
                            echo "No orders available";
                        }
                       
                               ?>
                         <br><br>
                            <thead style="margin-top: 50px">
                                <tr>
                                    <th>Order id</th>
                                    <th>Item Ordered</th>
                                    <th>Frequency Ordered</th>
                                    <th>Price</th>
                                    
                                    <th>status</th>
                                    <th>Ordered Time</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

              <?php  while ($row = mysqli_fetch_array($result)) {
             
                   $query1 = "SELECT * FROM customer where customer_id=".$row['customer_id'];
                   
                   $result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
                       
                        $row1 = mysqli_fetch_array($result1); 
                        $name=$row1['name'];
                                    
                    echo "<tr><td>" . "#" . $row['order_id'] . "</td><td>" . $row['items_ordered'] . "</td><td>". $row['frequency_ordered'] . "</td><td>". $row['price'] . " Rs</td><td>".$row['status']."</td><td>" . $row['ordered_time'] . "</td></tr>";
                                        
                                    }
                                   
                             
                                 
                                ?>
                            </tbody>
                     
                       
                    </table>

             
                </div>
            </div>
        </div>
	
	</body>
</html>