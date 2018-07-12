
<?php 
$con=mysqli_connect("localhost","root","","cinema");
							//check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect" .mysqli_connect_errno();
} 
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax</title>

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
<div 
											<div class="container">
						  <div class="col-lg-7">
							  <div class="row">

							     <div id="form-content">
											<div>
											  <div id="notification">
											<form id="updateProfile-form" method="POST" role="form" autocomplete="off">
											<table width="50%" height="10" border="0" cellpadding="3" cellspacing="5">
											<legend><h3><button class="btn-primary">User Registration</button></h3></legend>
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
													<tr><td> Address</td>
													<td><input type="text" class="form-control" name="Address" value=""></td></tr>
													</tr>
													<tr><td> City</td>
													<td><input type="text" class="form-control" name="City"required="required" placeholder="city" value="" ></td></tr>
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
                       <img id="imgpreview" name ="image"  width="150" height="170" title="You Select this Photo" /
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
                              <!--  <input  value="Register" align="right" name="submit" class="btn btn-lg btn-success" /> 
									 <input type="reset" class="btn btn-lg btn-danger"  name="calcel" value="clear"> </span></td></tr>
										 -->  <!-- <tr>
													<div class="form-group">
														<div class="input-group">
															<span class="input-group-btn">
														    	<td><label>Upload Image</label>
																<span class="btn btn-default btn-file">
																	Browse...<input type="file" name="image" id="imgInp" onchange="imagepreview(this);">
                       <img id="imgpreview" name ="image"  width="150" height="170" title="You Select this Photo" /
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
                 </script> --><!-- 
																</span>
															</span></td>
															<input type="text" name="Iname" class="form-control" readonly="">
														</div>
														<img id="img-upload">
													</div>
												<span class="error-block" style="color:red" id="image_error"></span>
										</tr> -->
												<tr>				
												<button id="update-submit" type="submit" class="btn btn-block btn-successful btn-approve mt20">
													Register
												</button>
												<div style="display: none;" id="register-loading" class="cssload-center">
													<div class="cssload"><span></span>
													</div>
												</div>

															</tr>
							<tr><input type="reset" class="btn btn-lg btn-danger"  name="calcel" value="clear"> </span></td></tr>
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
					// $("#lname_error").hide;
					// $("#username_error").hide;
				 //    $("#phone_error").hide;
					$("#email_error").hide;
					// $("#pass_error").hide;
					// $("#conp_error").hide;

					var fname_error=false;
					// var lname_error=false;
					// var username_error=false;
					// var phone_error=false;
					 var email_error=false;
					// var pass_error=false;
					// var conp_error=false;

					$("#form_fname").keyup(function(){
						check_fname();
					});
					$("#form_email").keyup(function(){
						check_email();
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

					$('#updateProfile-form').on("submit", function(event){  
						event.preventDefault(); 

						fname_error=false;
						email_error=false;


						check_fname();
						check_email();

						if (fname_error==false && email_error==false ) {
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
										$("#notification").html('Succesds');
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










