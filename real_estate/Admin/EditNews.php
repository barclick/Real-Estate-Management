<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Real Estate</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
include_once 'Adminpage.php';
 ?>
<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>


</head>
<body>

<div class="main">
  <div class="content">
    <div class="innercontent">
      <div class="rightpannel">
      <div>
      <br/>
 <div class= 'panel-heading'>
                      <table width='100%' border='0'>
                        <tr>
                         <td  align='center' <div class='panel panel-primary'>
                           <div class='panel-heading'>
                            <i></i><b>Availeble News List</b>
                         </div>
                         </td>
  <tr>
    <td>

    <?php
    error_reporting(0);
$Id=$_GET['NewsId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("re", $con);
// Specify the query to execute
$sql = "select * from News_Master where NewsId=".$Id."";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['NewsId'];
$News=$row['News'];
$NewsDate=$row['NewsDate'];
}
?>
<form Method="POST" Action="UpdateNews.php">
<table width="100%" border="0" >
</br>
<tr>
<td height="32"><span class="style8">News Id</span></td>
<td><span id="sprytextfield1">
  <label>
  <input name="txtNewsId" type="text" id="txtNewsId" value="<?php echo $Id;?>" />
  </label>
  <span class="textfieldRequiredMsg"> </span></span></td>
</tr>
<tr>
<td height="36"><span class="style8">News:</span></td>
<td><span id="sprytextfield2">
  <label>
  <input name="txtNews" type="text" id="txtNews" value="<?php echo $News;?>" />
  </label>
  <span class="textfieldRequiredMsg">value is required.</span></span></td>
</tr>
<tr>
<td height="36"><span class="style8">News Date:</span></td>
<td><span id="sprytextfield3">
  <label>
  <input name="txtDate" type="text" id="txtDate" onclick="ds_sh(this);" value="<?php echo $NewsDate;?>" />
  </label>
  <span class="textfieldRequiredMsg"</span></span></td>
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
