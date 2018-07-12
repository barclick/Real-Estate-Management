<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Real Estate </title>
    <!-- Core CSS - Include with every page -->
    
<script>
    function deletemessage(Req_ID)
    {
        if(confirm(" are You sure  want to delete this Requirement ?"))
        {
        window.location.href="deleterequirement.php?Req_ID="+Req_ID;
        }
    }
</script>
<script>
    function viewresponse(Req_ID)
    {
        
        window.location.href="viewrequirementresponse.php?Req_ID="+Req_ID;
        
    }
</script>
</head>

<body>
<?php
 error_reporting(0);
  include "buyerpage.php"
  ?>
<?php
$con = mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  $UserName = $_SESSION['username'];  
 // $Id=$_GET['RE_ID'];
$result = mysqli_query($con,"SELECT * FROM requirement where UserName='$UserName'");

echo "<div class= 'panel-heading'>
                                   <table width='100%' border='0'>
                        <tr>
                       <td  align='center' <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <i></i>Ur Requirement Message to the given Real Estate
                            <div class='pull-right'>
                                        </div>
                        </div>     </td>
                      
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
                      <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>RE_Category</div></th>
                     <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Real_for</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>State</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Max_Price</div></th>
                 <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Min_Price</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Bed rooms</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Location</div></th>
                   <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Facility</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Message</div></th>
                   <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Requirement_Date</div></th>
                   <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Admin Message</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Delete</div></th>

                                  </tr>
                                    </thead>";

                            while($row = mysqli_fetch_array($result))
                                        {

                                      
                                        echo "<tr id='tr'>";
                                        echo "<td>" . $row['RE_Category'] . "</td>";
                                        echo "<td>" . $row['RealEstate_for'] . "</td>";
                                        echo "<td>" . $row['State'] . "</td>";
                                           echo "<td>" . $row['Max_Price'] . "</td>";
                                            echo "<td>" . $row['Min_Price'] . "</td>";
                                              echo "<td>" . $row['Bedrooms'] . "</td>";
                                              echo "<td>" . $row['Location'] . "</td>";
                                            echo "<td>" . $row['Facility'] . "</td>";
                                              echo "<td>" . $row['Message'] . "</td>";
                                                echo "<td>" . $row['Requirement_Date'] . "</td>";



                                       ?>       
                                          
                                                <td>
                                                    <a href="javascript:viewresponse('<?php echo $row['Req_ID']; ?>')">
                                                    <button type="button" class="btn btn-primary">
                                                       <?php
                                                  $id=$row['RE_ID'];
                                                  $con = mysqli_connect("localhost","root","","re");
                                                  if (!$con)
                                                    {
                                                    die('Could not connect: ' . mysqli_connect_error());
                                                    }
                                                      elseif ($con) {
                                                  $today = date("Y-m-d H:i:s");
                                                  $id=$row['UserName'];
                                                  $Req_ID=$row['Req_ID'];
                                                  $re = mysqli_query($con,"SELECT * FROM requirement_response where  Req_ID='$Req_ID'");
                                                      if(mysqli_num_rows($re)==0){
                                                          echo "<div align='left' span style='color:red;'>have no response!</span></div>";


                                                        ?>
                                                    <?php
                                                      }
                                                        else{
                                                    $records = mysqli_num_rows($re);
                                                            echo "<div align='left' span ><strong>have<b></b></strong>  response </div>";
                                                                           } 
                                                                           }            
                                                                        mysqli_close($con);
                     ?> 
                     </button>
                                                        </a>
                                                        <td>
                                                        <a href="javascript:deletemessage('<?php echo $row['Req_ID']; ?>')">
                                                        <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-trash"></span></button></p>
                                                     </td>
                                                </tr>
                                                 <?php
                                              }
                                        echo"</table>";
mysqli_close($con);
?>
<!-- Core Scripts - Include with every page -->
    

</body>

</html>
