<?php
$a=$_GET["pid"];
$b=$_GET["tname"];

include_once("vars.php");
$c=mysqli_connect(host,uname,pass,db)or die(mysqli_connect_error($c));

$q="delete from addacc where Sno=$a";
mysqli_query($c,$q);
header("location:accdetail.php?tname=$b");
?>