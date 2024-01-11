<?php
session_start();
$a=$_GET["pid"];
$sid=$_SESSION["sid"];

include_once("vars.php");
$c=mysqli_connect(host,uname,pass,db)or die(mysqli_connect_error($c));

$q="delete from shoppingacc where acc_id=$a and sessionid='$sid'";
mysqli_query($c,$q) or die(mysqli_error($c));
header("location:shoppingcartacc.php");
?>