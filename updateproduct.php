<?php

session_start();
	
		$a=$_GET["id"];
		$_SESSION["id"]=$a;
		
		include_once("vars.php");
		$c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
	
		$q="select * from producttable where product_id=$a";
		$r1=mysqli_query($c,$q) or die(mysqli_error($c));
		while ($ans1=mysqli_fetch_array($r1))
		{
			$pname=$ans1[2];
			$price=$ans1[3];
			$image=$ans1[4];
			$features=$ans1[5];
		}

   
     if(isset($_POST["submit"]))
   {
     
     $pn=$_POST["pname"];
     $p=$_POST["price"];
     $f=$_POST["feature"];
	 $id=$_SESSION["id"];
	 if($_FILES["image"]["name"]!="")
	 {
	 $img=rawurlencode($_FILES["image"]["name"]);
	 move_uploaded_file($_FILES["image"]["tmp_name"],"mobile/" . $_FILES["image"]["name"]);
 	 $q="update producttable set product_name='$pn',price=$p,image='$img',feature='$f' where product_id=$id";

	 }
	 else
	 {
 	 $q="update producttable set product_name='$pn',price=$p,feature='$f' where product_id=$id";


	 }
	 include_once("vars.php");
	 $c=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($c));
	
	 mysqli_query($c,$q) or die(mysqli_error($c));
	 $cnt=mysqli_affected_rows($c);
	 if($cnt==1)
	 {
		header("location:showproduct.php");
	 }
	 else
	 {
		$prt="<font color='red'>Product Not updated Successfully</font>";
	 }
	 
	
	   
	 }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

<body background="image/b1.jpg" >
<table width="1200" height="368" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="27" colspan="7" align="center" valign="middle"><div align="right"><span class="style10">
	</span><span class="style12">24x7 Customer service: +8615502679107</span></div></td>
  </tr>
  <tr>
    <td height="25" colspan="7" align="center" valign="middle"><div align="right">
      <?php
	/*if(isset($_SESSION["admin"]))
	{
	print "Welcome ".$_SESSION["admin"] .",&nbsp;";
	print "&nbsp; <a href='signout.php?page=index.php' style='text-decoration:none'>Signout</a>";
	}
	else 
	{
	header("location:sig.php");
	}*/
	?>
    </div></td>
  </tr>
  <tr>
    <td height="300" colspan="7"><img src="image/bannerforsite.jpg" width="1200" height="300" /></td>
  </tr>
   <tr>
    <th width="15%" height="27" scope="col">
    <a href="adminpanel.php"><img src="image/adminpanel.png" width="200" height="42" /></a>
    </div></th>
    <th width="15%" scope="col">
  <a href="addcompany.php"><img src="image/addbrand.png" width="200" height="42" /></a>
    </div></th>
    <th width="15%" scope="col"><a href="addproduct.php"><img src="image/addprod.png" width="200" height="42" /></a></th>
    <th width="16%" scope="col"><a href="adminsignup.php"><img src="image/ned.png" width="200" height="42" /></a></th>
    <th width="7%" scope="col"><a href="showfeedback.php"><img src="image/v_feed.png" width="200" height="42" /></a></th>
    <th width="32%" scope="col"><a href="showquery.php"><img src="image/v_query.png" width="200" height="42" /></a></th>
  </tr>
   <tr>
     <th height="27" colspan="6" scope="col"><table width="75%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
       <tr>
         <td height="29" scope="col" ><p class="style14 style15">&nbsp;</p>
             <p class="style14 style15">UPDATE PRODUCT </p>
           <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
               <table width="54%" border="0">
                 <tr>
                   <td>Product Name</td>
                   <td><label>
                     <input name="pname" type="text" id="pname" value="<?php print $pname; ?>" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>Price</td>
                   <td><label>
                     <input name="price" type="text" id="price" value="<?php print $price; ?>" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>Image</td>
                   <td><label>
                     <?php 
			   print "<img src=mobile/$image>";
			   ?>
                     <br />
                     choose new Image
                     <input type="file" name="image" id="image" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>Feature</td>
                   <td><label>
                     <textarea name="feature" id="feature" cols="45" rows="5"><?php print $features; ?>
       </textarea>
                   </label></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><label>
                     <input type="submit" name="submit" id="submit" value="Update" />
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
     </table></th>
   </tr>
   <tr>
     <th height="27" colspan="6" scope="col"><table width="75%" align="center" cellpadding="0" cellspacing="0">
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

<p>&nbsp;</p>
</body>
</html>
