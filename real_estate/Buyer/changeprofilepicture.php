 <?php include 'buyerpage.php'; ?> 

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
  <div class="wrapper">                                            <table>
  <div class="container">
  
  <div class="col-lg-3">
  
    <div class="row">
    
      <div id="form-content">
      
      <form method="POST"  autocomplete="off">
                                    <tr>
                        <td height="38"><span class="style8">Profile Picture:</span></td>
                        <td><label>
                        <div>
                        <input type="file" name="images"  onchange="imagepreview(this);">
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
                        <script type="text/javascript" src="assets/scripts/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {  
  
  // submit form using $.ajax() method
  
  $('#reg-form').submit(function(e){
    
    e.preventDefault(); // Prevent Default Submission
    
    $.ajax({
      url: 'changeprofilepicturedb.php',
      type: 'POST',
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
                     <!-- End Modals-->
   
