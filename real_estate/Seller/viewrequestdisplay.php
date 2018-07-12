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
    function Deleterealestate(RB_ID)
    {
        if(confirm(" are You sure  want to delete this Request message Estate ?"))
        {
        window.location.href="Deletereaestate.php?RE_ID="+RE_ID;
        }
    }
</script>
<script>
    function sendresponce(RB_ID)
    {
        
        window.location.href="sendresponce.php?RB_ID="+RB_ID;
            }
</script>
</head>

<body>
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
    elseif ($con) {

 $Id=$_GET['RE_ID'];
  // $sql="SELECT * FROM `reproperty`,`customer_reg` WHERE `reproperty`.`UserName`=`customer_reg`.`UserName` AND `reproperty`.`RE_ID`='$id'";
$result = mysqli_query($con,"SELECT * FROM request_to_buy where RE_ID='$Id'");
 if(mysqli_num_rows($result)==0){
        echo "<div align='left' span style='color:brown;'> aynbody can't send message to thise Real Estate!</span></div>";
 ?>
  <?php
    }
    elseif(mysqli_num_rows($result)==1){
        echo "<div class= 'panel-heading'>
                                   <table width='100%' border='0'>
                        <tr>
                       <td  align='center' <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <i></i> Buyer Message
                            <div class='pull-right'>
                                        </div>
                        </div>     </td>
                      
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
                     <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>RE_ID</div></th>
                     <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Name_of Buyer</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Phon_NUmber</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Email</div></th>
                 <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Message</div></th>
                                        </tr>
                                    </thead>";

                            while($row = mysqli_fetch_array($result))
                                        {

                                      
                                        echo "<tr id='tr'>";
                                        echo "<td>" . $row['RE_ID'] . "</td>";
                                        echo "<td>" . $row['Name_of_Buyer'] . "</td>";
                                           echo "<td>" . $row['Phone_Number'] . "</td>";
                                            echo "<td>" . $row['Email'] . "</td>";
                                              echo "<td>" . $row['Message'] . "</td>";

                                       ?>       
                                                 <?php
                                              }
                                           ?>
                                            <?php
                                              }
          else{

             echo "<div class= 'panel-heading'>
                      <table width='100%' border='0'>
                        <tr>
                       <td  align='center' <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <i></i> Buyer Message
                            <div class='pull-right'>
                                        </div>
                        </div>     </td>
                      
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
                     <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>RE_ID</div></th>
                     <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Name_of Buyer</div></th>
                    <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Phon_NUmber</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Email</div></th>
                 <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Message</div></th>
                  <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Send Message</div></th>
                   <th height='32' bgcolor='#1CB5F1'><div align='left' class='style13 style7 style8 style12'>Request_Date</div></th>
                                        </tr>
                                    </thead>";

                            while($row = mysqli_fetch_array($result))
                                        {

                                      
                                        echo "<tr id='tr'>";
                                        echo "<td>" . $row['RE_ID'] . "</td>";
                                        echo "<td>" . $row['Name_of_Buyer'] . "</td>";
                                           echo "<td>" . $row['Phone_Number'] . "</td>";
                                            echo "<td>" . $row['Email'] . "</td>";
                                              echo "<td>" . $row['Message'] . "</td>";
                                              echo "<td>" . $row['Request_Date'] . "</td>";


                                       ?>  
                                       <td>
                                        <a href="javascript:sendresponce('<?php echo $row['RB_ID']; ?>')">
                               <button type="button" class="btn btn-success">Send Response 
                               </td>    
                                                 <?php
                                              }
                                            }
                                      }
                                       
mysqli_close($con);
?>
<!-- Core Scripts - Include with every page -->
    

</body>

</html>
