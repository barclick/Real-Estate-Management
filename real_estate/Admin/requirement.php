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
      
        window.location.href="requirementresponse.php?Req_ID="+Req_ID;
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
<script>
    function sendresponse(Req_ID)
    {
      
        window.location.href="requirement_response.php?Req_ID="+Req_ID;
    }
</script>
</head>

<body>
<?php
  include "Adminpage.php"
  ?>
  <div class="col-lg-12">
<!--  Dismissable Alerts -->
<div class="panel panel-default">
    <div class="panel-heading">
     Number of Requirement 
    </div>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            There is

            <?php
            $con = mysqli_connect("localhost","root","","real_estate");
            if (!$con)
              {
              die('Could not connect: ' . mysqli_connect_error());
              }
            $result = mysqli_query($con,"SELECT * FROM requirement");
                   while($row = mysqli_fetch_array($result))
                    {
                    ?>
                    <?php
                    }
                    $records = mysqli_num_rows($result);
                    ?>
                    <?php echo $records; ?>
                 Requirement found
                    <?php
                    mysqli_close($con);
                    ?>
                          <a href="#" class="alert-link">click here</a>.
        </div>
    </div>
</div>
 <!-- End Dismissable Alerts -->
                
<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
$result = mysqli_query($con,"SELECT * FROM requirement order by 1 DESC");

echo "<div class= 'panel-heading'>
  <table width='100%' border='0'>
    <tr>
     <td  align='center' <div class='panel panel-primary'>
      <div class='panel-heading'>
      <i></i><b>Users Requirement </b>
       </div>
     </td>
      <div class='panel-body'>
          <div class='table-responsive'>
  <table class='table table-hover'>
  <thead>
  <tr>
    <th height='32' bgcolor='#1CB5F1'><div align='left' >UserName</div></th>
    <th height='32' bgcolor='#1CB5F1'><div align='left' >RE_Category</div></th>
    <th height='32' bgcolor='#1CB5F1'><div align='left' >RE_for</div></th>
    <th height='32' bgcolor='#1CB5F1'><div align='left' >Min_Price</div></th>
    <th height='32' bgcolor='#1CB5F1'><div align='left' >Max_Price</div></th>
    <th height='32' bgcolor='#1CB5F1'><div align='left' >Location</div></th>
    <th height='32' bgcolor='#1CB5F1'><div align='left' >Facility</div></th>
    <th height='32' bgcolor='#1CB5F1'><div align='left' >Requirement Date</div></th>
    <th height='32' bgcolor='#1CB5F1'><div align='left' >Match</div></th>
    <th height='32' bgcolor='#1CB5F1'><div align='left' >Send Response</div>
    <th height='10' bgcolor='#1CB5F1'><div align='left' >Delete</div></th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result))
  {
    echo "<tr id='tr'>";
    echo "<tr>";
    echo "<th>" . $row['UserName'] . "</th>";
    echo "<th>" . $row['RE_Category'] . "</th>";
    echo "<th>" . $row['RealEstate_for'] . "</th>";
    echo "<th>" . $row['Min_Price'] . "</th>";
    echo "<th>" . $row['Max_Price'] . "</th>";
    echo "<th>" . $row['Location'] . "</th>";
    echo "<th>" . $row['Facility'] . "</th>";
    echo "<th>" . $row['Requirement_Date'] . "</th>";

?>       
<td>
<a href="javascript:sendrequirement('<?php echo $row['Req_ID']; ?>')">
                                                     
<?php
$id=$row['Req_ID'];
$con = mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
    elseif ($con) {
$today = date("Y-m-d H:i:s");
 // $req_id= $_GET ['Req_ID'];
$re = mysqli_query($con,"SELECT * FROM `requirement`,`reproperty` WHERE `reproperty`.`PostDate` between `requirement`.`Requirement_Date` and '$today' and `requirement`.`RE_Category`=`reproperty`.`Category` and `requirement`.`RealEstate_for`=`reproperty`.`Property_for` and `requirement`.`Location`=`reproperty`.`Location` and `reproperty`.`Price` between `requirement`.`Min_Price` and `requirement`.`Max_Price`  and  Status='Accepted' and  Req_ID='$id'");
    if(mysqli_num_rows($re)==0){
        echo "<div align='left' span style='color:red;'>Not present!</span></div>";


      ?>
  <?php
    }
      else{
  $records = mysqli_num_rows($re);
          echo "<div align='left' span ><strong>$records</strong> Match RE found </div>";
   } 
   }            
mysqli_close($con);
?> 

</a>

<td>
<a href="javascript:sendresponse('<?php echo $row['Req_ID']; ?>')">
<button type="button" class="btn btn-success">Send Response</button>
</a>
<td>
<a href="javascript:Deleteuser('<?php echo $row['Req_ID']; ?>')">
<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>

</a>
</td>
</tr>
<?php
}
echo"</table>";

mysqli_close($con);
?>
</body>

</html>

                                        