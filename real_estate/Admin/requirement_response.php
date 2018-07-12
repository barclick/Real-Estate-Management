<?php 
session_start();
error_reporting(0);
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requirement Response</title>
    <!-- Core CSS - Include with every page -->
</head>

<body>
<?php
  include "Adminpage.php"
  ?>
<div class="col-lg-12 col-sm-6 ">
                    <div class="enquiry">
                      <h3><span class="glyphicon glyphicon-envelope"> <button  class="btn btn-primary"> Requirement Response </button></h3>
                       <fieldset
                    <table width="50%" height="10" border="0" cellpadding="3" cellspacing="3">
                   <div class="wrapper">
  
  <div class="container">
  
  <div class="col-lg-7">
  
    <div class="row">
    
      <div id="form-content">
      
      <form method="post" id="reg-form" autocomplete="off">
         Message<textarea rows="6" class="form-control" name="message" placeholder="Whats on your mind?"></textarea>
        <div>
      <button type="submit" class="btn btn-primary" name="Submit">Send Response</button>
        </div>
      </div>
        
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
      url: 'requirementresponcedb.php?Req_ID=<?php
      $Req_ID=$_GET['Req_ID'];
    echo $Req_ID; ?>',
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
