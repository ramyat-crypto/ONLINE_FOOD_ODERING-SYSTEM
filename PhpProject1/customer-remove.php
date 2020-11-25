<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET["id"];
     $query = "DELETE FROM customer WHERE customer_id='$id' ";
     mysqli_query($con, $query) or die($mysqli_error($con));
     
     $message = "item deleted from menu";
      echo "<script type='text/javascript'>alert('$message');</script>";
     
      header('location:admin.php');
}
?>