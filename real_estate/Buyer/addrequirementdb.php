<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "re";
// Create connection
$con=mysqli_connect("localhost","root","","re");
   
  if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    $UserName = $_SESSION['username'];  
   $category=$_POST['category'];
   $preopert_for=$_POST['preopert_for'];
   $bedroom=$_POST['bedroom'];
   $Maxprice=$_POST['maxprice'];
   $Minprice=$_POST['minprice'];
   $state=$_POST['state'];
   $location=$_POST['location'];
   $facility = implode(',',$_REQUEST['chk']);
   $message=$_POST['message'];
   $date=date('y/m/d');

    if ($message=="")
    {
       echo '<script type="text/javascript">alert("please write message  ");window.location=\'addrequirement.php\';</script>';
    }
else
{

     $sql= "INSERT INTO requirement(RE_Category,RealEstate_for, State, Max_Price, Min_Price, Bedrooms, Location, Facility, Message, Requirement_Date,UserName)
      VALUES ('$category','$preopert_for','$state','$Maxprice','$Minprice','$bedroom','$location','$facility','$message','$date','$UserName')";
	      if(!mysqli_query($con,$sql))
	      {
	      	die('ERROR:'. mysqli_error($con));
	     }
echo "<table>
       <tr>
    <td colspan='2'>
      <div class='alert alert-info'>
        <strong>Success</strong>, Requirement send Successfully!!!
      </div>
    </td>
    </tr>
    </table> ";  }
	      mysqli_close($con);
      }
	      ?>
