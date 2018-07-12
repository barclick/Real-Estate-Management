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
      $Req_ID=$_GET['Req_ID'];
$con=mysqli_connect("localhost","root","","re");
  if(mysqli_connect_errno())
  {
    echo('could not connect to database :'. mysqli_connect_errno());
  }
   $message=$_POST['message'];
     if ($message=="")
    {
echo "<table>
       <tr>
    <td colspan='2'>
      <div class='alert alert-info'>
       <span style='color:red;'>Please fill Message</span>
      </div>
    </td>
    </tr>
    </table> ";   
  }
//    else{

//    $q="select * from requirement_response where UserName='$username' ";
// $rs=$con->query($q);
// if($rs->fetch_row()>1)

// {
// echo "<table>
//        <tr>
//     <td colspan='2'>
//       <div class='alert alert-info'>
//        <span style='color:red;'>you allready send A responce</span>
//       </div>
//     </td>
//     </tr>
//     </table> ";
//   }

else
{
$sql="INSERT INTO  requirement_response(Message,Req_ID) 
      VALUES ('$message','$Req_ID')";
        if(!mysqli_query($con,$sql))
        {
          die('ERROR:'. mysqli_error($con));
        }
  echo "
<table>
       <tr>
    <td colspan='2'>
      <div class='alert alert-info'>
        <strong>Success</strong>, Requierement Response send Successfully!!!
      </div>
    </td>
    </tr>
    </table>  ";      
      }
   // }
  
        mysqli_close($con);
        ?>