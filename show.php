<?php
session_start();
if (isset($_POST["submit"]))
{
		
	  $sn=$_SESSION["statename"];
     $ct=$_POST["city"];
	 header("location:addresslocation.php?pid=$ct");
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
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style14 {
	color: #990000;
	font-weight: bold;
}
.style15 {font-size: large}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1200" height="300" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+8615502679107</span></div></td>
  </tr>
  <tr>
    <td height="25" colspan="8" align="center" valign="middle"><div align="right"><?php
	if(!isset($_SESSION["uname"]))
	{
	print " Welcome Guest, &nbsp; ";
	print "<a href='sig.php' style='text-decoration:none' >SignIn.&nbsp;</a>";
	print " New User? &nbsp; <a href='new.php' style='text-decoration:none'>Register</a>";
	}
	else 
	{
	print "Welcome ".$_SESSION["uname"] .",&nbsp;";
	print "&nbsp; <a href='changepassword.php' style='text-decoration:none'>Change Password</a>";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	?></div></td>
  </tr>
  <tr>
    <td height="79" colspan="8" align="center" valign="top"><div align="left"><img src="image/bannerforsite.jpg" width="1200" height="300" /></div></td>
  </tr>
  
   <tr  align="left">
    <th width="171" scope="col"><a href="index.php"><img src="image/homenew.png" width="171" height="42" border="0" /></a></th>
    <th width="171" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="172" height="42" border="0" /></a></th>
    <th width="171"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="171" height="42" border="0" /></a></th>
    <th width="171"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="172" height="42" border="0" /></a></th>
    <th width="171" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="171" height="42" border="0" /></a></th>
    <th width="171"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="171" height="42" border="0" /></a></th>
    <th width="171"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="171" height="42" border="0" /></a></th>
  </tr>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="29" scope="col" ><p class="style14 style15">&nbsp;</p>
            <p class="style14 style15">Show All Store Address</p>
          <form action="show.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <table width="50%" border="0">
                <tr>
                  <td width="25%">State Name</td>
                  <td width="75%"><label>
                    <select name="sname" id="sname">
                      <option>--select state--</option>
                      <?php
			  include_once("vars.php");
			  $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
			 
			  $q="select state_name from storetable";
			  $r=mysqli_query($c,$q) or  die(mysqli_error($c));
			  while($ans=mysqli_fetch_array($r))
			  {
			  print "<option>$ans[0]</option>";
			  }
			 
			  ?>
                    </select>
                    <input type="submit" name="go" id="go" value="Go" />
                  </label></td>
                </tr>
                <tr>
                  <td>City Name</td>
                  <td><label>
                    <select name="city" id="city">
                      <option>--select city--</option>
                      <?php
			   if(isset($_POST["go"]))
			   {
			   $sn=$_POST["sname"];
			   $_SESSION["statename"]=$sn;
			    
				include_once("vars.php");
				$c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
			 
			  $q="select city_id,city_name from citytable where state_name='$sn'";
			  $r=mysqli_query($c,$q) or die(mysqli_error($c));
			  while($ans=mysqli_fetch_array($r))
			  {
			  print "<option value=$ans[0]>$ans[1]</option>";
			  }
			 
			  }
			  ?>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="submit" id="submit" value="Show" />
                  </label></td>
                </tr>
              </table>
          </form>
          <p class="style14 style15">&nbsp;</p>
          <p class="style14 style15">&nbsp;</p></td>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
        <td><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
        <td><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Condition</a></div></td>
        <td><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
        <td><div align="center" class="style3 style11"><a href="shoppingcart.php" style="text-decoration:none">Cart</a></div></td>
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

<p>&nbsp;</p>
</body>
</html>
