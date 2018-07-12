<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "re";
$con = mysqli_connect("localhost","root","","re");
// Create connection
      $RB_ID=$_GET['RB_ID'];
      ?>
      <?php
$result = mysqli_query($con,"SELECT * FROM request_to_buy where RB_ID='$RB_ID'");
    while($row = mysqli_fetch_array($result))
                                        {
                   $username =$row['UserName'];
                   $RE_ID=$row['RE_ID'];
                                        }
  if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
   
   $Email=$_POST['email'];
   $message=$_POST['message'];
   $phone=$_POST['phone'];
  
    if ($message=="")
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
//    else{

//    $q="select * from sell_response where RE_ID='$RE_ID' ";
// $rs=$con->query($q);
// if($rs->fetch_row()>0)
// {
// echo "<table>
//        <tr>
//     <td colspan='2'>
//       <div class='alert alert-info'>
//        <span style='color:red;'>you allready send response</span>
//       </div>
//     </td>
//     </tr>
//     </table> ";
//   }
else
{
$sql="INSERT INTO sell_response(RE_ID,PhoneNumber,Email,Message,UserName) 
	    VALUES ('$RE_ID','$phone','$Email','$message','$username')";
	      if(!mysqli_query($con,$sql))
	      {
	      	die('ERROR:'. mysqli_error($con));
	      }
 echo "
<table>
       <tr>
    <td colspan='2'>
      <div class='alert alert-info'>
        <strong>Success</strong>, Message send Successfully!!!
      </div>
    </td>
    </tr>
    </table>  "; 	 }
// }

	      mysqli_close($con);
	      ?>