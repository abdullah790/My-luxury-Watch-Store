<?php
session_start();
if(isset($_POST["submit"]))
{
	$fn=$_POST["fname"];
	$ln=$_POST["lname"];
	$email=$_POST["email"];
	$phn=$_POST["phone"];
	$q1=$_POST["rate"];
	$q2=$_POST["know"];
	$q3=$_POST["compare"];
	$q=$_POST["query"];
	$q4=$_POST["buy"];
	
	include_once("vars.php");
	$con=mysqli_connect(host,uname,pass,db) or die(mysqli_connect_error($con));
	
	$query="insert into feedback(firstname,lastname,email,phone,rating,know_about,compare,query,buy) 			values('$fn','$ln','$email',$phn,'$q1','$q2','$q3','$q','$q4')" or die("error in insert");
	mysqli_query($con,$query) or die(mysqli_error($con));
	$p="<font color='red'>Thanks for your valueable feedback </font> ";
	
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
.style15 {color: #EBC6A7}
.style16 {
	color: #0F4368;
	font-size: 36px;
}
.style17 {
	color: #0F4368
}
-->
</style>
<script type="text/javascript">
function abc()
{
	x=document.form1.fname.value
	if(x=="" || x==" " || x== null)
	{
		alert("FirstName Not entered");
		return false;
	}
	y=document.form1.lname.value
	if(y=="" || y==" " || y== null)
	{
		alert("LastName Not entered");
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
		alert("Phone number Not entered");
		return false;
	}
	chosen = ""
    len =4
    for (i = 0; i<len; i++)
    {
        if (document.form1.rate[i].checked)
        {
            chosen = document.form1.rate[i].value
        }
    }	
	if (chosen == "")
        {
            alert("Please Give Rating ")
            return false;
        }
	chosen1 = ""
    len1 =4
    for (i = 0; i<len1; i++)
    {
        if (document.form1.know[i].checked)
        {
            chosen1 = document.form1.know[i].value
        }
    }	
	if (chosen1 == "")
        {
            alert("Please Choose how you get to know about us ")
            return false;
        }
		chosen2 = ""
    len2 =4
    for (i = 0; i<len2; i++)
    {
        if (document.form1.compare[i].checked)
        {
            chosen2 = document.form1.compare[i].value
        }
    }	
	if (chosen2 == "")
        {
            alert("Please  Give answer of how you compare our website")
            return false;
        }
		if(document.form1.query.value=="")
	{
		alert("Please Provide Feedback or Suggestion for us");
		return false;
	}
	chosen3 = ""
	 len3 =2
    for (i = 0; i<len3; i++)
    {
        if (document.form1.buy[i].checked)
        {
            chosen3 = document.form1.buy[i].value
        }
    }	
	if (chosen3 == "")
        {
            alert("Give Answer for Will you buy the product again from us")
            return false;
        }
}
</script>
</head>

<body background="image/b1.jpg" >
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
	print "&nbsp; <a href='signout.php?page=feedback.php' style='text-decoration:none'>Signout</a>";
	}
	?>
    </div>    </td>
  </tr>
  <tr>
    <td height="300" colspan="8"><img src="image/bannerforsite.jpg" width="1200" height="300" /></td>
  </tr>
  
  <tr>
  <tr  align="left">
    <th width="171" scope="col"><a href="index.php"><img src="image/homenew.png" width="171" height="42" border="0" /></a></th>
    <th width="171" scope="col"><a href="mobiles.php"><img src="image/brands.png" width="172" height="42" border="0" /></a></th>
    <th width="171"  scope="col"><a href="showacc.php"><img src="image/accessories.png" width="172" height="42" border="0" /></a></th>
    <th width="171"  scope="col"><a href="showbyprice.php"><img src="image/search-by-price.png" width="172" height="42" border="0" /></a></th>
    <th width="171" scope="col"><a href="showbyword.php"><img src="image/keyword.png" width="171" height="42" border="0" /></a></th>
    <th width="171"  scope="col"><a href="sig.php"><img src="image/myaccount.png" width="172" height="42" border="0" /></a></th>
    <th width="171"   scope="col"><a href="feedback.php"><img src="image/feedback.png" width="172" height="42" border="0" /></a></th>
  </tr>

</table>

<table width="75%" height="65" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="7%" height="29" scope="col" ><span class="style15"></span></td>
    <td width="86%" align="left" bgcolor="#FFFFFF" scope="col"><div align="center">
      <p class="style5 style16">Feedback</p>
      </div> 
      <hr />
              <p class="style17">FEEDBACK FORM              </p>
              <p>Thanks a lot for being member! Please take a few moments to   fill out the following form so that we can get a feeling for how things went   and follow up with you on any issues you might have had.</p>
             
              <form id="form1" name="form1" method="post" action="feedback.php" onsubmit="return abc()">
                <table width="64%" border="0">
                  <tr>
                    <td colspan="2">Name</td>
                  </tr>
                  <tr>
                    <td width="7%"><label>
                      <input type="text" name="fname" id="fname" />
                      <br />
                    First</label></td>
              <td width="93%"><label>
                      <input type="text" name="lname" id="lname" />
                      <br />
                    Last</label></td>
                  </tr>
                  <tr>
                    <td colspan="2">Email</td>
                  </tr>
                  <tr>
                    <td colspan="2"><label>
                      <input type="text" name="email" id="email" />
                    </label></td>
                  </tr>
                  <tr>
                    <td colspan="2">Mobile Number</td>
                  </tr>
                  <tr>
                    <td colspan="2"><label>
                    <input type="text" name="phone" id="phone" />
                    </label></td>
                  </tr>
                </table>
                
                <p>How do you rate our Website?</p>
                <p>
                  <label>
                  <input type="radio" name="rate" value="excellent" id="rate_0" />
Excellent</label>
                  <br />
                  <label>
                  <input type="radio" name="rate" value="vgood" id="rate_1" />
V.Good</label>
                  <br />
                  <label>
                  <input type="radio" name="rate" value="good" id="rate_2" />
Good</label>
                  <br />
                  <label>
                  <input type="radio" name="rate" value="average" id="rate_3" />
Average</label>
                </p>
                <p>How do you came to know about our Watch store?</p>
                <p>
                  <label>
                  <input type="radio" name="know" value="friend" id="know_0" />
Friend</label>
                  <br />
                  <label>
                  <input type="radio" name="know" value="tv" id="know_1" />
TV Advertisement</label>
                  <br />
                  <label>
                  <input type="radio" name="know" value="pamphlet" id="know_2" />
Pamphlet</label>
                  <br />
                  <label>
                  <input type="radio" name="know" value="searchengine" id="know_3" />
Search Engine</label>
                </p>
                <p>How do you compare our website with other Watch website?</p>
                <p>
                  <label>
                  <input type="radio" name="compare" value="best" id="compare_0" />
Best</label>
                  <br />
                  <label>
                  <input type="radio" name="compare" value="better" id="compare_1" />
Better</label>
                  <br />
                  <label>
                  <input type="radio" name="compare" value="same" id="compare_2" />
Same</label>
                  <br />
                  <label>
                  <input type="radio" name="compare" value="average" id="compare_3" />
Average</label>
                </p>
                <p>                  <br />
                  Please share any additional suggestions you think may help us or 
What improvement you want in our Website? (Please write)</p>
                <p>                  
                  <label>
  <textarea name="query" cols="45" rows="5" wrap="off"  id="query"></textarea>
                  </label>
                </p>
                <p>Would You Like to Buy Watch Accessories again from us . If we provide some more gift voucher ?</p>
                <p>
                  <label>
                  <input type="radio" name="buy" value="yes" id="buy_0" />
Yes</label>
                  <br />
                  <label>
                  <input type="radio" name="buy" value="no" id="buy_1" />
No</label>
                </p>
                <p>
                  <label>
                  <input type="submit" name="submit" id="submit" value="Submit" />
                  </label>
                 <?php
				 if(isset($_POST["submit"]))
				 {
				 print $p;
				 }
				 ?>
                </p>
    </form>   </td>
    <td width="7%" scope="col">&nbsp;</td>
  </tr>
</table>
<table width="75%" align="center" cellpadding="0" cellspacing="0">
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
</table>
<p>&nbsp;</p><p>&nbsp;</p>
<div align="center" class="style3 style11">					
					<p>© 2017 Luxury Watches. All Rights Reserved | Design by  <a href="#" target="_blank">Abdullah Ibrahim Haruna</a> </p>
				</div>
<p>&nbsp;</p>
</body>
</html>
