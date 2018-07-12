<?php 
session_start();
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requirement Responce </title>
    <!-- Core CSS - Include with every page -->
</head>

<body>
<?php
error_reporting(0);
  include "buyerpage.php"
  ?>
<?php
$con = mysqli_connect("localhost","root","","re");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
    elseif ($con) {

  $UserName = $_SESSION['username'];  
 $Id=$_GET['Req_ID'];
  // $sql="SELECT * FROM `reproperty`,`customer_reg` WHERE `reproperty`.`UserName`=`customer_reg`.`UserName` AND `reproperty`.`RE_ID`='$id'";
$result = mysqli_query($con,"SELECT * FROM requirement_response where Req_ID='$Id'");
    if(mysqli_num_rows($result)==0){
        echo "<div align='left' span style='color:brown;'> for the time being system admin shoud't send response</span></div>";

      ?>
  <?php
    }
      else{

echo "<div class= 'panel-heading'>
                                   <table width='100%' border='0'>
                        <tr>
                       <td  align='center' <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <i></i>Requirement Responce
                            <div class='pull-right'>
                                        </div>
                        </div>     </td>
                      
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
                 <th height='32' bgcolor='#1CB5F1'><div align='center'>Message</div></th>
                                        </tr>
                                    </thead>";

                            while($row = mysqli_fetch_array($result))
                                        {

                                      
                                        echo "<tr id='tr'>";
                                              echo "<td>" . $row['Message'] . "</td>";

                                       ?>       
                                          
                                            

                                                </tr>
                                                 <?php
                                              }
                                        echo"</table>";
                                      }
                                    }
                                      
                      mysqli_close($con);
                      ?>
                      </body>
                      </html>
