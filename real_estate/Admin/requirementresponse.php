<?php 
session_start();
error_reporting(0);
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Requirement</title>
    <!-- Core CSS - Include with every page -->
     <script>
    function sendrequirement(Req_ID)
    {
      
        window.location.href="requirement_response.php?Req_ID="+Req_ID;
    }
</script>
<script>
    function Deleteuser(Req_ID)
    {
        if(confirm("are you sure you want to delete this Requirement ?"))
        {
        window.location.href="deleterequirement.php?Req_ID="+Req_ID;
        }
    }
</script>
</head>

<body>
<?php
  include "Adminpage.php"
  ?>
<?php
$con = mysqli_connect("localhost","root","","re");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
$today = date("Y-m-d H:i:s");
 $req_id= $_GET ['Req_ID'];
  $result = mysqli_query($con,"SELECT * FROM `requirement`,`reproperty` WHERE `reproperty`.`PostDate` between `requirement`.`Requirement_Date` and '$today' and `requirement`.`RE_Category`=`reproperty`.`Category` and `requirement`.`RealEstate_for`=`reproperty`.`Property_for` and `requirement`.`Location`=`reproperty`.`Location` and `reproperty`.`Price` between `requirement`.`Min_Price` and `requirement`.`Max_Price`  and  Status='Accepted'  and  Req_ID='$req_id'");
   if(mysqli_num_rows($result)==0){
        echo "<div align='left' span style='color:brown;'> Real Estate not found based on buyers Requirement!</span></div>";

      ?>
  <?php
    }
      else{
 // $result = mysqli_query($con,"SELECT * FROM `requirement`,`reproperty` WHERE `reproperty`.`Price` between `requirement`.`Max_Price` and '$min'  and 'requirement`.`Max_Price' and  Req_ID='$req_id'");and `reproperty`.`Price` between `requirement`.`Min_Price` and 'requirement`.`Max_Price'
 // $result = mysqli_query($con,"SELECT * FROM `requirement`,`reproperty` WHERE `reproperty`.`Price` between `requirement`.`Min_Price` and `requirement`.`Max_Price` and  Req_ID='$req_id'");
 echo "<div class= 'panel-heading'>
                      <table width='100%' border='0'>
                        <tr>
                         <td  align='center' <div class='panel panel-primary'>
                           <div class='panel-heading'>
                            <i></i><b>Requirement </b>
                         </div>
                         </td>
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
                     <th height='32' bgcolor='#1CB5F1'><div align='left' >RE_Name</div></th>
                     <th height='32' bgcolor='#1CB5F1'><div align='left' >RE_Category</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >RE_for</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Country</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >State</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Price</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Bedrooms</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Location</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Facility</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Post_Date</div></th>
              </tr>
               </thead>";
       while($row = mysqli_fetch_array($result))
                                    {
                                      echo "<tr id='tr'>";
                                      echo "<tr>";
                                       echo "<th>" . $row['RE_Name'] . "</th>";
                                       echo "<th>" . $row['RE_Category'] . "</th>";
                                        echo "<th>" . $row['Property_for'] . "</th>";
                                        echo "<th>" . $row['Country'] . "</th>";
                                         echo "<th>" . $row['State'] . "</th>";
                                        echo "<th>" . $row['Price'] . "</th>";
                                        echo "<th>" . $row['Bedrooms'] . "</th>";
                                         echo "<th>" . $row['Location'] . "</th>";
                                         echo "<th>" . $row['Facility'] . "</th>";
                                        echo "<th>" . $row['PostDate'] . "</th>";

                             ?>       
                            
                                            
                          
                                                </tr>
                                    <?php
                                              }
                                            }
                                        echo"</table>";

                      mysqli_close($con);
                      ?>
                      </body>

                      </html>

                                       