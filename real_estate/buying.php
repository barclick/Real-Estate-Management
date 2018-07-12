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
    	<link rel="stylesheet" href="css/homepage.css" type="text/css">
		  <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" />  
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
                          $sql = "SELECT * FROM News_Master  where NewsDate='$Da' order by 1 DESC";
                          if (mysqli_num_rows($con,$sql)==0) {
                                echo "<span style='color:brown;'><h4>Today no real estate </br> availlable for sell!!</h4></span>";
                          }
                          $result = mysql_query($sql,$con);
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
                          mysql_close($con);
                          ?>
                         <!--  News end  -->
                    </div>
						     <div>
                   <?php
                          include "search.php";
                          include "buyingrealestate.php";
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
                        <a href="#">Buying</a>
                      </li>
                      <li>
                        <a href="#">Selling</a>
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
</body>
</html>