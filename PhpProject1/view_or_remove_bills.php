<?php
require("includes/common.php");
?>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> View/Remove Orders</title>

         <link rel="stylesheet" href="adminstyle.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
<body id="page-top">
          <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="admin.php">admin</a>
      
      <a class="navbar-brand mr-1" href="logout_script.php">LOGOUT</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
 </nav>
    <div class="container-fluid" id="content">
            
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        
                             
                        $query = "SELECT * FROM bill";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $num = mysqli_num_rows($result);
                        if($num==0){
                            echo "No bills available";
                        }
                       
                               ?>
                         <br><br>
                            <thead style="margin-top: 50px">
                                <tr>
                                    <th>Bill id</th>
                                    <th>Customer Name</th>
                                    <th>Total Amount</th>
                                    <th>Type of Payment</th>
                                    <th>Time of Billing</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

              <?php  while ($row = mysqli_fetch_array($result)) {
             
                   $query1 = "SELECT * FROM customer where customer_id=".$row['customer_id'];
                   
                   $result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
                       
                        $row1 = mysqli_fetch_array($result1); 
                        $name=$row1['name'];
                                    
                    echo "<tr><td>" . "#" . $row['bill_id'] . "</td><td>" . $name . "</td><td>"."</td><td>" . $row['total_amt'] . " Rs</td><td>  ". "</td><td>" . $row['type_of_payment'] .$row['time_of_purchase']. "</td><td><a href='bill-remove.php?id={$row['bill_id']}' class='remove_item_link btn btn-block btn-danger' onclick='alert('item is removed successfully')'> <span class='glyphicon glyphicon-minus'></a></td></tr>";
                                        
                                    }
                                   
                             
                                 
                                ?>
                            </tbody>
                     
                       
                    </table>

             
                </div>
            </div>
        </div>

    
    
</body>
</html>