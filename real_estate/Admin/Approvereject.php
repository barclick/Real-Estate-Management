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
    <title>Manage Real Estate </title>
    <!-- Core CSS - Include with every page -->
 <script>
    function Approverealstate(RE_ID)
    {
        if(confirm("are you sure you want to Approve this Real Estate Property?"))
        {
        window.location.href="Approve.php?RE_ID="+RE_ID;
        }
    }
</script>
<script>
    function Rejectreastate(RE_ID)
    {
        if(confirm(" are you sure you want to Reject this Real Estate Property?"))
        {
        window.location.href="Reject.php?RE_ID="+RE_ID;
        }
    }
</script>    

</head>

<body>
<?php
  include "Adminpage.php"
  ?>
<?php
error_reporting(0);
    $RE_ID=$_GET['RE_ID'];
$con = mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
$result = mysqli_query($con,"SELECT * FROM property where Status='Pending'");
echo "<div class= 'panel-heading'>
                      <table width='100%' border='0'>
                        <tr>
                         <td  align='center' <div class='panel panel-primary'>
                           <div class='panel-heading'>
                            <i></i><b>Real Estate Property</b>
                         </div>
                         </td>
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
                                            
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >P_TaxNO</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Property For</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >RE category</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Country</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Price</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Bed Room</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Location</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Image</div></th>
                   <th height='32' bgcolor='#1CB5F1'><div align='left' >3D_View</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >PostDate</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' >Status</div>
                    <th height='10' bgcolor='#1CB5F1'><div align='left' >Approve/Reject</div></th>

                                    </tr>
                                    </thead>";

while($row = mysqli_fetch_array($result))
  {                                      
    echo "<tr id='tr'>";
    echo "<td>" . $row['P_TaxNO'] . "</td>";
    echo "<td>" . $row['Property_for'] . "</td>";
    echo "<td>" . $row['Category'] . "</td>";
    echo "<td>" . $row['Country'] . "</td>";
    echo "<td>" . $row['Price'] . "</td>";
    echo "<td>" . $row['Bedroom'] . "</td>";
    echo "<td>" . $row['Location'] . "</td>";
     $path="../images/Property/";
         $fileName=$row['image'];
        echo "<td>" .'<img class="img-circle" width="50" height="50" src="'.$path.$fileName.'" >' ."</td>";    
    echo "<td>" . "<video width='60' controls><source src='3D_View/".$row['3D_View']."'"."</td>";
    echo "<td>" . $row['PostDate'] . "</td>";
    echo "<td>" . $row['Status'] . "</td>";
?>       
    <td>
            <a href="javascript:Approverealstate('<?php echo $row['RE_ID']; ?>')">
                <button type="button" class="btn btn-success">Approve</button>
            </a>
            <form method="POST" action="Reject.php">
          <input type="textarea" name="reason" placeholder="type reason">    
          <input type="hidden"  name="hidden" value="<?php echo $row['RE_ID']; ?>">
         <button type="submit" class="btn btn-danger" value="">Reject</button>                                                       
         </form> 
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
