<!DOCTYPE html>
<html>

<head>
 
    <link rel="stylesheet" href="css/advanced.css" type="text/css">
</head>

<body>
 <?php 
 include 'buyerpage.php';
  ?>
  <table width='100%' border='0'>
                        <tr>
                       <td height='47' align='center' bgcolor='skyblue'><span><h3>Send Request</h3></span></td>
                      
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
    <div>      
        <form action="sendrequestdb.php" method="POST" enctype="multipart/form-data" name="myform">
      <input type="hidden" id="advance_search_submit" name="search" value="">
      <div class="search-box">
      <label class="search-label">Name:</label>
          <div>
            <input type="text" name="name" id="with_the_exact_of" class="demoInputBox" value="" placeholder="your name here"  />
          </div>
          <label class="search-label">Pohne_Number:</label>
          <div>
            <input type="tel" name="PhoneNumber" class="demoInputBox" id="with_the_exact_of" maxlength=
            "10" name="phone" required="required"/>
          </div>
          <label class="search-label">Email:</label>
          <div>
            <input type="email" name="Email" id="with_the_exact_of" class="demoInputBox" value="" placeholder="your valid email" required="required" />
          </div>
          <div>
       Message:
       <div>
         <span id="with_the_exact_of">
         <textarea name="Message" id="with_the_exact_of" class="" cols="35" rows="3"></textarea>
          </span>
          </div>   
        <div>
          <input type="submit" name="search" value="Send Request" class="btnSearch"  onclick="return validateForm()">  
        </div>
      </div>
      </form>    
</body>