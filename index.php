
<?php
session_start();
	if(isset($_COOKIE["mycookie"]))
	{
	$_SESSION["uname"]=$_COOKIE["mycookie"];
	header("location:welcome.php");
	}
	if(isset($_SESSION["uname"]))
	{
	header("location:welcome.php");
	}
  if(isset($_POST["submit"]))
   {
   	 $n=$_POST["uid"];
	 $p=$_POST["pass"];
	 include_once("vars.php");
	 $c=mysqli_connect(host,uname,pass,db) or die (mysqli_connect_error($c));
	
	 $q="select user_id from register where user_id='$n' and password='$p'";
	 $q1="select username from admintable where username='$n'";
	 $r1=mysqli_query($c,$q1);
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
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #AA0000}
.style5 {
	color: #990033;
	font-family: Arial, Helvetica, sans-serif;
}
.style11 {font-family: Arial, Helvetica, sans-serif}
.style13 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style15 {color: #003399}
.style17 {color: #E2C280}
.style18 {color: #990000}
.style20 {font-size: medium}
.style22 {color: #666666}
.style23 {
	color: #3A77A2;
	font-weight: bold;
}
-->
</style>
<script language="JavaScript">
var Rollpic1 = "image/g3.png";
var Rollpic2 = "image/g1.jpg";
var Rollpic3 = "image/g2.jpg";
var Rollpic4 = "image/smart.jpg";
var PicNumber=1;
var NumberOfPictures=4;
var HowLongBetweenPic=3;
function SwitchPic(counter){

	if(counter < HowLongBetweenPic){
	
		counter++;
		window.status="Switch picture at 5 : "+counter+" PicNumber: "+PicNumber+" ";
		document.roll.src = eval("Rollpic" + PicNumber);
		CallSwitchPic=window.setTimeout("SwitchPic("+counter+")",1500); 
		
		}
		
		else{
			if(PicNumber < NumberOfPictures){
				PicNumber++;
				SwitchPic(0);
			}
		else{
				PicNumber=1;
				SwitchPic(0);
				}
	}
}
</script>	
</head>

<body background="image/blue.jpg" onload="SwitchPic(0)">
<table width="1200"   align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="7" colspan="7" align="right" valign="middle"> <span class="style22">24x7 Customer service: +8615502679107</span></td>
  </tr>
  <tr>
    <td height="7" colspan="7" align="right" valign="middle">      
      
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
	?>    </td>
  </tr>
  <tr>
    <td height="30" colspan="7" align="center" valign="top"><img src="image/bannerforsite.jpg" width="1200" height="300" /></td>
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
    <tr>
    <th height="7" colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th width="15%" height="30" valign="middle" bgcolor="#A0A0A4"><span class="style4"><h2>Brands</h2></span></th>
        <td width="58%" rowspan="17" valign="top" scope="col"><a href="mobiles.php" ><img src="image/preBookNow.jpg" alt="e"  name="roll" width="99%" height="70%"  border="0" id="roll"/></a>
            <p align="justify" class="style11">The one device you always carry around is now getting smaller and better. All the latest and popular Luxury and smart watches are categorized according to their brands and features. Watch accessories including Chargers, hand strands etc are also listed out suiting your requirements. </p>
          <p align="justify" class="style11">A directory of watch websites, this is a good site to have on your favorites list. It will keep you from needing to add the mobile Yellow Pages,Froogle, and other handy websites to your favorites. </p></td>
        <th align="right" width="30%" rowspan="20" valign="top" scope="col" ><form id="form1" name="form1" method="post" action=""><br>
            <div align="center" class="style1 style2 style13 style5 style18" >SIGN IN</div>
          <form id="form1" name="form1" method="post" action="" >
              <table width="100%" height="104" border="0">
                <tr>
                  <td width="36%"><div align="left"><span class="style11">User ID</span></div></td>
                  <td width="64%"><label>
                    <input type="text" name="uid" id="uid" />
                  </label></td>
                </tr>
                <tr>
                  <td><div align="left"><span class="style11">Password</span></div></td>
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
                  <td>&nbsp;</td>
                  <td><input type="submit" name="submit" id="submit" value="Sign In" /></td>
                </tr>
                <tr>
                  <td colspan="2"><?php
				  if(isset($_POST["submit"]))
				  {
				  print $prt;
				  }
                  ?></td>
                </tr>
              </table>  </form>
            <table width="100%" height="75" border="0">
                <tr>
                  <td ><p class="style11">New to Watchworld? It's free and easy</p>
                      <label></label></td>
                </tr>
                <tr>
                    <td><div align="center"><a href="new.php"><h2 Sign Up alt="e" width="129" height="37" border="0" ></h2></a></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"> <form id="form2" name="form2" method="get" action="http://cn.bing.com">
	   
	                <h2><span class="style23">Bing Search</span><br />
	                  <br />
	                  <input type="text" name="q" id="q" />
	                  <br />
	                  <br />
	                  <input type="submit" name="submit3" id="submit3" value="Bing Search" />
                                    </h2>
                  </form></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table>        </th>
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
  </tr><br><br>
  <tr>
    <th height="27" colspan="7" scope="col"><table width="100%" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <th height="108" colspan="6" scope="col"><a href="mobiles.php" class="style17" style="text-decoration:none">
          <marquee direction="left" behavior="alternate" >
          <img src="image/ap2.jpg" alt="g" width="140" height="140" border="0" /><img src="image/ap1.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/h2.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/h1.jpg" alt="g" width="140" height="140" border="0" /><img src="image/ca2.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/ca1.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/sw10.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/c-1.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/ap10.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/s-1.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/sw2.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/sw1.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/l2.jpg" alt="g" width="140" height="140" border="0" /> <img src="image/l1.jpg" alt="g" width="140" height="140" border="0" />
          </marquee>
        </a></th>
      </tr>
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
        <td colspan="6" scope="row">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="6" scope="row"><div align="center" class="style20"></div></td>
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
