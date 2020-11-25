<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $customer_id = $_SESSION['customer_id'];
    $query1="SELECT price from menu where item_code=".$item_id;
    $result = mysqli_query($con, $query1)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $price=$row['price'];
    
     $query2="SELECT count(item_code) AS freq from orders_temp where item_code=".$item_id;
    $result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result2);
   $num=$row['freq'];
    if ($num == 0) {
    
        $query = "INSERT INTO orders_temp(customer_id, item_code,price,frequency_ordered, status) VALUES('$customer_id', '$item_id','$price','1', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $sql1="SELECT item_name from menu where item_code=".$item_id;
    
    $res2 = mysqli_query($con, $sql1)or die($mysqli_error($con));
    $row4 = mysqli_fetch_array($res2);
    $item_name=$row4['item_name'];
    $query = "INSERT INTO orders(customer_id, items_ordered,item_code,price,frequency_ordered,status) VALUES('$customer_id', '$item_name','$item_id','$price','1', 'Added to cart')";
    
    mysqli_query($con, $query) or die(mysqli_error($con));

   }
   else{
        $sql1="UPDATE orders_temp set frequency_ordered=frequency_ordered+1 where item_code=".$item_id;
        mysqli_query($con, $sql1) or die(mysqli_error($con));
        
        $sql12="UPDATE orders set frequency_ordered=frequency_ordered+1 where item_code=".$item_id;
        mysqli_query($con, $sql12) or die(mysqli_error($con));
        
        $sql2="UPDATE orders_temp set price=".$price."*frequency_ordered where item_code=".$item_id;
        mysqli_query($con, $sql2) or die(mysqli_error($con));
       
         $sql21="UPDATE orders set price=".$price."*frequency_ordered where item_code=".$item_id;
        mysqli_query($con, $sql21) or die(mysqli_error($con));
       
        
   }
     
   
   
   header('location: index.php');
}

?>   