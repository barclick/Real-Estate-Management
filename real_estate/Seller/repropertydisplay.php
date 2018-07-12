<?php 
session_start();
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Real Estate </title> 
    
<script>
    function Deleterealestate(RE_ID)
    {
        if(confirm(" are You sure  want to delete this Real Estate ?"))
        {
        window.location.href="Deletereaestate.php?RE_ID="+RE_ID;
        }
    }
</script>
<script>
    function updaterealestate(RE_ID)
    {  
        window.location.href="updatedb.php?RE_ID="+RE_ID;
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
  $UserName = $_SESSION['username'];  
 // $Id=$_GET['RE_ID'];
$result = mysqli_query($con,"SELECT * FROM property  where username='$UserName' order by 1 DESC");

echo "<div class= 'panel-heading' >
  <table width='100%' border='0' style='background-color: powderblue;' >
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
                          <li><a href='updatedb.php?RE_ID='+RE_ID;''>Sell Request</a>
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
      <th height='32' bgcolor='#1CB5F1'>P_TaxNO</div></th>
      <th height='32' bgcolor='#1CB5F1'>Property_For</div></th>
      <th height='32' bgcolor='#1CB5F1'>RE category</div></th>
      <th height='32' bgcolor='#1CB5F1'>Price</div></th>
      <th height='32' bgcolor='#1CB5F1'><u>No</u> BedRooms</div></th>
      <th height='32' bgcolor='#1CB5F1'>Location</div></th>
      <th height='32' bgcolor='#1CB5F1'>Facility</div></th>
      <th height='32' bgcolor='#1CB5F1'>Image</div></th>
      <th height='32' bgcolor='#1CB5F1'>PostDate</div></th>
      <th height='32' bgcolor='#1CB5F1'>Status</div>
     <th height='32' bgcolor='#1CB5F1'>Reason</div>
     <th height='32' bgcolor='#1CB5F1'>Edit</div></th>
    <th height='32' bgcolor='#1CB5F1'>Delete</div></th>

                          </tr>
                      </thead>";

while($row = mysqli_fetch_array($result))
    {

      $RE_ID = $row['RE_ID'];  

        echo "<tr id='tr' style='background-color: powderblue;'>";
        echo "<td>" . $row['P_TaxNO'] . "</td>";
        echo "<td>" . $row['Property_for'] . "</td>";
        echo "<td>" . $row['Category'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "<td>" . $row['Bedroom'] . "</td>";
        echo "<td>" . $row['Location'] . "</td>";
        echo "<td>" . $row['Facility'] . "</td>";
         $path="../images/Property/";
         $fileName=$row['image'];
        echo "<td>" .'<img class="img-rectangle" width="50" height="50" src="'.$path.$fileName.'" >' ."</td>";    
       echo "<td>" . $row['PostDate'] . "</td>";
        echo "<td>" . $row['Status'] . "</td>";
        echo "<td>" . $row['Reason'] . "</td>";
   ?>       <td>
                    <a href="javascript:updaterealestate('<?php echo $row['RE_ID']; ?>')">
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                 </td>

               <td>
                    <a href="javascript:Deleterealestate('<?php echo $row['RE_ID']; ?>')">
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></button>                                                      </a>
                 </td>
            </tr>
             <?php
          }
    echo"</table>";
mysqli_close($con);
?>
</body>

</html>
