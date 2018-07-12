
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id=$_GET['NewsId'];
$conn=mysqli_connect("localhost","root","","real_estate");
	if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}

$sql = "DELETE FROM News_Master WHERE NewsId='".$Id."'";

if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">alert("News Deleted Succesfully");window.location=\'News.php\';</script>';
} 
else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
</body>
</html>