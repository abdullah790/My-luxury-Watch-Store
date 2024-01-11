<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>

<body>
<?php
session_start();
session_regenerate_id();
$_SESSION["sid"]=session_id();
session_destroy();
setcookie("mycookie","0",time()-24*7);
$a=$_GET["page"];
header("location:$a");
?>
</body>
</html>
