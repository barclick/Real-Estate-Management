<?php include'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Property Details </title>
</head>
<body>
 <div class="container">
   <div class="properties-listing spacer">
     <div class="row">
       <div class="col-lg-3 col-sm-4 hidden-xs">
         <div class="hot-properties hidden-xs">
           </div>
             <div class="advertisement">
               <div class="spacer"><h4><span class="glyphicon glyphicon-facetime-video"></span> Advertisement</h4>
                 </div>
                  <?php
        					$con = mysql_connect("localhost","root");
        					mysql_select_db("re", $con);
                  $sql = "select * from reproperty where RE_ID = '$id'";
        					$result = mysql_query($sql,$con);
        					while($row = mysql_fetch_array($result))
        					 {
        				  $image = $row['image'];	
        					$Location = $row['Location'];
        					$video=$row['3D_View'];
                  $uname=$row['UserName'];
                  ?>
                 <video width="250" height="230" controls>
                  <source src="3D_View/<?php echo $video; ?>" type="video/mp4">
                  <source src="3D_View/<?php echo $video; ?>" type="video/ogg">
                   </video> 
        					<span class="style6">
        					<?php
        					}
                	?>
                  <?php
				       	mysql_close($con);
				    	?>
          </div>
      </div>
    <div class="col-lg-9 col-sm-8 "> 
<h2><?php
          $con = mysql_connect("localhost","root");
          mysql_select_db("re", $con);
          $sql = "select * from reproperty where RE_ID = '$id'";
          $result = mysql_query($sql,$con);
          while($row = mysql_fetch_array($result))
          {
            $noroom = $row['Bedroom']; 
            $Category = $row['Category'];
            $for = $row['Property_for'];
            $State = $row['State'];
            $Facility = $row['Facility'];
            $bathroom = $row['Bathroom'];
           $price = $row['Price'];
           $Country=$row['Country'];
           $State=$row['State'];
           $Location=$row['Location'];
           $City=$row['YearBuilt'];
           $date=$row['PostDate'];
           $YearBuilt=$row['YearBuilt'];
          ?>  
           <?php echo $noroom; ?>   Bedroom  and <?php echo $bathroom; ?> Bathroom  <?php echo $Category;  ?> for <?php echo $for; ?>
           <span class="style6">   
<div class="row">
   <div class="col-lg-8">
     <div class="property-images">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators hidden-xs">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                      <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                  </ol>
                     <div class="carousel-inner" role="listbox" style=" width:100%; height: 310px !important;">
                        <div class="item active">
                                <?php
                                  $UserName = $_SESSION['username'];  
                                  $con = mysqli_connect("localhost","root","","re");
                                  if (!$con)
                                  {
                                  die('Could not connect: ' . mysqli_connect_error());
                                  }
                                  $result = mysqli_query($con,"SELECT * FROM reproperty where RE_ID='$id'");
                                  while($row = mysqli_fetch_array($result))
                                     {
                                  echo "<tr id='tr'>";
                                  echo "<tr>";
                                  echo "<td>" . "<img class='img-rectangle'  src='images/".$row['image']."'". "</td>";
                                      }            
                                 mysqli_close($con);
                                ?>   
                           </div>
                      <div class="item">
                        Photo of Seller
                                   <?php 
                                     $con = mysql_connect("localhost","root");
                                       mysql_select_db("re", $con);
                                           $sql="SELECT * FROM `reproperty`,`customer_reg` WHERE `reproperty`.`UserName`=`customer_reg`.`UserName` AND `reproperty`.`RE_ID`='$id'";
                                               $result = mysql_query($sql,$con);
                                                 while($row = mysql_fetch_array($result))
                                                 {
                                                  echo  "<img class='img-rectangle' width='47%' src='images/Profile_Picture/".$row['Profile_Picture']."'";          ?>
                                                    <span class="style6">
                                                   <?php
                                                   }
                                                  ?>
                                                <?php
                                               mysql_close($con)
                                              ?>             
                                                </div>
             <div class="item">
<?php
                                  $UserName = $_SESSION['username'];  
                                  $con = mysqli_connect("localhost","root","","re");
                                  if (!$con)
                                  {
                                  die('Could not connect: ' . mysqli_connect_error());
                                  }
                                  $result = mysqli_query($con,"SELECT * FROM reproperty where RE_ID='$id'");
                                  while($row = mysqli_fetch_array($result))
                                     {
                                  echo "<tr id='tr'>";
                                  echo "<tr>";
                                  echo "<td>" . "<img class='img-rectangle'  src='images/".$row['image']."'". "</td>";
                                      }            
                                 mysqli_close($con);
                                ?>        </div>
    <div class="item">
         Photo of Seller
           <?php 
             $con = mysql_connect("localhost","root");
               mysql_select_db("re", $con);
                   $sql="SELECT * FROM `reproperty`,`customer_reg` WHERE `reproperty`.`UserName`=`customer_reg`.`UserName` AND `reproperty`.`RE_ID`='$id'";
                       $result = mysql_query($sql,$con);
                         while($row = mysql_fetch_array($result))
                         {
                          echo  "<img class='img-rectangle' width='47%' src='images/Profile_Picture/".$row['Profile_Picture']."'";          ?>
                            <span class="style6">
                           <?php
                           }
                          ?>
                        <?php
                       mysql_close($con)
                      ?>
                  </div>
              </div>
     <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
 </div>
</div>
   <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
      <p ><?php echo $noroom; ?>   Bedroom  and <?php echo $bathroom; ?> Bathroom  <?php echo $Category;  ?> which is Found in &nbsp;    <b style="color:blue "><b> <?php echo $Location;  ?></b></b><br>
            if you have interest to buy you have sent a request and call for owner of the real estate <?php echo $un;  ?>.</p>
  </div>
    <span class="glyphicon glyphicon-flag"></span>&nbsp;&nbsp;&nbsp;&nbsp; Country:&nbsp;&nbsp;<?php echo $Country;  ?></br>
  <span class="glyphicon glyphicon-check"></span>&nbsp;&nbsp;&nbsp;&nbsp; Price:&nbsp;&nbsp;<?php echo $price; ?></br>
  <span class="glyphicon glyphicon-screenshot"></span>&nbsp;&nbsp;&nbsp;&nbsp; State:&nbsp;&nbsp;<?php echo $State; ?></br>
  <span class="glyphicon glyphicon-text-width"></span>&nbsp;&nbsp;&nbsp;&nbsp; TotalArea:&nbsp;&nbsp;<?php echo $price; ?> sq/km</br>
  <span class="glyphicon glyphicon-calendar"></span>&nbsp;&nbsp;&nbsp;&nbsp; YearBuilt:&nbsp;&nbsp;<?php echo $YearBuilt;  ?>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;&nbsp;&nbsp; Location : &nbsp;&nbsp;<?php echo $Location;  ?></h4>
             <div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Ethiopia,+Ethiopia,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe>
             </div>
         </div>
    </div>
<div class="col-lg-4">
   <div class="col-lg-12  col-sm-6">
     <div class="property-info">
      <div class="profile">
        <span class="glyphicon glyphicon-user"></span>  
            <?php
             $con = mysql_connect("localhost","root");
             mysql_select_db("re", $con);
             $sql="SELECT * FROM `reproperty`,`customer_reg` WHERE `reproperty`.`UserName`=`customer_reg`.`UserName` AND `reproperty`.`RE_ID`='$id'";
             $result = mysql_query($sql,$con);
            while($row = mysql_fetch_array($result))
            {
              echo "<td>" . "<img class='img-circle' width='55' height='55' src='images/Profile_Picture/".$row['Profile_Picture']."'". "</td>";          ?>
           <span class="style6">
               <?php
               }
               ?>
              <?php
              mysql_close($con);
              ?> Seller Details
             </br></br>
             <?php
              $con = mysql_connect("localhost","root");
              mysql_select_db("re", $con);
              $sql="SELECT * FROM `reproperty`,`customer_reg` WHERE `reproperty`.`UserName`=`customer_reg`.`UserName` AND `reproperty`.`RE_ID`='$id'";
              $result = mysql_query($sql,$con);
              while($row = mysql_fetch_array($result))
              {
               $us = $row['FirstName']; 
               $Location = $row['Location'];
               $video=$row['3D_View'];
               $uname=$row['UserName'];
               $pn=$row['PhoneNumber'];
               $ad=$row['Address'];
               $em=$row['Email'];
               ?>
               Name:
              <?php echo $us; ?>
               PhoneNumber  <?php  echo $pn;  ?>    </br>  
               Address:   <?php    echo $ad;  ?>  </br>
               Email:  <?php     echo $em;   ?>  </br>
               <span class="style6">
               <?php
               }
              ?>
            <?php
          mysql_close($con);
          ?>
          </div>
        </div>
           <h2><span class="glyphicon glyphicon-home"></span> Facility</h2>
             <div class="listing-detail">
              <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">   <?php echo $noroom; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bathroom ">   <?php echo $bathroom; ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">   <?php echo $noroom; ?></span> </div>
             </div>
        <div class="col-lg-12 col-sm-6 ">
          <div class="enquiry">
            <h6><span class="glyphicon glyphicon-envelope"></span> Request To Buy</h6>
             <fieldset
                  <table width="50%" height="10" border="0" cellpadding="3" cellspacing="3">
                  </table>
            </fieldset>
                      <?php 
                        include 'loginmodal.php';
                        ?>
                        <?php
                         }
                        ?>
                      <?php
                      mysql_close($con);
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
