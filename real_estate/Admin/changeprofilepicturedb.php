<?php 
session_start();
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "re";
// Create connection
$UserName = $_SESSION['username'];  
$con=mysqli_connect("localhost","root","","re");
   
  if(mysqli_connect_errno())
  {
    echo('could not connect to database :'. mysqli_connect_errno());
  }
   $images = strip_tags($_POST['images']);

    if ($images=="")
    {
      echo "please select image";
    }
else
{
$sql="update customer_reg set Profile_Picture='$images' WHERE UserName='$UserName'";
        if(!mysqli_query($con,$sql))
        {
          die('ERROR:'. mysqli_error($con));
        }
                   echo '<script type="text/javascript">alert(" Profile Profile Picture change successfully");window.location=\'homepage.php\';</script>';

   }
        mysqli_close($con);
        ?>