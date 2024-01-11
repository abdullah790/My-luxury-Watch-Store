<?php
session_start();
if(!isset($_SESSION["uname"]))
	{
	header("location:sig.php");
	}
if(isset($_COOKIE["mycookie"]))
{
$_SESSION["uname"]=$_COOKIE["mycookie"];
header("location:welcome.php");
}
   if(isset($_POST["submit"]))
   {
   	$u=$_SESSION["uname"];
     $p1=$_POST["pass1"];
	 $p2=$_POST["pass2"];
	 if($p1==$p2)
	 {
	 include_once("vars.php");
	 $c=mysqli_connect(host,uname,pass,db) or die (mysqli_connect_error($c));
	
	 $q="update register set password='$p1' where user_id='$u'";
 	mysqli_query($c,$q) or die(mysqli_error($c));
	 
	   $msg="<font color='red'>Password Changed Successfully</font>";
	   }
	   else
	   {
	    $msg="<font color='red'>Password Doesnot Match</font>";
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
<!--
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
.style4 {color: #AA0000}
.style5 {
	color: #990033;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: large;
}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style15 {color: #003399}
.style16 {	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style16 {	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style17 {font-family: Arial, Helvetica, sans-serif}
.style17 {font-family: Arial, Helvetica, sans-serif}
.style18 {font-family: Arial, Helvetica, sans-serif}
.style18 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1200" height="335" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service:+8615502679107</span></div></td>
  </tr>
  <tr>
    <td height="25" colspan="8" align="center" valign="middle"><div align="right">
      <?php
	if(!isset($_SESSION["uname"]))
	{
	print " Welcome Guest, &nbsp; ";
	print "<a href='sig.php' style='text-decoration:none' >SignIn.&nbsp;</a>";
	print " New User? &nbsp; <a href='new.php' style='text-decoration:none'>Register</a>";
	}
	else 
	{
	print "Welcome ".$_SESSION["uname"] .",&nbsp;";
	print "&nbsp; <a href='signout.php?page=sig.php' style='text-decoration:none'>Signout</a>";
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td height="79" colspan="8" align="center" valign="top"><div align="left"><img src="image/bannerforsite.jpg" width="1200" height="300" /></div></td>
  </tr>
  
 <tr  align="left">
    <th width="180" scope="col"><a href="index.php"><img src="image/homenew.png" width="180" height="42" border="0" /></a></th>
    <th width="180" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="180" height="42" border="0" /></a></th>
    <th width="180"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="180" height="42" border="0" /></a></th>
    <th width="180"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="180" height="42" border="0" /></a></th>
    <th width="180" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="180" height="42" border="0" /></a></th>
    <th width="180"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="180" height="42" border="0" /></a></th>
    <th width="180"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="180" height="42" border="0" /></a></th>
  </tr>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" height="373" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="16%" height="33" align="center" bgcolor="#A0A0A4"><span class="style4">BRAND</span></td>
        <td rowspan="17" valign="top" ><form id="form1" name="form1" method="post" action="">
            <p>&nbsp;</p>
          <div align="center"></div>
          <table width="53%" height="185" border="0" align="center" >
              <tr>
                <td colspan="2" align="center" bgcolor="#999999"><span class="style5">Change Password</span></td>
              </tr>
              <tr>
                <td width="38%"><span class="style16">New Password</span></td>
                <td width="62%"><label>
                  <input type="password" name="pass1" id="pass1" />
                </label></td>
              </tr>
              <tr>
                <td><span class="style16">Confirm Password</span></td>
                <td><label>
                  <input type="password" name="pass2" id="pass2" />
                </label></td>
              </tr>
              <tr>
                <td><div align="right">
                    <input type="submit" name="submit" id="submit" value="Change Password" />
                </div></td>
                <td><input type="submit" name="reset" id="reset" value="Reset" /></td>
              </tr>
              <tr>
                <td height="31">&nbsp;</td>
                <td><?php
				  if(isset($_POST["submit"]))
				  {
				  print $msg;
				  }
                  ?></td>
              </tr>
            </table>
        </form></td>
      </tr>
      <tr valign="top">
        <td><div align="left"><a href="detail2.php?cname=samsung"  style="text-decoration:none; font-family: Arial, Helvetica, sans-serif;">Samsung</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=apple" style="text-decoration:none">Apple</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=audemars piguet" style="text-decoration:none">Audemars Piguet</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=hublot" style="text-decoration:none">Hublot</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=rolex" style="text-decoration:none">Rolex</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left"><a href="detail2.php?cname=omega" class="style11" style="text-decoration:none">Omega</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=casio" style="text-decoration:none">Casio</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left"><a href="detail2.php?cname=longines" class="style11" style="text-decoration:none">Longines</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left"><a href="detail2.php?cname=swatch" class="style11" style="text-decoration:none">Swatch</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left"><a href="detail2.php?cname=cartier" class="style11" style="text-decoration:none">Cartier</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=panerai luminor" style="text-decoration:none">Panerai Luminor</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=breitling" style="text-decoration:none">Breitling</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="detail2.php?cname=patek philippe" style="text-decoration:none">Patek Philippe</a></div></td>
      </tr>
      <tr valign="top">
        <td><div align="left" class="style11"><a href="showacc.php" style="text-decoration:none">Accessories</a></div></td>
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
        <td><div align="center" class="style3 style11"><a href="show.php" style="text-decoration:none">Show Rooms</a></div></td>
        <td><div align="center" class="style3 style11"><a href="service.php" style="text-decoration:none">Services</a></div></td>
      </tr>
      <tr>
        <td colspan="6" scope="row"><div align="center" class="style18"></div></td>
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
