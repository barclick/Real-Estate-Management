<ul class='nav navbar-top-links navbar-right'>
                <!-- main dropdown -->           
                <li class='dropdown'>
                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                        <span class='top-label label label-danger'>3</span><i class='fa fa-envelope fa-3x'></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class='dropdown-menu dropdown-messages'>
                        <li>
                            <a href='feedback.php'>
                                <div>
                                    <strong><span class='label label-danger'>Kabtamu</span></strong>
                                    <span class='pull-right text-muted'>
                                        <em>
                                        <?php
                                        $date=date('y/m/d'); 
                                        echo "$date";
                                         ?>
                                             
                                        </em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                    
                        <li class='divider'></li>
                        <li>
                            <a class='text-center' href='#>
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right'></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                
   


<div class='btn-group'>
                                    <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown'>
                                        Messages
                                        <span class='caret'></span>
                                    </button>
                                    <ul class='dropdown-menu pull-right' role='menu'>
                                        <li><a href='viewrequestdisplay.php''>Sell Request</a>
                                        </li>
                                        <li><a href='#''>Another action</a>
                                    </ul>
                                </div>






<ul class='nav navbar-top-links navbar-right'>
                <!-- main dropdown -->           
                <li class='dropdown'>
                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                        <span class='top-label label label-danger'>3</span><i class='fa fa-envelope fa-2x'></i>
                    </a>
                    <ul class='dropdown-menu dropdown-messages'>
                        <li>
                            <a href='feedback.php'>
                                <div>
                                    <span class='label label-danger'>Kabtamu</span>
                                    <span class='pull-right text-muted'>
                                        <em>
                                        4
                                             
                                        </em>
                                    </span>
                                </div>
                                <div>hiy i need real estate</div>
                            </a>
                        </li>
                  
                    </ul>











                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <i class='fa fa-bar-chart-o fa-fw'></i>Area Chart Example
                            <div class='pull-right'>
                                <div class='btn-group'>
                                    <button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown'>
                                        Actions
                                        <span class='caret'></span>
                                    </button>
                                    <ul class='dropdown-menu pull-right' role='menu'>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>             



                        <?php
                                $con = mysqli_connect("localhost","root","","re");
                                if (!$con)
                                  {
                                  die('Could not connect: ' . mysqli_connect_error());
                                  }
                                $result = mysqli_query($con,"SELECT * FROM feedback");
                                       while($row = mysqli_fetch_array($result))
                                        {
                                        ?>
                                        <?php
                                        }
                                        $records = mysqli_num_rows($result);
                                        ?>
                                        <?php echo $records; ?>
                                     
                                        <?php
                                        mysqli_close($con);
                                        ?>
                                            


                                             <td>
                                      <a href="javascript:sendrequirement('<?php echo $row['Req_ID']; ?>')">
                                                     <?php
                                    $con = mysqli_connect("localhost","root","","re");
                                    if (!$con)
                                      {
                                      die('Could not connect: ' . mysqli_connect_error());
                                      }
                                        elseif ($con) {
                                    $today = date("Y-m-d H:i:s");
                                     $req_id= $_GET ['Req_ID'];
                                    $result = mysqli_query($con,"SELECT * FROM `requirement`,`reproperty` WHERE `reproperty`.`PostDate` between `requirement`.`Requirement_Date` and '$today' and `requirement`.`RE_Category`=`reproperty`.`Category` and `requirement`.`State`=`reproperty`.`State` and `requirement`.`Location`=`reproperty`.`Location` and `reproperty`.`Price` between `requirement`.`Min_Price` and `requirement`.`Max_Price`  and  Status='Accepted'  and  Req_ID='$req_id'");
                                        if(mysqli_num_rows($result)==0){
                                            echo "No match RE found";

                                          ?>
                                      <?php
                                        }
                                          else{

                                    echo "Match RE found";
                         } 
                         }            
                      mysqli_close($con);
                      ?>     





<div class="wrapper">
  
  <div class="container">

  <div class="col-lg-3">
  
    <div class="row">
    
      <div id="form-content">
      
      <form method="post" id="reg-form" autocomplete="off">
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
      url: 'requestdb.php?RE_ID=<?php echo $id; ?>',
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
});
</script>

       <!--    referesh ajax -->
        echo "
<table>
       <tr>
    <td colspan='2'>
      <div class='alert alert-info'>
        <strong>Success</strong>, Request send Successfully!!!
      </div>
    </td>
    </tr>
    </table>  "; 










     <?php
include('connect.php');
session_start();
$UserName = $_SESSION['username'];  
$path = "images/Profile_Picture/";

$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
$name = $_FILES['images']['name'];
$size = $_FILES['images']['size'];
if(strlen($name))
{
list($txt, $ext) = explode(".", $name);
if(in_array($text,$valid_formats))
{
if($size<(1024*1024)) // Image size max 1 MB
{
$actual_image_name = time().$UserName.".".$ext;
$tmp = $_FILES['images']['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{
mysqli_query($db,"UPDATE customer_reg SET Profile_Picture='$actual_image_name' WHERE UserName='$UserName'");
echo "<img src='images/Profile_Picture/".$actual_image_name."' class='preview'>";
}
else
echo "failed";
}
else
echo "Image file size max 1 MB";
}
else
echo "Invalid file format..";
}
else
echo "Please select image..!";
exit;
}
?>