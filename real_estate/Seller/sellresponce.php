<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>

                        <div>
                         <fieldset
                 <legend><h1>User Registration for Real Estate system</h1></legend>
                <table width="50%" height="10" border="0" cellpadding="3" cellspacing="3">
                 <form name="myform" action="registrationb.php?RE_ID=<?php echo $id; ?>" method="POST">
                Email<input type="email" class="form-control" placeholder="you@yourdomain.com" name="email" required="required" />
                Message<textarea rows="6" class="form-control" name="message" placeholder="Whats on your mind?"></textarea>
              
      <button type="submit" class="btn btn-primary" name="Submit">Send Request</button>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "real_estate";
// Create connection
$RE_ID=$_GET['RE_ID'];
$con=mysqli_connect("localhost","root","","real_estate");
   
  if(mysqli_connect_errno())
  {
    echo('could not connect to database :'. mysqli_connect_errno());
  }
   $UserName=$_POST['UserName'];
   $FirstName=$_POST['FirstName'];
   $LastName=$_POST['LastName'];
   $Gender=$_POST['Gender'];
   $Address=$_POST['Address'];
   $City=$_POST['City'];
   $PhoneNumber=$_POST['PhoneNumber'];
   $CustomerType=$_POST['CustomerType'];
   $Email=$_POST['Email'];
   $Password=$_POST['Password'];
   $ConfirmPassword=$_POST['ConfirmPassword'];
   $image=$_POST['image'];
    if ($UserName=="")
    {
      echo "please fill ur User name";
    }
   else{

   $q="select * from customer_reg where UserName='$UserName' ";
$rs=$con->query($q);
if($rs->fetch_row()>0)

{
   echo '<script type="text/javascript">alert("username already exist please use other UserName");window.location=\'registration.php\';</script>';
}

else
{
$sql="INSERT INTO customer_reg(UserName,FirstName,LastName,Gender,Address,City,PhoneNumber,CustomerType,Email,Password,ConfirmPassword,Profile_Picture) 
      VALUES ('$UserName','$FirstName','$LastName','$Gender','$Address','$City','$PhoneNumber','$CustomerType','$Email','$Password','$ConfirmPassword','$image')";
        if(!mysqli_query($con,$sql))
        {
          die('ERROR:'. mysqli_error($con));
        }
         echo '<script type="text/javascript">alert("registration successfully.Thanks for Registration");window.location=\'index.php\';</script>';
 $sq="INSERT into Useraccount (UserName,Password,UserType) 
  VALUES ('$UserName', '$Password', '$CustomerType')";
  if (mysqli_query($con, $sq)) {
} 
else {
    echo "Error: " . $sq . "<br>" . mysqli_error($con);
      
      }
   }
  }
        mysqli_close($con);
        ?>
</table>
</fieldset>