<?php 
	$con = @mysql_connect("localhost","root","");
	if (!$con)
	  {
		die('Could not connect: ' . mysql_error());
	  }
	mysql_select_db("re", $con);

$RE_ID=$_GET['RE_ID'];
$result = mysql_query("DELETE FROM reproperty WHERE RE_ID = '$RE_ID'");

header('location:managereproperty.php');

?>