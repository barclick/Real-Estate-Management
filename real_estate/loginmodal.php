<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

 <!-- Bootstrap CSS -->
  </head>
  <body>
  <div class="form-group">
  <div <a href="#add_member" data-toggle="modal" class="btn btn-primary"  type="submit" <i class="fa fa-group"></i> Send Request</a></div>
  <div class="modal fade" id="add_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="panel-heading">
                        <h3 class="panel-title">Please Sign in to Buy Request!</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" required="required" placeholder="UserName" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="required" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                               <input type="submit" value="Login" name="submit" class="btn btn-lg btn-success btn-block" /> 
     <div class="pull-right"><a href="registration.php"  class="btn btn-default "><i class="fa fa-group"></i> Register</a></div
     <font color =red></font>

                              
                             
           </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        
      </div>
      </div>
      
    </div>
    </div>
</form>
  </body>
</html>