<?php
session_start();
if (isset($_POST["submit"]))
{
  $tn=$_POST["tname"];
      
	  
	  include_once("vars.php");
	  $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
	
	 $q="select * from addacc where type_of_accessory='$tn'";
	 $r1=mysqli_query($c,$q) or die(mysqli_error($c));
	
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
.style14 {
	color: #990000;
	font-weight: bold;
}
.style15 {font-size: large}
.style16 {
	font-size: x-large;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1200" height="587" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service: +8615502679107</span></div></td>
  </tr>
  <tr>
    <td height="25" colspan="8" align="center" valign="middle"><div align="right"><?php
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
    <td height="300" colspan="8"><img src="image/bannerforsite.jpg" width="1200" height="300" /></td>
  </tr>
 <tr  align="left">
    <th width="171" scope="col"><a href="index.php"><img src="image/homenew.png" width="171" height="43" border="0" /></a></th>
    <th width="171" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="171" height="43" border="0" /></a></th>
    <th width="171"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="171" height="43" border="0" /></a></th>
    <th width="171"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="171" height="43" border="0" /></a></th>
    <th width="171" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="171" height="43" border="0" /></a></th>
    <th width="171"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="171" height="43" border="0" /></a></th>
    <th width="171"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="171" height="43" border="0" /></a></th>
  </tr>
  <tr>
    <td height="79" colspan="8" align="center" valign="top"><table width="100%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="29" scope="col" ><p class="style14 style15">&nbsp;</p>
            <p class="style14 style16">Show All Accessories</p>
          <form action="accdetail.php" method="get" enctype="multipart/form-data" name="form1" id="form1">
              <table width="40%" border="0">
                <tr>
                  <td width="42%">Type Of Accessory</td>
                  <td width="58%"><label>
                    <select name="tname" id="tname">
                      <?php
			 include_once("vars.php");
			  $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
			 
			  $q="select type_of_accessory from accessorytype";
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
    </table></td>
  </tr>
  <tr>
    <td height="79" colspan="8" align="center" valign="top"><table width="100%" align="center" cellpadding="0" cellspacing="0">
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
    </table></td>
  </tr>

  
   <?php
  if(isset($_SESSION["uname"]))
	{

 print" </tr>";
  }
  elseif(isset($_SESSION["admin"]))
	{
	print "<tr>";
/*  <!--  print "<th width=11% height=27 scope=col><div align=center class=style11>
      <div align=center class=style11><strong><a href=adminpanel.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext541423208.png border=0/></a></strong></div>
    </div></th>";
print " <th width=9% scope=col><div align=center class=style11>
      <div align=center class=style11><strong><a href=addcompany.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext541416046.png  border=0/></a></strong></div>
    </div></th>";
  print "  <th width=15% scope=col><span class=style11><strong><a href=addproduct.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext541416241.png  border=0/></a></strong></span></th>";
print" <th width=22% scope=col><div align=center class=style11><strong><a href=adminsignup.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext541416649.png  border=0/></a></strong></div></th>";
print "    <th width=14% scope=col><div align=center class=style11><strong><a href=showfeedback.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext541416261.png  border=0/></a></strong></div></th>";
   print " <th width=14% scope=col><div align=left class=style11><strong><a href=showquery.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext541416560.png  border=0/></a></strong></div></th>";

print  "</tr>";-->*/
   print" <td width='171' height='38'><a href='adminpanel.php'><img src='image/adminpanel.png' width='171' height='43' border='0' /></a></td>";
   print" <td width='171' height='38'><a href='addcompany.php'><img src='image/addbrand.png' width='171' height='43' border='0' /></a></td>";
  print"  <td width='171' height='38'><a href='addproduct.php'><img src='image/addprod.png' width='171' height='43' border='0' /></a></td>";
 print"   <td width='171' height='38'><a href='adminsignup.php'><img src='image/ned.png' width='171' height='43' border='0' /></a></td>";
  print" <td width='171' height='38'><a href='showfeedback.php'><img src='image/v_feed.png' width='171' height='43' border='0'/></a></td>";
print"    <td width='171' height='38'><a href='showquery.php'><img src='image/v_query.png' alt='1' width='171' height='43' border='0'/></a></td>";
 print"   <th width='171' scope='col'><a href='addresslocation.php'><a href='location.php'><img src='image/addnewcity.png' width='171' height='43' border='0' /></a></a></th>";
print"  </tr>";
  }
  else
  {
 print " <tr>";
  /* print " <th width=11% height=27 scope=col><div align=center class=style11>
      <div align=center class=style11><strong><a href=index.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext540786623.png  border=0/></a></strong></div>
    </div></th>";
print "    <th width=9% scope=col><div align=center class=style11>
      <div align=center class=style11><strong><a href=mobiles.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext540786804.png  border=0/></a></strong></div>
    </div></th>";
print "    <th width=15% scope=col><span class=style11><strong><a href=showacc.php style=color:#D40000 ;TEXT-DECORATION: NONE><img src=image/cooltext540787021.png  border=0/></a></strong></span></th>";
print"    <th width=22% scope=col><div align=center class=style11><strong><a href=showbyprice.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext540787137.png border=0/></a></strong></div></th>";
print "    <th width=14% scope=col><div align=center class=style11><strong><a href=showbyword.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext542181746.png  border=0/></a></strong></div></th>";
print "    <th width=14% scope=col><div align=center class=style11><strong><a href=sig.php style=color:#D40000 ; TEXT-DECORATION: NONE><img src=image/cooltext540787428.png  border=0/></a></strong></div></th>";
print "    <th width=15% scope=col><div align=center class=style11><a href=feedback.php style=color:#D40000;TEXT-DECORATION: NONE><img src=image/cooltext540787500.png  border=0></a></strong></div></th>";
 print" </tr>";*/
/* print "  <th width='171' scope='col'><a href='index.php'><img src='image/homenew.png' width='171' height='43' border='0'/></a></th>";
print "  <th width='171' scope='col'><a href='index.php'><img src='image/brands.png' width='171' height='43' border='0'/></a></th>";
print "  <th width='171' scope='col'><a href='index.php'><img src='image/accessories.png' width='171' height='43' border='0'/></a></th>";
print "  <th width='171' scope='col'><a href='index.php'><img src='image/search-by-price.png' width='171' height='43' border='0'/></a></th>";
print "  <th width='171' scope='col'><a href='index.php'><img src='image/keyword.png' width='171' height='43' border='0'/></a></th>";
print "  <th width='171' scope='col'><a href='index.php'><img src='image/myaccount.png' width='171' height='43' border='0'/></a></th>";
print "  <th width='171' scope='col'><a href='index.php'><img src='image/feedback.png' width='171' height='43' border='0'/></a></th>";
 print" </tr>";*/
  }
  ?>
</table><p>&nbsp;</p><p>&nbsp;</p>
<div align="center" class="style3 style11">					
					<p>© 2017 Luxury Watches. All Rights Reserved | Design by  <a href="#" target="_blank">Abdullah Ibrahim Haruna</a> </p>
				</div>

<p>&nbsp;</p>
</body>
</html>
