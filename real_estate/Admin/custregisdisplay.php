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
    <title>Manage User</title>
    <!-- Core CSS - Include with every page -->
<script>
    function Deleteuser(UserName)
    {
        if(confirm("are you sure you want to delete this User ?"))
        {
        window.location.href="delete_user.php?UserName="+UserName;
        }
    }
</script>
</head>

<body>
<?php
  include "Adminpage.php"
  ?>
<?php
$adminName = $_SESSION['username'];
error_reporting(0);
$con = mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
$result = mysqli_query($con,"SELECT * FROM customer_reg order by 1 DESC");

echo "<div class= 'panel-heading'>
          <table width='100%' border='0'>
            <tr>
             <td  align='center' <div class='panel panel-primary'>
               <div class='panel-heading'>
                <i></i><b>Registered User</b>
             </div>
             </td>
            <div class='panel-body'>
                <div class='table-responsive'>
                    <table class='table table-hover'>
                        <thead>
                            <tr>
    <th height='32' bgcolor='#1CB5F1'>Profile_Picture</div></th>
  <th height='32' bgcolor='#1CB5F1'>UserName</div></th>
  <th height='32' bgcolor='#1CB5F1'>FirstName</div></th>
  <th height='32' bgcolor='#1CB5F1'>LastName</div></th>
  <th height='32' bgcolor='#1CB5F1'>Gender</div></th>
  <th height='32' bgcolor='#1CB5F1'>Address</div></th>
  <th height='32' bgcolor='#1CB5F1'>City</div></th>
  <th height='32' bgcolor='#1CB5F1'>Phone Number</div></th>
  <th height='32' bgcolor='#1CB5F1'>Customer Type</div></th>
  <th height='32' bgcolor='#1CB5F1'>Email</div></th>
  <th height='32' bgcolor='#1CB5F1'>Delete</div></th>
  </tr>
   </thead>";
 while($row = mysqli_fetch_array($result))
        {
          if ($adminName == $row['UserName']) {
            break;
          }
          $path="../images/Profile_Picture/";
          $fileName=$row['Profile_Picture'];  
          echo "<tr id='tr'>";
          echo "<tr>";
          echo "<td>" .'<img class="img-rectangle" class="img-responsive" width="65" height="75" src="'.$path.$fileName.'" >'. "</td>";
            echo "<th>" . $row['UserName'] . "</th>";
            echo "<th>" . $row['FirstName'] . "</th>";
             echo "<th>" . $row['LastName'] . "</th>";
             echo "<th>" . $row['Gender'] . "</th>";
            echo "<th>" . $row['Address'] . "</th>";
            echo "<th>" . $row['City'] . "</th>";
             echo "<th>" . $row['PhoneNumber'] . "</th>";
             echo "<th>" . $row['CustomerType'] . "</th>";
            echo "<th>" . $row['Email'] . "</th>";
 ?>       
  <td>
          <a href="javascript:Deleteuser('<?php echo $row['UserName']; ?>')">
              <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
              
          </a>
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

                                        