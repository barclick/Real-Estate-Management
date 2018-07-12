<?php

// Create connection
      $id=$_GET["RE_ID"];
$con=mysqli_connect("localhost","root","","real_estate");
  if(mysqli_connect_errno())
  {
    echo('could not connect to database :'. mysqli_connect_errno());
  }
   $Name=$_POST['name'];
   $PhoneNumber=$_POST['PhoneNumber'];
   $Email=$_POST['email'];
   $message=$_POST['message'];


    if ($Name=="")
    {
      echo "please fill ur  name";
    }
else
{
$sql="INSERT INTO request_to_buy(Name_of_Buyer,Phone_Number,Email,Message,RE_ID) 
      VALUES ('$Name', '$PhoneNumber','$Email','$message','$id')";
        if(!mysqli_query($con,$sql))
        {
          die('ERROR:'. mysqli_error($con));
                 echo '<script type="text/javascript">alert("Erorr!");window.location=\'index.php\';</script>';
   }
  echo '<script type="text/javascript">alert("Request send successfully!");window.location=\'homepage.php\';</script>';

  }
        mysqli_close($con);
        ?>