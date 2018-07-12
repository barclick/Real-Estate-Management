<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Real Estate</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #869629}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
-->
</style>
</head>
<body>
<table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="33" bgcolor="#D36101"><span class="style10">Edit Record</span></td>
  </tr>
  <tr>
    <td>
    <?php
    error_reporting(0);
$CustomerID=$_GET['CustomerID'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("re", $con);
// Specify the query to execute
$sql = "select * from customer_reg where CustomerID=".$CustomerID."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$CustomerID=$row['CustomerID'];
$Username=$row['Username'];
$FirstName=$row['FirstName'];
$PhoneNumber=$row['PhoneNumber'];
$Email=$row['Email'];
$Password=$row['Password'];
}
?>
<form Method="POST" Action="UpdateUser.php">
<table width="100%" border="0">
<tr>
<td height="32"><span class="style8">CustomerID</span></td>
<td><span id="sprytextfield1">
  <label>
  <input name="txtUserId" type="text" id="CustomerID" value="<?php echo $CustomerID;?>" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td height="36"><span class="style8">Username:</span></td>
<td><span id="sprytextfield2">
  <label>
  <input name="txtUserName" type="text" id="Username" value="<?php echo $Username;?>" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td height="36"><span class="style8">FirstName:</span></td>
<td><span id="sprytextfield2">
  <label>
  <input name="FirstName" type="text" id="FirstName" value="<?php echo $FirstName;?>" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td height="36"><span class="style8">PhoneNumber:</span></td>
<td><span id="sprytextfield2">
  <label>
  <input name="PhoneNumber" type="text" id="PhoneNumber" value="<?php echo $PhoneNumber;?>" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td height="36"><span class="style8">Email:</span></td>
<td><span id="sprytextfield2">
  <label>
  <input name="Email" type="text" id="Email" value="<?php echo $Email;?>" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>
<tr>
<td height="36"><span class="style8">Password:</span></td>
<td><span id="sprytextfield3">
  <label>
  <input name="Password" type="Password" id="txtPass" value="<?php echo $Password;?>" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>

<tr>
<td></td>
<td> <input type="submit" Name="submit" value="Update Record" /></td>
</tr>
</table>
</form>
<?php
// Close the connection
mysql_close($con);
?>
</table>

    </td>
  </tr>
</table>
<h2 class="style3">&nbsp;</h2>
    
      </div>
        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>
