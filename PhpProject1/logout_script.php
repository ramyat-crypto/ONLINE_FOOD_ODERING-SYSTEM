<?php
require_once("includes/common.php");
                            
                             
                             
                           
$query5="DELETE FROM orders_temp";
mysqli_query($con, $query5)or die($mysqli_error($con)); 
$query6="DELETE FROM bill_temp";
                            mysqli_query($con, $query6)or die($mysqli_error($con));

if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
session_destroy();
header('location: index.php');
?>