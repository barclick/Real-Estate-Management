<?php
$connect = mysqli_connect("localhost", "root", "", "re");
if(!empty($_POST))
{
   $UserName=$_POST['username'];
   $FirstName=$_POST['fname'];
   $LastName=$_POST['lname'];
   $Gender=$_POST['Gender'];
   $Address=$_POST['Address'];
   $City=$_POST['City'];
   $PhoneNumber=$_POST['PhoneNumber'];
   $CustomerType=$_POST['CustomerType'];
   $Email=$_POST['email'];
   $Password=$_POST['password'];
   $ConfirmPassword=$_POST['confirm_password'];
	$image=$_FILES['image']['name'];
	
		move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);
		$path="192.168.139.1/norton2/".$image;
		$update="INSERT INTO customer_reg(UserName,FirstName,LastName,Gender,Address,City,PhoneNumber,CustomerType,Email,Password,ConfirmPassword,Profile_Picture) 
	    VALUES ('$UserName','$FirstName','$LastName','$Gender','$Address','$City','$PhoneNumber','$CustomerType','$Email','$Password','$ConfirmPassword','$image')";
		mysqli_query($connect,$update);
		echo "success";
	
}
?>