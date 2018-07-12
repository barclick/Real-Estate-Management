<?php
$conn=mysqli_connect("localhost","root","","re");
	if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
$Req_ID=$_GET['Req_ID'];
$sql = "DELETE FROM requirement WHERE Req_ID = '$Req_ID'";

if (mysqli_query($conn, $sql)) {
header('location:requirement.php');
} 
else {
    echo "Erro: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 