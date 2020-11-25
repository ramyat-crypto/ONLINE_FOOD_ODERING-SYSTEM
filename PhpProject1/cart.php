<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Restaurant</title>
         <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
         
        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                   
                         $user_id=$_SESSION['customer_id']; 
mysqli_multi_query ($con, "CALL itemdetails('$user_id')") OR DIE (mysqli_error($con));
   


       if ($result = mysqli_store_result($con)) {?>
                         <br><br>
                            <thead style="margin-top: 50px">
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

              <?php  while (mysqli_more_results($con)&&$row = mysqli_fetch_assoc($result)) {
             
                                    $sum+= $row["Price"];
                                    
                                    $id = $row["pid"] . ", ";
                                        echo "<tr><td>" . "#" . $row["pid"] . "</td><td>" . $row["Name"] . "</td><td>".$row["freq"]."</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link btn btn-block btn-danger'> <span class='glyphicon glyphicon-minus'></a></td></tr>";
                                        
                                    }
                                   
                                if($sum==0){
                                    header('location:index.php');
                                }
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='payments.php?price=" . $sum . "' class='btn btn-danger'>Confirm Order</a></td></tr>";
                                 
                                ?>
                            </tbody>
                     <?php
                      mysqli_free_result($result);
                         mysqli_next_result($con);
                        }
                       
  
                        ?>
                       
                    </table>

             
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>