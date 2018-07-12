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
    <title>User Feedback</title>
    <!-- Core CSS - Include with every page -->
<script>
    function Deletefeedback(FD_ID)
    {
        if(confirm("are you sure you want to delete this User Feedback?"))
        {
        window.location.href="delete_feedback.php?FD_ID="+FD_ID;
        }
    }
</script>
</head>

<body>
<?php
  include "Adminpage.php"
  ?>
<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","real_estate");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
$result = mysqli_query($con,"SELECT * FROM feedback");

echo "<div class= 'panel-heading'>
                                   <table width='100%' border='0'>
                        <tr>
                       <td  align='center' <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <i></i>Feedback
                            <div class='pull-right'>
                                        </div>
                        </div>     </td>
                      
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
                      <th height='32' bgcolor='#1CB5F1'>Feedback_ID</div></th>
                     <th height='32' bgcolor='#1CB5F1'>Name</div></th>
                      <th height='32' bgcolor='#1CB5F1'>PhoneNumber</div></th>
                      <th height='32' bgcolor='#1CB5F1'>Email</div></th>
                       <th height='32' bgcolor='#1CB5F1'>Subject</div></th>
                      <th height='32' bgcolor='#1CB5F1'>Message</div></th>
                      <th height='32' bgcolor='#1CB5F1'>Date</div></th>
                      <th height='32' bgcolor='#1CB5F1'>Delete</div></th>
                                    </tr>
               </thead>";
       while($row = mysqli_fetch_array($result))
                                    {
                                      echo "<tr id='tr'>";
                                      echo "<th>" . $row['FD_ID'] . "</th>";
                                      echo "<th>" . $row['Name'] . "</th>";
                                        echo "<th>" . $row['PhoneNumber'] . "</th>";
                                         echo "<th>" . $row['Email'] . "</th>";
                                          echo "<th>" . $row['Subject'] . "</th>";
                                          echo "<th>" . $row['Message'] . "</th>";
                                           echo "<th>" . $row['F_Date'] . "</th>";

                               ?>       
                                                <td>
                                                        <a href="javascript:Deletefeedback('<?php echo $row['FD_ID']; ?>')">
                                                        <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-trash"></span></button></p>
                                                     </td>
                                                </tr>
                                    <?php
                                              }
                                        echo"</table>";
mysqli_close($con);
?>    

</body>

</html>

