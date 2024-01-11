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
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
<style type="text/css">
<!--
.style4 {color: #AA0000}
.style5 {
	color: #990033;
	font-family: Arial, Helvetica, sans-serif;
}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style15 {color: #003399}
.style16 {
	color: #CC0000;
	font-weight: bold;
}
.style17 {	font-size: large;
	font-weight: bold;
}
.style18 {color: #7F7FFF}
.style22 {color: #666666}
.style23 {font-family: Arial, Helvetica, sans-serif}
.style23 {font-family: Arial, Helvetica, sans-serif}
.style24 {font-family: Arial, Helvetica, sans-serif}
.style24 {font-family: Arial, Helvetica, sans-serif}
.style25 {font-family: Arial, Helvetica, sans-serif}
.style25 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1200" height="987" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="right" valign="middle"><span class="style12">24x7 Customer service: +8615502679107</span></td>
  </tr>
  <tr>
    <td height="23" colspan="8" align="right" ><?php
	if(!isset($_SESSION["uname"]))
	{
	print "<font color=gray> Welcome Guest, &nbsp; ";
	print "<a href='sig.php' style='text-decoration:none; color:gray'>SignIn.&nbsp;</a>";
	print " New User? &nbsp; <a href='new.php' style='text-decoration:none;color:gray'>Register</a></font>";
	}
	else 
	{
	print "<span class='style22'>Welcome ".$_SESSION["uname"] .",&nbsp;";
	print "&nbsp; <a href='changepassword.php?page=index.php' style='text-decoration:none;color:gray'>Change Password</a>";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none;color:gray'>Signout</a></span>";
	
	}
	?></td>
  </tr>
  <tr>
    <td height="300" colspan="8" align="center"><img src="image/bannerforsite.jpg" width="1200" height="300" /> </td>
  </tr>
<tr  align="left">
    <th width="171" scope="col"><a href="index.php"><img src="image/homenew.png" width="171" height="42" border="0" /></a></th>
    <th width="171" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="171" height="42" border="0" /></a></th>
    <th width="171"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="171" height="42" border="0" /></a></th>
    <th width="171"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="171" height="42" border="0" /></a></th>
    <th width="171" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="171" height="42" border="0" /></a></th>
    <th width="171"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="171" height="42" border="0" /></a></th>
    <th width="171"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="171" height="42" border="0" /></a></th>
  </tr>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" height="598" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tr>
          <td width="16%" height="37" align="center" bgcolor="#A0A0A4"><span class="style4">BRAND</span></td>
          <td rowspan="17" valign="top" ><p class="style17">About us</p>
              <hr />
              <div align="right" class="style18"><h3>IBRAHIM ABDULLAH HARUNA, FOUNDER, LUXURY WATCHES .INC</h3></div>
            <strong align="left"><h2>Landscape of the E-commerce market</strong>
              <p align="justify"><h2>In   the early days the Chinese Watch Retailing industry was highly fragmented with no organized retail players. Luxury watches were expensive (an average price of 6999 RMB per watch), with the grey market players dominating the market. There were no branded showrooms to showcase an entire range of products.</p>
            <p><h2>The watchWorld format is a <strong>one stop watch website</strong> that provides, multi brand Watches, accessories etc all under one. Key thrust areas for the retail format are: Comprehensive Product Range, Competitive Prices and watch Repairs.</p>
            <p><h2>The watchWorld has undertaken an extensive training program to equip all its employees with in-depth knowledge of the products and brands available at the store, thereby allowing them to provide the right kind of guidance to the customer.</p>
            <p><h2>The watchWorld has categorized its watch device offerings into consumer segments keeping in mind the profiles and needs of different consumers. <strong>Value for Money</strong> - Special offers, discounts and budget watches. </p>
            <p><h2>All major Watch brands like Samsung, Apple, Audemars Piguet, Hublot, Rolex, Omega, Casio, Longines, Swatch, Cartier, Panerai Luminor and Breitling are available here.</p></td>
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
          <td><div align="center" class="style3 style11"><a href="shoppingcart.php" style="text-decoration:none">Cart</a></div></td>
          <td><div align="center" class="style3 style11"><a href="service.php" style="text-decoration:none">Services </a></div></td>
        </tr>
        <tr>
          <td colspan="6" scope="row"><div align="center" class="style24"></div></td>
        </tr>
    </table></th>
  </tr>
<tr></tr>
</table>
<p>&nbsp;</p><p>&nbsp;</p>
<div align="center" class="style3 style11">					
					<p>© 2017 Luxury Watches. All Rights Reserved | Design by  <a href="#" target="_blank">Abdullah Ibrahim Haruna</a> </p>
				</div>
				<div class="clearfix"></div>

<p>&nbsp;</p>
</body>
</html>
