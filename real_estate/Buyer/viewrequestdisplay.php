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
    function deletemessage(RE_ID)
    {
        if(confirm(" are You sure  want to delete this Real Estate ?"))
        {
        window.location.href="deletemessage.php?RE_ID="+RE_ID;
        }
    }
</script>
<script>
    function viewresponse(RE_ID)
    {
        
        window.location.href="viewsellrequestresponce.php?RE_ID="+RE_ID;
        
    }
</script>
</head>

<body>
<?php
 error_reporting(0);
  include "buyerpage.php"
  ?>
<?php
$con = mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  $UserName = $_SESSION['username'];  
 // $Id=$_GET['RE_ID'];
$result = mysqli_query($con,"SELECT * FROM request_to_buy where username='$UserName'");

echo "<div class= 'panel-heading'>
                                   <table width='100%' border='0'>
                        <tr>
                       <td  align='center' <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <i></i>Ur Request Message to the given Real Estate
                            <div class='pull-right'>
                                        </div>
                        </div>     </td>
                      
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
                      <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>RE_ID</div></th>
                     <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>UserName</div></th>
                     <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Name_of Buyer</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Phon_NUmber</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Email</div></th>
                 <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Message</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>View Responce</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Delete</div></th>
                                        </tr>
                                    </thead>";

                            while($row = mysqli_fetch_array($result))
                                        {

                                      
                                        echo "<tr id='tr'>";
                                        echo "<td>" . $row['RE_ID'] . "</td>";
                                        echo "<td>" . $row['UserName'] . "</td>";
                                        echo "<td>" . $row['Name_of_Buyer'] . "</td>";
                                           echo "<td>" . $row['Phone_Number'] . "</td>";
                                            echo "<td>" . $row['Email'] . "</td>";
                                              echo "<td>" . $row['Message'] . "</td>";

                                       ?>       
                                          
                                                <td>
                                                    <a href="javascript:viewresponse('<?php echo $row['RE_ID']; ?>')">
                                                    <button type="button" class="btn btn-primary">
                                                       <?php
                                                  $id=$row['RE_ID'];
                                                  $con = mysqli_connect("localhost","root","","re");
                                                  if (!$con)
                                                    {
                                                    die('Could not connect: ' . mysqli_connect_error());
                                                    }
                                                      elseif ($con) {
                                                  $today = date("Y-m-d H:i:s");
                                                  $id=$row['RE_ID'];
                                                  $re = mysqli_query($con,"SELECT * FROM sell_response where RE_ID='$id'and UserName='$UserName' ");
                                                      if(mysqli_num_rows($re)==0){
                                                          echo "<div align='left' span style='color:red;'>have no response!</span></div>";


                                                        ?>
                                                    <?php
                                                      }
                                                        else{
                                                    $records = mysqli_num_rows($re);
                                                            echo "<div align='left' span ><strong>have<b> $records</b></strong>  response </div>";
                                                                           } 
                                                                           }            
                                                                        mysqli_close($con);
                     ?> 
                     </button>
                                                        </a>
                                                        <td>
                                                        <a href="javascript:deletemessage('<?php echo $row['RE_ID']; ?>')">
                                                        <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-trash"></span></button></p>
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
