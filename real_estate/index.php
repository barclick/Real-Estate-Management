<!DOCTYPE html>
 <html>
 <head>
 <meta charset="UTF-8">
      <title>Gift Real Estate</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  <link rel="stylesheet" href="css/homepage.css" type="text/css"> -->
      <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" /> 
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
     
   

    <!-- Custom styles for this template -->
     <link href="css/creative.min.css" rel="stylesheet"> 
</head>

<?php 
session_start();
error_reporting(0);
if ($_SESSION["username"]!=null) {
  $UserType=$_SESSION["UserType"];
     if ($UserType=="Buyer") {
       header('Location: ' . 'Buyer/homepage.php');
       }
     elseif ($UserType=="Seller") {
			header('Location: ' . 'Seller/homepage.php');
      }
     elseif ($UserType=="Admin") {
      header("location:Admin/homepage.php");   }
     else
      {
    header ("location:index.php");
    }
   }
?>

<body >

	<div id="logo">
	 <img class="img-responsive" src="images/gift.PNG" alt="LOGO" >
	 <nav class="navbar navbar-inverse">
   <div class="container-fluid">
   <div class="navbar-header">
    <a class="navbar-brand" href="#">Gift Real Estate</a>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    
   </div>
   <div class="navbar-collapse collapse" id="myNavbar">
    <ul class="nav navbar-nav">
     <li class="active">
      <a href="index.php">Home</a>
     </li>
     <li>
       <a class="nav-link js-scroll-trigger" href="#login">Sign In</a>
     </li>
     <li>
      <a class="nav-link js-scroll-trigger" href="registration.php">Registration</a>
     </li>
     <li>
      <a href="selling.php">Selling</a>
     </li>  
     <li>
       <a class="nav-link js-scroll-trigger" href="#news">News</a>
     </li>
     <li>
      <a href="faq.php">FAQ</a>
     </li>
     <li>
      <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
     </li>
     <li>
      <a class="nav-link js-scroll-trigger" href="Aboutus.php">About Us</a>
     </li>
    </ul>
    </div>
	 </div>
   </nav>
	 </div>
<div id="contents">
         <div class="box">
            
              <div class="body">
                
               <h2><strong>Welcome to Gift Real Estate </strong></h2>
                   <?php
                          include "search.php";
                          include "Acceptedrealestate.php";
                          ?>
                    
                 </div>
                 <div id="login">
                  <!--Login Form  -->
                      <?php 
                      include 'loginform.php'; ?>
                     <!--  Login Form  -->
      <h3 id="news"> <img class="img-responsive" src="images/news.png" width="250  alt="Latest News" ></h3>
                              
<?php

$host="localhost"; // Host name 
$db_userName="root"; // Mysql username 
$db_Password=""; // Mysql password 
$db_name="real_estate"; // Database name 


// Connect to server and select databse. 

$con=mysqli_connect("$host", "$db_userName", "$db_Password", "$db_name")or die("unable to connect ".mysqli_error()); 

  $Da=date('y/m/d');
// Specify the query to execute
$sql = "SELECT * FROM news_master ";

$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result)==0) {
      echo "<span style='color:brown;'><h4>No news availlable in database </br>  !!</h4></span>";
}

// Execute query

// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$News=$row['News'];
$date=$row['NewsDate'];
?>
<div align="left" class="style6"><?php echo $News;?></div>
<div align="left" class="style6">PostDate: <?php echo $date;?></br>
   <a href="#">See more</a>
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
      </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/creative.min.js"></script> 
</body>
</html>