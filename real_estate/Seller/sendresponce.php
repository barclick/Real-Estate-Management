<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
</head>
<body>
<?php 
include 'Sellerpage.php';
 ?>

                <div class="col-lg-12 col-sm-6 ">
                    <div class="enquiry">
                      <h3><span class="glyphicon glyphicon-envelope"> <button  class="btn btn-primary"> Seller Message to Buyer </button></h3>
                       <fieldset
                    <table width="50%" height="10" border="0" cellpadding="3" cellspacing="3">
  <div class="wrapper">
  
  <div class="container">

  <div class="col-lg-10">
  
    <div class="row">
    
      <div id="form-content">
      
      <form method="post" id="reg-form" autocomplete="off">
                Email<input type="email" class="form-control" placeholder="you@yourdomain.com" name="email" required="required" />
                Phone_Number<input type="number" class="form-control" placeholder="phone" name="phone" required="required" />
                Message<textarea rows="6" class="form-control" name="message" placeholder="Whats on your mind?"></textarea>
              
      <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
      </form>
      </div>
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
      url: 'sendresponsedb.php?RB_ID=<?php
      $RB_ID=$_GET['RB_ID'];
    echo $RB_ID; ?>',
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
        </table>
</fieldset>
</div>
        </body>
</html>