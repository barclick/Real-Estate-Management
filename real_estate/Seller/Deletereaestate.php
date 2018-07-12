<?php 
$host="localhost"; // Host name 
$db_userName="root"; // Mysql username 
$db_Password=""; // Mysql password 
$db_name="real_estate"; // Database name 
	$conn=mysqli_connect("$host", "$db_userName", "$db_Password", "$db_name")or die("unable to connect ".mysql_error());
	
$RE_ID=$_GET['RE_ID'];
$sql = "DELETE FROM property WHERE RE_ID = '$RE_ID'";
if (mysqli_query($conn, $sql)) {

header('location:repropertydisplay.php');
}
else{
	echo "Erro: " . mysqli_error($conn);
}

?>