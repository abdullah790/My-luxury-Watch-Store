<?php
session_start();
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
.style5 {
	color: #990033;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
-->
</style>
<style type="text/css">
<!--
.style3 {
	font-weight: bold;
	color: #FF0000;
}
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	color: #CC0000;
	font-weight: bold;
	font-size: small;
}
.style20 {
	font-size: x-large;
	color: #990000;
}
.style22 {font-weight: bold; color: #FF0000; font-family: Arial, Helvetica, sans-serif; }
.style24 {
	font-weight: bold;
	color: #FF0000;
	font-size: small;
}
.style25 {font-size: small}
-->
</style>
</head>
</head>

<body background="image/b1.jpg" >
<table width="1200" height="300" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service: +8615502679107</span></div></td>
  </tr>
  <tr>
    <td height="24" align="center" valign="middle"><div align="right">
      <?php
	if(isset($_SESSION["admin"]))
	{
	print "Welcome ".$_SESSION["admin"] .",&nbsp;";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	else 
	{
	header("location:sig.php");
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td height="79" align="center" valign="top">
     <img src="image/bannerforsite.jpg" width="1200" height="300" />    </td>
  </tr>
  <tr>
    <th height="36" scope="col"><table width="75%" height="75%" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="29" scope="col" ><p align="center" class="style5 style20"><img src="image/cooltext544925530.gif" alt="1" width="475" height="51" /></p>
            <p align="justify" class="style3"><span style="font-family: Arial, Helvetica, sans-serif"><span style="font-size: medium"><span style="font-size: small"><a href="addcompany.php" style="color:#D40000 ;TEXT-DECORATION: NONE">Add Brand</a></span></span></span><span class="style25"> / <span class="style22"><a href="addbrandpic.php" style="color:#D40000 ;TEXT-DECORATION: NONE">Add Brand Logo</a></span></span></p>
          <p align="justify" class="style3 style11 style25"><strong><a href="addproduct.php" style="color:#D40000 ;TEXT-DECORATION: NONE">Add Product</a></strong></p>
          <p align="justify" class="style3 style11 style25"><strong><a href="showfeedback.php" style="color:#D40000 ;TEXT-DECORATION: NONE">View Feedback</a></strong></p>
          <p align="justify" class="style3 style11 style25"><strong><a href="showproduct.php" style="color:#D40000 ;TEXT-DECORATION: NONE">Update/Delete Product</a></strong></p>
          <p align="justify" class="style3 style11 style25"><strong><a href="showquery.php" style="color:#D40000 ;TEXT-DECORATION: NONE">View Queries</a></strong></p>
          <p align="justify" class="style3 style11 style25"><strong><a href="adminsignup.php" style="color:#D40000 ;TEXT-DECORATION: NONE">New Admin signup</a></strong></p>
          <p align="justify" class="style3 style11 style25"><strong><a href="addstore.php" style="color:#D40000 ;TEXT-DECORATION: NONE">Add New State</a></strong></p>
          <p align="justify" class="style3 style11 style25"><a href="location.php" style="color:#D40000 ;TEXT-DECORATION: NONE">Add New City</a></p>
          <p align="justify" class="style3 style11 style25"><a href="typeacc.php" class="style11" style="color:#D40000 ;TEXT-DECORATION: NONE; color: #CC0000; font-weight: bold;">Add Type of Accessory</a></p>
          <p align="justify" class="style3 style11 style25"><a href="addacc.php" class="style11" style="color:#D40000 ;TEXT-DECORATION: NONE; color: #CC0000; font-weight: bold;">Add Accessories</a></p>
          <p align="justify" class="style3 style11 style25"><a href="showacc.php" class="style11" style="color:#D40000 ;TEXT-DECORATION: NONE; color: #CC0000; font-weight: bold;">View/Delete Accessory</a></p>
          <p align="justify" class="style3 style11 style25"><a href="showmem.php" class="style11" style="color:#D40000 ;TEXT-DECORATION: NONE; color: #CC0000; font-weight: bold;">View Members</a></p>
          <p align="justify" class="style24"><a href="orderdetail.php" class="style11" style="color:#D40000 ;TEXT-DECORATION: NONE; color: #CC0000; font-weight: bold;">View Order details</a></p>
          <p align="justify" class="style6"><a href="updatetracking.php" class="style11" style="color:#D40000 ;TEXT-DECORATION: NONE; color: #CC0000; font-weight: bold;"> Order Tracking</a> / <a href="updateordertracking.php" class="style11" style="color:#D40000 ;TEXT-DECORATION: NONE; color: #CC0000; font-weight: bold;">Update Order Tracking</a></p></td>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th height="26" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
        <td><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
        <td><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Condition</a></div></td>
        <td><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
        <td><div align="center" class="style3 style11"><a href="show.php" style="text-decoration:none">Show Rooms</a></div></td>
        <td><div align="center" class="style3 style11"><a href="service.php" style="text-decoration:none">Services</a></div></td>
      </tr>
      <tr>
        <td colspan="6" scope="row"><div align="center" class="style11"></div></td>
      </tr>
    </table></th>
  </tr>
</table><p>&nbsp;</p><p>&nbsp;</p>
<div align="center" class="style3 style11">					
					<p>© 2017 Luxury Watches. All Rights Reserved | Design by  <a href="#" target="_blank">Abdullah Ibrahim Haruna</a> </p>
				</div>
				<div class="clearfix"></div>

<p>&nbsp;</p>
</body>
</html>
