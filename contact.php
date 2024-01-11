<?php
session_start();
    if(isset($_POST["submit"]))
	{
	$n=$_POST["name"];
	$eml=$_POST["email"];
	$phn=$_POST["phone"];
	$q=$_POST["query"];
	
	include_once("vars.php");
	$con=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($con));
	
	$q="insert into contact(name,email_id,phone_number,query) values('$n','$eml','$phn','$q')";
	mysqli_query($con,$q) or die(mysqli_error($con));
	$p= "<font color='red'>Thanks For Contacting Us</font>";
	
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
.style13 {
	color: #990000;
	font-weight: bold;
}
.style14 {
	color: #0A4066;
	font-size: 36px;
}
-->
</style>
<script type="text/javascript">
function abc()
{
	x=document.form1.name.value
	if(x=="" || x==" " || x== null)
	{
		alert("Name Not entered");
		return false;
	}
	var x=document.forms["form1"]["email"].value
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	  {
	  alert("Not a valid e-mail address");
	  return false;
  	  }
	if(document.form1.phone.value=="")
	{
		alert("Phone Number Not entered");
		return false;
	}
	if(document.form1.query.value=="")
	{
		alert("Please Give Suggestion ");
		return false;
	}
}
</script>
</head>

<body background="image/b1.jpg" >
<table width="1200" height="309" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service: +8615502679107</span></div></td>
  </tr>
  <tr>
    <td height="25" colspan="8" align="center" valign="middle"><div align="right">
      <?php
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
    <th height="27" colspan="7" scope="col"><table width="86%" height="" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="17%" >&nbsp;</td>
        <td width="64%"><p align="center" class="style14">Contact Us </p>
            <p align="center">FILL THE CONTACT FOR CAREFULLY</p>
          <form id="form1" name="form1" method="post" action="contact.php" onsubmit="return abc()">
              <table width="78%" border="0" align="center">
                <tr>
                  <td align="right">NAME: </td>
                  <td><label>
                    <input type="text" name="name" id="name" />
                  </label></td>
                </tr>
                <tr>
                  <td align="right">EMAIL-ID: </td>
                  <td><label>
                    <input type="text" name="email" id="email" />
                  </label></td>
                </tr>
                <tr>
                  <td align="right">PHONE NO.: </td>
                  <td><label>
                    <input type="text" name="phone" id="phone" />
                  </label></td>
                </tr>
                <tr>
                  <td align="right">QUERY/SUGGESTION: </td>
                  <td><label>
                    <textarea name="query" id="query" cols="45" rows="5"></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                    <input type="submit" name="submit" id="submit" value="Submit" />
                    </label>
                      <label>
                      <input type="submit" name="reset" id="reset" value="Reset" />
                    </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><?php
               		if (isset($_POST["submit"]))
					{
					print $p;
					}
                  ?></td>
                </tr>
              </table>
          </form>
          <p align="center">&nbsp;</p>
          </p>
            <p>&nbsp;</p></td>
        <td width="19%" >&nbsp;</td>
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
        <td><div align="center" class="style3 style11"><a href="shoppingcart.php" style="text-decoration:none">Cart</a></div></td>
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
