<?php 
session_start();
$host="localhost"; // Host name 
$db_userName="root"; // Mysql username 
$db_Password=""; // Mysql password 
$db_name="real_estate"; // Database name 
$login_table="users"; //login table name

// Connect to server and select databse. 
$connect=mysqli_connect("$host", "$db_userName", "$db_Password", "$db_name")or die("unable to connect ".mysql_error()); 

if(isset($_POST['submit']))
	{
// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; // *************************************************************************************** md5
// To protect MySQL injection (more detail about MySQL injection) 
$username = stripslashes($username); 
$password = stripslashes($password); 
$username = mysqli_real_escape_string($connect,$username); 
$password = mysqli_real_escape_string($connect,$password); 

$sql = "SELECT * FROM $login_table WHERE UserName='$username' and Password='$password' LIMIT 1"; 
$result = mysqli_query($connect,$sql); 
if(!$result)
{
echo'<script type="text/javascript"> alert("Sorry username does not exist try agin!"); location.href="index.php"; </script>'; 
die("unable to process query ".mysql_error());
}
// Mysql_num_row is counting table row 
$count = mysqli_num_rows($result); 
if($count == 1){ 
    // Register $username, $password and redirect to file "workspace_success.php" 
    $_SESSION['username'] = $username; 
    $_SESSION['password'] = $password; 
    // get the result set from the query
    $result = mysqli_fetch_array($result);	
    // get the usertype column's value
    $UserType = trim($result['UserType']); 
	$_SESSION['UseeType'] = $UserType;
    if ($UserType == '') 
		{
       
		echo'<script type="text/javascript"> alert("No usertype value was set"); location.href="index.php"; </script>'; 

		}
	else {
		if($UserType=='Admin')
		{
			//$contractor=$result['contractor'];
			//$SESSION['contractor']=$contractor;
			$_SESSION['username']=$username;
			$_SESSION['UserType']=$UserType;
        header("location:Admin/homepage.php");
        exit;
		}
		else if($UserType=='Seller')
		{
			$_SESSION['username']=$username;
			$_SESSION['UserType']=$UserType;
			header('Location: ' . 'Seller/homepage.php');
        exit;
		}
		else if($UserType=='Buyer')
		{
		$_SESSION['username']=$username;
		$_SESSION['UserType']=$UserType;
        header('Location: ' . 'Buyer/homepage.php');
        exit;
		}
    }
} 
else{
	
    echo'<script type="text/javascript"> alert("Incorrect Username or Password!"); location.href="index.php"; </script>'; 
}
	}
mysql_close($connect);
?>
