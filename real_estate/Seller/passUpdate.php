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
$UserName = $_SESSION['username'];  
$con=mysqli_connect("localhost","root","","real_estate");
   
  if(mysqli_connect_errno())
  {
    echo('could not connect to database :'. mysqli_connect_errno());
  }
  $cpas=$_POST['oldpass'];
  $npass=$_POST['newpass'];

    if ($cpas=="")
    {
      echo "please enter current password";
    }
else
{
$sql="UPDATE customer_reg SET Password='$npass'  WHERE UserName='$UserName'";
        if(!mysqli_query($con,$sql))
        {
          die('ERROR:'. mysqli_error($con));
        }
 $sql1 = "UPDATE users SET Password='$npass' WHERE UserName='$UserName'";       
        if(!mysqli_query($con,$sql1))
        {
          die('ERROR:'. mysqli_error($con));
        }
 echo "
<table>
       <tr>
    <td colspan='2'>
      <div class='alert alert-info'>
        <strong>Success</strong>, Password change Successfully!!!
      </div>
    </td>
    </tr>
    </table>  "; 
    $sql2="update useraccount set Password='$npass' WHERE UserName='$UserName'";
    if(!mysqli_query($con,$sql2))
    { 	
    }
$sql3="update customer_reg set ConfirmPassword='$npass' WHERE UserName='$UserName'";
    if(!mysqli_query($con,$sql3))
    {

    }
   }
    mysqli_close($con);
        ?>