<?php
session_start();
if (isset($_POST["submit"]))
{
session_start();
	  $cn=$_POST["cname"];
      
	  include_once("vars.php");
	  $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
	
	 $q="select * from producttable where company_name='$cn'";
	 $r1=mysqli_query($c,$q) or die(mysqli_error($c));
	 print "<table width=1200px >";
	 print "<tr>";
	 print "<td >Name of Watch </td>";
 	 print "<td >Price </td>";
 	 print "<td  >Image </td>";
	 print "<td >Features</td>";
	 print "</tr>";
	
	 while($ans1=mysqli_fetch_array($r1))
	 {
	  print "<tr>";
	 print "<td  >$ans1[2]</td>";
	 print "<td  >$ans1[3]</td>";
	 print "<td><img src=mobile/$ans1[4] width=90px height=75px></td>";
	 print "<td><a href=details.php?pid=$ans1[1]>Click here</a></td>";
    print "</tr>";
	 }

	  print "</table>";
	 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="image/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MobileWorld-Best Mobile Phone Deals, Buy Mobile Phones, Cell Accessories</title>
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
<table width="1002" height="322" align="center" cellpadding="0" cellspacing="0">
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
    <th width="180" height="42" scope="col"><a href="index.php"><img src="image/homenew.png" width="180" height="42" border="0" /></a></th>
    <th width="180" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="180" height="42" border="0" /></a></th>
    <th width="180"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="180" height="42" border="0" /></a></th>
    <th width="180"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="180" height="42" border="0" /></a></th>
    <th width="172" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="172" height="42" border="0" /></a></th>
    <th width="172"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="172" height="42" border="0" /></a></th>
    <th width="172"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="172" height="42" border="0" /></a></th>
  </tr>
<tr  align="left">
  <th height="35" colspan="7" scope="col"><table width="100%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
    <tr>
      <td height="29" scope="col" ><p class="style14 style15">&nbsp;</p>
          <p class="style14 style15">Show All Product</p>
        <form action="detail1.php" method="get" enctype="multipart/form-data" name="form1" id="form1">
            <table width="37%" border="0">
              <tr>
                <td width="35%">Company Name</td>
                <td width="65%"><label>
                  <select name="cname" id="cname">
                    <?php
					
					include_once("vars.php");
			  $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
			 
			  $q="select company_name from companytable";
			  $r=mysqli_query($c,$q);
			  while($ans=mysqli_fetch_array($r))
			  {
			  print "<option>$ans[0]</option>";
			  }
			  mysqli_close($c);
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
<tr  align="left">
  <th height="35" colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
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

<p>&nbsp;</p>
</body>
</html>
