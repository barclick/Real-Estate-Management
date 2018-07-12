<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "real_estate";
// Create connection
$con=mysqli_connect("localhost","root","","real_estate");
   
  if(mysqli_connect_errno())
	{
		echo('could not connect to database :'. mysqli_connect_errno());
	}
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
  $UserName = $_SESSION['username'];  
  $rename=$_POST['rename'];
   $P_TaxNO=$_POST['taxnumber'];
   $Property_for=$_POST['propertyfor'];
   $category=$_POST['category'];
   $country=$_POST['country'];
   $state=$_POST['state'];
   $price=$_POST['price'];
   $bedroom=$_POST['bedroom'];
   $bathroom=$_POST['bathroom'];
   $long=$_POST['lng'];
   $lat=$_POST['lat'];
   $facility = implode(',',$_REQUEST['chk']);
   $yearbuilt=$_POST['yearbuilt'];
   $totalarea=$_POST['totalarea'];
   $image=$UserName.$_FILES['image']['name'];
   $view=$UserName.$_FILES['view']['name'];
   $Status=$_POST['Pending'];
   $date=date('y/m/d');
   move_uploaded_file($_FILES['image']['tmp_name'], "../images/Property/".$image);
   move_uploaded_file($_FILES['view']['tmp_name'], "../images/videos/".$view);
    if ($P_TaxNO=="")
    {
       echo '<script type="text/javascript">alert("please Enter your property taxiation number");window.location=\'Insertproperty.php\';</script>';
    }
   else{

   $q="select * from property where P_TaxNO='$P_TaxNO' ";
$rs=$con->query($q);
if($rs->fetch_row()>0)

{
   echo '<script type="text/javascript">alert("taxiation number already exist please enter your tax number for the RE");window.location=\'sellerpage.php\';</script>';
}

else
{
$sql="INSERT INTO property(UserName,RE_Name,P_TaxNO,Property_for,Category,Country,State,Price,Bedroom,Bathroom,Longitude,Lat,Facility,YearBuilt,Totalarea,image,3D_View,PostDate,Status) 
	    VALUES ('$UserName','$rename','$P_TaxNO','$Property_for','$category','$country','$state','$price','$bedroom','$bathroom','$long','$lat','$facility','$yearbuilt','$totalarea','$image','$view','$date','$Status')";
	      if(!mysqli_query($con,$sql))
	      {
	      	die('ERROR:'. mysqli_error($con));
	     }
        echo '<script type="text/javascript">alert("you Added your property successfully wating for approval for sell request");window.location=\'Insertproperty.php\';</script>';
  }
	}
	      mysqli_close($con);
      }
	      ?>