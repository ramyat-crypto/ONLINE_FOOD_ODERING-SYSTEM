<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  require("includes/common.php");
$fname = $_POST['food_name'];
  $fname = mysqli_real_escape_string($con, $fname);
  $cost = $_POST['cost'];
  $cost = mysqli_real_escape_string($con, $cost);
  
  $cuisines = $_POST['cuisines'];
  $cuisines = mysqli_real_escape_string($con, $cuisines);
  $img_name=$_FILES['foodpic']['name'];
    $query="insert into menu(item_name,price,restaurant_name,foodimage) values('$fname','$cost','$cuisines','$img_name')";
    
   mysqli_query($con, $query)or die($mysqli_error($con));
    move_uploaded_file($_FILES['foodpic']['tmp_name'],"img/".$_FILES['foodpic']['name']);
    $message = "item added to menu";
      echo "<script type='text/javascript'>alert('$message');</script>";
    
        header('location:admin.php');
        
        ?>