<?php
session_start();
	if(!isset($_SESSION["uname"]))
		{
			$id=$_SESSION["id"];
			header("location:sig.php");
		}
		$sid=$_SESSION["sid"];
		if(isset($_SESSION["sid"]))
		{
		$sid=$_SESSION["sid"];
		
		include_once("vars.php");
		$c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
		
		 $q="select * from ordertable where sessionid='$sid'";
		 $r=mysqli_query($c,$q) or die(mysqli_error($c));
		 while($ans1=mysqli_fetch_array($r))
		 {
			$order=$ans1[0];
			$uname=$ans1[1];
			$paymode=$ans1[2];
			$address=$ans1[5];
		 }
		
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
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style13 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: x-large;
	color: #990000;
}
.style16 {
	font-family: "Courier New", Courier, monospace;
	color: #000000;
}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1002" height="324" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service: +8615502679107</span></div></td>
  </tr>
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right">
	<?php
	if(isset($_SESSION["uname"]))
	{
	print "Welcome ".$_SESSION["uname"] .",&nbsp;";
	print "&nbsp; <a href='changepassword.php' style='text-decoration:none'>Change Password</a>";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	elseif(isset($_SESSION["admin"]))
	{
	print "Welcome ".$_SESSION["admin"] .",&nbsp;";
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
 <tr  align="left">
    <th width="180" height="42" scope="col"><a href="index.php"><img src="image/homenew.png" width="180" height="42" border="0" /></a></th>
    <th width="180" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="180" height="42" border="0" /></a></th>
    <th width="180"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="180" height="42" border="0" /></a></th>
    <th width="180"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="180" height="42" border="0" /></a></th>
    <th width="190" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="190" height="42" border="0" /></a></th>
    <th width="120"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="140" height="42" border="0" /></a></th>
    <th width="120"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="140" height="42" border="0" /></a></th>
  </tr>
 <tr  align="left">
   <th height="42" colspan="7" scope="col"><table width="100%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
     <tr>
       <td height="29" valign="top" scope="col" ><p align="left" class="style10">Thanks for purchasing product from us , visit us again for more exciting new luxury watches and we will provide you more exciting offer .............</p>
           <p align="left" class="style10">your order no .
             <?php
	 if(isset($_SESSION["sid"]))
	 {
	 print "<font color='red'>$order</font>";
	 }
	 ?>
           </p>
         <p align="left" class="style10">Shipping Address is
           <?php
	 if(isset($_SESSION["sid"]))
	 {
	 print "<font color='red'>$address</font>";
	 }
	 ?>
         </p>
         <p align="left" class="style10">Your Product will be Delivered to you in next 7 working days...</p>
         <br />
           <center>
             <a href="welcome.php" >Click Here</a> to go back to homepage
           </center></td>
     </tr>
   </table></th>
  </tr>
 <tr  align="left">
   <th height="42" colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
     <tr>
       <td colspan="6">&nbsp;</td>
     </tr>
     <tr>
       <td width="7%"><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
       <td width="11%"><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
       <td width="21%"><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Condition</a></div></td>
       <td width="24%"><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
       <td width="21%"><div align="center" class="style3 style11"><a href="shoppingcart.php" style="text-decoration:none">Cart</a></div></td>
       <td width="16%"><div align="center" class="style3 style11"><a href="service.php" style="text-decoration:none">Services</a></div></td>
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

<p>&nbsp;</p>

<p>&nbsp;</p>
</body>
</html>
