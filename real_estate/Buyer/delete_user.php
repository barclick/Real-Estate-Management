<?php 
	$con = @mysql_connect("localhost","root","");
	if (!$con)
	  {
		die('Could not connect: ' . mysql_error());
	  }
	mysql_select_db("re", $con);

$UserName=$_GET['UserName'];

$result = mysql_query("DELETE FROM customer_reg WHERE UserName = '$UserName'");

header('location:user_info.php');

?>