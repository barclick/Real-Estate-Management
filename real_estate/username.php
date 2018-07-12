<!DOCTYPE html>
<html>
<head>
  <!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ajax</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/regist.css" type="text/css">
    <link rel="stylesheet" href="css/loginstyle1.css" type="text/css" />
    <link rel="stylesheet" href="css/registrationform.css" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function() {
      $("#editPass").click(function() {
        $("#oldpass").show();
        $("#newpass").show();
        $("#conpass").show();
        //fname
        $("#fname").show();
        $("#fname1").hide();
        //lname
        $("#lname").show();
        $("#lname1").hide();
        //email
        $("#email").show();
        $("#email1").hide();
        //image
        $("#image").hide();
        //save
        $("#save").hide();
        //edit
        $("#edit").show();
        //updatePass
        $("#updatePass").show();
        //editPass
        $("#editPass").hide();
      });
    });
  </script>
  <style>
    .input-group-addon {
      background-color: #3276B1;
      border-color: #285E8E;
      color: #FFF;
      cursor: pointer;
    }
    .invalid {
      background:url(images/invalid.gif) no-repeat 0 50%;
      padding-left:0px;
      line-height:24px;
      color:#ec3f41;
    }
    .valid {
      background:url(images/valid.png) no-repeat 0 50%;
      padding-left:0px;
      line-height:24px;
      color:#3a7d34;
    }
    #pswd_info {
      /*display:none;*/
    }
    li{
      list-style: none;
    }
    .btn-file {
      position: relative;
      overflow: hidden;
    }
    .btn-file input[type=file] {
      position: absolute;
      top: 0;
      right: 0;
      min-width: 100%;
      min-height: 100%;
      font-size: 100px;
      text-align: right;
      filter: alpha(opacity=0);
      opacity: 0;
      outline: none;
      background: white;
      cursor: inherit;
      display: block;
    }

    #img-upload{
      width: 100%;
    }
  </style>
</head>
</head>
<body>

</body>
</html>
      
      <form method="post" id="reg-form" autocomplete="off">
      <tr>                  <div class="block">
                          <input required="" class="form-control" name="fname" id="form_fname" value="" placeholder="First name" type="text">
                        </div>
                        <span class="" style="color:red" id="fname_error"></span>
                          <td>UserName</td>
                            <td><input required="" class="form-control" name="username" id="from_username" placeholder="username" type="text">
                            </br>
                          <span class="error-block" style="color:red" id="username_error"></span>
                              <span id="result"></span></td>
                          </tr>
                         <div class="block mt10">
                          <div class="form-group">
                            <label>Upload Image</label>
                            <div class="input-group">
                              <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                  Browse...<input type="file" name="image" id="imgInp">
                                </span>
                              </span>
                              <input type="text" name="Iname" class="form-control" readonly="">
                            </div>
                            <img id="img-upload">
                          </div>
                        </div>
                        <span class="error-block" style="color:red" id="image_error"></span>
                        
                        <button id="update-submit" type="submit" class="btn btn-block btn-successful btn-approve mt20">
                          Update
                        </button>
                        <div style="display: none;" id="register-loading" class="cssload-center">
                          <div class="cssload"><span></span></div>
                        </div>
                      </form>
      


<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
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
<script type="text/javascript">
$(document).ready(function()
{    

  $("#from_username").keyup(function()

  {   
    var from_username = $(this).val();  
    
    if(from_username.length > 2)
    {   
      $("#result").html('checking...');

      /*$.post("username-check.php", $("#reg-form").serialize())
        .done(function(data){
        $("#result").html(data);
      });*/
      
      $.ajax({
        
        type : 'POST',
        url  : 'username-check.php',
        data : $(this).serialize(),
        success : function(data)
              {
                   $("#result").html(data);

                }
        });
        return false;
      
    }
    else
    {
      $("#result").html('');
    }
    
  });
  
});
</script>
<script src="js/jquery.validate.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>

      <script>
        $(document).ready( function() {
          $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
          });

          $('.btn-file :file').on('fileselect', function(event, label) {

            var input = $(this).parents('.input-group').find(':text'),
            log = label;

            if( input.length ) {
              input.val(log);
            } else {
              if( log ) alert(log);
            }

          });
          function readURL(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
              }

              reader.readAsDataURL(input.files[0]);
            }
          }
        });
      </script>
      <script type="text/javascript">
$(document).ready(function()
{    

  $("#from_username").keyup(function()

  {   
    var from_username = $(this).val();  
    
    if(from_username.length > 2)
    {   
      $("#result").html('checking...');

      /*$.post("username-check.php", $("#reg-form").serialize())
        .done(function(data){
        $("#result").html(data);
      });*/
      
      $.ajax({
        
        type : 'POST',
        url  : 'username-check.php',
        data : $(this).serialize(),
        success : function(data)
              {
                   $("#result").html(data);

                }
        });
        return false;
      
    }
    else
    {
      $("#result").html('');
    }
    
  });
  
});
</script>
      <script>
      // $(function(){
        $(document).ready(function(){

          $("#fname_error").hide;

          var fname_error=false;

          $("#form_fname").keyup(function(){
            check_fname();
          });

          function check_fname(){
            var fname_length = $("#form_fname").val().length;
            var pattern = new RegExp(/^[a-zA-Z]+$/);

            if (!pattern.test($("#form_fname").val())){
              $("#fname_error").html("Should be contain alphabets only");
              $("#fname_error").show();
              fname_error=true;
            }else if (fname_length <5 || fname_length >20) {
              $("#fname_error").html("Should be between 5-20 charcters");
              $("#fname_error").show();
              fname_error=true;
            }else{
              $("#fname_error").hide();
            }
          }
          $('#updateProfile-form').on("submit", function(event){  
            event.preventDefault(); 

            fname_error=false;

            check_fname();

            if (fname_error==false) {
              $.ajax({  
                url:"profileUpdate.php",  
                method:"POST", 
                data: new FormData(this), 
                contentType :false,
                cache :false,
                processData :false,

                beforeSend:function(){  
                  $('#update-submit').val("Inserting");  
                }, 
                success:function(response) {
                  if(response=="success")
                  {
                    $('#updateProfile-form')[0].reset();  
                    $('#pop-register').modal('hide');
                    $("#notification").html('Succesds');
                    // alert('Success');
                  }
                }  
              });
            }else{
              return false;
            }
          });
        });
      </script>