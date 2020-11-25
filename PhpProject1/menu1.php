<?php
require("includes/common.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
 $rid = $_GET['id'];

$query1 = "SELECT restaurant_name FROM restaurant WHERE restaurant_id=".$rid;
$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
$row1=mysqli_fetch_array($result1); 
 $name=$row1['restaurant_name'];
 
$query = "SELECT * FROM menu WHERE restaurant_name='".$name."'";

$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num == 0) {
    echo "No Menu Available";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menu| Udupi Park</title>
          <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         <script src="myjs.js"></script>

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

    <body >
        <?php
        include 'includes/header.php';
        include 'includes/Check-if-added.php';
        ?>
        <div class="container" id="content"style="padding-top:20px" >
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron" style="background:url('img/pat.jpg')">
                <center><?php echo "<h1 style='color:white'> Welcome to Zotato !</h1>"; ?></center>
                <p style="color:white">We have the best food,snacks and meals for you. No need to hunt around, we have all in one place.</p>

            </div>
            <hr>
            
            <?php while ($row = mysqli_fetch_array($result)) {?>
    
                <div class="col-md-3 col-sm-6 home-feature" style="padding-top: 30px">
                   
                       
                    
                        <div class="caption" style="background-color: cyan" >
                            <center><div  style="padding-top:20px"><img src="img/<?php echo $row['foodimage'];?>" height="340" width="250" > </div></center>
                            <center><?php echo "<h3> ".$row['item_name']."</h3>"; ?></center>
                            <center> <?php echo "<p> Price:".$row['price'].".00 Rs</p>"; ?></center>
                            
                            <?php 
                            
                            if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-danger btn-block">Buy Now</a></p>
                                <?php
                                
                            } else {
                               
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart( $id=$row['item_code'])) {//This is same as if(check_if_added_to_cart != 0)
                                        
                                    ?> 
                                    <a href="cart-add.php?id=<?php echo $id;?>" class="btn btn-block btn-success" active> <span class="glyphicon glyphicon-plus"></a>
                                    
                                    
                                    
                               <?php } else {
                                    ?>
                                 <a href="cart-add.php?id=<?php echo $id;?>" name="add" value="add" class="btn btn-block btn-danger">Add to cart</a>
                                   
                                 
                                   
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
            
            
<?php }

                               } ?>
            
        </div>  
        <br><br>
        <?php include("includes/footer.php"); ?>
    </body>

</html>
