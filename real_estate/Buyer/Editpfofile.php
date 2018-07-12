<html>
    <head>
        
    </head>
    <body>
    <?php 
include 'buyerpage.php';
     ?>
                 <?php
                  require("connect.php");
                  $username =$_REQUEST['UserName'];
                  $result = mysql_query("SELECT * FROM customer_reg WHERE UserName  = '$username'");
                  $row = mysql_fetch_array($result);
                  if (!$result) 
                          {
                          die("Error: Data not found..");
                          }
                          $uname=$row['UserName'];
                           $fname=$row['FirstName'];
                          $lname=$row['LastName'];
                          $address=$row['Address'];
                          $pho=$row['PhoneNumber'];
                          $cust=$row['CustomerType'];
                          $email=$row['Email'];
                         $pass=$row['Password'];
                                  

                                    if(isset($_POST['save']))
                                    {   
                                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                        session_start();
                                     $usr=$_POST['username'];
                                      $fname=$_POST['fname'];
                                       $lname=$_POST['lname'];
                                       $address=$_POST['Address'];
                                       $phone=$_POST['PhoneNumber'];
                                       $ctype=$_POST['CustomerType'];
                                       $email=$_POST['email'];
       mysql_query("UPDATE customer_reg SET UserName ='$usr', FirstName ='$fname',LastName ='$lname',Address ='$address',PhoneNumber ='$phone',CustomerType ='$ctype',Email ='$email' WHERE UserName = '$username'")
                                                    or die(mysql_error()); 
       echo '<script type="text/javascript">alert("Update successfully");window.location=\'userprofile.php\';</script>';
                                        
                                    }
                                    }
                                    mysql_close($conn);
                                    ?>
<table>
    <fieldset 
       <legend> <h4>
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <i class=""></i>Update Profile
                   <div class="pull-right">
                      <div class="btn-group">
                         
                          </div>
                      </div>
                 </div></h4></legend>
            <form name="myform"  method="post">
                                    <tr>
                       <td>User Name</td>
                        <td><input required="" name="username" id="from_username" class="form-control" value="<?php echo $uname;?>" type="text">
                            </br>
                          </td>
                          <td>First Name</td>
                          <td><input type="text" class="form-control"  name="fname" id="form_fname" value="<?php echo $fname;?>"></br>
                          </td></tr>                  
                              <tr>
                         <td>Last Name</td>
                          <td><input required="" class="form-control" name="lname" id="form_lname" value="<?php echo $lname;?>" type="text"></br>
                          <span class="error-block" style="color:red" id="lname_error"></span></td>
                          <td>Address</td>
                          <td><input type="text" class="form-control"  name="Address" id="form_address" placeholder="Address" value="<?php echo $address;?>"></br>
                         </td></tr>  
                            <td>Phone_Number</td>
                           <td><input required="" class="form-control" type="text" name="PhoneNumber" id="form_phone"
                            value="<?php echo $pho;?>"></br>
                          </td> 
                          <td><span class="style10">CustomerType:</span></td>
                          <td><label>
                           <select name="CustomerType" class="form-control" id="cmbGender">
                              <option>Buyer</option>
                             <option>Seller</option>
                            </select>
                           </label></td>
                           </tr>
                           <tr>
                          <td>Email</td>
                            <td><input required="" class="form-control" name="email" id="form_email" value="<?php echo $email;?>" type="email"></br>
                          </td>
                          </tr>
                          <tr>
                          <td>
                         <button type="submit"  class="btn btn-primary"  name="save" value="save" >Save</button>
                         </td>
                         </tr>
 </table>
 </tr>
 </form>
 </fieldset>
<?php
// Close the connection
mysqli_close($con);
?>
    </body>
</html>





