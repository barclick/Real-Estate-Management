<html>
<body>
<?php 
include 'buyerpage.php';
 ?>
    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i>Add Requirement
                        </div>
                        </div>

                                    <fieldset class="fieldset"
                                    <legend></legend>
                                    <table bgcolor="66FFFF">
<div class="container">
  
  <div class="col-lg-3">
  
    <div class="row">
    
      <div id="form-content">
                                    <form name="myform" id="reg-form" method="post">
                                    <tr>
                                            <td>RE category:</td>
                                            <td><label>
                                              <select name="category" id="cmbRoom">
                                                <option>Villa</option>
                                                <option>Apartment</option>
                                                <option>Condominium Houses</option>
                                                <option> Guest House</option>
                                                <option>House/undercon_tion</option>
                                                <option>Studio</option>
                                                <option>G+1House</option>
                                                <option>G+2House</option>
                                                <option>G+3House &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                              </select>
                                            </label></td>
                                           <td> Property_For:</td>
                                            <td><label>
                                              <select name="preopert_for" id="cmbRoom">
                                                <option>Sell</option>
                                                <option>Commertial</option>
                                                <option> Rent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                              </select>
                                            </label></td>
                                            </tr>
                                            <td height="36"><span class="style8">No_BedRooms:</span></td>
                                            <td><label>
                                              <select name="bedroom"  id="cmbRoom">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                              </select>
                                            </label></td>
                                            </tr>
                                                <tr>
                                                <td>Max_Price</td>
                                                <td><input type="text" class="form-control" required="required" name="maxprice" value="">
                                              </td>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Min_Price</td>
                                                <td><input type="text" class="form-control" required="required" name="minprice" value=""></td>
                                               </tr> 
                                           <tr>
                                           <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State</td>
                                            <td><input type="text" class="form-control" name="state" value=""></td>
                                          <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location</td>
                                            <td><input type="text" class="form-control" name="location"  value=""></td></tr>
                                            </tr>
                                            <td> Facility</td>
                                                              <div class="form-group">
                                            <td><input type="checkbox" class="checkbox-inline" name="chk[]" value="Parking">Parking
                                            <input type="checkbox" class="checkbox-inline" name="chk[]" value="Kitchensb"> Kitchen
                                            <input type="checkbox" class="checkbox-inline" name="chk[]" value="Garage"> Garage</br>
                                            <input type="checkbox" class="checkbox-inline" name="chk[]" value="Internet">Internet
                                            <input type="checkbox" class="checkbox-inline" name="chk[]" value="Water">Water
                                            <input type="checkbox" class="checkbox-inline" name="chk[]" value="Laundry Room">Laundry Room
                                            </td>bbr
                                            </tr>
                                            <tr>
                                            <td>
                                            Message
                                            <td><textarea rows="1" class="form-control" name="message" placeholder="Whats on your mind?"></textarea></td>
                                            </td>
                                            </tr>
                                          <table>
                                          &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" onclick="return validateForm()">Add Requirement</button>
                                          &nbsp;&nbsp;<button type="reset" class="btn btn-success">Reset Button</button>
                        					</table>
                        					 </tr>
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
      url: 'addrequirementdb.php',
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
                        					</body>

                        					</html>


