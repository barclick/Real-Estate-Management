 <?php include 'Sellerpage.php'; ?> 

  <div class="panel-body">
      <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Change Profile_Picture
      </button>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Change Profile_Picture</h4>
                  </div>
                  <div class="modal-body">
  <div class="wrapper">  
  <table>
  <div class="container">
  
  <div class="col-lg-3">
  
    <div class="row">
    
      <div id="form-content">
      
      <form id="reg-form" autocomplete="off" action="changeprofilepicturedb.php" method="post" enctype="multipart/form-data">
        <tr>
        <td height="38"><span class="style8">Profile Picture:</span></td>
        <td><label>
        <div>
        <input type="file" name="inputImage" id="inputImage" accept="image/*"  onchange="imagepreview(this);">
       <img id="imgpreview" name ="images"  width="150" height="170" title="You Select this Photo" /
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
    </tr></table>                    
  </div>
  <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
     </div>
  </div>
    </div>
  </div>
  
</div>
</table>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="assets/scripts/jquery-1.11.3-jquery.min.js">
</script>
<script type="text/javascript">
$(document).ready(function() {  
  
  // submit form using $.ajax() method
  
  $('#reg-form').submit(function(e){
    
    e.preventDefault(); 
    
    $.ajax({
      url: 'changeprofilepicturedb.php',
      type: 'POST',
      data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
      contentType: false,       // The content type used when sending data to the server.
      cache: false,             // To unable request pages to be cached
      processData:false,        // To send DOMDocument or non processed data file it is set to false
      success: function(data)   // A function to be called if request succeeds
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
                   
