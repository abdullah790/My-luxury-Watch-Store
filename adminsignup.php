<?php
session_start();
   if(isset($_POST["submit"]))
   {
     $n=$_POST["uid"];
	 $p=$_POST["pass"];
	 
	 include_once("vars.php");
	 $c=mysqli_connect(host,uname,pass,db) or die (mysqli_connect_error($c));
	
	 /*$q="select user_id from register where user_id='$n' and password='$p'";
	 $q1="select username from admintable where username='$n'";
	 $r1=mysqli_query($c,$q1) or die(mysqli_error($c));
	 $ans1=mysqli_fetch_array($r1) or die(mysqli_error($c));
	 if(!empty($ans1[0]))
	 {
	 $_SESSION["admin"]=$n;
	 header("location:adminpanel.php");
	 }
	 $r=mysqli_query($c,$q) or die(mysqli_error($c));
	 $ans=mysqli_fetch_array($r) or die(mysqli_error($c));
	 if(empty($ans[0]))
	 {
	   $prt="<font color='red'>Wrong Username/Password</font>";
	 }
	 else 
	 {
	 	$_SESSION["uname"]=$n;
	   header("location:index.php");
	 }*/
	   $qu="insert into admintable(username,password) values('$n','$p')";
	 $res=mysqli_query($c,$qu) or die(mysqli_error($c));
	 $cnt=mysqli_affected_rows($c) or die(mysqli_error($c));
	 if($cnt==1)
	 {
		$msg= "New Admin Added Successfully";
	 }
	 else
	 {
		 $msg= "Error to Insert Please try Again Later";
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
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
<link rel="shortcut icon" href="image/favicon.ico">
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
	font-size: large;
	font-family: Arial, Helvetica, sans-serif;
}
.style15 {
	color: #990000;
	font-weight: bold;
	font-size: large;
	font-style: italic;
	font-family: Arial, Helvetica, sans-serif;
}
.style16 {font-family: Arial, Helvetica, sans-serif}
.style16 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body background="image/b1.jpg" >
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
    <td height="300" colspan="7" align="center" valign="top"><div align="left"><img src="image/bannerforsite.jpg" width="1200" height="300" /></div></td>
  </tr>
  <tr align="left">
    <td width="180" height="50"><a href="adminpanel.php"><img src="image/adminpanel.png" width="200" height="50" border="0" /></a></td>
    <td width="180" height="50"><a href="addcompany.php"><img src="image/addbrand.png" width="200" height="50" border="0" /></a></td>
    <td width="180" height="50"><a href="addproduct.php"><img src="image/addprod.png" width="200" height="50" border="0" /></a></td>
    <td width="180" height="50"><a href="adminsignup.php"><img src="image/ned.png" width="200" height="50" border="0" /></a></td>
   <td width="180" height="50"><a href="showfeedback.php"><img src="image/v_feed.png" width="200" height="50" border="0" /></a></td>
    <td width="180" height="50"><a href="showquery.php"><img src="image/v_query.png" alt="1" width="200" height="50" border="0"/></a></td>
  </tr>
  <tr align="left">
    <td height="50" colspan="6"><table width="100%" height="300" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="300" ><p align="center" class="style14">Create New Administrator Account </p>
            <p class="style15">ADMIN SIGN UP<img src="image/admin.png" alt="1" width="221" height="176" align="right" /></p>
          <form id="form1" name="form1" method="post" action="adminsignup.php" >
              <table width="70%" border="0" align="left">
                <tr>
                  <td width="19%">UserID</td>
                  <td width="30%"><input type="text" name="uid" id="uid" /></td>
                  <td width="19%"><input type="submit" name="check" id="check" value="Check Availability" /></td>
                  <td width="32%"><?php
						if(isset($_POST["check"]))
						{
							$n=$_POST["uid"];
							
							include_once("vars.php");
							$c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect($c));
							print $n;
							$q="select * from admintable where username='$n'";
							$r=mysqli_query($c,$q) or die(mysqli_error($c));
							$x=mysqli_fetch_array($r) or die(mysqli_error($c));
							if($x[0]==$n)
							{
								$msg=" Please Choose Different Username";
							}
							else 
							{
								$msg="Available";
							}
							
						}
					?></td>
                </tr>
				<tr>
					<td colspan="2"><div id="msg"></div></td>
				</tr>
                <tr>
                  <td>Password</td>
                  <td colspan="3"><input type="password" name="pass" id="pass" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td colspan="3"><label>
                    <input type="submit" name="submit" id="submit" value="Save"  onclick="return abc();"/>
                    </label>
                      <label>
                      <input type="submit" name="reset" id="reset" value="Cancel" />
                    </label></td>
                </tr>
                <tr>
                  <td></td>
                  <td colspan="3"><?php
				  if(isset($_POST["submit"]))
				  {
				  print $msg;
				  }
                  ?></td>
                </tr>
              </table>
          </form></td>
      </tr>
    </table></td>
  </tr>
  <tr align="left">
    <td height="50" colspan="6"><table width="100%" align="center" cellpadding="0" cellspacing="0">
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
        <td colspan="6" scope="row"><div align="center" class="style16"></div></td>
      </tr>
    </table></td>
  </tr>
</table><p>&nbsp;</p><p>&nbsp;</p>
<div align="center" class="style3 style11">					
					<p>© 2017 Luxury Watches. All Rights Reserved | Design by  <a href="#" target="_blank">Abdullah Ibrahim Haruna</a> </p>
				</div>
				<div class="clearfix"></div>

<p>&nbsp;</p>
</body>
</html>
