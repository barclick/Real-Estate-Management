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
                       <td height='47' align='center' bgcolor='skyblue'><span><h3>Send Requirement</h3></span></td>
                      
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-hover'>
                                    <thead>
                                        <tr>
    <div>      
        <form action="requirementdb.php" method="POST" enctype="multipart/form-data" name="myform">
      <input type="hidden" id="advance_search_submit" name="search" value="">
      <div class="search-box">
      <label class="search-label">Price Range:</label>
          <div>
            <input type="text" name="name" id="with_the_exact_of" class="demoInputBox" value="" placeholder="like $1000 to $12000"  />
          <label class="search-label">RE_Category:</label>&nbsp;  &nbsp;&nbsp;
            <select name="search[search_in]" id="search_in" class="demoInputBox">
              <option>Villa</option>
                        <option>Apartment</option>
                        <option>Condominium Houses</option>
                        <option> Guest House</option>
                        <option>House/undercon_tion</option>
                        <option>Studio</option>
                        <option>G+1House</option>
                        <option>G+2House</option>
                        <option>G+3House</option>
            </select>
  </div>
          <label class="search-label">State :</label>
          <div>
            <input type="text" name="realid" id="with_the_exact_of" class="demoInputBox" value="" placeholder="real estate id from the previeos page"  />
          <label class="search-label">NO_Bedroom:</label>&nbsp;  &nbsp;&nbsp;
           <select name="search[search_in]" id="search_in" class="demoInputBox">
                        <option>1</option>
                        <option>2 </option>
                        <option> 3 </option>
                        <option>4</option>
                        <option>5</option>
            </select>
          </div>
          <label class="search-label">Location :</label>
          <div>
            <input type="text" name="realid" id="with_the_exact_of" class="demoInputBox" value="" placeholder="your favorite place to buy"  />
          <label class="search-label">Pohne_Number:</label>
            <input type="tel" name="PhoneNumber" class="demoInputBox" id="with_the_exact_of" maxlength=
            "10" name="phone" required="required"/>
          </div>
          <label class="search-label">Facility:</label>
          <div>
            <input type="checkbox" class="checkbox-inline" name="chk[]" value="Parking">Parking 
           <input type="checkbox" class="checkbox-inline" name="chk[]" value="Parking">Parking<br>
           <input type="checkbox" class="checkbox-inline" name="chk[]" value="Parking">Parking
           <input type="checkbox" class="checkbox-inline" name="chk[]" value="Parking">Parking &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
           <label class="search-label">    Email :</label>
        
            <input type="email" name="Email" id="with_the_exact_of" class="demoInputBox" value="" placeholder="your valid email" required="required" />
          </div>
       Message:
       <div>
         <span id="with_the_exact_of">
         <textarea name="Message" id="with_the_exact_of" class="" cols="35" rows="3"></textarea>
          </span>
          </div>   
        <div>
          <input type="submit" name="search" value="Send Requirement" class="btnSearch"  onclick="return validateForm()">  
        </div>
      </div>
      </form>    
</body>