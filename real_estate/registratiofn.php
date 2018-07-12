<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real Estate</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/regist.css" type="text/css">
    <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" />
    <link rel="stylesheet" href="css/registrationform.css" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<link href="css/bootstrap.css" rel="stylesheet">
 <link rel="stylesheet" href="css/regist.css" type="text/css">
    <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" />
    <link rel="stylesheet" href="css/registrationform.css" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {
			$("#editPass").click(function() {
				$("#oldpass").show();
				$("#newpass").show();
				$("#conpass").show();
				//fname
				$("#fname").show();
				$("#fname1").hide();
				//lname
				$("#lname").show();
				$("#lname1").hide();
				//email
				$("#email").show();
				$("#email1").hide();
				//image
				$("#image").hide();
				//save
				$("#save").hide();
				//edit
				$("#edit").show();
				//updatePass
				$("#updatePass").show();
				//editPass
				$("#editPass").hide();
			});
		});
	</script>
	<style>
		.input-group-addon {
			background-color: #3276B1;
			border-color: #285E8E;
			color: #FFF;
			cursor: pointer;
		}
		.invalid {
			background:url(images/invalid.gif) no-repeat 0 50%;
			padding-left:0px;
			line-height:24px;
			color:#ec3f41;
		}
		.valid {
			background:url(images/valid.png) no-repeat 0 50%;
			padding-left:0px;
			line-height:24px;
			color:#3a7d34;
		}
		#pswd_info {
			/*display:none;*/
		}
		li{
			list-style: none;
		}
		.btn-file {
			position: relative;
			overflow: hidden;
		}
		.btn-file input[type=file] {
			position: absolute;
			top: 0;
			right: 0;
			min-width: 100%;
			min-height: 100%;
			font-size: 100px;
			text-align: right;
			filter: alpha(opacity=0);
			opacity: 0;
			outline: none;
			background: white;
			cursor: inherit;
			display: block;
		}
		#

		#img-upload{
			width: 100%;
		}
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
                            <li class="selected">
							<a href="registration.php">Registration</a>
						  </li>
						<li>
							<a href="selling.php">Selling</a>
						</li>
						<li>
							<a href="#">FAQ</a>
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
                       <div id="line">
                      <?php 
                        include 'loginform.php';
                       ?>
                        <h3><img src="images/news.png" alt="Latest News" height="100" width="170"></h3>
         <?php
         error_reporting(0);
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("re", $con);
	$Da=date('y/m/d');
// Specify the query to execute
$sql = "SELECT * FROM News_Master  where NewsDate='$Da' order by NewsDate limit 1 ";
if (mysqli_num_rows($con,$sql)==0) {
      // echo "<span style='color:brown;'><h4>Today no real estate availlable for sell!!</h4></span>";
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
<div 
											<div class="container">
						  <div class="col-lg-7">
							  <div class="row">

							     <div id="form-content">
											<div>
											  <div id="notification">
											<form id="updateProfile-form" method="POST" role="form" autocomplete="off">
											<table width="50%" height="10" border="0" cellpadding="3" cellspacing="5">
											<legend><h3><button class="btn-primary">User Registration form</button></h3></legend>
											<tr>
													<td>UserName</td>
														<td><input required="" class="form-control" name="username" id="from_username" placeholder="username" type="text">
														</br>
													<span class="error-block" style="color:red" id="username_error"></span>
													    <span id="result"></span></td>
													</tr>
														<tr>
													<td>FirstName</td>
													<td><input type="text" class="form-control"  name="fname" id="form_fname" placeholder="First name" value=""></br>
													<span class="error-block" style="color:red" id="fname_error"></span></td></tr>									
									          	<tr>
												 <td>LasttName</td>
													<td><input required="" class="form-control" name="lname" id="form_lname" placeholder="Last name" type="text"></br>
													<span class="error-block" style="color:red" id="lname_error"></span></td></tr>	

													<tr>
													<td>Gender</td>
													<td><input type="radio" name="Gender" value="Male" <?php if(isset($_POST['Gender']) && $_POST['Gender']=="Male") { ?>checked<?php  } ?>> Male
													<input type="radio" name="Gender" value="Female" <?php if(isset($_POST['Gender']) && $_POST['Gender']=="Female") { ?>checked<?php  } ?>> Female
													</td>
													</tr>
													<tr>
													<td>Address</td>
													<td><input type="text" class="form-control"  name="Address" id="form_address" placeholder="Address" value=""></br>
													<span class="error-block" style="color:red" id="address_error"></span></td></tr>	
													<tr><td> City</td>
													<td><input type="text" class="form-control" name="City" id="form_city" placeholder="city" value="" ></br>
												   	<span class="error-block" style="color:red" id="city_error"></span></td></tr>
													<tr>
												    <td>PhoneNumber</td>
												   <td><input required="" class="form-control" name="PhoneNumber" id="form_phone" placeholder="phonenumber" type="text"></br>
													<span class="error-block" style="color:red" id="phone_error"></span></td></tr>	

												  </tr>
												  <tr>
												  <td><span class="style10">CustomerType:</span></td>
												  <td><label>
												   <select name="CustomerType" class="form-control" id="cmbGender">
												      <option>Buyer</option>
												     <option>Seller</option>
												    </select>
												   </label></td>
												  </tr>
												  <tr>
												  <td>Email</td>
														<td><input required="" class="form-control" name="email" id="form_email" placeholder="Email" type="email"></br>
													<span class="error-block" style="color:red" id="email_error"></span></td>
													</tr>
													<tr>
													<td>Password</td>
														<td><input required="" class="form-control" name="password" id="password" placeholder="Password" type="password"></br>
													<span class="error-block" style="color:red" id="pass_error"></span></td>
													</tr>
													<tr>
													<td>ConfirmPassword</td>
													<td><input required="" class="form-control" name="confirm_password" id="cpassword" placeholder="Confirm Password" type="password"></br>
													<span class="error-block" style="color:red" id="conp_error"></span></td>
													</tr> 
													<tr>
                        <td height="38"><span class="style8">Profile Picture:</span></td>
                        <td><label>
                        <div>
                        <input type="file" name="image"  id="imgInp" onchange="imagepreview(this);">
                       <img id="imgpreview" name ="image"  width="180" height="130" title="You Select this Photo" /
                       </div>
                      <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"> </script>
                      <script type="text/javascript">
                      function imagepreview(input){
                       if (input.files && input.files[0]) {
                        var reader=new FileReader();
                        reader.onload=function(e){
                          $('#imgpreview').attr('src',e.target.result);
                        };
                        reader.readAsDataURL(input.files[0]);
                      }
                    }
                 </script>
							                    </label></td>
							                  </tr></table>
												<tr>				
												<button id="update-submit" type="submit" class="btn btn-primary">
													Register
												</button>
												<button id="cance" type="reset" class="btn btn-danger">
													Clear
												</button>
												<div style="display: none;" id="register-loading" class="cssload-center">
													<div class="cssload"><span></span>
													</div>
												</div>
														</div>
												</table>
											</form>
										</div>
										</div>
											</div>
											</div>
											</div>
										</div>
									</div> 
								<div >	<?php 
							include 'footer.php';
							 ?></div>
							</div>
							</div>
							</div>
							</div>


			</section>
			<!-- jQuery -->
			<!-- <script src="../js/jquery.js"></script> -->
			<script src="js/jquery.validate.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script>
				$(document).ready( function() {
					$(document).on('change', '.btn-file :file', function() {
						var input = $(this),
						label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
						input.trigger('fileselect', [label]);
					});

					$('.btn-file :file').on('fileselect', function(event, label) {

						var input = $(this).parents('.input-group').find(':text'),
						log = label;

						if( input.length ) {
							input.val(log);
						} else {
							if( log ) alert(log);
						}

					});
					function readURL(input) {
						if (input.files && input.files[0]) {
							var reader = new FileReader();

							reader.onload = function (e) {
								$('#img-upload').attr('src', e.target.result);
							}

							reader.readAsDataURL(input.files[0]);
						}
					}
				});
			</script>
			<script>
			// $(function(){
				$(document).ready(function(){

					$("#fname_error").hide;
					 $("#lname_error").hide;
					 $("#city_error").hide;
				    $("#phone_error").hide;
					$("#email_error").hide;
					$("#pass_error").hide;
				   $("#conp_error").hide;

					var fname_error=false;
					var lname_error=false;
					var city_error=false;
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

					$("#form_city").keyup(function(){
						check_city();
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
    function check_city(){
						var pattern = new RegExp(/^[a-zA-Z]+$/);

						if (!pattern.test($("#form_city").val())){
							$("#city_error").html("Should be contain alphabets only");
							$("#city_error").show();
							fname_error=true;
						}else{
							$("#city_error").hide();
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

					$('#updateProfile-form').on("submit", function(event){  
						event.preventDefault(); 

				fname_error=false;
				lname_error=false;
				email_error=false;
				pass_error=false;
				conp_error=false;

				check_fname();
				check_lname();
				check_email();
				check_pass();
				check_cpass();

				if (fname_error==false && lname_error==false &&  email_error==false && pass_error==false && conp_error==false) {
							$.ajax({  
								url:"registrationdb.php",  
								method:"POST", 
								data: new FormData(this), 
								contentType :false,
								cache :false,
								processData :false,

								beforeSend:function(){  
									$('#update-submit').val("Inserting");  
								}, 

								success:function(response) {
									if(response=="success")
									{
										$('#updateProfile-form')[0].reset();  
										$('#pop-register').modal('hide');
										$("#notification").html('<div class="alert alert-info" <span style="color:green;">Succefully Registered!</br>Thanks for Registration!!!<span></div>');
										// alert('Success');
									}
								}  
							});

						}else{
							return false;
						}

					});
				});
			</script>
			<script type="text/javascript">
$(document).ready(function()
{    

	$("#from_username").keyup(function()

	{		
		var from_username = $(this).val();	
		
		if(from_username.length > 3)
		{		
			$("#result").html('checking...');

			/*$.post("username-check.php", $("#reg-form").serialize())
				.done(function(data){
				$("#result").html(data);
			});*/
			
			$.ajax({
				
				type : 'POST',
				url  : 'username-check.php',
				data : $(this).serialize(),
				success : function(data)
						  {
					         $("#result").html(data);
					      }
				});
				return false;
			
		}
		else
		{
			$("#result").html('');
		}
		
	});
	
});
</script>










