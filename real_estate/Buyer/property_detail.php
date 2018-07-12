                    
<?php 
if ($_SESSION["username"]==null) {
 header("location:../index.php");
}
?>
<?php include'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Property Details </title>
<style type="text/css">
  #map {
        height: 400px;
        width: 120%;
       }
</style>
</head>

<div class="container">
<div class="properties-listing spacer">


 <div class="spacer"> 
 <div class="panel panel-primary">

<?php   
                
$con=mysqli_connect("localhost","root","","real_estate");

        $sql = "select * from property where RE_ID = '$id'";
				$result = mysqli_query($con,$sql);
				while($row = mysqli_fetch_array($result))
				{
				 $image = $row['image'];	
				$Longitude = $row['Longitude'];
        $Latitude = $row['Lat'];
				$video=$row['3D_View'];
        $uname=$row['UserName'];
				?>
        <div class="col-lg-7">

			  <video width="450" height="330" controls>
        <source src="../images/videos/<?php echo $video; ?>" type="video/mp4">
      </video> 
       <span class="style6">
				<?php
				}

				?>

				<?php
				mysqli_close($con);
				?>
    </div>
    </div>
<div class="col-lg-9 col-sm-8 "> 
<h4><?php
       $con=mysqli_connect("localhost","root","","real_estate");
        $sql = "select * from property where RE_ID = '$id'";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result))
        {
            $noroom = $row['Bedroom']; 
          $Category = $row['Category'];
          $State = $row['State'];
          $Facility = $row['Facility'];

          $bathroom = $row['Bathroom'];
         $price = $row['Price'];
         $Country=$row['Country'];
         $State=$row['State'];
         $Longitude = $row['Longitude'];
        $Latitude = $row['Lat'];
         $City=$row['YearBuilt'];
         $date=$row['PostDate'];
         $YearBuilt=$row['YearBuilt'];
        ?>
<div class="col-lg-7">
        <div class="panel panel-primary">
<div class="panel-heading">
<i class=""></i>         
<h5>  <?php echo $noroom; ?>   Bedroom  and <?php echo $bathroom; ?> Bathroom  <?php echo $Category;  ?></h5>

</div>
</div>
</div>                                    <
<div class="row">
<div class="col-lg-7">
<div class="property-images">
  <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators hidden-xs">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      
    </ol>
<div class="carousel-inner" role="listbox" style=" width:100%; height: 320px !important;">
      <!-- Item 1 -->
  <div class="item active">
  <?php
  $UserName = $_SESSION['username'];  
$con=mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
$result = mysqli_query($con,"SELECT * FROM property where RE_ID='$id'");
       while($row = mysqli_fetch_array($result))
                                    {
    echo "<tr id='tr'>";
     echo "<tr>";
  echo "<td>" . "<img class='img-rectangle'  src='../images/Property/".$row['image']."'". "</td>";
            }            

mysqli_close($con);
?>   
</div>
<div class="item">
Photo of Seller
 <?php 
$con=mysqli_connect("localhost","root","","real_estate");
    $sql="SELECT * FROM `property`,`customer_reg` WHERE `property`.`UserName`=`customer_reg`.`UserName` AND `property`.`RE_ID`='$id'";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result))
  {
echo  "<img class='img-rectangle' src='../images/Profile_Picture/".$row['Profile_Picture']."'";  ?>

  <?php
  
 mysqli_close($con);
}
  ?> 
 <p>what is wrong</p>
</div>
</div>


<div class="spacer"><h3></span> Properties Detail 2</h3>
<h5>
<div><h4> <?php echo $noroom; ?>   Bedroom  and <?php echo $bathroom; ?> Bathroom  <?php echo $Category;  ?> which is Found in &nbsp;<b style="color:blue "><?php echo 'Latitude'.$Latitude.'  Longitude'.$Longitude;  ?></b></b><br></h4>
</div>
<div id="map"></div>
<div> <h4> 
if you have interest to buy you have sent a request and call for owner of the real estate <?php echo $uname;  ?></h4>
</div>
<div>  <h3><span class="glyphicon glyphicon"></span>&nbsp;&nbsp;&nbsp;&nbsp; Country:&nbsp;&nbsp;<?php echo $Country;  ?></br>
<span class="glyphicon glyphicon"></span>&nbsp;&nbsp;&nbsp;&nbsp; Price:&nbsp;&nbsp;<?php echo $price; ?></br>
<span class="glyphicon glyphicon"></span>&nbsp;&nbsp;&nbsp;&nbsp; State:&nbsp;&nbsp;<?php echo $State; ?></br>
<span class="glyphicon glyphicon-text"></span>&nbsp;&nbsp;&nbsp;&nbsp; TotalArea:&nbsp;&nbsp;<?php echo $price; ?> sq/km</br>
<span </span><div class="panel-heading">
<i class="fa fa-clock-o fa-fw"></i>YearBuilt:&nbsp;&nbsp;<?php echo $YearBuilt;  ?>
<div><h4><span class="fa fa-map-o fa-fw"></span> Location : &nbsp;&nbsp;<?php echo 'Latitude'.$Latitude.'   Longitude'.$Longitude;  ?></h4></div></div>
<div class="map"></div></span></h3></div>
</div>

</div>
<div class="col-lg-4">
<div class="col-lg-12  col-sm-6">
<div class="property-info">


<div class="profile">
<?php
$con=mysqli_connect("localhost","root","","real_estate");
    $sql="SELECT * FROM `property`,`customer_reg` WHERE `property`.`UserName`=`customer_reg`.`UserName` AND `property`.`RE_ID`='$id'";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result))
  {
echo "<td>" . "<img class='img-circle' width='55' height='55' src='../images/Profile_Picture/".$row['Profile_Picture']."'". "</td>";          ?>
 
  <?php
  }

  ?>
<?php
  // Close the connection
  mysqli_close($con);
  ?> 
  Seller Details</br>
<?php
             
               // $RE_ID=$_GET['RE_ID'];

  // Establish Connection with Database
 $con=mysqli_connect("localhost","root","","real_estate");
  // Specify the query to execute
    $sql="SELECT * FROM `property`,`customer_reg` WHERE `property`.`UserName`=`customer_reg`.`UserName` AND `property`.`RE_ID`='$id'";
  // Execute query
  $result = mysqli_query($con,$sql);
  // Loop through each records 
  while($row = mysqli_fetch_array($result))
  {
      $us = $row['FirstName']; 
    $Longitude = $row['Longitude'];
    $Latitude = $row['Lat'];
    $video=$row['3D_View'];
   $uname=$row['UserName'];
   $pn=$row['PhoneNumber'];
   $ad=$row['Address'];
   $em=$row['Email'];
  ?>
 Name:
<?php echo $us; ?></br></br>
PhoneNumber:  <?php  echo $pn;  ?>    </br> </br> 
Address:   <?php    echo $ad;  ?>  </br></br>
Email:  <?php     echo $em;   ?>  </br>


  <span class="style6">
  <?php
  }

  ?>

  <?php
  // Close the connection
  mysqli_close($con);
  ?>
</div>
<h3><span class="glyphicon glyphicon-evelope"></span><strong>Facility</strong> </h3>
<div class="listing-detail">
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">   <?php echo "Number of Rooms " .$noroom; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bathroom "> <br>  <?php echo "Number of Bathroom ".$bathroom; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">   <?php echo "Number of Beds " .$noroom; ?></span> </div>

</div>
<h3>You want to buy directly</h3>
<a href="buy.php?price=<?php echo $price?>&username=<?php echo $UserName ?>" class="btn btn-primary btn-lg">Buy</a>
<h3>You want to meet the Seller before buying Contact Him by filling the form</h3>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
<h3><span class="glyphicon glyphicon-envelope"> <button  class="btn btn-primary"> Request To Buy </button></h3>
<fieldset
<table width="50%" height="10" border="0" cellpadding="3" cellspacing="3">
<div class="wrapper">

<div class="container">

<div class="col-lg-3">

<div class="row">

<div id="form-content">

<form method="post" id="reg-form" autocomplete="off">

        Name<input type="text" class="form-control" placeholder="Full Name" name="name" required="required"/>
        Email<input type="email" class="form-control" placeholder="you@yourdomain.com" name="email" required="required" />
        Phone_Number<input type="text" class="form-control" name="PhoneNumber" placeholder="your number"/>
        Message<textarea rows="6" class="form-control" name="message" placeholder="Whats on your mind?"></textarea>
<div>
<button type="submit" class="btn btn-primary" name="Submit">Send Request</button>
</div>
</form>
</div>
</div>

</div>

</div>

</div>

</div>

<script type="text/javascript" src="assets/scripts/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {  

// submit form using $.ajax() method

$('#reg-form').submit(function(e){

e.preventDefault(); // Prevent Default Submission

$.ajax({
url: 'requestdb.php?RE_ID=<?php echo $id; ?>',
type: 'POST',
data: $(this).serialize() // it will serialize the form data
})
.done(function(data){
$('#form-content').fadeOut('fast', function(){
$('#form-content').fadeIn('fast').html(data);
});
})
.fail(function(){
alert('Ajax Submit Failed ...');  
});
});

});
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMfZcs4lgMT9QkAJslEMf3JFJfLi-CNPo&callback=initMap">
    </script>
    
  <script>
      function initMap() {
        var latitude = <?php echo $Latitude; ?>;
        var longitude = <?php echo $Longitude; ?>;
        var uluru = {lat: latitude, lng: longitude};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>


</table>
</fieldset>


<?php
  }

  ?>

 
</form>
</div>         
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
