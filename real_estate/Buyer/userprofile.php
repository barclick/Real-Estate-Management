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
    <title>Profile</title>
    <!-- Core CSS - Include with every page -->
<script>
    function editprofile(UserName)
    {
        window.location.href="Editpfofile.php?UserName="+UserName;
    }
</script>
</head>

<body>
<?php
  include "buyerpage.php"
  ?>
<?php
 $UserName = $_SESSION['username']; 
error_reporting(0);
$con = mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
$result = mysqli_query($con,"SELECT * FROM customer_reg where UserName='$UserName'");

echo "<div class= 'panel-heading'>
                                   <table width='100%' border='0'>
                        <tr>
                       <td  align='center' <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <i></i>Profile Information
                            <div class='pull-right'>
                                        </div>
                        </div>     </td>
                      
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>



                                       
                                        
                <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Profile_Picture</div></th>
              <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>UserName</div></th>
              <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>FirstName</div></th>
              <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>LastName</div></th>
              <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Address</div></th>
              <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>PhoneNumber</div></th>
              <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>CustomerType</div></th>
              <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Email</div></th>
              <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Password</div></th>
              <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Edit</div></th>
              </tr>
               </thead>";
       while($row = mysqli_fetch_array($result))
  {
   
    echo "<tr id='tr'>";
    echo "<tr>";
     $path="../images/Profile_Picture/";
  $fileName=$row['Profile_Picture'];
  echo "<td>" .'<img class="img-circle" width="65" height="65" src="'.$path.$fileName.'" >'. "</td>"; 
      echo "<th>" . $row['UserName'] . "</th>";
      echo "<th>" . $row['FirstName'] . "</th>";
       echo "<th>" . $row['LastName'] . "</th>";
      echo "<th>" . $row['Address'] . "</th>";
       echo "<th>" . $row['PhoneNumber'] . "</th>";
       echo "<th>" . $row['CustomerType'] . "</th>";
      echo "<th>" . $row['Email'] . "</th>";
      echo "<th>" . $row['Password'] . "</th>";
?>       
              <td>
               <a href="javascript:editprofile('<?php echo $row['UserName']; ?>')">
                      <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-pencil"></button>                                                      </a>
                  </td>
              </tr>
  <?php
            }
      echo"</table>";

mysqli_close($con);
?>
<div class="panel-body">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                          Change Profile_Picture
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Change Profile_Picture</h4>
                                        </div>
                                        <div class="modal-body">
  <div class="wrapper">                                            <table>
  <div class="container">
  
  <div class="col-lg-3">
  
    <div class="row">
    
      <div id="form-content">
      
      <form  method="post" action="changeprofilepicturedb.php" autocomplete="off" >
                                    <tr>
                        <td height="38"><span class="style8">Profile Picture:</span></td>
                        <td><label>
                        <div>
                        <input type="file" name="images"  onchange="imagepreview(this);">
                       <img id="imgpreview" name ="images"  width="150" height="170" title="You Select this Photo" /
                       </div>
                      <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"> </script>
                      <script type="text/javascript">
                      function imagepreview(input){
                       if (input.files && input.files[0]) {
                        var reader=new FileReader();
                        reader.onload=function(e){
                          $('#imgpreview').attr('src',e.target.result);
                        };
                        reader.readAsDataURL(input.files[0]);
                      }
                    }
                  </script>
                    </label></td>
                  </tr></table>                    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                          </form>
                                           </div>
           </div>
    </div>
  </div>
  
</div>
                                          </table>
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
      url: 'changeprofilepicturedb.php',
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

</body>

</html>

                                        