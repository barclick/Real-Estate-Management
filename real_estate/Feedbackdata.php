<?php
 $Name=$_POST['name'];
 $PhoneNumber=$_POST['phone'];
 $Email=$_POST['email'];
 $subject=$_POST['subject'];
  $dat=date('y/m/d');
 $myText='Thanks for your feedback';
							   $Message=$_POST['message'];
							   $con=mysqli_connect("localhost","root","","real_estate");
								if(mysqli_connect_errno())
								{
									echo('could not connect to database :'. mysqli_connect_errno());
								}
								$sql="INSERT INTO feedback(Name,PhoneNumber,Email,Subject,Message,F_Date) 
								    VALUES ('$Name','$PhoneNumber','$Email','$subject','$Message','$dat')";
								      if(!mysqli_query($con,$sql))
								      {
								      	die('ERROR:'. mysqli_error($con));
								      	echo "Problem in filling the form. Try Again!";
								      }
								      echo "<div align='center' span style='color:green;'>Thanks for Your Feeedback!!!</span></div>";

							      mysqli_close($con);
								      ?>
								      