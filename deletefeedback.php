<?php
$a=$_GET["pid"];

include_once("vars.php");
$c=mysqli_connect(host,uname,pass,db)or die(mysqli_connect_error($c));

$q="delete from feedback where Sno=$a";
mysqli_query($c,$q) or die(mysqli_error($c));
header("location:showfeedback.php");
?>