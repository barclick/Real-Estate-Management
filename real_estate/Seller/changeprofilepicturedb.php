<?php 
session_start();
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<?php

// Create connection
$UserName = $_SESSION['username'];  
$con=mysqli_connect("localhost","root","","real_estate");
   
  if(mysqli_connect_errno())
  {
    echo('could not connect to database :'. mysqli_connect_errno());
  }
  if(!empty($_POST))
  {
  $image=$_FILES['inputImage']['name'];

    if ($image=="")
    {
      echo "please select image";
    }
else
{
  $new_Image = $UserName;
  $file_path="images/Profile_Picture/".$UserName;
  if(file_exists($file_path))
  {
    unlink($file_path);
  }
move_uploaded_file($_FILES['inputImage']['tmp_name'], "images/Profile_Picture/".$UserName);
$sql="update customer_reg set Profile_Picture='$new_Image' WHERE UserName='$UserName'";
        if(!mysqli_query($con,$sql))
        {
          die('ERROR:'. mysqli_error($con));
        }
       echo '<script type="text/javascript">alert("profile picture change Successfully");window.location=\'homepage.php\';</script>';
   }
        mysqli_close($con);
      }
      else{
        echo "There is no post data available ";
      }
        ?>      
