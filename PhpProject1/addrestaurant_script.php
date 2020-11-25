
<?php

require("includes/common.php");
$rid = $_POST['rid'];
$rid = mysqli_real_escape_string($con, $rid);

$rname = $_POST['rname'];
$rname = mysqli_real_escape_string($con, $rname);
$raddress = $_POST['raddress'];
$raddress = mysqli_real_escape_string($con, $raddress);

$rphone = $_POST['rphone'];
$rphone = mysqli_real_escape_string($con, $rphone);




$img_name = $_FILES['restopic']['name'];
 $query = "Insert into restaurant(restaurant_id,restaurant_name,restaurant_address,restaurant_phone,restaurant_image) values ('$rid','$rname','$raddress','$rphone','$img_name')";

mysqli_query($con, $query)or die($mysqli_error($con));
move_uploaded_file($_FILES['restopic']['tmp_name'], "img/" . $_FILES['restopic']['name']);
header('location:admin.php');
?>
