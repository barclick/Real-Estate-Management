<?php
$conn=mysqli_connect("localhost","root","","real_estate");
	if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
$UserName=$_GET['UserName'];
$sql = "DELETE FROM customer_reg WHERE UserName = '$UserName'";

if (mysqli_query($conn, $sql)) {
header('location:custregisdisplay.php');
} 
else {
    echo "Erro: " . mysqli_error($conn);
}
$sql1 = "DELETE FROM useraccount WHERE UserName = '$UserName'";
if (mysqli_query($conn, $sql1)) {
header('location:custregisdisplay.php');
} 
else {
    echo "Erro: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 