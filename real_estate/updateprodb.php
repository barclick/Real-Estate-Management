<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "pm");
if(!empty($_POST))
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];

	$image=$_FILES['image']['name'];
	if ($image=="") {
		$update="UPDATE user_account SET Fname='$fname',Lname='$lname',email='$email'";
		mysqli_query($connect,$update);
		echo "success";		
	}else{
		move_uploaded_file($_FILES['image']['tmp_name'], "images/Profile_Picture/".$_FILES['image']['name']);
$sql="INSERT INTO user_account(Fname,Lname,email,Profile_Picture) 
	    VALUES ('$fname','$lname','$email','$image')";
		mysqli_query($connect,$update);
		echo "success";
	}
}
?>