<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
  <meta charset="UTF-8">
  <title>Real Estate</title>
  <link rel="stylesheet" href="css/homepage.css" type="text/css">
    <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" />
        <link rel="stylesheet" href="css/registrationform.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <div id="background">
    <div id="page">
      <div id="header">
        <div id="logo">

        </div>
        <img src="images/reales.PNG" alt="LOGO" height="80" width="1000">
        <div id="navigation">

           <ul>
            <li class="selected">
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="Aboutus.php">About Us</a>
            </li>
            <li>
              <a href="registration.php">Registration</a>
            </li>
            <li>
              <a href="#">Buying</a>
            </li>
            <li>
              <a href="#">Selling</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div id="contents">
        <div class="box">
          <div>
            <div id="news" class="body">
              <div class="sidebar">
                  <!-- ********* Login Form *********** -->
                     <?php 
                   include 'loginform.php'; ?>
    <!-- ********* Login Form *********** -->
                <h3> <img src="images/news.png" alt="Latest News" height="80" width="170"></h3>
                              <?php
         error_reporting(0);
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("re", $con);
  $Da=date('y/m/d');
// Specify the query to execute
$sql = "SELECT * FROM News_Master  where NewsDate='$Da' order by 1 DESC";
if (mysqli_num_rows($con,$sql)==0) {
      // echo "<span style='color:brown;'><h4>Today no real estate </br> availlable for sell!!</h4></span>";
}

// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$News=$row['News'];
$date=$row['NewsDate'];
?>
<div align="left" class="style6"><?php echo $News;?></div>
<div align="left" class="style6">PostDate: <?php echo $date;?></br>
  for more information you can see datail in the webpage!!!
</div>
<span class="style6">
<?php
}

?>
<?php
// Close the connection
mysql_close($con);
?>
              </div>
              <div>
              <html>


          <h1 id="Feature"> Featured Home  Available For Sale,Rent and Commercial </h1>

  <?php 
$con=mysqli_connect("localhost","root","","re");

// mysql_select_db("re");
 
$search_query = "SELECT * FROM reproperty where Status ='Accepted' order by Acc_Date ";
    
    $run_query = mysqli_query($con,$search_query);
    if(mysqli_num_rows($run_query)==0){
      echo "<center><h1>sorry, result not found</h1><a href='addrequerments.php'>click her to add requermets </a></center>";
    }
      else{
while ($search_row=mysqli_fetch_array($run_query)){
    $post_name = $search_row['RE_Name'];
    $post_title ="Price:". $search_row['Price'];
    $post_image = $search_row['image'];
    $post_content = "Country:".substr($search_row['Country'],0,150);
     $Bedroom ="Number of Bedroom:". $search_row['Bedroom'];
       $Category ="Category of realestate:". $search_row['Category'];
        $Veiwdet ="View Details: ". $search_row['Category'];
echo "<a href='searchdisplay.php?get=full&id=".$search_row["RE_ID"]."'</a>";
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <body>
  <table  width="33.33%" align="left">
  <tr>
    <td width="14%" align="center">
<h3><?php echo $post_name; ?> Real Estate</h3>
<input type="image" src="images/<?php echo $post_image; ?>" width="200" height="150">

<!--<p data-placement="top" data-toggle="tooltip" title="<?php echo $post_name; ?> Real Estate
"><button class="btn btn-danger btn-xs" data-title="gg" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></p><p>-->
<p><?php echo $post_title; ?></p>
<p><?php echo $post_content; ?></p>
<p><?php echo$Bedroom; ?></p>
<p><?php echo  $Category; ?></p>
<h2 id="view">View Details</h2>
<hr>
</table>
</body>
</head>
</html>
<?php 
   }}
 ?>

              </div>
            </div>
            <?php 
            include 'footer.php';
             ?>
      </div>
    </div>
  </div>
</body>
</html>