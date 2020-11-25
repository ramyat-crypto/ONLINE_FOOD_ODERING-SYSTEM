<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require("includes/common.php");
$query5="delete from orders_temp";
mysqli_query($con, $query5)or die($mysqli_error($con)); 
$query6="delete from bill_temp";
mysqli_query($con, $query6)or die($mysqli_error($con));
 header('location: index.php');
?>