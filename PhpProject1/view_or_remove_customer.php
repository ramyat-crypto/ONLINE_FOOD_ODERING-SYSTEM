<?php
require("includes/common.php");
?>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> View/Remove Customer</title>

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
                        $query = "SELECT * FROM customer";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $num = mysqli_num_rows($result);
                        if ($num == 0) {
                                    echo "No Restaurants Available";
                               }
                               ?>
                         <br><br>
                            <thead style="margin-top: 50px">
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Customer email</th>
                                    <th>Customer Address</th>
                                    <th>Customer Phone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

              <?php  while ($row = mysqli_fetch_array($result)) {
             
                                    
                                    
                    echo "<tr><td>" . " " . $row['name'] . "</td><td>" . $row['email'] . "</td><td> Rs ".$row['address']."</td><td>" . $row['contact'] . "</td><td><a href='customer-remove.php?id={$row['customer_id']}' class='remove_item_link btn btn-block btn-danger' onclick='alert('item is removed successfully')'> <span class='glyphicon glyphicon-minus'></a></td></tr>";
                                        
                                    }
                                   
                             
                                 
                                ?>
                            </tbody>
                     
                       
                    </table>

             
                </div>
            </div>
        </div>

    
    
</body>
</html>


