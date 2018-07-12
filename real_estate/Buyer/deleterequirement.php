<?php
$conn=mysqli_connect("localhost","root","","re");
	if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
$req=$_GET['Req_ID'];
$sql = "DELETE FROM requirement WHERE Req_ID = '$req'";

if (mysqli_query($conn, $sql)) {
header('location:requirementresponse.php');
} 
else {
    echo "Erro: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 