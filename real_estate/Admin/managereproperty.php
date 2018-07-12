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
    function Deletereaestate(RE_ID)
    {
        if(confirm("are you sure you want to delete this Real Estate Property?"))
        {
        window.location.href="Deletereaestate.php?RE_ID="+RE_ID;
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
$result = mysqli_query($con,"SELECT * FROM property where Status ='Accepted' or Status='Rejected' order by 1 DESC");

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
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Property For</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>RE category</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Country</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Price</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'><u>No</u> BedRoom</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Location</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Facility</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Image</div></th>
                   <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>3D_View</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>PostDate</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Status</div>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Delete</div></th>
                           </tr>
                              </thead>";

while($row = mysqli_fetch_array($result))
        {

      
        echo "<tr id='tr'>";
        echo "<td>" . $row['Property_for'] . "</td>";
        echo "<td>" . $row['Category'] . "</td>";
        echo "<td>" . $row['Country'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "<td>" . $row['Bedroom'] . "</td>";
        echo "<td>" . $row['Location'] . "</td>";
        echo "<td>" . $row['Facility'] . "</td>";
        $path="../images/Property/";
         $fileName=$row['image'];
        echo "<td>" .'<img class="img-circle" width="50" height="50" src="'.$path.$fileName.'" >' ."</td>"; 
     echo "<td>" . "<video width='60' controls>
    <source src='3D_View/".$row['3D_View']."'".
    "</td>";
            echo "<td>" . $row['PostDate'] . "</td>";
            echo "<td>" . $row['Status'] . "</td>";
    ?>       
                <td>
                        <a href="javascript:Deletereaestate('<?php echo $row['RE_ID']; ?>')">
                        <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></button>                                                      </a>

                </tr>
    <?php
              }
        echo"</table>";

mysqli_close($con);
?>
<!-- Core Scripts - Include with every page -->
    

</body>

</html>
