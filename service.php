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
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #AA0000}
.style7 {color: #AA0000; font-weight: bold; }
.style5 {
	color: #990033;
	font-family: Arial, Helvetica, sans-serif;
}
.style6 {
	color: #003399;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style14 {color: #FF0033}
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
    <td height="29" colspan="8" align="center" valign="middle"><div align="right">
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
	print "&nbsp; <a href='changepassword.php' style='text-decoration:none'>Change Password</a>";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	?>
    </div></td>
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
    <th width="171"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="172" height="42" border="0" /></a></th>
    <th width="171"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="171" height="42" border="0" /></a></th>
  </tr>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" border="0" align="center" cellpadding="4" cellspacing="5" bgcolor="#FEFEFF">
      <tr>
        <td height="29" scope="col"><p><img src="image/repair.gif" alt="1" width="150" height="151" align="left" /></p>
            <p align="justify" class="style11">&nbsp;</p>
          <p align="left">&nbsp;</p>
          <fieldset>
            <legend><strong>About Repairs</strong></legend>
            The WatchWorld is a One Stop Service Shop concept where all your watch service - be repairs , change of accessories  would be taken care. Keeping customers convenience and satisfaction as our priority
            </p>
            <p align="left">We offer complete service solutions through integrated process to fulfill and enhance service level commitments with  ,The WatchWorld assured repair warranty  and ensure end to end service management for our esteemed customers. </p>
            <p align="left">The WatchWorld also offers Extended Warranty  for your Luxury Watch, free check up and clean up of your Luxury watch.</p>
            <p align="left">Click to read <a href="term.php" style="text-decoration:none">Terms &amp; Conditions</a></p>
            </fieldset>
          <p align="left"><img src="image/services.jpg" alt="1" width="140" height="243" align="left" /></p>
          <div id="maincenterContent">
              <fieldset>
                <legend><strong>24 X 7 Customer Service</strong></legend>
                <p>The WatchWorld   believes in providing an enriching experience for all its customers   both pre and post sales and has a 24*7 customer support in this regard.  The 24*7 customer support is a one stop touch point for all enquiries,  requests and complaints. The contact center ensures that the issues   raised by customers are escalated to the concerned and resolved.<br />
                  It has two numbers via which the customers can reach The WatchWorld Contact center: <br />
                  <strong>19872089188 - Toll Free <br />
                    15598760851 - for local cities</strong></p>
              </fieldset>
          </div>
          <div id="maincenterContent2">
              <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><img src="image/services.jpg" alt="1" width="140" height="243" align="left" /></p>
            <fieldset>
              <legend><strong>Watch Club</strong></legend>
              <p><strong>The WatchWorld Loyalty Program</strong> </p>
              </p>
              <p>Welcome to the World of WatchClub- The WatchWorld Loyalty Program.   Enhance the pleasure of shopping with exclusive offers from The WatchWorld. As a member get special benefits and great deals.</p>
              <p>With WatchClub you can stay updated on the latest offers, new launches, previews and lots more.</p>
              <p>So join the WatchClub and become a privileged member.</p>
              </fieldset>
          </div></td>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" align="center" cellpadding="4" cellspacing="5">
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

<p>&nbsp;</p>
</body>
</html>
