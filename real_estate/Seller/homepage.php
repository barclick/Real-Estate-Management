
<?php 
include 'Sellerpage.php';
 ?>

              <div class="row">
                <!--Info Pannel, Warning Panel And Danger Panel   -->
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="alert alert-info">
                         <i class="fa  fa-beer fa-2x"></i><b>&nbsp;&nbsp;&nbsp; </b>Buy Real Estate Property
                    </div>
                        <div class="panel-body">
                            <p> Here you can search for various Real Estate properties such as Villa,Appartement, Condominium_House,and Studios as per your requirenments which is available in the wabsite to sell. <br>You can view the details of each and every property. If you are intrested to buy,then you can contact to the owner of the Real Estate property.</p>
                        </div>
                    </div>
                     <div class="alert alert-info">
                         <i class="fa  fa-pencil"></i><b>&nbsp;&nbsp;&nbsp; </b>About Registration
                    </div>
                    <div class="panel-body">
                            <p>Once You registered yourself  you can search available Real Estate Property based on your requirement in each time and every where internet connection is available! <br>
                            You can send feedback to the administrator of the WRERS about any information which you went to clarify.</p>
                        </div>
                </div>

<div class="col-lg-6">
<!-- Chat Panel Example-->
         <div class="chat-panel panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-comments fa-fw"></i>
        Chat
    </div>

    <div class="panel-body">
        <ul class="chat">
            <li class="left clearfix">
                <span class="chat-img pull-left">
             <?php
              $UserName = $_SESSION['username'];  
            $con = mysqli_connect("localhost","root","","real_estate");
            if (!$con)
              {
              die('Could not connect: ' . mysqli_connect_error());
              }
            $result = mysqli_query($con,"SELECT * FROM customer_reg where UserName='$UserName'");
                   while($row = mysqli_fetch_array($result))
                  {
                echo "<tr id='tr'>";
                 echo "<tr>";
                 $path="../images/Profile_Picture/";
                 $fileName=$row['Profile_Picture'];
              echo "<td>" .'<img class="img-rectangle" width="55" height="55" src="'.$path.$fileName.'" >' ."</td>";

            mysqli_close($con);
          }
            ?> 
  </span>
      <div class="chat-body clearfix">
          <div class="header">
              <strong class="primary-font"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo "$UserName"; ?>   <class="user-text-online">&nbsp;&nbsp;&nbsp;
      <span class="user-circle-online btn btn-success btn-circle "></span>
   </strong>
  <small class="pull-right text-muted">
  <i class="fa fa-clock-o fa-fw"></i> 
  <?php
 $con = mysqli_connect("localhost","root","","real_estate");
  if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_error());
    }
  $result = mysqli_query($con,"SELECT * FROM chat where Name='$UserName'");
  
  while($row = mysqli_fetch_array($result))
   {

      echo "<tr id='tr'>";
       echo "<tr>";
    echo "<td> ".$row['C_Date']. "</td>"."</tr"; 
      }     
              
  mysqli_close($con);
  ?>      
              </small>
          </div>
          <p>
  &nbsp;&nbsp;</br>&nbsp;&nbsp;&nbsp;</br>   
  <?php
  $con = mysqli_connect("localhost","root","","real_estate");
  if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_error());
    }
  $result = mysqli_query($con,"SELECT * FROM chat where Name='$UserName'");
    while($row = mysqli_fetch_array($result))
    {
      echo "<tr id='tr'>";
    echo "<td> ".$row['Message']. "</td>"."</tr>";
    
    }
  echo "<tr id='tr'>";
  echo "<td>" ."<form method='post' action='chatdb.php' autocomplete='off'>
      
          <div class='input-group'>
              <input id='btn-input' type='text' name='uname' class='form-control input-sm' placeholder='Type user name here...'' />
              </br>
              <input id='btn-input' type='text' name='chat' class='form-control input-sm' placeholder='Type your message here...'' />
              </br>
              <span class='input-group-btn'>
                  <button class='btn btn-warning btn-sm' id='btn-chat'>Send </button>
              </span>
          </div>
      </form>"."</td>"."</tr>";

  mysqli_close($con);
  ?>                          
      </div>
            
    </div>
    
  </div>
  
</div>
  
</div>
</li>
</ul>
</div>
<script type="text/javascript" src="assets/scripts/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {  
  
  // submit form using $.ajax() method
  
  $('#reg-form').submit(function(e){
    
    e.preventDefault(); // Prevent Default Submission
    
    $.ajax({
      url: 'chatdb.php',
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
       
       
	</body>
</html>