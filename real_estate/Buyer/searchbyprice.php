

<?php 
error_reporting(0);
session_start();
$get='';
if (isset($_GET["get"])) {
  $get=$_GET["get"];
}
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<body>
  <?php 
  include 'buyerpage.php';
   ?>
                     <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"  ></i> Featured Home  Available For Sale,Rent And Rent
                        </div>
                        </div>
                         <?php 
$con=mysqli_connect("localhost","root","","real_estate");
// mysql_select_db("re");


  if(isset($_GET['search'])){
   $maxprice  = $_GET['maxprice'];
   $minprice  = $_GET['minprice'];
    $search_query = "SELECT * from property where Price  between '$minprice'  and '$maxprice'  and  Status='Accepted' order by 1 DESC";
    $run_query = mysqli_query($con,$search_query);
    if(mysqli_num_rows($run_query)==0){
      echo "<center><h1>sorry, result not found</h1><a href='addrequirement.php'/a> click her to add requermets </a></center>";
      ?>
  <?php
    }
      else{
while ($search_row=mysqli_fetch_array($run_query)){
    $post_name = $search_row['RE_Name'];
    $post_title ="Price:". $search_row['Price'];
    $post_image = $search_row['image'];
    $post_content = "Country:".substr($search_row['Country'],0,150);
     $Bedroom ="Number of Bedroom:". $search_row['Bedroom'];
     $for ="Real Estate for:". $search_row['Property_for'];
     $Category ="Category of realestate:". $search_row['Category'];
      $Veiwdet ="View Details: ". $search_row['Category'];

 echo "<a href='searchdisplay.php?get=full&id=".$search_row["RE_ID"]."'</a>"; 
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <body>
  <table  width="20%" align="left">
  <tr>
    <td width="14%" align="center">
<h4><?php echo $post_name; ?> Real Estate</h4>
<input type="image" src="../images/Property/<?php echo $post_image; ?>" width="200" height="150">
<p><?php echo $post_title; ?></p>
<p><?php echo $post_content; ?></p>
<p><?php echo$Bedroom; ?></p>
<p><?php echo  $Category; ?></p>
<p><?php echo$for; ?></p>
<h2 id="feedbackbutton">View Details</h2>
<hr>
</td>
</table>
<?php 
   }}}

if ($get=="full")
{
$id=$_GET["id"];
                                
          } 
          ?>  
          </body>
















