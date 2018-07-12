<?php
$conn=mysqli_connect("localhost","root","","real_estate");
	if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
 $RE_ID= $_GET ['RE_ID'];
$today = date("Y-m-d H:i:s");
$sql = "update property set status='Accepted' WHERE  RE_ID='$RE_ID'";
$sql2 = "update property set Acc_Date='$today' WHERE  RE_ID='$RE_ID'";
$sq2 = "INSERT INTO reproperty(Acc_Date) values('".$today."')";


if ( (mysqli_query($conn, $sql)) &&  (mysqli_query($conn, $sql2)))
{
header('location:Approvereject.php');
} 
else {
    echo "Erro: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 
