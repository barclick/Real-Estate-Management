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
   $P_TaxNO=$_POST['taxnumber'];
   $Property_for=$_POST['propertyfor'];
   $category=$_POST['category'];
   $country=$_POST['country'];
   $state=$_POST['state'];
   $price=$_POST['price'];
   $bedroom=$_POST['bedroom'];
   $bathroom=$_POST['bathroom'];
   $location=$_POST['location'];
   $facility = implode(',',$_REQUEST['chk']);
   $yearbuilt=$_POST['yearbuilt'];
   $totalarea=$_POST['totalarea'];
   $image=$_POST['image'];
   $view=$_POST['view'];
    if ($P_TaxNO=="")
    {
       echo '<script type="text/javascript">alert("please intere your REproperty taxiation number");window.location=\'Insertproperty.php\';</script>';
    }
   // if ($retitle==""||$sellerid==""||$P_TaxNO==""||$Property_for==""||$category==""||$country==""||$address==""||$state=="") {
  //echo '<script type="text/javascript">alert("please enter all of the given form");window.location=\'insertproperty.php\';</script>';
  
//}
   else{

   $q="select * from REproperty where P_TaxNO='$P_TaxNO' ";
$rs=$con->query($q);
if($rs->fetch_row()>0)

{
   echo '<script type="text/javascript">alert("taxiation number already exist please enter your tax number for the RE");window.location=\'repropertydisplay.php\';</script>';
}

else
{

  $sql="UPDATE reproperty SET UserName='$UserName',P_TaxNO='$P_TaxNO', Property_for ='$Property_for',Category ='$category',Country='".$country.",State='".$state."',YearBuilt='".$yearbuilt."',`Totalarea`='".$totalarea."',image='".$image."',3D_View='".$view."' WHERE P_TaxNO=".$P_TaxNO."";


	      if(!mysqli_query($con,$sql))
	      {
	      	die('ERROR:'. mysqli_error($con));
	     }
        echo '<script type="text/javascript">alert("you Update successfully!");window.location=\'repropertydisplay.php\';</script>';
  }
	}
	      mysqli_close($con);
      }
	      ?>