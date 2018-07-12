<?php 
session_start();
if ($_SESSION["UserName"]==null) {
   header("location:../index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
   $UserName = $_SESSION['UserName'];  
   $P_TaxNO=$_POST['taxnumber'];
   $Property_for=$_POST['propertyfor'];
   $category=$_POST['category'];
   $country=$_POST['country'];
   $address=$_POST['address'];
   $state=$_POST['state'];
   $price=$_POST['price'];
   $bedroom=$_POST['bedroom'];
   $bathroom=$_POST['bathroom'];
   $location=$_POST['location'];
   $facility = implode(',',$_REQUEST['chk']);
   $yearbuilt=$_POST['yearbuilt'];
   $totalarea=$_POST['totalarea'];
   $image=$_POST['image'];
   $view=$_POST['view'];
   $date=date('y/m/d');
$con = mysqli_connect("localhost","root","","re");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

$sql = "Update News_Master set News='".$News."',NewsDate='".$Date."' where NewsId=".$Id."";

if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">alert("News Updated Succesfully");window.location=\'News.php\';</script>';
} 
else {
    echo "Error in updating record: " . mysqli_error($con);
}
mysqli_close($con);
?> 
</body>
</html>

