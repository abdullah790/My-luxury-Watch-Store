<?php
$a=$_GET["uid"];

include_once("vars.php");
$c=mysqli_connect(host,uname,pass,db)or die(mysqli_connect_error($c));

$q="delete from register where user_id='$a'";
mysqli_query($c,$q) or die(mysqli_error($c));
header("location:showmem.php");
?>