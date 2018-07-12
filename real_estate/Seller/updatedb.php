<html>
    <head>
        
    </head>
    <body>
    <?php 
include 'Sellerpage.php';
     ?>
         <?php
$con=mysqli_connect("localhost","root","","real_estate");
$RE_ID =$_REQUEST['RE_ID'];

$result = mysqli_query($con,"SELECT * FROM property WHERE RE_ID  = '$RE_ID'");
$row = mysqli_fetch_array($result);
if (!$result) 
        {
        die("Error: Data not found..");
        }
        $RE_ID=$row['RE_ID'];
         $P_TaxNO=$row['P_TaxNO'];
        $Property_for=$row['Property_for'];
        $Category=$row['Category'];
        $Country=$row['Country'];
        $State=$row['State'];
        $Price=$row['Price'];
       $Bedroom=$row['Bedroom'];
       $BathRooms=$row['Bathroom'];
       $Longitude=$row['Longitude'];
       $latitude=$row['Lat'];
       $Facility=$row['Facility'];
      $image=$row['image'];
    $YearBuilt=$row['YearBuilt'];
    $totalarea=$row['Totalarea'];
    $View=$row['3D_View'];

    if(isset($_POST['save']))
    {   
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        session_start();
      $UserName = $_SESSION['username'];  
      $rename=$_POST['rename'];
       $P_TaxNO=$_POST['taxnumber'];
       $Property_for=$_POST['propertyfor'];
       $category=$_POST['category'];
       $country=$_POST['country'];
       $state=$_POST['state'];
       $price=$_POST['price'];
       $bedroom=$_POST['bedroom'];
       $bathroom=$_POST['bathroom'];
       $location=$_POST['location'];
       $facility = implode(',',$_REQUEST['chk']);
       $yearbuilt=$_POST['yearbuilt'];
       $totalarea=$_POST['totalarea'];
       $image=$_POST['image'];
       $view=$_POST['view'];                            

                                    

            mysql_query("UPDATE reproperty SET P_TaxNO ='$P_TaxNO', Property_for ='$Property_for',Category ='$category',State ='$state',Price ='$price',Bedroom ='$bedroom',Bathroom ='$bathroom',Location ='$location',Facility ='$facility' ,image ='$image',YearBuilt ='$yearbuilt',Totalarea ='$totalarea',3D_View ='$view' WHERE RE_ID = '$RE_ID'")
                                                    or die(mysql_error()); 
       echo '<script type="text/javascript">alert("Update successfully");window.location=\'repropertydisplay.php\';</script>';
                                        
                                    }
                                    }
                                    mysqli_close($con);
                                    ?>
                                      <table>
                                    <fieldset 
                                    
                                  <legend> <h4>

                                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class=""></i>Update Real Estate
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Update
                                        <span class="caret"></span>
                                    </button>
                                </div>
                            </div>
                        </div></h4></legend>
                                     <form name="myform"  method="post">
                                    <tr><td> P_TaxNO</td>
                                    <td><input type="text" class="form-control"required="required" name="taxnumber" data-error="enter valid email" value="<?php echo $P_TaxNO;?>"></td>
                                    <td height="36"><span class="style8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Property_For:</span></td>
                                   <td><label>
                                  <select name="propertyfor" id="cmbRoom" >
                                    <option>Sell</option>
                                    <option>Rent</option>
                                    <option>Commertial &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
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
                        <option>G+3House&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
               
                      </select>
                    </label></td>
                  
                       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Country</td>
                        <td><input type="text" class="form-control" required="required" name="country" value="<?php echo $Country;?>"></td>
                        </tr>
                        <tr><td> State</td>
                        <td><input type="text" class="form-control" name="state" value="<?php echo $State;?>"></td></tr>
                        </tr>
                        <tr>
                        <td>Price</td>
                        <td><input type="text" class="form-control" required="required" name="price" value="<?php echo $Price;?>"></td>
                       <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location</td>
                    <td><input type="text" class="form-control" name="lng"  value="<?php echo $Longitude;?>"></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="lat"  value="<?php echo $latitude;?>"></td>
                    </tr>
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
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YearBuilt</td>
                    <td><input type="text" class="form-control" name="yearbuilt" value="<?php echo $YearBuilt;?>"></td>
                    </tr>
                    <tr>
                    <td>Total Area</td>
                    <td><input type="text" required="required" class="form-control" name="totalarea" value="<?php echo $totalarea;?>";"></td>
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
                        <option>6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                      </select>
                    </label></td>
                  
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No_BathRooms:</span></td>
                    <td><label>
                     <div class="form-group">
                                            <select class="form-control" name="bathroom">
                                                <option value="<?php echo $BathRooms;?>">1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                            </select>
                                        </div>
                                      </tr>
                                       <input type="hidden" name="pending" value="Pending"> </tr> 

                                                  <tr>
                                                    <td height="38"><span class="style8">Image:</span></td>
                                    <td><label>
                                      <div>
                  <input type="file" name="image" onchange="imagepreview(this);">
                  <img src="images/<?php echo $image;?>" width="90" height="60">                    
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
                  
                    <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3D_View:</span></td>
                    <td><label>
                      <input type="file" name="view" id="txtFile" />
                    <video src="3D_View/<?php echo $View;?>" width="100" height="100">
                    </label></td>
                    <input type="hidden" name="Pending" value="Pending">
                  </tr>
                  <table>
 <button type="submit" class="btn btn-primary" name="save" value="save" >Update Real Estate Property</button>
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





