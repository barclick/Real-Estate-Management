<?php 
session_start();
error_reporting(0);
if ($_SESSION["username"]!=null) {
  $UserType=$_SESSION["UserType"];
     if ($UserType=="Buyer") {
       header('Location: ' . 'Buyer/Buyerpage.php');
       }
     elseif ($UserType=="Seller") {
			header('Location: ' . 'Seller/Sellerpage.php');
      }
     elseif ($UserType=="Admin") {
      header("location:Admin/Adminpage.php");   }
     else
      {
    header ("location:index.php");
    }
   }
?>
<!DOCTYPE html>
 <html>
 <head>
 <meta charset="UTF-8">
	    <title>Real Estate</title>
    	 <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" /> 
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
     
   

    <!-- Custom styles for this template -->
     <link href="css/creative.min.css" rel="stylesheet"> 
 
</head>
<body>
	 <div id="background">
		  <div id="page">
			   <div id="header">
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
     <li >
      <a href="index.php">Home</a>
     </li>
     <li>
       <a class="nav-link js-scroll-trigger" href="index.php#login">Sign In</a>
     </li>
     <li>
      <a class="nav-link js-scroll-trigger" href="registration.php">Registration</a>
     </li>
     <li class="active">
      <a href="selling.php">Selling</a>
     </li>  
     <li>
       <a class="nav-link js-scroll-trigger" href="index.php#news">News</a>
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
					  <div>
						  <div id="news" class="body">
						  	<div class="sidebar">
                  <!--Login Form  -->
                      <?php 
                      include 'loginform.php'; ?>
                     <!--  Login Form  -->
								       <h3> <img src="images/news.png" alt="Latest News" height="80" width="170"></h3>
                              <?php
                           error_reporting(0);
                          $con = mysql_connect("localhost","root");
                          mysql_select_db("re", $con);
                            $Da=date('y/m/d');
                          $sql = "SELECT * FROM News_Master  where NewsDate='$Da' order by 1 DESC limit 2";
                          if (mysqli_num_rows($con,$sql)==0) {
                                // echo "<span style='color:brown;'><h4>Today no real estate </br> availlable for sell!!</h4></span>";
                          }
                          $result = mysql_query($sql,$con);
                          while($row = mysql_fetch_array($result))
                          {
                          $News=$row['News'];
                          $date=$row['NewsDate'];
                          ?>
                          <div align="left" class="style6"><?php echo $News;?></div>
                          <div align="left" class="style6"></br>
                            for more information you can see datail in the webpage!!!
                          </div>
                          <span class="style6">
                          <?php
                          }
                          ?>
                          <?php
                          mysql_close($con);
                          ?>
                         <!--  News end  -->
                    </div>
						     <div>
                   <?php
                          include "search.php";
                          include "sellingpost.php";
                          ?>
                    </div>
						     </div>
	          <?php 
              include 'footer.php';  
             ?>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/creative.min.js"></script> 
</body>
</html>