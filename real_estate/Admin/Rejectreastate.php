<?php
$conn=mysqli_connect("localhost","root","","re");
	if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
 $RE_ID= $_GET ['RE_ID'];
$sql = "update reproperty set status='Rejected' WHERE  RE_ID='$RE_ID'";

if (mysqli_query($conn, $sql)) {
	echo'<script type="text/javascript"> alert(" Rejected Succsesfuly"); location.href="Approvereject.php"; </script>'; 
} 
else {
    echo "Erro: " . mysqli_error($conn);
}
mysqli_close($conn);
?> 
