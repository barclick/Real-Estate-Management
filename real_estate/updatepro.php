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
  <title>User Registration</title>
     <link rel="stylesheet" href="css/regist.css" type="text/css">
    <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" />
    <link rel="stylesheet" href="css/registrationform.css" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
 <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet">
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
				</div>
				<img src="images/reales.PNG" alt="LOGO" height="80" width="1000">

				<div id="navigation">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="Aboutus.php">About</a>
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
						<li class="selected">
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
                       <div id="line">
                      <?php 
                        include 'loginform.php';
                       ?>
                        <h3><img src="images/news.png" alt="Latest News" height="100" width="200"></h3>
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
      echo "<span style='color:brown;'><h4>Today no real estate availlable for sell!!</h4></span>";
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
                       </div>

						<div class="container">
						  <div class="col-lg-3">
							  <div class="row">
							     <div id="form-content">
 <h4 class="modal-title" id="myModalLabel">Update Your Profile</h4>
										</div>
										<div class="modal-body">
											
											<form id="updateProfile-form" method="POST" role="form" autocomplete="off">
												<div class="block">
													<input required="" class="form-control" name="fname" id="form_fname" value="" placeholder="First name" type="text">
												</div>
												<span class="" style="color:red" id="fname_error"></span>
												<!-- <span class="help-block" id="error"></span> -->
												<!-- <div style="" id="error-fname" class="alert alert-danger error-block"></div> -->
												<div class="block mt10">
													<input required="" class="form-control" name="lname" id="form_lname" placeholder="Last name" type="text">
												</div>
												<span class="" style="color:red" id="lname_error"></span>
												<!-- <div style="" id="error-lname" class="alert alert-danger error-block"></div> -->
												
												<div class="block mt10">
													<input required="" class="form-control" name="email" id="form_email" placeholder="Email" type="email">
												</div>
												<span class="" style="color:red" id="email_error"></span>
												<!-- <div style="" id="error-email" class="alert alert-danger error-block"></div> -->
												
												<div class="block mt10">
													<div class="form-group">
														<label>Upload Image</label>
														<div class="input-group">
															<span class="input-group-btn">
																<span class="btn btn-default btn-file">
																	Browse...<input type="file" name="image" id="imgInp">
																</span>
															</span>
															<input type="text" name="Iname" class="form-control" readonly="">
														</div>
														<img id="img-upload">
													</div>
												</div>
												<span class="error-block" style="color:red" id="image_error"></span>
												<!-- <div style="" id="error-confirm_password" class="alert alert-danger error-block"></div> -->
												<!-- <div class="block mt10">
													<label class="col-md-4 control-label" for="genere">Select Favorite Genere</label>
													<select id="lstFruits" multiple="multiple" name="genere[]">
														<option value="Comedy">Comedy</option>
														<option value="Action">Action</option>
														<option value="Adventure">Adventure</option>
														<option value="Documentary">Documentary</option>
														<option value="Biography">Biography</option>
														<option value="Family">Family</option>
													</select>
												</div> -->
												<button id="update-submit" type="submit" class="btn btn-block btn-successful btn-approve mt20">
													Update
												</button>
												<div style="display: none;" id="register-loading" class="cssload-center">
													<div class="cssload"><span></span></div>
												</div>
											</form>
							</div>
							</div>
							</div>
							</div>
							<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
			// $(function(){
				$(document).ready(function(){
					$fname=$("#fname").val();
					$lname=$("#lname").val();
					$email=$("#email").val();

					$("#form_fname").val($fname);
					$("#form_lname").val($lname);
					$("#form_email").val($email);

					$("#fname_error").hide;
					$("#lname_error").hide;
					$("#email_error").hide;

					$("#length").hide;
					$("#capital").hide;
					$("#number").hide;
					$("#letter").hide;
					$("#conp_error").hide;

					var fname_error=false;
					var lname_error=false;
					var email_error=false;

					var length=false;
					var capital=false;
					var number=false;
					var letter=false;
					var conp_error=false;

					$("#form_fname").keyup(function(){
						check_fname();
					});

					$("#form_lname").keyup(function(){
						check_lname();
					});

					$("#form_email").keyup(function(){
						check_email();
					});

					$("#newpassword").keyup(function(){
						check_newpass();
					});

					$("#cpassword").keyup(function(){
						check_cpass();
					});

					function check_fname(){
						var fname_length = $("#form_fname").val().length;
						var pattern = new RegExp(/^[a-zA-Z]+$/);

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

					function check_newpass(){
						var pswd = $("#newpassword").val().length;
						var letters = new RegExp(/[a-z]/);
						var capitals = new RegExp(/[A-Z]/);
						var numbers = new RegExp(/[\d]/);

						if (pswd <8) {
							$("#length").html("At least 8 characters");
							$("#length").show();
							length=true;
						}else{
							$("#length").hide();
						} if (!letters.test($("#newpassword").val())){
							$("#letter").html("Should be contain at least one Small letter");
							$("#letter").show();
							letter=true;
						}else{
							$("#letter").hide();
						} if (!capitals.test($("#newpassword").val())) {
							$("#capital").html("Should be contain at least one Capital letter");
							$("#capital").show();
							capital=true;
						}else{
							$("#capital").hide();
						} if (!numbers.test($("#newpassword").val())) {
							$("#number").html("Should be contain at least one Number");
							$("#number").show();
							number=true;
						}else{
							$("#number").hide();
						}
					}

					function check_cpass(){
						var password = $("#newpassword").val();
						var pass_check = $("#cpassword").val();;

						if (password!=pass_check) {
							$("#conp_error").html("Password don't match");
							$("#conp_error").show();
							conp_error=true;
						}else{
							$("#conp_error").hide();
						}
					}

					$('#pass_update').on("submit", function(event){  
						event.preventDefault(); 

						length=false;
						capital=false;
						number=false;
						letter=false;
						conp_error=false;

						check_newpass();
						check_cpass();

						if (length==false && capital==false && number==false && letter==false && conp_error==false) {
							$.ajax({  
								url:"passUpdate.php",  
								method:"POST",  
								data:$('#pass_update').serialize(),  
								beforeSend:function(){  
									$('#updatePass').val("Inserting");  
								}, 
								success:function(response) {
									if(response=="success")
									{
										$('#pass_update')[0].reset();  

										$("#oldpass").hide();
										$("#newpass").hide();
										$("#conpass").hide();

										$("#updatePass").hide();

										$("#editPass").show();
										alert('Success');
									}
									else
									{
										alert("Old Password don't match");
									}
								} 
							}); 
						}else{
							return false;
						}
					});
					$(document).ready(function () {
    $("#addProductForm").submit(function (event) {

        //disable the default form submission
        event.preventDefault();
        //grab all form data  
        var formData = $(this).serialize();

        $.ajax({
            url: 'addProduct.php',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function () {
                alert('Form Submitted!');
            },
            error: function(){
                alert("error in ajax form submission");
            }
        });

        return false;
    });
});
					 $('#updateProfile-form').submit(function(e){
    

    e.preventDefault(); // Prevent Default Submission
    
    $.ajax({
      url: 'updateprodb.php',
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
				});
			</script>
			<script>
				$(document).ready(function(){
					$('#feedback-form').on("submit", function(event){  
						event.preventDefault();  

						$.ajax({  
							url:"feedback.php",  
							method:"POST",  
							data:$('#feedback-form').serialize(),  
							beforeSend:function(){  
								$('#feedback-submit').val("Inserting");  
							}, 
							success:function(response) {
								if(response=="success")
								{
									window.location.href="";
									$('#feedback-form')[0].reset(); 
							// $('#pop-login').modal('hide');
						}
						else
						{
							alert("Fail");
						}
					}  
				});    
					});
				});  
			</script>