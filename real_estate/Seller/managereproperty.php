<?php 
session_start();
if ($_SESSION["UserName"]==null) {
   header("location:../index.php");
}

?>
<html>
<head>
</head><body>
<style type="text/css">
<!--
.style3 { font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: small;
  font-weight: bold;
  color: #FFFFFF;
}
.style4 { font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: small;
  font-weight: bold;
  color: #FFFFFF;
}
.style7 {font-size: small}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; }
-->
</style>
<?php
  include "Headermenu.php"
  ?>
<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","re");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
$result = mysqli_query($con,"SELECT * FROM reproperty");

echo "<table width='100%' border='1' align='center' bordercolor='#1CB5F1'>
<tr id='th'>
<tr>
<td height='25' bgcolor='#778899'><span class='style4'>Real Estate property</span></td>
  </tr>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Seller_ID</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>P_TaxNO</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Property_For</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>RE category</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Country</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Address</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>State</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Price</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>No_BedRooms</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>No_BathRooms</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Location</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Facility</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>YearBuilt</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Total Area</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Image</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>3D_View</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>PostDate</div></th>

<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Edit</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Delete</div></th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr id='tr'>";
  echo "<th>" . $row['Seller_ID'] . "</th>";
  echo "<th>" . $row['P_TaxNO'] . "</th>";
   echo "<th>" . $row['Property_for'] . "</th>";
   echo "<th>" . $row['Category'] . "</th>";
  echo "<th>" . $row['Country'] . "</th>";
  echo "<th>" . $row['Address'] . "</th>";
   echo "<th>" . $row['State'] . "</th>";
   echo "<th>" . $row['Price'] . "</th>";
  echo "<th>" . $row['Bedroom'] . "</th>";
   echo "<th>" . $row['BathRoom'] . "</th>";
  echo "<th>" . $row['Location'] . "</th>";
  echo "<th>" . $row['Facility'] . "</th>";
   echo "<th>" . $row['YearBuilt'] . "</th>";
   echo "<th>" . $row['Totalarea'] . "</th>";
  echo "<th>" . $row['image'] . "</th>";
  echo "<th>" . $row['3D_View'] . "</th>";
  echo "<th>" . $row['PostDate'] . "</th>";
   
  echo "<td><div align='left' class='style7 style8 style12'><a href='Edit.php?NewsId=<?php echo $Id;?>'>Edit</a></div></td>";
  echo "<td><div align='left' class='style7 style8 style12'><a href='DeleteUser.php?NewsId=<?php echo $Id;?>'>Delete</a></div></td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
</body>
</html>