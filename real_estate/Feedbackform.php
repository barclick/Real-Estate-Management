<?php 
session_start();
error_reporting(0);
if ($_SESSION["UserName"]!=null) {
  $usertype=$_SESSION["UserType"];
  if ($usertype=="Buyer") {
    header("location:Buyer/buyerpage.php");
   }
   elseif ($usertype=="Seller") {
    header("location:Seller/Sellerpage.php");
   }
   elseif ($usertype=="Admin") {
    header("location:Admin/Adminpage.php");
   }
   else
   {
 header ("location:index.php");
   }
}
?>
<html>
<script type="text/javascript">
function validateForm()
{
var alphanumericExp = /^[0-9a-zA-Z ]+$/;
var kb= /^[a-zA-Z ]+$/;
var emailExp=/^[\w\_\.]+\@[\w\_\.]+\.[\w]{2,3}$/;
var phoneno = /^\d{10}$/;
var UserName=document.myform.UserName.value;
if(UserName==null || UserName=="")
    {
        alert("please fill your UserName");
     return false;
  }
  else if(!UserName.match(alphanumericExp))
    {
        alert("invalid UserName expression");
        return false;
    }
var FirstName=document.myform.FirstName.value;
if(FirstName==null || FirstName=="")
    {
        alert("please fill your FirstName");
     return false;
  }
  else if(!FirstName.match(kb))
    {
        alert("invalid FirstName expression");
        return false;
    }
var PhoneNumber=document.myform.PhoneNumber.value;
if(PhoneNumber==null || PhoneNumber=="")
    {
        alert("please fill your PhoneNumber");
     return false;
  }
  else if(!PhoneNumber.match(phoneno))
    {
        alert("please enter 10 digit phone number");
        return false;
    }
var Email=document.myform.Email.value;
if(Email==null || Email=="")
    {
        alert("please fill your  valid Email");
     return false;
  }
  else if(!Email.match(emailExp))
    {
        alert("invalid email expression");
        return false;
    }
var Message=document.myform.Message.value;
if(Message==null || Message=="")
    {
        alert("please write feedback ");
     return false;
  }
  return true;
  }
</script>

<head>
<title>Registration Form</title>
</head>
<style>
body
{
background-attachment: fixed;
  background-color:#7FFFD4;
}
#copy{
background-color:black;
border-top:solid green;
padding-bottom:1px;
text-align:center;
color:white;
margin-top:220px;
margin-right: 0px;
margin-left: 0px;
}
.search
{
float: right;
padding: 0px;
margin-top: 0px;
background-color: #48D1CC;
}
#mu{
background-color: #cfc ;
padding: 20px 100px;
border-style:none;
border-bottom:5px solid;
background-attachment: fixed;
border-color:#5F9EA0;
border-width:6px;
text-align: center;
font-size:20px;
}
#horizontalmenu ul 
{
padding:10;
margin:1; 
list-style:none;
}
ul li a
{
  text-decoration: none;

}
ul li a hover
{
color: #808000; 
}
<!--
.style3 
{
  color: #869629;
  margin-right: 10px;

}
ul#navbar li {
 display: inline;
 color: white;
line-height: 70px;
width: 163px;
text-align: center;
font-family: italic;
font-size: 20px;
text-decoration: none;
background-color: black;
float:left;
position:relative;
padding-right:40px;
border:0px solid #CC55FF; 

}
ul#navbar li a {
    text-decoration: none;
   
    color: white;
}
ul#navbar li a:hover {
    background-color: #708090;
}
.news
{

  color: red;
}

#feedbackbutton 
   {
  padding: 10px;
    background-color: #09F;
    margin-left: 0px;
    border: 0;
    color: #FFF;
    cursor: pointer;
   }
   #clear
   {
  padding: 10px;
    background-color: #09F;
    margin-left: 30px;
    border: 0;
    color: #FFF;
    cursor: pointer;
   }
   #demoInputBox 
{
  padding: 7px;
  border: #F0F0F0 1px solid;
  border-radius: 4px;
}
   
</style>
<table width="1250px" align="center"  border="1">
  <body>

  <p id="mu"><font color="Black" align="center">WELCOM TO OUR REAL ESTATE INFORMATION SYSTEM WEBSITE</font></p>
  <tr>
      <td height="38" colspan="2" style="background-color: #EEE8AA">
        <div class="header">
    <!--<div class="header1"><img src="data1/image/admin.jpg" width="329" height="150" /></div>-->
        <div id="horizontalmenu">
         <ul id="navbar">
           <li><a href="index.php"</a>Home</li>
        <li><a href="Aboutus.php"</a>AboutUS</li>
        <li><a href="registration.php"</a>Registration</li>
        <li><a href="login.html"</a>Buy</li>
        <li><a href="login.html"</a>Sell</li>
        <li><a href="feedbackform.php"</a>Feedback</li>

           
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="Login">
    <tr>
      <th height="3" colspan="2">
      <!--Slider-->
      <div id="wowslider-container1">
  <div class="ws_images">
<div>
</div>
<!--
  <ul>
<li><img src="data1/image/re1.jpg" height="455" width="70" alt="Real Estate"</li>
<li><img src="data1/image/re5.jpg" height="455" width="70"</li>
<li><img src="data1/image/re4.jpg"</li>
<li><img src="data1/image/re2.jpg" height="455" width="70"</li>
</ul></div>
    </th>
    </tr>
     <tr>
     </tr>-->

  <tr>
<td width="200" height="547" bgcolor="#D9D9D9" style="vertical-align:text-top">
<div class="login">
                <form name="form1" method="post" action="login.php">
         <table width="100%" bgcolor="#666666">
         <tr>
           <td class="style6">User Type:</td>
         </tr>
         <tr>
           <td height="3"><label>
             <select name="cmbUserType" id="cmbUserType">
               <option>Admin</option>
               <option>Buyer</option>
               <option>Seller</option>
         
             </select>
           </label></td>
         </tr>
         <tr>
           <td class="style6">User Name:</td>
         </tr>
         <tr>
           <td><span id="sprytextfield1">
             <label>
             <input type="text" name="txtUserName" id="txtUserName"required>
             </label>
           <span class="textfieldRequiredMsg"></span></span></td>
         </tr>
         <tr>
           <td class="style6">Password:</td>
         </tr>
         <tr>
           <td><span id="sprytextfield2">
             <label>
             <input type="password" name="txtPassword" id="txtPassword" required>
             </label>
           <span class="textfieldRequiredMsg"></span></span></td>
         </tr>
         <tr>
           <td height="36"><div align="center">
             <input type="submit" name="button" id="button" value="Submit">
           </div></td>

         </tr>
         <tr>
         <td><label></label></td>
         </tr>
         </table>
        </form>
          </div>
         <th>
         <fieldset
<legend><h1>Giving Feedback about the website</h1></legend>
<table width="50%" height="10" border="0" cellpadding="3" cellspacing="3">
<form name="myform" action="Feedbackdata.php" method="post">
<tr class="table">
<td>Username</td>
<td><input type="text" class="demoInputBox" name="UserName" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>"></td>
</tr>
<tr>
<td>FirstName</td>
<td><input type="text" class="demoInputBox" name="FirstName" value="<?php if(isset($_POST['FirstName'])) echo $_POST['FirstName']; ?>"></td>
</tr>
<tr>
<tr>
<td>PhoneNumber</td>
<td><input type="text" class="demoInputBox" name="PhoneNumber" value="<?php if(isset($_POST['PhoneNumber'])) echo $_POST['PhoneNumber']; ?>"></td>
  </tr>
  <tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="Email" value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>"></td>
</tr>
<tr>
<td><span class="style15">Message:</span></td>
 <td><span id="sprytextarea1">
  <label>
 <textarea name="Message" id="txtFeedback" cols="35" rows="3"></textarea>
  </label>
<input type="submit" id="feedbackbutton" value="Send" onclick="return validateForm()">
</form>
</table>
</fieldset>
        </span>
        </div>
    </div>
  </div>
 
      <div class="footer">
       <div id="copy">
       <p>Done by SOE Group Members in 2009 all copy rights &copy are reserved </p>
       <div class="text1"><a href="http://all-free-download.com/free-website-templates/" class="footerlinks">About Us</a> &nbsp; |&nbsp; <a href="http://all-free-download.com/free-website-templates/" class="footerlinks"> Contact us</a> </div>
