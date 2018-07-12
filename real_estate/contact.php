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
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
  <meta charset="UTF-8">
  <title>Contact us</title>
  
  
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
   <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" /> 

    <!-- Custom styles for this template -->
     <link href="css/creative.min.css" rel="stylesheet"> 
	    

	
	<!-- <script src="js/bootstrap.min.js"></script> -->

	<script>
		$(function(){
			$('a[title]').tooltip();
		});
	</script>
    <style>
.error {color: #FF0000;}
</style>
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
     <li >
      <a href="selling.php">Selling</a>
     </li>  
     <li>
       <a class="nav-link js-scroll-trigger" href="index.php#news">News</a>
     </li>
     <li>
      <a href="faq.php">FAQ</a>
     </li>
     <li class="active">
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
						<div id="contact" class="body">
						<div class="container">
						  <div class="col-lg-3">
							  <div class="row">
							     <div id="form-content">
  <form  method="post" id="reg-form" autocomplete="off"  >

								
	<h1>Contact</h1>

		
	<strong>Name:</strong>&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
				<input type="text" width="50%" class="input-lg"  name="name" id="form_fname" placeholder=" name" value=""></br>
				<span class="error-block" style="color:red" id="fname_error"></span>
				
				</br>
				
     <strong>PhoneNumber:</strong> &nbsp;&nbsp;&nbsp;
			   <input required="" class="input-lg" name="phone" id="form_phone" placeholder="phonenumber" type="text"></br>
				<span class="error-block" style="color:red" id="phone_error"></span>

              </br>
   <strong>Email:</strong>&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;

					<input required="" class="input-lg" name="email" id="form_email" placeholder="Email" type="email"></br>
				<span class="error-block" style="color:red" id="email_error"></span>
             </br>
	<strong>Subject:</strong>&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
		<input type="text"  value="" name="subject" class="input-lg" placeholder="Enter your subject">
		</br>
		</br>
	<strong>Message:</strong>&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
		<textarea name="message" required="required" class="input-lg" ></textarea>
		</br>
		&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
		<input type="submit" value="Submit" class="btn btn-lg ">
</form>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {  

  // submit form using $.ajax() method
  
  $('#reg-form').submit(function(e){
    
    e.preventDefault(); // Prevent Default Submission
    
    $.ajax({
      url: 'Feedbackdata.php',
      type: 'POST',
      data: $(this).serialize() // it will serialize the form data
    })
    .done(function(data){
      $('#form-content').fadeOut('fast', function(){
        $('#form-content').fadeIn('fast').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');  
    });
  });
  
  
  /*
  // submit form using ajax short hand $.post() method
  
  $('#reg-form').submit(function(e){
    
    e.preventDefault(); // Prevent Default Submission
    
    $.post('submit.php', $(this).serialize() )
    .done(function(data){
      $('#form-content').fadeOut('slow', function(){
        $('#form-content').fadeIn('slow').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');
    });
    
  });
  */
  
});
</script>
							<h2> Gift Real Estate</h2>
							<p>
								<span>Address:</span> giftrealestate@gmail.com
							</p>
							<p>
								 0914234534 </br></br>
							     0923453232
							</p>
							<p>
								<span>Fax Number:</span> next will be announce...wait
							</p>
						</div>
					</div>
					<div id="footer">
			
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				 © Done by Aksum University Students in 2010. All Rights Reserved
			</p>
		</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	// $(function(){
		$(document).ready(function(){
			$("#fname_error").hide;
			$("#lname_error").hide;
			$("#username_error").hide;
		    $("#phone_error").hide;
			$("#email_error").hide;
			$("#pass_error").hide;
			$("#conp_error").hide;

			var fname_error=false;
			var lname_error=false;
			var username_error=false;
			var phone_error=false;
			var email_error=false;
			var pass_error=false;
			var conp_error=false;

			$("#form_fname").keyup(function(){
				check_fname();
			});

			$("#form_lname").keyup(function(){
				check_lname();
			});

			$("#form_username").keyup(function(){
				check_username();
			});
           $("#form_phone").keyup(function(){
				check_phone();
			});
			$("#form_email").keyup(function(){
				check_email();
			});

			$("#password").keyup(function(){
				check_pass();
			});

			$("#cpassword").keyup(function(){
				check_cpass();
			});

			function check_fname(){
				var fname_length = $("#form_fname").val().length;
				var pattern = new RegExp(/^[a-zA-Z]+$/);

			// if (pattern.test($("#form_fname").val())) {
			// 	$("#fname_error").hide();
			// }else 
			if (!pattern.test($("#form_fname").val())){
				$("#fname_error").html("Should be contain alphabets only");
				$("#fname_error").show();
				fname_error=true;
			}else if (fname_length <5 || fname_length >20) {
				$("#fname_error").html("Should be between 5-20 charcters");
				$("#fname_error").show();
				fname_error=true;
			}else{
				$("#fname_error").hide();
			}
		}

		function check_lname(){
			var lname_length = $("#form_lname").val().length;
			var pattern = new RegExp(/^[a-zA-Z]+$/);

			if (!pattern.test($("#form_lname").val())){
				$("#lname_error").html("Should be contain alphabets only");
				$("#lname_error").show();
				lname_error=true;
			}else if (lname_length <5 || lname_length >20) {
				$("#lname_error").html("Should be between 5-20 charcters");
				$("#lname_error").show();
				lname_error=true;
			}else{
				$("#lname_error").hide();
			}
		}

		function check_username(){
			var username_length = $("#form_username").val().length;
			var pattern = new RegExp(/^[0-9a-zA-Z ]+$/);

			if (!pattern.test($("#form_username").val())){
				$("#username_error").html("Should be contain alphabets and Numbers only");
				$("#username_error").show();
				username_error=true;
			}else if (username_length <5 || username_length >8) {
				$("#username_error").html("Should be between 5-8 charcters");
				$("#username_error").show();
				username_error=true;
			}else{
				$("#username_error").hide();
			}
		}		
       function check_phone(){
				var phone_length = $("#form_phone").val().length;
				var pattern = new RegExp(/^[0-9+]+$/);

			// if (pattern.test($("#form_fname").val())) {
			// 	$("#fname_error").hide();
			// }else 
			if (!pattern.test($("#form_phone").val())){
				$("#phone_error").html("Should be contain Number only");
				$("#phone_error").show();
				phone_error=true;
			}else if (phone_length <10 || phone_length >13) {
				$("#phone_error").html("Should be between 10-12 charcters");
				$("#phone_error").show();
				phone_error=true;
			}else{
				$("#phone_error").hide();
			}
		}
		function check_email(){
			var pattern = new RegExp(/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/);

			if (pattern.test($("#form_email").val())) {
				$("#email_error").hide();
			}else{
				$("#email_error").html("Invalid email address");
				$("#email_error").show();
				email_error=true;
			}
		}

		function check_pass(){
			var pass_length = $("#password").val().length;
			var pattern = new RegExp(/^[0-9a-zA-Z ]+$/);

			if (!pattern.test($("#password").val())){
				$("#pass_error").html("Should be between 5-15 charcters");
				$("#pass_error").show();
				pass_error=true;
			}else if (pass_length <6 || pass_length >15 ) {
				$("#pass_error").html("At least 6 characters");
				$("#pass_error").show();
				pass_error=true;
			}else{
				$("#pass_error").hide();
			}
		}

		function check_cpass(){
			var password = $("#password").val();
			var pass_check = $("#cpassword").val();;

			if (password!=pass_check) {
				$("#conp_error").html("Password don't match");
				$("#conp_error").show();
				conp_error=true;
			}else{
				$("#conp_error").hide();
			}
		}

		// $("#register-form").submit(function(){
			$('#register-form').on("submit", function(event){  
				event.preventDefault(); 

				fname_error=false;
				lname_error=false;
				username_error=false;
				email_error=false;
				pass_error=false;
				conp_error=false;

				check_fname();
				check_lname();
				check_username();
				check_email();
				check_pass();
				check_cpass();

				if (fname_error==false && lname_error==false && username_error==false && email_error==false && pass_error==false && conp_error==false) {

					$.ajax({  
						url:"Feedbackdata.php",  
						method:"POST",  
						data:$('#register-form').serialize(),  
						beforeSend:function(){  
							$('#register-submit').val("Inserting");  
						}, 
						success:function(response) {
							if(response=="success")
							{
								$('#register-form')[0].reset();  
								$('#pop-register').modal('hide');
								alert('Success');
							}
							else
							{
								alert("Already registered by this email or username");
							}
						} 
					}); 
				}else{
					return false;
				}
			});
		});
	</script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/creative.min.js"></script> 
</body>
</html>
