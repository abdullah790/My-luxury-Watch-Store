<?php

session_start();
   if(isset($_POST["submit"]))
   {
     $cn=$_POST["cname"];
     $pn=$_POST["pname"];
     $p=$_POST["price"];
     $f=$_POST["feature"];
	 if($_FILES["image"]["name"]!="")
	 {
	 $img=$_FILES["image"]["name"];
	 move_uploaded_file($_FILES["image"]["tmp_name"],"mobile/" . $_FILES["image"]["name"]);
	 }
	 else
	 {
	 $_FILES["image"]["name"]="noimage.gif";
	 $img=$_FILES["image"]["name"];
	 }		
	 include_once("vars.php");
	 $c=mysqli_connect(host,uname,pass,db) or die (mysqli_connect_error($c));
	
	 $q="insert into producttable(company_name,product_name,price,image,feature) values ('$cn','$pn','$p','$img','$f')";
		$res=mysqli_query($c,$q) or die(mysqli_error($c));
		$cnt=mysqli_affected_rows($c);
		if($cnt>=1)
		{
			$prt="<font color='red'><h2>Product added Successfully</font>";
		}
		else
		{
			$prt="<font color='red'>Unsuccessful</font>";
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
.style14 {
	color: #990000;
	font-weight: bold;
}
.style15 {font-size: large}
-->
</style>
</head>

<body background="image/blue.jpg" >
<table width="1200" height="392" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="7" align="right" >24x7 Customer service: +8615502679107</td>
  </tr>
  <tr>
    <td height="25" colspan="7" align="center" valign="middle"><div align="right">
      <?php
	//if(isset($_SESSION["admin"]))
	{
	//print "Welcome ".$_SESSION["admin"] .",&nbsp;";
	//print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	//else 
	{
	//header("location:sig.php");
	}
	?>
    </div></td>
  </tr>
  <tr>
    <td height="300" colspan="7" align="center" valign="top"><div align="left"><img src="image/bannerforsite.jpg" width="1200" height="300" /></div></td>
  </tr>
   <tr align="left">
    <td width="200" height="50"><a href="adminpanel.php"><img src="image/adminpanel.png" width="200" height="50" border="0" /></a></td>
    <td width="200" height="50"><a href="addcompany.php"><img src="image/addbrand.png" width="200" height="50" border="0" /></a></td>
    <td width="200" height="50"><a href="addproduct.php"><img src="image/addprod.png" width="200" height="50" border="0" /></a></td>
    <td width="200" height="50"><a href="adminsignup.php"><img src="image/ned.png" width="200" height="50" border="0" /></a></td>
   <td width="200" height="50"><a href="showfeedback.php"><img src="image/v_feed.png" width="200" height="50" border="0" /></a></td>
    <td width="200" height="50"><a href="showquery.php"><img src="image/v_query.png" alt="1" width="200" height="50" border="0"/></a></td>
  </tr>
   <tr align="left">
     <td height="50" colspan="6"><table width="100%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
       <tr>
         <td height="29" scope="col" ><p class="style14 style15">&nbsp;</p>
             <p class="style14 style15">ADD NEW PRODUCT </p>
           <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
               <table width="70%" border="0">
                 <tr>
                   <td>Company Name</td>
                   <td><label>
                     <select name="cname" id="cname">
                     <option>Choose company</option>
                      <?php
			  include_once("vars.php");
			  $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
			  
			  $q="select company_name from companytable";
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
                   <td>Product Name</td>
                   <td><label>
                     <input type="text" name="pname" id="pname" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>Price</td>
                   <td><label>
                     <input type="text" name="price" id="price" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>Image</td>
                   <td><label>
                     <input type="file" name="image" id="image" />
                   </label></td>
                 </tr>
                 <tr>
                   <td valign="top">Feature</td>
                   <td><label>
                     <textarea name="feature" id="feature" cols="45" rows="5"></textarea>
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
         <td><div align="center" class="style3 style11"><a href="shoppingcart.php" style="text-decoration:none">Cart</a></div></td>
         <td><div align="center" class="style3 style11"><a href="service.php" style="text-decoration:none">Services</a></div></td>
       </tr>
       <tr>
         <td colspan="6" scope="row"><div align="center" class="style11"></div></td>
       </tr>
     </table></td>
   </tr>
</table><p>&nbsp;</p>
<div align="center" class="style3 style11">					
					<p>© 2017 Luxury Watches. All Rights Reserved | Design by  <a href="#" target="_blank">Abdullah Ibrahim Haruna</a> </p>
				</div>
				<div class="clearfix"></div>

<p>&nbsp;</p>
</body>
</html>
