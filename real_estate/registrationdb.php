
<?php
$connect = mysqli_connect("localhost", "root", "", "real_estate");
if(!empty($_POST))
{
   $UserName=$_POST['username'];
   $FirstName=$_POST['fname'];
   $LastName=$_POST['lname'];
   $Gender=$_POST['Gender'];
   $Address=$_POST['Address'];
   $City=$_POST['City'];
   $PhoneNumber=$_POST['PhoneNumber'];
   $CustomerType=$_POST['CustomerType'];
   $Email=$_POST['email'];
   $Password=$_POST['password'];
   $ConfirmPassword=$_POST['confirm_password'];
	$image=$_FILES['uploadImg']['name'];
	
		move_uploaded_file($_FILES['uploadImg']['tmp_name'], "images/Profile_Picture/".$UserName);
		$path=$image;
		$update="INSERT INTO customer_reg(UserName,FirstName,LastName,Gender,Address,City,PhoneNumber,CustomerType,Email,Password,ConfirmPassword,Profile_Picture) 
	    VALUES ('$UserName','$FirstName','$LastName','$Gender','$Address','$City','$PhoneNumber','$CustomerType','$Email','$Password','$ConfirmPassword','$path')";
		mysqli_query($connect,$update);
       $sq="INSERT into Users (UserName,Password,UserType) 
      VALUES ('$UserName', '$Password', '$CustomerType')";
     if(mysqli_query($connect,$sq));
     {
    ?>
     <body>
<div id="logo">
   <img class="img-responsive" src="images/reales.PNG" alt="LOGO" >
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
<h1 class="">User sucessfully registered !!!</h1>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/creative.min.js"></script> 
</body>
</html>
<?php
     }
     else{
  ?>
  <!DOCTYPE html>
  <html>
  </body>
  </html>
      <body>
<div id="logo">
   <img class="img-responsive" src="images/reales.PNG" alt="LOGO" >
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
<h1 class="">Error occured during registration please fill the form properly !!!</h1>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/creative.min.js"></script> 
</body>
</html>
<?php
     }
   }
?>
    

	
