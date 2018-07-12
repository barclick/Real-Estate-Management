
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_POST['txtNewsId'];
$News=$_POST['txtNews'];
$Date=$_POST['txtDate'];
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

