
<?php 
session_start();
if ($_SESSION["UserName"]==null) {
   header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
                                  <tr>
    <td height="33" bgcolor="#D36101"><span class="style10">Edit Record</span></td>
  </tr>
  <tr>
    <td>
                              <?php
                                $con = @mysql_connect("localhost","root","");
                               if (!$con)
                                  {
                              die('Could not connect: ' . mysql_error());
                                            }
                             mysql_select_db("re", $con);
                            $result = mysql_query("SELECT RE_ID,UserName,P_TaxNO,Property_for,Category,Country,Address,State,Price,Bedroom,Bathroom,Location,Facility,YearBuilt,Totalarea,image,3D_View,PostDate FROM reproperty");
echo "<table width='100%' border='1' align='center' bordercolor='#1CB5F1'>
<tr id='th'>
<tr>
<td height='5' bgcolor='#778899'><span class='style4'>Real Estate property</span></td>
  </tr>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>RE_ID</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>UserName</div></th>
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
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>PostDate</div></th>
<th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Update</div></th>
</tr>";
 while($row = mysql_fetch_array($result))
                                              {
echo "<tr>";
echo "<th>" . "<input type='text' value='$row[RE_ID]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[UserName]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[P_TaxNO]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[Property_for]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[Category]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[Country]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[Address]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[State]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[Price]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[Bedroom]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[Bathroom]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[Location]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[Facility]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[YearBuilt]'" . "</th>";
echo "<th>" . "<input type='text' value='$row[Totalarea]'" . "</th>";
echo "<th>" . "<img width='50' height='50' src='images/".$row['image']."'>". "</th>";
echo "<th>" . "<input type='text' value='$row[PostDate]'" . "</th>";
echo "<td><div align='left' class='style7 style8 style12'><a href='EditRE.php>'>Update</a></div></td>";                                              }
 echo"</table>";
 ?>
</body>
</html>