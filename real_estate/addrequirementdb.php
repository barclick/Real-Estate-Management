<?php 
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="re"; // Database name 
$tbl_name="useraccount"; // Table1 name 

// Connect to server and select databse. 
$connect=mysql_connect("$host", "$username", "$password")or die("unable to connect ".mysql_error()); 
mysql_select_db("$db_name")or die("unable to find database ".mysql_error()); 
if(isset($_POST['submit']))
	{
// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; // *************************************************************************************** md5
// To protect MySQL injection (more detail about MySQL injection) 
$username = stripslashes($username); 
$password = stripslashes($password); 
$username = mysql_real_escape_string($username); 
$password = mysql_real_escape_string($password); 

$sql = "SELECT * FROM $tbl_name WHERE username='$username' and password='$password' LIMIT 1"; 
$result = mysql_query($sql); 
if(!$result)
{
echo'<script type="text/javascript"> alert("Sorry username does not exist try agin!"); location.href="index.php"; </script>'; 
die("unable to process query ".mysql_error());
}
// Mysql_num_row is counting table row 
$count = mysql_num_rows($result); 
if($count == 1){ 
    // Register $username, $password and redirect to file "workspace_success.php" 
    $_SESSION['username'] = $username; 
    $_SESSION['password'] = $password; 
    // get the result set from the query
    $result = mysql_fetch_array($result);	
    // get the usertype column's value
    $UserType = trim($result['UserType']); 
	$_SESSION['UseeType'] = $UserType;
    if ($UserType == '') 
		{
       
		echo'<script type="text/javascript"> alert("No usertype value was set"); location.href="index.php"; </script>'; 

		}
	else {
		 if($UserType=='Buyer')
		{
		$_SESSION['username']=$username;
		$_SESSION['UserType']=$UserType;
        header('Location: ' . 'Buyer/addrequirement.php');
        exit;
		}
    }
} 
else{
	
    echo'<script type="text/javascript"> alert("Incorrect Username or Password!"); location.href="index.php"; </script>'; 
	 //header('Location: ' . 'index.php');
}
	}
mysql_close($connect);
?>
