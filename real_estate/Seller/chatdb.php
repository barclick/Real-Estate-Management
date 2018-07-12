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
$dbname = "test";
// Create connection
     
      $today = date("Y-m-d H:i:s");
$con=mysqli_connect("localhost","root","","real_estate");
  if(mysqli_connect_errno())
  {
    echo('could not connect to database :'. mysqli_connect_errno());
  }
  $chat     = strip_tags($_POST['chat']);
  $UserName =strip_tags($_POST['uname']);
   
     if ($chat=="" && $username=="")
    {
echo "<table>
       <tr>
    <td colspan='2'>
      <div class='alert alert-info'>
        <strong>please fill Message</strong>
      </div>
    </td>
    </tr>
    </table> ";    }
else
{
$sql="INSERT INTO chat(Name,Message,C_Date) 
      VALUES ('$UserName', '$chat','$today')";
        if(!mysqli_query($con,$sql))
        {
          die('ERROR:'. mysqli_error($con));
        }      
      }
    mysqli_close($con);
    header('location:homepage.php');
        ?>