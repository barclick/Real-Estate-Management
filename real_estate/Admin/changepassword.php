<?php 
include 'Adminpage.php';
 ?>
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-key fa-fw"></i>Change Password
                        </div>
                        </div> 
  <div class="container">

  <div class="col-lg-8">
  
    <div class="row">
    
      <div id="form-content">
      
      <form method="post" id="reg-form" autocomplete="off">
       <div class="col-lg-8">
        <div class="form-group input-group">
            Current Password<span class="input-group-addon">@</span>
              <input type="password" class="form-control" name="oldpass" placeholder="Current Password">
                    </div>
                <div class="form-group input-group">
                 New  Password&nbsp;&nbsp;&nbsp;&nbsp;<span class="input-group-addon"><i class="fa fa-key fa-fw"></i>
                 </span>
                   <input type="password" class="form-control" name="newpass"  id="cpass" placeholder="New Password">
                     </div>
                     <span class="" style="color:red" id="cpass_error"></span>
                     <div class="form-group input-group">
                 Confirm Password<span class="input-group-addon"><i class="fa fa-key fa-fw"></i>
                 </span>
               <input type="password" class="form-control" name="newpass" id="cpassword" placeholder="confirm_password">
                     </div>
                      <span class="" style="color:red" id="conp_error"></span>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                     </div>
                     </form>
                 </div>
            
              </div>
    
         </div>
  
    </div>
<script type="text/javascript" src="assets/scripts/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {  
  
  // submit form using $.ajax() method
  
  $('#reg-form').submit(function(e){
    
    e.preventDefault(); // Prevent Default Submission
    
    $.ajax({
      url: 'passUpdate.php',
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

          $("#cpass_error").hide;
          $("#pass_error").hide;
           $("#conp_error").hide;

          var cpass_error=false;
          var pass_error=false;
           var conp_error=false;

          $("#cpass").keyup(function(){
            check_pass();
          });

          $("#cpassword").keyup(function(){
            check_cpass();
          });

    function check_pass(){
      var pass_length = $("#cpass").val().length;
      var pattern = new RegExp(/^[0-9a-zA-Z ]+$/);

      if (!pattern.test($("#cpass").val())){
        $("#cpass_error").html("Should be between 5-15 charcters");
        $("#cpass_error").show();
        pass_error=true;
      }else if (pass_length <6 || pass_length >15 ) {
        $("#cpass_error").html("At least 6 characters");
        $("#cpass_error").show();
        cpass_error=true;
      }else{
        $("#cpass_error").hide();
      }
    }

    function check_cpass(){
      var password = $("#cpass").val();
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
          });
        });
      </script>
      <script type="text/javascript">