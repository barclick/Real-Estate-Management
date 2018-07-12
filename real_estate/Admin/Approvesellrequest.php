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
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
<?php
  include "Adminpage.php"
  ?>
<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","re");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
$result = mysqli_query($con,"SELECT * FROM reproperty");

echo "<div class= 'panel-heading'>
                            Real Estate property
                        </div>
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
                                            
                     <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>UserName</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>P_TaxNO</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Property_For</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>RE category</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Country</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Price</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>No_BedRooms</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Location</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Facility</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Image</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>PostDate</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Status</div>
                    

                                            

                                        </tr>
                                    </thead>";

while($row = mysqli_fetch_array($result))
                                        {

                                      
                                        echo "<tr id='tr'>";
                                        echo "<td>" . $row['UserName'] . "</td>";
                                        echo "<td>" . $row['P_TaxNO'] . "</td>";
                                        echo "<td>" . $row['Property_for'] . "</td>";
                                        echo "<td>" . $row['Category'] . "</td>";
                                            echo "<td>" . $row['Country'] . "</td>";
                                            echo "<td>" . $row['Price'] . "</td>";
                                            echo "<td>" . $row['Bedroom'] . "</td>";
                                            echo "<td>" . $row['Location'] . "</td>";
                                            echo "<td>" . $row['Facility'] . "</td>";
                                            echo "<td>" . $row['image'] . "</td>";
                                            echo "<td>" . $row['PostDate'] . "</td>";
                                            echo "<td><div align='left' class='style7 style8 style12'><a href='Approve.php?NewsId=<?php echo $Id;?>'>Aprove</a>  <a href='Reject.php?NewsId=<?php echo $Id;?>'>Reject</a> </div></td>";
                                            echo "<td><p data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal'  data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td>
";
                                        }

mysqli_close($con);
?>
<!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
