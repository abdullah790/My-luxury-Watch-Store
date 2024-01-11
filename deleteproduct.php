<?php
session_start();
$a=$_GET["id"];
$b=$_SESSION["companyname"];

include_once("vars.php");
$c=mysqli_connect(host,uname,pass,db)or die(mysqli_connect_error($c));

$q="delete from producttable where product_id=$a";
mysqli_query($c,$q) or die(mysqli_error($c));
header("location:detail1.php?cname=$b");
?>