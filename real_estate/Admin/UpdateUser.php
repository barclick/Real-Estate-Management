
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$CustomerID = $_POST['CustomerID'];
$Username=$_POST['Username'];
$FirstName=$_POST['FirstName'];
$PhoneNumber=$_POST['PhoneNumber'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$con = mysqli_connect("localhost","root","","re");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

$sql = "Update customer_reg set Username='".$Username."',FirstName='".$FirstName."',PhoneNumber='".$PhoneNumber."',Email='".$Email"',Password='".$Password."' where CustomerID=".$CustomerID."";

if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'User.php\';</script>';
} 
else {
    echo "Error in updating record: " . mysqli_error($con);
}
mysqli_close($con);
?> 
</body>
</html>
