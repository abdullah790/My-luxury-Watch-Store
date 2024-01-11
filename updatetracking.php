<?php
session_start();

if(!isset($_SESSION["admin"]))
	{
		header("location:sig.php");
	}
	 if(isset($_POST["submit"]))
   {
     $on=$_POST["orderno"];
     $status=$_POST["status"];
    
	 include_once("vars.php");
	 $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
	
	 $q="insert into trackorder(orderno,status) values ('$on','$status')";
	 mysqli_query($c,$q) or die(mysqli_error($c));
	 $prt="<font color='red'>Order Added</font>";
	   
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
<table width="1200" height="370" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+8615502679107</span></div></td>
  </tr>
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><?php
	if(isset($_SESSION["admin"]))
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
    <td height="300" colspan="8" align="center" valign="top"><div align="left"><img src="image/bannerforsite.jpg" width="1200" height="300" /></div></td>
  </tr>
  
  <tr>
    <th width="15%" height="27" scope="col"><div align="center" class="style11">
      <div align="center" class="style11"><strong><a href="adminpanel.php" style="color:#D40000 ;TEXT-DECORATION: NONE"><img src="image/adminpanel.png" width="200" height="42" /></a></strong></div>
    </div></th>
    <th width="15%" scope="col"><div align="center" class="style11">
      <div align="center" class="style11"><strong><a href="addcompany.php" style="color:#D40000 ;TEXT-DECORATION: NONE"><img src="image/addbrand.png" width="200" height="42" /></a></strong></div>
    </div></th>
    <th width="16%" scope="col"><span class="style11"><strong><a href="addproduct.php" style="color:#D40000 ;TEXT-DECORATION: NONE"><img src="image/addprod.png" width="200" height="42" /></a></strong></span></th>
    <th width="15%" scope="col"><div align="center" class="style11"><strong><a href="adminsignup.php" style="color:#D40000 ; TEXT-DECORATION: NONE"><img src="image/ned.png" width="200" height="42" /></a></strong></div></th>
    <th width="16%" scope="col"><div align="center" class="style11"><strong><a href="showfeedback.php" style="color:#D40000 ; TEXT-DECORATION: NONE"><img src="image/v_feed.png" width="200" height="42" /></a></strong></div></th>
    <th width="23%" scope="col"><div align="left" class="style11"><strong><a href="showquery.php" style="color:#D40000 ; TEXT-DECORATION: NONE"><img src="image/v_query.png" width="200" height="42" /></a></strong></div></th>
  </tr>
  <tr>
    <th height="27" colspan="6" scope="col"><table width="75%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
      <?php
	   
	   include_once("vars.php");
	   $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
			
			  $q="select * from ordertable";
			  $r=mysqli_query($c,$q) or die(mysqli_error($c));
			if(mysqli_num_rows($r)==0)
			{
				print "<h2>Currently No orders. Check after some time </h2>";
			}
	  
	  ?>
      <div id="showresults">
        <td height="29" valign="top" scope="col" ><h2 class="style16"> ORDER STATUS</h2>
            <form id="form1" name="form1" method="post" action="">
              <table width="500" border="0" cellspacing="0" cellpadding="5">
                <tr>
                  <td>Order No.</td>
                  <td><label>
                    <select name="orderno" id="orderno">
                      <?php
			  
			  include_once("vars.php");
			  $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
			
			  $q="select orderno from ordertable";
			  $r=mysqli_query($c,$q) or die(mysqli_error($c));
			  while($ans=mysqli_fetch_array($r))
			  {
			  print "<option>$ans[0]</option>";
			  }
			
			  ?>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td><label>
                    <select name="status" id="status">
                      <option>Money not received</option>
                      <option>You Product Item Ready for shipment</option>
                      <option>You Product Item is In Transit</option>
                      <option>You Product Item Delivered</option>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="submit" id="submit" value="Update Status" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><?php if(isset($_POST["submit"]))
		  	{
				print $prt;
				}
			 ?>
                    &nbsp;</td>
                  
                </tr>
              </table>
            </form>
              </div>
          <p>&nbsp;</p></td>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th height="27" colspan="6" scope="col"><table width="75%" align="center" cellpadding="0" cellspacing="0">
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
        <td><div align="center" class="style3 style11"><a href="show.php" style="text-decoration:none">Show Rooms</a></div></td>
        <td><div align="center" class="style3 style11"><a href="center.php" style="text-decoration:none">Services</a></div></td>
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

