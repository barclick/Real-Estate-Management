<?php
$conn=mysqli_connect("localhost","root","","real_estate");
	if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
 $message=$_POST['reason'];
 $hidden=$_POST['hidden'];
$sql = "update property set status='Rejected' WHERE  RE_ID='$hidden'";
$sql2 = "update property set Reason='$message' WHERE  RE_ID='$hidden'";
if ( (mysqli_query($conn, $sql)) &&  (mysqli_query($conn, $sql2)))
{
header('location:Approvereject.php');
} 
else {
    echo "Erro: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 
