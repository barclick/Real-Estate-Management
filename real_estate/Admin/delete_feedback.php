<?php
$conn=mysqli_connect("localhost","root","","re");
	if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
$FD_ID=$_GET['FD_ID'];
$sql = "DELETE FROM feedback WHERE FD_ID = '$FD_ID'";

if (mysqli_query($conn, $sql)) {
header('location:feedback.php');
} 
else {
    echo "Erro: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 