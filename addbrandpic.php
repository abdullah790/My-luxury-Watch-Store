<?php

session_start();
   if(isset($_POST["submit"]))
   {
     $cn=$_POST["cname"];
     if($_FILES["image"]["name"]!="")
	 {
	 $img=$_FILES["image"]["name"];
	 move_uploaded_file($_FILES["image"]["tmp_name"],"logo/" . $_FILES["image"]["name"]);
	 }
	 else
	 {
	 $_FILES["image"]["name"]="noimage.gif";
	 $img=$_FILES["image"]["name"];
	 }		
	 include_once("vars.php");
	 $c=mysqli_connect(host,uname,pass,db) or die (mysqli_connect_error($c));
	 
	 $q="insert into brandpic(company_name,image) values ('$cn','$img')";
	 mysqli_query($c,$q) or die(mysqli_error($c));
	 $prt="<font color='red'>Logo added Successfully</font>";
	 
	   
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

<body  >
<table width="1200" height="300" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="7" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service: +8615502679107</span></div></td>
  </tr>
  <tr>
    <td height="25" colspan="7" align="center" valign="middle"><div align="right">
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
    <td height="300" colspan="7" align="center" valign="top"><div align="center"><img src="image/bannerforsite.jpg" width="1200" height="300" /></div></td>
  </tr>
  <tr>
    <td width="171" height="42"><a href="adminpanel.php"><img src="image/adminpanel.png" width="171" height="42" border="0" /></a></td>
    <td width="171" height="42"><a href="addcompany.php"><img src="image/addbrand.png" width="171" height="42" border="0" /></a></td>
    <td width="171" height="42"><a href="addproduct.php"><img src="image/addprod.png" width="171" height="42" border="0" /></a></td>
    <td width="171" height="42"><a href="adminsignup.php"><img src="image/ned.png" width="171" height="42" border="0" /></a></td>
   <td width="171" height="42"><a href="showfeedback.php"><img src="image/v_feed.png" width="171" height="42" border="0" /></a></td>
    <td width="171" height="42"><a href="showquery.php"><img src="image/v_query.png" alt="1" width="172" height="42" border="0"/></a></td>
    <th width="171" scope="col"><a href="addresslocation.php"><a href="location.php"><img src="image/addnewcity.png" width="172" height="42" border="0" /></a></th>
  </tr>
  <tr>
    <td height="42" colspan="7"><table width="100%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="29" scope="col" ><p class="style14 style15">&nbsp;</p>
            <p class="style14 style15">ADD NEW BRAND PICTURE</p>
          <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
              <table width="70%" border="0">
                <tr>
                  <td>Company Name</td>
                  <td><label>
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
			 
			  ?>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td>Image</td>
                  <td><label>
                    <input type="file" name="image" id="image" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="submit" id="submit" value="Save" />
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><?php
            if(isset($_POST["submit"]))
			{
			print "$prt";
			}
			?>
                  </td>
                </tr>
              </table>
          </form>
          <p class="style14 style15">&nbsp;</p>
          <p class="style14 style15">&nbsp;</p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="42" colspan="7"><table width="100%" align="center" cellpadding="0" cellspacing="0">
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
</table>
<p>&nbsp;</p><p>&nbsp;</p>
<div align="center" class="style3 style11">					
					<p>© 2017 Luxury Watches. All Rights Reserved | Design by  <a href="#" target="_blank">Abdullah Ibrahim Haruna</a> </p>
				</div>
				<div class="clearfix"></div>
<p>&nbsp;</p>
</body>
</html>
