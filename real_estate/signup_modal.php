<!-- Modal -->
		<div class="modal fade" id="add_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Create Your Account Here</h4>
			</div>
			<div class="modal-body">
				 <form role="form" id="sign_up" class="login_form" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">Firstname</label>
						<input name="firstname" type="text" class="form-control" id="exampleInputEmail1" placeholder="Firstname" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Lastname</label>
						<input name="lastname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lastname" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Middlename</label>
						<input name="middlename" type="text" class="form-control" id="exampleInputPassword1" placeholder="Lastname" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Gender:</label>
						<select name="gender" class="form-control">
							<option></option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Email Address</label>
						<input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
					</div>
				 <button  class="btn btn-success"><i class="fa fa-save"></i> Create This Account</button>
			</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
				
			</div>
			</div>
			
		</div>
		</div>
		  								<script>
												jQuery(document).ready(function(){
												jQuery("#sign_up").submit(function(e){
														e.preventDefault();
														var formData = jQuery(this).serialize();
														$.ajax({
															type: "POST",
															url: "signup_save.php",
															data: formData,
															success: function(html){
															alert('Sign up Success Please Login Your Account');
															window.location = 'index.php';
															}
														});
														return false;
														});
										});
										</script>