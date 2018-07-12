<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Real Estate</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 { font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: small;
  font-weight: bold;
  color: #000000;
}
.style4 { font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: small;
  font-weight: bold;
  color: #FFFFFF;
}
.style7 {font-size: small}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; }
-->
</style>

<style type="text/css">

.ds_box {
  background-color: #FFF;
  border: 1px solid #000;
  position: absolute;
  z-index: 32767;
}

.ds_tbl {
  background-color: #FFF;
}

.ds_head {
  background-color: #333;
  color: #FFF;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
  font-weight: bold;
  text-align: center;
  letter-spacing: 2px;
}

.ds_subhead {
  background-color: #CCC;
  color: #000;
  font-size: 12px;
  font-weight: bold;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  width: 32px;
}

.ds_cell {
  background-color: #EEE;
  color: #000;
  font-size: 13px;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  padding: 5px;
  cursor: pointer;
}

.ds_cell:hover {
  background-color: #F3F3F3;
} /* This hover code won't work for IE */
.style11 {color: #003300}
.style12 {color: #000000}
</style>
</head>
<body>

<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>

<script type="text/javascript">
// <!-- <![CDATA[

// Project: Dynamic Date Selector (DtTvB) - 2006-03-16
// Script featured on JavaScript Kit- http://www.javascriptkit.com
// Code begin...
// Set the initial date.
var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

// Get Element By Id
function ds_getel(id) {
  return document.getElementById(id);
}

// Get the left and the top of the element.
function ds_getleft(el) {
  var tmp = el.offsetLeft;
  el = el.offsetParent
  while(el) {
    tmp += el.offsetLeft;
    el = el.offsetParent;
  }
  return tmp;
}
function ds_gettop(el) {
  var tmp = el.offsetTop;
  el = el.offsetParent
  while(el) {
    tmp += el.offsetTop;
    el = el.offsetParent;
  }
  return tmp;
}

// Output Element
var ds_oe = ds_getel('ds_calclass');
// Container
var ds_ce = ds_getel('ds_conclass');

// Output Buffering
var ds_ob = ''; 
function ds_ob_clean() {
  ds_ob = '';
}
function ds_ob_flush() {
  ds_oe.innerHTML = ds_ob;
  ds_ob_clean();
}
function ds_echo(t) {
  ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; // You can translate it for your language.

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
  return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
       + '<tr>'
     + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
     + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
     + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
     + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
     + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
     + '</tr>'
       + '<tr>'
     + '<td colspan="7" class="ds_head">' + t + '</td>'
     + '</tr>'
     + '<tr>';
}

function ds_template_day_row(t) {
  return '<td class="ds_subhead">' + t + '</td>';
  // Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
}

function ds_template_new_week() {
  return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
  return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
  return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
  // Define width the day row.
}

function ds_template_main_below() {
  return '</tr>'
       + '</table>';
}

// This one draws calendar...
function ds_draw_calendar(m, y) {
  // First clean the output buffer.
  ds_ob_clean();
  // Here we go, do the header
  ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
  for (i = 0; i < 7; i ++) {
    ds_echo (ds_template_day_row(ds_daynames[i]));
  }
  // Make a date object.
  var ds_dc_date = new Date();
  ds_dc_date.setMonth(m - 1);
  ds_dc_date.setFullYear(y);
  ds_dc_date.setDate(1);
  if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
    days = 31;
  } else if (m == 4 || m == 6 || m == 9 || m == 11) {
    days = 30;
  } else {
    days = (y % 4 == 0) ? 29 : 28;
  }
  var first_day = ds_dc_date.getDay();
  var first_loop = 1;
  // Start the first week
  ds_echo (ds_template_new_week());
  // If sunday is not the first day of the month, make a blank cell...
  if (first_day != 0) {
    ds_echo (ds_template_blank_cell(first_day));
  }
  var j = first_day;
  for (i = 0; i < days; i ++) {
    // Today is sunday, make a new week.
    // If this sunday is the first day of the month,
    // we've made a new row for you already.
    if (j == 0 && !first_loop) {
      // New week!!
      ds_echo (ds_template_new_week());
    }
    // Make a row of that day!
    ds_echo (ds_template_day(i + 1, m, y));
    // This is not first loop anymore...
    first_loop = 0;
    // What is the next day?
    j ++;
    j %= 7;
  }
  // Do the footer
  ds_echo (ds_template_main_below());
  // And let's display..
  ds_ob_flush();
  // Scroll it into view.
  ds_ce.scrollIntoView();
}

// A function to show the calendar.
// When user click on the date, it will set the content of t.
function ds_sh(t) {
  // Set the element to set...
  ds_element = t;
  // Make a new date, and set the current month and year.
  var ds_sh_date = new Date();
  ds_c_month = ds_sh_date.getMonth() + 1;
  ds_c_year = ds_sh_date.getFullYear();
  // Draw the calendar
  ds_draw_calendar(ds_c_month, ds_c_year);
  // To change the position properly, we must show it first.
  ds_ce.style.display = '';
  // Move the calendar container!
  the_left = ds_getleft(t);
  the_top = ds_gettop(t) + t.offsetHeight;
  ds_ce.style.left = the_left + 'px';
  ds_ce.style.top = the_top + 'px';
  // Scroll it into view.
  ds_ce.scrollIntoView();
}

// Hide the calendar.
function ds_hi() {
  ds_ce.style.display = 'none';
}

// Moves to the next month...
function ds_nm() {
  // Increase the current month.
  ds_c_month ++;
  // We have passed December, let's go to the next year.
  // Increase the current year, and set the current month to January.
  if (ds_c_month > 12) {
    ds_c_month = 1; 
    ds_c_year++;
  }
  // Redraw the calendar.
  ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous month...
function ds_pm() {
  ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
  // We have passed January, let's go back to the previous year.
  // Decrease the current year, and set the current month to December.
  if (ds_c_month < 1) {
    ds_c_month = 12; 
    ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
  }
  // Redraw the calendar.
  ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the next year...
function ds_ny() {
  // Increase the current year.
  ds_c_year++;
  // Redraw the calendar.
  ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous year...
function ds_py() {
  // Decrease the current year.
  ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
  // Redraw the calendar.
  ds_draw_calendar(ds_c_month, ds_c_year);
}

// Format the date to output.
function ds_format_date(d, m, y) {
  // 2 digits month.
  m2 = '00' + m;
  m2 = m2.substr(m2.length - 2);
  // 2 digits day.
  d2 = '00' + d;
  d2 = d2.substr(d2.length - 2);
  // YYYY-MM-DD
  return y + '-' + m2 + '-' + d2;
}

// When the user clicks the day.
function ds_onclick(d, m, y) {
  // Hide the calendar.
  ds_hi();
  // Set the value of it, if we can.
  if (typeof(ds_element.value) != 'undefined') {
    ds_element.value = ds_format_date(d, m, y);
  // Maybe we want to set the HTML in it.
  } else if (typeof(ds_element.innerHTML) != 'undefined') {
    ds_element.innerHTML = ds_format_date(d, m, y);
  // I don't know how should we display it, just alert it to user.
  } else {
    alert (ds_format_date(d, m, y));
  }
}

// And here is the end.

// ]]> -->
</script>
</head>
<body>
<div class="main">
  <?php
  include "Headermenu.php"
  ?>
  
  <div class="content">
    <div class="innercontent">
      <div class="rightpannel">
      <div>
       <h2>News Management</h2>
      
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td height="27" bgcolor="#D05F01"><span class="style4">Create News</span></td>
         </tr>
         <tr>
           <td height="26">
             <form id="form1" name="form1" method="post" action="InsertNews.php">
               <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                   <td height="36"><span class="style9">News:</span></td>
                   <td><span id="sprytextfield1">
                     <label>
                     <input type="text" name="txtNews" id="txtNews" />
                     </label>
                     <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                 </tr>
                 <tr>
                   <td height="35"><span class="style9">News Date:</span></td>
                   <td><span id="sprytextfield2">
                     <label>
                     <input type="text" onclick="ds_sh(this);"  name="txtDate" id="txtDate" />
                     </label>
                     <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><label>
                     <input type="submit" name="button" id="button" value="Submit" />
                   </label></td>
                 </tr>
               </table>
                </form>
             </td>
         </tr>
         <tr>
           <td height="25" bgcolor="#1CB5F1"><span class="style3">News List</span></td>
         </tr>
         <tr>
           <td>
           <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>
<th height="32" bgcolor="#1CB5F1"><div align="left" class="style13 style7 style8 style12">Id</div></th>
<th bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">News</div></th>
<th bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">Date</div></th>
<th height="32" bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">Edit</div></th>
<th bgcolor="#1CB5F1"><div align="left" class="style7 style8 style12">Delete</div></th>
</tr>
<?php
$RE_ID=$_GET['RE_ID'];
$con = mysqli_connect("localhost","root","","re");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
  $UserName = $_SESSION['username'];  
 // $Id=$_GET['RE_ID'];
$result = mysqli_query($con,"SELECT * FROM reproperty where username='$UserName'");
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$RE_ID=$row['RE_ID'];
$$P_TaxNO=['P_TaxNO'];
$Property_for=$row['Property_for'];
$Category=$row['Category'];
$$Country=['Country'];
$Price=$row['Price'];
$Bedroom=$row['Bedroom'];
$$Bathroom=['Bathroom'];
$Location=$row['Location'];
$Facility=$row['Facility'];
$$image=['image'];
}
?>
<form name="myform" action="insertpropertydb.php" method="post">
                                    <tr><td> P_TaxNO</td>
                                    <td><input type="text" class="form-control"required="required" name="taxnumber" data-error="enter valid email" value=""></td>
                                    </tr>
                                    </tr>
                                    <tr>
                                    <td height="36"><span class="style8">Property_For:</span></td>
                                   <td><label>
                                  <select name="propertyfor" id="cmbRoom">
                                    <option>Sell</option>
                                    <option>Rent</option>
                                    <option>Commertial</option>
                                  </select>
                                </label></td>
                              </tr>
                              <tr>
                    <td height="36"><span class="">RE category:</span></td>
                    <td><label>
                      <select name="category" id="cmbRoom">
                        <option>Villa</option>
                        <option>Apartment</option>
                        <option>Cpndominium Houses</option>
                        <option> Guest House</option>
                        <option>House/undercon_tion</option>
                        <option>Studio</option>
                        <option>G+1House</option>
                        <option>G+2House</option>
                        <option>G+3House</option>
               
                      </select>
                    </label></td>
                  </tr>
                            <tr>
                       <tr><td> Country</td>
                        <td><input type="text" class="form-control" required="required" name="country" value=""></td>
                        </tr>
                        <tr><td> Address</td>
                        <td><input type="text" class="form-control" name="address" required="required" value=""></td>
                        </tr>
                        <tr><td> State</td>
                        <td><input type="text" class="form-control" name="state" value=""></td></tr>
                        </tr>
                        <tr>
                        <td>Price</td>
                        <td><input type="text" class="form-control" required="required" name="price" value="">ETB</td>
                        </tr>

                  
                  
                    <tr><td> Location</td>
                    <td><input type="text" class="form-control" name="location"  value=""></td></tr>
                    </tr>
                    <tr>
                
                        <td> Facility</td>
                                      <div class="form-group">
                    <td><input type="checkbox" class="checkbox-inline" name="chk[]" value="Parking">Parking
                    <input type="checkbox" class="checkbox-inline" name="chk[]" value="Gas"> Gas
                    <input type="checkbox" class="checkbox-inline" name="chk[]" value="Garage"> Garage</br>
                    <input type="checkbox" class="checkbox-inline" name="chk[]" value="Internet">Internet
                    <input type="checkbox" class="checkbox-inline" name="chk[]" value="Water">Water
                    <input type="checkbox" class="checkbox-inline" name="chk[]" value="Laundry Room">Laundry Room
                    </td>
                    </div>
                     </tr>
                    <tr>
                    <td>YearBuilt</td>
                    <td><input type="text" class="form-control" name="yearbuilt" value=""></td>
                    </tr>
                    <tr>
                    <td>Total Area</td>
                    <td><input type="text" required="required" class="form-control" name="totalarea" value=""></td>
                    </tr>
                   <tr>
                    <td height="36"><span class="style8">No_BedRooms:</span></td>
                    <td><label>
                      <select name="bedroom"  id="cmbRoom">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </label></td>
                  </tr>
                 <tr>
                    <td height="36"><span class="style8">No_BathRooms:</span></td>
                    <td><label>
                     <div class="form-group">
                                            <select class="form-control" name="bathroom">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                      </tr>
                                       <input type="hidden" name="pending" value="Pending"> </tr> 

                                                  <tr>
                                                    <td height="38"><span class="style8">Upload Image:</span></td>
                                    <td><label>
                                      <div>
                  <input type="file" name="image" onchange="imagepreview(this);">
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
                  </tr>
               <tr>
                    <td height="38"><span class="style8">3D_View:</span></td>
                    <td><label>
                      <input type="file" name="view" id="txtFile" />
                    </label></td>
                    <input type="hidden" name="Pending" value="Pending">
                  </tr>
                  <table>
 <button type="submit" class="btn btn-primary" onclick="return validateForm()">Insert Property</button>
 <button type="reset" class="btn btn-success">Reset Button</button>
 </table>
 </tr>
 </form>
<?php
// Close the connection
mysql_close($con);
?>
</table>
           </td>
         </tr>
       </table>
      
      </div>
        
      </div>
    </div>
  </div>
  <div>
   <?php
   include "footer.php"
   ?>
  </div>
</div>

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>

