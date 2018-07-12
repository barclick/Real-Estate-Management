
<?php 
session_start();
error_reporting(0);
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Real Estate</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
  textarea {
  width: 900px;
  height: 150px;
}
</style>
</head>
<body bgcolor="red">
<?php 
include 'Adminpage.php';
 ?>
<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>
</head>
<body>
<div class= 'panel-heading'>
                      <table width='100%' border='0'>
                        <tr>
                         <td  align='center' <div class='panel panel-primary'>
                           <div class='panel-heading'>
                            <i></i><b>Add News</b>
                         </div>
                         </td>
         <tr>
           <td height="26">
              
    <div class="row">
    
      <div id="form-content">
      <br>
      <form method="post" id="reg-form" autocomplete="off">
               <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                   <td height="36"><span class="style9">News:</span></td>
                   <td><span id="sprytextfield1">
                     <label>
                     <textarea type="text" name="txtNews" id="txtNews" width="100%" height="243%"></textarea>
                     </label>
                     
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><label>
                     <input type="submit" name="button" id="button" value="Submit" />
                   </label></td>
                 </tr>
               </table>
      </form>
      </div>
            
    </div>
    
  </div>
  
</div>
  
</div>

<script type="text/javascript" src="assets/scripts/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {  
  
  // submit form using $.ajax() method
  
  $('#reg-form').submit(function(e){
    
    e.preventDefault(); // Prevent Default Submission
    
    $.ajax({
      url: 'InsertNews.php',
      type: 'POST',
      data: $(this).serialize() // it will serialize the form data
    })
    .done(function(data){
      $('#form-content').fadeOut('fast', function(){
        $('#form-content').fadeIn('fast').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');  
    });
  });
});
</script>
             </td>
         </tr>
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
           <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1"><div align="left" class="style13 style7 style8 style12">Id</div></th>
<th bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">News</div></th>
<th bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">Date</div></th>
<th height="32" bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">Edit</div></th>
<th bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">Delete</div></th>
</tr>
<?php
$con = mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  $result = mysqli_query($con,"SELECT * FROM news_master");

while($row = mysqli_fetch_array($result))
  {

$Id=$row['NewsId'];
$News=$row['News'];
$NewsDate=$row['NewsDate'];
  }
mysqli_close($con);
?>
<tr>
<td><div align="left" class="style7 style8 style12"><?php echo $Id;?></div></td>
<td><div align="left" class="style7 style8 style12"><?php echo $News;?></div></td>
<td><div align="left" class="style7 style8 style12"><?php echo $NewsDate;?></div></td>

<td><div align="left" class="style7 style8 style12"><a href="EditNews.php?NewsId=<?php echo $Id;?>">Edit</a></div></td>
<td><div align="left" class="style7 style8 style12"><a href="DeleteNews.php?NewsId=<?php echo $Id;?>">Delete</a></div></td>
</tr>
<?php
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
<tr>
<td colspan="5"><div align="left" class="style7 style8 style12"><?php echo "Total ".$records." Records"; ?> </div></td>
</tr>
<?php
// Close the connection
?>
</table>
           </td>
         </tr>
       </table>
      
      </div>
        
      </div>
    </div>
  </div>
</div>
</body>
</html>


