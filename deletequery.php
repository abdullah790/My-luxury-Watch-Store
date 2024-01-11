<?php
$a=$_GET["pid"];

include_once("vars.php");
$c=mysqli_connect(host,uname,pass,db)or die(mysqli_connect_error($c));
print $a;
$q="delete from contact where sno=$a";
mysqli_query($c,$q) or die(mysqli_error($c));
$cnt=mysqli_affected_rows($c);
if($c==1)
{
	header("location:showquery.php");
}
else
{
	print "Item Not Delete Successfull Please Try Again Later";
}

?>