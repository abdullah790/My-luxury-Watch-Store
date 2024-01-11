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
.style5 {
	color: #990033;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style12 {color: #660033}
.style16 {
	font-size: x-large;
	color: #CC0000;
}
.style17 {color: #990000}
.style15 {font-size: large}
-->
</style>
</head>

<body background="image/b1.jpg" >
<table width="1002" height="330" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="8" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service: +8615502679107</span></div></td>
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
    <td height="222" colspan="7" align="center" valign="top"><img src="image/bannerforsite.jpg" width="1200" height="300" /></td>
  </tr>
  
 
 <tr  align="left" bordercolor="#F30000">
    <th width="180" scope="col"><a href="index.php"><img src="image/homenew.png" width="180" height="42" border="0" /></a></th>
    <th width="180" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="180" height="42" border="0" /></a></th>
    <th width="180"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="180" height="42" border="0" /></a></th>
    <th width="180"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="180" height="42" border="0" /></a></th>
    <th width="190" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="190" height="42" border="0" /></a></th>
    <th width="150"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="150" height="42" border="0" /></a></th>
    <th width="140"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="140" height="42" border="0" /></a></th>
  </tr>
  <tr  align="left">
    <th colspan="7" scope="col"><table width="100%" height="495" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="16%" height="33" align="center" bgcolor="#A0A0A4"><span class="style4 style17">BRAND</span></td>
        <td width="84%" rowspan="17" valign="top" scope="col" ><p align="left" class="style5 style16 style17">Show All Product </p>
            <form action="" method="post" enctype="multipart/form-data" name="form1">
		    	  <table width="84%" border="0">
		    	    <tr>
		    	      <td width="45%"><span class="style11">Enter Minimum Price</span></td>
		    	      <td width="55%"><label>
		    	        <input type="text" name="price" id="price" />
		    	        </label></td>
	    	        </tr>
		    	    <tr>
		    	      <td>&nbsp;</td>
		    	      <td>&nbsp;</td>
	    	        </tr>
		    	    <tr>
		    	      <td><span class="style11">Enter Maximum Price</span></td>
		    	      <td><label for="max"></label>
	    	          <input type="text" name="max" id="max"></td>
	    	        </tr>
		    	    <tr>
		    	      <td>&nbsp;</td>
		    	      <td>&nbsp;</td>
	    	        </tr>
		    	    <tr>
		    	      <td>&nbsp;</td>
		    	      <td><label>
		    	        <input type="submit" name="submit" id="submit" value="Show" />
		    	        </label></td>
	    	        </tr>
		    	    <tr>
		    	      <td colspan="2"><?php
							if(isset($_POST["submit"]))
							{
								$a=$_POST["price"];
								$b=$_POST["max"];
								
								include_once("vars.php");
	  $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
	 
	  $q="select * from producttable where price between $a and $b";
	  $r1=mysqli_query($c,$q) or die(mysqli_error($c));
	  $num=mysqli_affected_rows($c);
	  
	  if($num>0)
	  {
		  $co=1;
		  print"<table width='100%' align='left'>";
		  	while($ans=mysqli_fetch_array($r1))
			{
				if($co==1)
				{
					print"<tr align='left' width='100%'>";
				}
				print"<td><a href='details.php?pid=$ans[1]'><img src='mobile/$ans[4]' width='200px' height='200px'><br/>$ans[2]<br/>$ans[3]</a></td>";
				$co++;
				if($co==4)
				{
					print"</tr>";
					$co=1;
				}
			}
		  print"</table>";
	  }
	  else
	  {
		  print"No Category Available";
	  }
	  
								
								
							}
						?></td>
	    	        </tr>
	    	      </table>
		    	  <p>&nbsp;</p>
		    	  <p>&nbsp;</p>
   	          </form>
          </p>        </td>
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
