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
<head>
<head>
<style type="text/css">
  #feedbackbutton 
   {
  padding: 0px;
    background-color: #21AEF3;
    border-radius: 30px;
    width: 170px;
   }
   #Feature 
   {
  padding: 0px;
    background-color: #21AEF3;
   }
   
   
</style>
  <meta charset="UTF-8">
  <title>Real Estate</title>
  <link rel="stylesheet" href="css/homepage.css" type="text/css">
    <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" />
</head>
<body>
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
      echo "<span style='color:brown;'><h4>Today no real estate </br> availlable for sell!!</h4></span>";
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
</marquee>
              </div>
              <div>
          <h1 id="Feature"> Featured Home  Available For Sale,Rent And Commercial </h1>
                <span class="time"><br> </span>
              
                         <?php 
$con=mysqli_connect("localhost","root","","re");
// mysql_select_db("re");


if(isset($_GET['search'])){

   $RE_ID  = $_GET['value'];
  $location  = $_GET['location']; 
    $search_query = "SELECT * from reproperty where Price = '$RE_ID' and Status='Accepted' or Location = '$location' and Status='Accepted' order by 1 DESC";
    $run_query = mysqli_query($con,$search_query);
    if(mysqli_num_rows($run_query)==0){
      echo "<center><h1>sorry, result not found</h1><a href='momo.php'/a> click her to add requermets </a></center>";
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
<h4><?php echo $post_name; ?> Real Estate</h4>
<input type="image" src="images/<?php echo $post_image; ?>" width="200" height="150">
<p><?php echo $post_title; ?></p>
<p><?php echo $post_content; ?></p>
<p><?php echo$Bedroom; ?></p>
<p><?php echo  $Category; ?></p>
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
          </div>
            </div>  
            <div id="footer">
      <div>
        <ul class="navigation">
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
              <a href="reg.php">Buying</a>
            </li>
            <li>
              <a href="Sell.php">Sell</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
        </ul>
        <div id="connect">
          <a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://www.facebook.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://www.twitter.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://www.google.com/go/googleplus/" target="_blank" class="googleplus"></a>
        </div>
      </div>
      <p>
       © Done by SOE Group Members in 2009. All Rights Reserved
      </p>
    </div>
          </div>
        </div>
           </div>
            </div>
      </div>
    </div>
  </div>
</body>
</html>