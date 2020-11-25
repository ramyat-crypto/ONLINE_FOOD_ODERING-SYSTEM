<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require("includes/common.php");

$user_id = $_SESSION['customer_id'];
$address = $_POST['delivery'];
$address = mysqli_real_escape_string($con, $address);
$query = "UPDATE customer SET delivery_address='".$address."' WHERE customer_id=" . $user_id ;

mysqli_query($con, $query) or die($mysqli_error($con));
header('location: success.php');
?>