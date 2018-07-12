<?php 
session_start();
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<?php
  $realid=$_POST['realid'];

   $kb=$_POST['name'];
   $PhoneNumber=$_POST['PhoneNumber'];
   $Email=$_POST['Email'];
   $Message=$_POST['Message'];
   $con=mysqli_connect("localhost","root","","re");
	if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
	$sql="INSERT INTO request_to_buy(Real_ID,Name_of_Buyer,Phone_Number,Email,Message) 
	    VALUES ('$realid','$kb','$PhoneNumber','$Email','$Message')";
	      if(!mysqli_query($con,$sql))
	      {
	      	die('ERROR:'. mysqli_error($con));
	      	echo "Problem in filling the form. Try Again!";
	      }
	        echo '<script type="text/javascript">alert("Your Request is sent! wait until The Seller send response!!!");window.location=\'request.php\';</script>';

	      mysqli_close($con);
	      ?>