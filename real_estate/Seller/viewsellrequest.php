<?php 
session_start();
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
    function sendresponce(RE_ID)
    {
        
        window.location.href="sendresponce.php?RE_ID="+RE_ID;
            }
</script>
<script>
    function viewmessage(RE_ID)
    {
       
        window.location.href="viewrequestdisplay.php?RE_ID="+RE_ID;
    }
</script>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</head>
<body >
<?php
 error_reporting(0);
  include "Sellerpage.php"
  ?>
<?php
$con = mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  $UserName = $_SESSION['username'];  
 // $Id=$_GET['RE_ID'];
$result = mysqli_query($con,"SELECT * FROM property  where username='$UserName' order by 1 DESC");

echo "<div class= 'panel-heading' >
      <table width='100%' border='0'>
      <tr>
     <td  align='center' <div class='panel panel-primary'>
      <div class='panel-heading'>
          <i></i>Availeble Real Estate Property
          <div class='pull-right'>
     <div class='btn-group'>
                  <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown'>
                      Messages
                      <span class='caret'></span>
                  </button>
                  <ul class='dropdown-menu pull-right' role='menu'>
                      <li><a href='viewsellrequest.php'>Sell Request</a>
                      </li>
                      <li><a href='#''>Another action</a>
                  </ul>
              </div>
          <div class='pull-right'>
                      </div>
      </div>     </td>
    
      <div class='panel-body'>
          <div class='table-responsive'>
              <table class='table table-hover'>
                  <thead>
                      <tr>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>P_TaxNO</div></th>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Property_For</div></th>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>RE category</div></th>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Price</div></th>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'><u>No</u> BedRooms</div></th>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Location</div></th>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Facility</div></th>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Image</div></th>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>PostDate</div></th>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Buyer Message</div></th>
  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Send Message</div></th>

    </tr>
</thead>";

while($row = mysqli_fetch_array($result))
              {

      $RE_ID = $row['RE_ID'];  

    echo "<tr id='tr'>";
    echo "<td>" . $row['P_TaxNO'] . "</td>";
    echo "<td>" . $row['Property_for'] . "</td>";
    echo "<td>" . $row['Category'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "<td>" . $row['Bedroom'] . "</td>";
        echo "<td>" . $row['Location'] . "</td>";
        echo "<td>" . $row['Facility'] . "</td>";
         $path="../images/Property/";
         $fileName=$row['image'];
        echo "<td>" .'<img class="img-circle" width="50" height="50" src="'.$path.$fileName.'" >' ."</td>";    
       echo "<td>" . $row['PostDate'] . "</td>";

   ?>    <td>
    <a href="javascript:viewmessage('<?php echo $row['RE_ID']; ?>')">
                           
          <?php
          $id=$row['RE_ID'];
          $con = mysqli_connect("localhost","root","","real_estate");
          if (!$con)
            {
            die('Could not connect: ' . mysqli_connect_error());
            }
              elseif ($con) {
          $miki = mysqli_query($con,"SELECT * FROM request_to_buy where RE_ID='$id'");

              if(mysqli_num_rows($miki)==0){
                  echo "<div align='left' span style='color:red;'>No Message</span></div>";


                ?>
            <?php
              }
                else{
                $records = mysqli_num_rows($miki);
                    echo "<div align='left' span ><strong> $records</strong> Message found </div>";
                                   } 
                                   }            
                                mysqli_close($con);
                               ?> 
                           
      </a>  
   <td>
        <?php
          $id=$row['RE_ID'];
          $con = mysqli_connect("localhost","root","","real_estate");
          if (!$con)
            {
            die('Could not connect: ' . mysqli_connect_error());
            }
              elseif ($con) {
          $miki = mysqli_query($con,"SELECT * FROM request_to_buy where RE_ID='$id'");

              if(mysqli_num_rows($miki)==1){

                ?>
      <a href="javascript:sendresponce('<?php echo $row['RE_ID']; ?>')">
                 <button type="button" class="btn btn-success">Send Response
            <?php
              }
              elseif(mysqli_num_rows($miki)>1){

                ?>
      <a href="">
                 <button type="button" class="btn btn-Primary">Please see message
            <?php
              }
                else{
                echo " <button type='button' class='btn btn-danger'>wait...</button>";
                                   } 
                                   }            
                                mysqli_close($con);
                               ?> </button>
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



