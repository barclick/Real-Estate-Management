
<!DOCTYPE html>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <script src="assets/slitslider/js/jquery-1.9.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
<?php 
error_reporting(0);
session_start();
$get='';
if (isset($_GET["get"])) {
  $get=$_GET["get"];
}
?>
<!DOCTYPE html>
<html>
<head>
<head>
<style type="text/css">
  #feedbackbutton 
   {
  padding: 0px;
    background-color: #21AEF3;
    border-radius: 30px;
    width: 170px;
   }
   #Feature 
   {
  padding: 0px;
    background-color: #21AEF3;
   }
   
   
</style>
  <meta charset="UTF-8">
  <title>Real Estate</title>
  <link rel="stylesheet" href="css/homepage.css" type="text/css">
    <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" />

</head>
<body>

  <div id="background">
    <div id="page">
      <div id="header">
        <div id="logo">
   <img class="img-responsive" src="images/gift.PNG" alt="LOGO" >
   <nav class="navbar navbar-inverse">
   <div class="container-fluid">
   <div class="navbar-header">
    <a class="navbar-brand" href="#">Gift Real Estate</a>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    
   </div>
   <div class="navbar-collapse collapse" id="myNavbar">
    <ul class="nav navbar-nav">
     <li >
      <a href="index.php">Home</a>
     </li>
     <li>
       <a class="nav-link js-scroll-trigger" href="index.php#login">Sign In</a>
     </li>
     <li>
      <a class="nav-link js-scroll-trigger" href="registration.php">Registration</a>
     </li>
     <li >
      <a href="selling.php">Selling</a>
     </li>  
     <li>
       <a class="nav-link js-scroll-trigger" href="index.php#news">News</a>
     </li>
     <li>
      <a href="faq.php">FAQ</a>
     </li>
     <li>
      <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
     </li>
     <li>
      <a class="nav-link js-scroll-trigger" href="Aboutus.php">About Us</a>
     </li>
    </ul>
    </div>
   </div>
   </nav>
   </div>
   </div>
      <div id="contents">
        <div class="box">
          <div>
           
              <div>
          <h2 id="Feature"> Search Result </h2>
                <span class="time"><br> </span>
              
    <?php 
// mysql_select_db("re");


if(isset($_GET['search'])){

   $RE_ID  = $_GET['value'];
   $hig_value = $_GET['value1']; 
  $location  = $_GET['location']; 
  $con=mysqli_connect("localhost","root","","real_estate")or die("unable to connect ".mysqli_error());
    $search_query = "SELECT * from property where Price BETWEEN '$RE_ID' and '$hig_value' and Status='Accepted' or Location = '$location' and Status='Accepted' order by 1 DESC";
    $run_query = mysqli_query($con,$search_query);
    echo "result queryed";
    if(mysqli_num_rows($run_query)==0){
      echo "<center><h1>sorry, result not found</h1><div class='form-group'>
  <div <a href='#add_member' data-toggle='modal' class='btn btn-primary'  type='submit' <i class='fa fa-group'></i> Add requirement here</a></div>
  <div class='modal fade' id='add_member' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <div class='panel-heading'>
                        <h3 class='panel-title'>Please Sign in to Buy Request!</h3>
                    </div>
                    <div class='panel-body'>
                        <form method='POST' action='addrequirementdb.php'>
                            <fieldset>
                                <div class='form-group'>
                                    <input class='form-control' required='required' placeholder='UserName' name='username' type='text' autofocus>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' required='required' placeholder='Password' name='password' type='password' >
                                </div>
                                <div class='checkbox'>
                                    <label>
                                        <input name='remember' type='checkbox' value='Remember Me'>Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               <input type='submit' value='Login' name='submit' class='btn btn-lg btn-success btn-block' /> 
     <div class='pull-right'><a href='registration.php'  class='btn btn-default ''><i class='fa fa-group'></i> Register</a></div
     <font color =red></font>

                              
                             
           </form>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
        
      </div>
      </div>
      
    </div>
    </div>
</form> click her to add requermets </a></center>";
      ?>
  <?php
    }
      else{
while ($search_row=mysqli_fetch_array($run_query)){
    $post_name = $search_row['RE_Name'];
    $post_title ="Price:". $search_row['Price'];
    $post_image = $search_row['image'];
    $post_content = "Country:".substr($search_row['Country'],0,150);
     $Bedroom ="Number of Bedroom:". $search_row['Bedroom'];
       $Category ="Category of realestate:". $search_row['Category'];
        $Veiwdet ="View Details: ". $search_row['Category'];

 echo "<a href='searchdisplay.php?get=full&id=".$search_row["RE_ID"]."'</a>"; 
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <body>
  <table  width="33.33%" align="left">
  <tr>
    <td width="14%" align="center">
<h4><?php echo $post_name; ?> Real Estate</h4>
<input type="image" src="images/<?php echo $post_image; ?>" width="200" height="150">
<p><?php echo $post_title; ?></p>
<p><?php echo $post_content; ?></p>
<p><?php echo$Bedroom; ?></p>
<p><?php echo  $Category; ?></p>
<h2 id="feedbackbutton">View Details</h2>
<hr>
</td>
</table>
<?php 
   }}}

if ($get=="full")
{
$id=$_GET["id"];
                                
          } 
          ?>  
          </div>
            </div>  
           <?php 
      include 'footer.php';
            ?>
        </div>
           </div>
            </div>
    </div>

</body>
</html>