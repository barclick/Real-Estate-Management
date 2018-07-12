<?php 
session_start();
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<?php

// Create connection
      $id=$_GET["RE_ID"];
      $UserName = $_SESSION['username'];  
$con=mysqli_connect("localhost","root","","real_estate");
  if(mysqli_connect_errno())
  {
    echo('could not connect to database :'. mysqli_connect_errno());
  }
  $name     = strip_tags($_POST['name']);
   $PhoneNumber=$_POST['PhoneNumber'];
   $Email=$_POST['email'];
   $message=$_POST['message'];
   $date = date('y/m/d');
     if ($UserName=="")
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
   else{

   $q="select * from request_to_buy where RE_ID='$id' and UserName='$UserName' ";
$rs=$con->query($q);
if($rs->fetch_row()>0)

{
echo "<table>
       <tr>
    <td colspan='2'>
      <div class='alert alert-info'>
       <span style='color:red;'>Sorry you allready send Request!!!</span>
      </div>
    </td>
    </tr>
    </table> ";
  }

else
{
$sql="INSERT INTO request_to_buy(Name_of_Buyer,Phone_Number,Email,Message,UserName,RE_ID,Request_Date) 
      VALUES ('$name', '$PhoneNumber','$Email','$message','$UserName','$id','$date')";
        if(!mysqli_query($con,$sql))
        {
          die('ERROR:'. mysqli_error($con));
        }
  echo "
<table>
       <tr>
    <td colspan='2'>
      <div class='alert alert-info'>
        <strong>Success</strong>, Request send Successfully!!!
      </div>
    </td>
    </tr>
    </table>  ";      
      }
   }
  
        mysqli_close($con);
        ?>

        