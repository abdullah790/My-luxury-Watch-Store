<?php
session_start();

if(!isset($_SESSION["admin"]))
	{
		header("location:sig.php");
	}
	
?>	    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Luxury Watches " />
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="image/favicon.ico">
<title>Watch store</title>
<style type="text/css">
<!--
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style16 {color: #990000}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1200" height="326" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+8615502679107</span></div></td>
  </tr>
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><?php
	if(isset($_SESSION["uname"]))
	{
		print "Welcome ".$_SESSION["uname"] .",&nbsp;";
		print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	elseif(isset($_SESSION["admin"]))
	{
	print "Welcome ".$_SESSION["admin"] .",&nbsp;";
	print "<a href=changepassword.php>Change Password</a> &nbsp;";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	else 
	{
	print " Welcome Guest, &nbsp; ";
	print "<a href='sig.php' style='text-decoration:none' >SignIn.&nbsp;</a>";
	print " New User? &nbsp; <a href='new.php' style='text-decoration:none'>Register</a>";
	}
	?></div></td>
  </tr>
  <tr>
    <td height="79" colspan="8" align="center" valign="top"><div align="left"><img src="image/bannerforsite.jpg" width="1200" height="300" /></div></td>
  </tr>
  
 
      <tr align="left">
    <td width="200" height="50"><a href="adminpanel.php"><img src="image/adminpanel.png" width="200" height="50" border="0" /></a></td>
    <td width="200" height="50"><a href="addcompany.php"><img src="image/addbrand.png" width="200" height="50" border="0" /></a></td>
    <td width="200" height="50"><a href="addproduct.php"><img src="image/addprod.png" width="200" height="50" border="0" /></a></td>
    <td width="200" height="50"><a href="adminsignup.php"><img src="image/ned.png" width="200" height="50" border="0" /></a></td>
   <td width="200" height="50"><a href="showfeedback.php"><img src="image/v_feed.png" width="200" height="50" border="0" /></a></td>
    <td width="200" height="50"><a href="showquery.php"><img src="image/v_query.png" alt="1" width="200" height="50" border="0"/></a></td>
  </tr>
      <tr align="left">
        <td height="50" colspan="6"><table width="100%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
          <tr>
            <td height="29" valign="top" scope="col" ><h2 class="style16">ORDER DETAILS</h2>
                <?php
	if(isset($_GET["sid"]))
	{
      $sid=$_GET["sid"];
	  
      include_once("vars.php");
	  $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
	
	 $q="select * from shoppingtable where sessionid='$sid'";
	 $r1=mysqli_query($c,$q) or die(mysqli_error($c));
	print "<table width=1200px align='center' bgcolor='white'>";
	print "<tr>";
	print "<td  bgcolor='#F2F5FC'>Image </td>";
	print "<td bgcolor='#F2F5FC'>Name of Watch </td>";
	print "<td  bgcolor='#F2F5FC'>Price </td>";
	print "<td  bgcolor='#F2F5FC'>Qty </td>";
	print "<td  bgcolor='#F2F5FC'>Total </td>";
	
	print "</tr>";
	$sumprice=0;
	$sumqty=0;
	 while($ans1=mysqli_fetch_array($r1))
	 {
	    print "<tr>";
		print "<td ><a href=mobile/$ans1[4]><img src=mobile/$ans1[4] width=75px height=90px border=0></a></td>";
		print "<td  ><h4>$ans1[2]</h4></td>";
	 	print "<td  > $ans1[5] RMB</td>";
		print "<td  >$ans1[6] </td>";
		print "<td  > $ans1[7] RMB </td>";
	 
		$sumqty=$sumqty+$ans1[6];
		$sumprice=$sumprice+$ans1[5];
		
		print "</tr>";
	 	 }
		 print "<tr>";
		 print "<td>&nbsp;</td>";
		 print "<td>&nbsp;</td>";
		 print "<td  bgcolor='#F2F5FC'><b>Grand Total</b></td>";
		 print "<td  bgcolor='#F2F5FC'><b>$sumqty</b></td>";
		 print "<td  bgcolor='#F2F5FC'><b> $sumprice RMB</b></td>";
		print "</tr>";
	  print "</table>";
	  
}
?>
            </td>
          </tr>
        </table></td>
      </tr>
      <tr align="left">
        <td height="50" colspan="6"><table width="100%" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
            <td><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
            <td><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Condition</a></div></td>
            <td><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
            <td><div align="center" class="style3 style11"><a href="shoppingcart.php" style="text-decoration:none">Cart</a></div></td>
            <td><div align="center" class="style3 style11"><a href="center.php" style="text-decoration:none">Services</a></div></td>
          </tr>
          <tr>
            <td colspan="6" scope="row"><div align="center" class="style11"></div></td>
          </tr>
        </table></td>
      </tr>
</table><p>&nbsp;</p><p>&nbsp;</p>
<div align="center" class="style3 style11">					
					<p>© 2017 Luxury Watches. All Rights Reserved | Design by  <a href="#" target="_blank">Abdullah Ibrahim Haruna</a> </p>
				</div>

<p>&nbsp;</p>
</body>
</html>

