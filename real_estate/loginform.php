<head>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <script src="assets/slitslider/js/jquery-1.9.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
</head>
<div class="main-login main-center" align="center" id="loginForm">
<input id="loginImage"  type="image" src="images/loginnow.jpg" alt="Click to login" width="200">

         <aside class="top-sidebar">
        <article>                     
      
       <form  action="login.php" method="POST" enctype="multipart/form-data" class="mainlogin" name="myForm" onsubmit="return(validate());">
       <div class="form-group row">
       <div class="col-xs-2"></div>
       <div class="col-xs-8">
      <label  id="usernameLabel" for="name" class="form-control">  Username </label>
     <input type="text"  name="username" placeholder="Enter Username here" class="loginname input-lg" id="uname" required x-moz-errormessage="To Login Please Enter User name" onkeypress='return alphanumeric(event, this)';/>
     </div>
     <div class="col-xs-2"></div>
     </div>
     <div class="form-group row">
     <div class="col-xs-2"></div>
     <div class="col-xs-8">
       <label id="passwordLabel" for="name" class="form-control ">  Password </label>
     <input type="password"  name="password" placeholder="Enter password here" class="loginpass input-lg" id="pass " required x-moz-errormessage="To Login Please Enter User name"/>
     </div>
     <div class="col-xs-2"></div>
     </div>
      <label>
      <input name="remember" type="checkbox" value="Remember Me">Remember Me
      </label>
      <div>
       <input type="submit" value="Login" name="submit" class="loginbt btn-lg btn btn-primary" /> 
       </div>
    </form>
<div <a href='#forget_password' id="forgetId" data-toggle='modal' class="btn btn-lg btn-success"  type='submit' <i class='fa fa-group'></i> Forgot Password</a></div>
  <div class='modal fade' id='forget_password' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
     
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-3x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">
                              
                              <form class="form" method="post" action="password.php">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input id="emailInput" placeholder="email address" name="email" class="form-control" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="" type="email">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                  </div>
                                </fieldset>
                              </form>
                              
                            </div>
                        </div>
                    </div>
        <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'><i class='fa fa-times'></i> Close</button>
      </div>
      </div>
    </div>
    </div>
  </aside>
  </div>