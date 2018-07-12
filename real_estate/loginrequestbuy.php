<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Buy</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default"> 
              <img src="images/buy.jpg" width="350" height="80" alt="Login"/>                 
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign to Send your favorite!</h3>
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
                                <a href="registration.php" class="btn btn-primary">Register</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
