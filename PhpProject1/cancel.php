<?php
require("includes/common.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
 $oid = $_GET['id'];

$status="Cancelled";
$query1 = "UPDATE orders set status='".$status."' where bill_id=".$oid;

mysqli_query($con, $query1)or die($mysqli_error($con));

$status1="Payment Rebounced";
$query2="UPDATE bill set status='".$status1."' where bill_id=".$oid;

mysqli_query($con, $query2)or die($mysqli_error($con));

header('location:trunc.php');
}
?>