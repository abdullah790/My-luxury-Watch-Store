<?php
session_start();


if(isset($_SESSION["uname"]))
{
	
	header("location:welcome.php");
}
   if(isset($_POST["submit"]))
   {
   	 $n=$_POST["uid"];
	 $p=$_POST["pass"];
	 
	 include_once("vars.php");
	 $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
	 
	 $q="select user_id from register where user_id='$n' and password='$p'";
	 $q1="select username from admintable where username='$n'";
	 $r1=mysqli_query($c,$q1) or die(mysqli_error($c));
	 $ans1=mysqli_fetch_array($r1);
	 if(!empty($ans1[0]))
	 {
	 $_SESSION["admin"]=$n;
	 header("location:adminpanel.php");
	 }
	 $r=mysqli_query($c,$q);
	 $ans=mysqli_fetch_array($r);
	 if(empty($ans[0]))
	 {
	   $prt="<font color='red'>Wrong Username/Password</font>";
	 }
	 else 
	 {
	  if(isset($_POST["remember"]))
	 {
	 setcookie("mycookie",$n,time()+24*60*60*7);
	 }
		$_SESSION["uname"]=$n;
		if(isset($_SESSION["pid"]))
		{
 	 $id=$_SESSION["pid"];
	 header("location:shoppingcart.php");
		}
	elseif(isset($_SESSION["id"]))
		{
 	 $id=$_SESSION["id"];
	header("location:shoppingcart.php");
		}
	else
	{
	header("location:welcome.php");
	}	
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
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style15 {color: #003399}
.style16 {
	color: #CC0000;
	font-weight: bold;
}
.style17 {font-family: Arial, Helvetica, sans-serif}
.style17 {font-family: Arial, Helvetica, sans-serif}
.style18 {font-family: Arial, Helvetica, sans-serif}
.style18 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body >
<table width="1200" height="300" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service: +8615502679107</span></div></td>
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
	print "&nbsp; <a href='changepassword.php' style='text-decoration:none'>Change Password</a>";
	print "&nbsp; <a href='signout.php?page=sig.php' style='text-decoration:none'>Signout</a>";
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td height="300" colspan="8"><img src="image/bannerforsite.jpg" width="1200" height="300" /></td>
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
 <tr  align="left">
   <th colspan="7" scope="col"><table width="100%" height="376" border="0" align="center" cellpadding="0" cellspacing="0" >
     <tr>
       <td width="16%" height="36" align="center" bgcolor="#A0A0A4"><span class="style4">BRAND</span></td>
       <td rowspan="17" valign="top" ><p align="center" class="style16">PLEASE REGISTER WITH US FOR PURCHASING ANY WATCH OR ANY OTHER ACCESSORIES</p>
           <form id="form1" name="form1" method="post" action="">
        
             <table width="56%" height="288" border="0" align="center" >
               <tr>
                 <td colspan="2" align="center" bgcolor="#999999"><span class="style5">SIGN IN</span></td>
               </tr>
               <tr>
                 <td><span class="style6">User ID</span></td>
                 <td><label>
                   <input type="text" name="uid" id="uid" />
                 </label></td>
               </tr>
               <tr>
                 <td><span class="style6">Password</span></td>
                 <td><label>
                   <input type="password" name="pass" id="pass" />
                 </label></td>
               </tr>
               <tr>
                 <td colspan="2"><label>
                   <input type="checkbox" name="remember" id="remember" />
                   Remember Me</label></td>
               </tr>
               <tr>
                 <td colspan="2"><div align="left">
                     <input type="submit" name="submit" id="submit" value="Sign In" />
                     <input type="submit" name="reset" id="reset" value="Cancel" />
                 </div></td>
               </tr>
               <tr>
                 <td height="22">&nbsp;</td>
                 <td><?php
				  if(isset($_POST["submit"]))
				  {
				  print $prt;
				  }
                  ?></td>
               </tr>
               <tr>
                 <td colspan="2"><div align="left">New to WatchWorld? It's free and easy<a href="new.php" style="text-decoration:none"> <img src="image/sign4.jpg" alt="22" width="26%" height="9%" border="0" /></a></div></td>
               </tr>
               <tr>
                 <td colspan="2"><label></label>                 </td>
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
 <tr  align="left">
   <th colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
     <tr bgcolor="#FFFFFF">
       <td colspan="6"><marquee direction="left" behavior="alternate" >
          <img src="image/ap2.jpg" alt="g" width="140" height="140" border="0" /><img src="image/ap1.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/h2.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/h1.jpg" alt="g" width="140" height="140" border="0" /><img src="image/ca2.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/ca1.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/sw10.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/c-1.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/ap10.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/s-1.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/sw2.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/sw1.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/l2.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/l1.jpg" alt="g" width="140" height="140" border="0" />
          </marquee></td>
     </tr>
     <tr>
       <td colspan="6">&nbsp;</td>
     </tr>
     <tr>
       <td><div align="center" class="style3 style11"><a href="index.php" style="text-decoration:none">Home</a></div></td>
       <td><div align="center" class="style3 style11"><a href="about.php" style="text-decoration:none">About Us</a></div></td>
       <td><div align="center" class="style3 style11"><a href="term.php" style="text-decoration:none">Term &amp; Conditions</a></div></td>
       <td><div align="center" class="style3 style11"><a href="contact.php" style="text-decoration:none">Contact Us</a></div></td>
       <td><div align="center" class="style3 style11"><a href="shoppingcart.php" style="text-decoration:none">Cart</a></div></td>
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

<p>&nbsp;</p>

<p>&nbsp;</p>
</body>
</html>
