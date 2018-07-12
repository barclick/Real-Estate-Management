<?php 
session_start();
if ($_SESSION["username"]==null) {
   header("location:../index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION["username"];?></title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body>
<!--  wrapper -->
<div id="wrapper">
<!-- navbar top -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
<!-- navbar-header -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<!-- end navbar-header -->
<!-- navbar-top-links -->
<ul class="nav navbar-top-links navbar-right">
<!-- main dropdown -->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="top-label label label-danger"><?php
            $con = mysqli_connect("localhost","root","","real_estate");
            if (!$con)
              {
              die('Could not connect: ' . mysqli_connect_error());
              }
               $dat=date('y/m/d');
            $result = mysqli_query($con,"SELECT * FROM reproperty where Status='Pending'");
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
                    ?></span><i class="fa fa-envelope fa-1x"></i>
</a>
<!-- dropdown-messages -->
<ul class="dropdown-menu dropdown-messages">
    <li>
        <a href="Approvereject.php">
            <div>
                <strong><span class=" label label-danger">               
               Dear  <?php echo $_SESSION["username"];?>  </h3></span></strong>
                <span class="pull-right text-muted">
                    <em>
                    <?php
                    $date=date('y/m/d'); 
                    echo "$date";
                     ?>
                         
                    </em>
                </span>
            </div>
            <div>have  <?php
            $con = mysqli_connect("localhost","root","","real_estate");
            if (!$con)
              {
              die('Could not connect: ' . mysqli_connect_error());
              }
               $dat=date('y/m/d');
            $result = mysqli_query($con,"SELECT * FROM reproperty where Status='Pending' " );
                   while($row = mysqli_fetch_array($result))
                    {
                    ?>
                    <?php
                    }
                    $records = mysqli_num_rows($result);
                    ?>
                    <div <span style="color:green;"><?php echo $records; ?><span></div>
                    <?php
                    mysqli_close($con);
                    ?> Sell request peresnt whcih is waiting for Approval </div>
        </a>
    </li>    
</ul>
<!-- end dropdown-messages -->
</li>

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="top-label label label-warning">
    <?php
            $con = mysqli_connect("localhost","root","","real_estate");
            if (!$con)
              {
              die('Could not connect: ' . mysqli_connect_error());
              }
               $dat=date('y/m/d');
            $result = mysqli_query($con,"SELECT * FROM feedback where F_Date='$dat'");
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
                    ?></span>  <i class="fa fa-bell fa-1x"></i>
</a>
<!-- dropdown alerts-->
<ul class="dropdown-menu dropdown-alerts">
    <li>
        <a href="feedback.php">
            <div>
                <i class="fa fa-comment fa-fw"></i>User Feedback
                <span class="pull-right text-muted small">
                <?php
            $con = mysqli_connect("localhost","root","","real_estate");
            if (!$con)
              {
              die('Could not connect: ' . mysqli_connect_error());
              }
               $dat=date('y/m/d');
            $result = mysqli_query($con,"SELECT * FROM feedback where F_Date='$dat'");
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

                minutes ago</span>
            </div>
        </a>
    </li>
    <!-- <li class="divider"></li>
    <li>
        <a href="#">
            <div>
                <i class="fa fa-envelope fa-fw"></i>Message Sent
                <span class="pull-right text-muted small">4 minutes ago</span>
            </div>
        </a>
    </li> -->
</ul>
<!-- end dropdown-alerts -->
</li>

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
   <?php
      $UserName = $_SESSION['username'];  
    $con = mysqli_connect("localhost","root","","real_estate");
    if (!$con)
      {
      die('Could not connect: ' . mysqli_connect_error());
      }
    $result = mysqli_query($con,"SELECT * FROM customer_reg where username='$UserName'");
while($row = mysqli_fetch_array($result))
  {
    $path="../images/Profile_Picture/";
    $fileName=$row['Profile_Picture'];  
    echo "<tr id='tr'>";
     echo "<tr>";
    echo "<td>" .'<img class="img-circle" width="55" height="55" src="'.$path.$fileName.'" >'. "</td>";

   }            

    mysqli_close($con);
    ?>                     </a>
<!-- dropdown user-->
<ul class="dropdown-menu dropdown-user">
    <li><a href="userprofile.php"><i class="fa fa-user fa-fw"></i>User Profile</a>
    </li>
    <li><a href="changepassword.php"><i class="fa fa-gear fa-fw"></i>Settings</a>
    </li>
    <li class="divider"></li>
    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
    </li>
</ul>
<!-- end dropdown-user -->
</li>
<!-- end main dropdown -->
</ul>
<!-- end navbar-top-links -->

</nav>
<!-- end navbar top -->

<!-- navbar side -->
<nav class="navbar-default navbar-static-side" role="navigation">
<!-- sidebar-collapse -->
<div class="sidebar-collapse">
<!-- side-menu -->
<ul class="nav" id="side-menu">
<li>
    <!-- user image section-->
    <div class="user-section">
        <div class="user-section-inner">
            <?php
              $UserName = $_SESSION['username'];  
            $con = mysqli_connect("localhost","root","","real_estate");
            if (!$con)
              {
              die('Could not connect: ' . mysqli_connect_error());
              }
            $result = mysqli_query($con,"SELECT * FROM customer_reg where username='$UserName'");
    while($row = mysqli_fetch_array($result))
                                                {
        $path="../images/Profile_Picture/";
        $fileName=$row['Profile_Picture'];  
        echo "<tr id='tr'>";
        echo "<tr>";
        echo "<td>" .'<img class="img-circle" width="55" height="55" src="'.$path.$fileName.'" >'. "</td>";

                        }            

            mysqli_close($con);
            ?>                            </div>
        <div class="user-info">
            <div><strong> <?php echo $_SESSION["username"];?></strong></div>
             
            <div class="user-text-online">
                <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
            </div>
        </div>
    </div>
    <!--end user image section-->
</li>

        <li class="selected"><a href="homepage.php"><i class="fa fa-dashboard fa-fw"></i>Home</a>   </li>
        <li> <a href="custregisdisplay.php"><i class="fa fa-dashboard fa-fw"></i>Manage User</a></li>
        <li><a href="managereproperty.php">Manage Real Estate</a></li>
		<li> <a href="Approvereject.php">Approve Selle Request</a> </li> 
         <li><a href="News.php">Manage News</a></li>
		  <li><a href="requirement.php">View Requirement</a></li>
		  <li><a href="userprofile.php"><i class="fa fa-user fa-fw"></i>User Profile</a></li
    </ul>
    <!-- second-level-items -->
	                            

</li>
</ul>
</div>
<!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->
<!--  page-wrapper -->
<div id="page-wrapper">

<div class="row">
<!-- Page Header -->
<div class="col-lg-12">
<h3 class="page-header">Welcome  <?php echo $_SESSION["username"];?>  </h3>

</div>

<!--End Page Header -->
</div>
<!-- Core Scripts - Include with every page -->
<script src="assets/plugins/jquery-1.10.2.js"></script>
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/plugins/pace/pace.js"></script>
<script src="assets/scripts/siminta.js"></script>

</body>

</html>


