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
      <style type="text/css">
     #insertTitle{
  	background-color: powderblue;
  } 
  #insertBody{
    background-color: powderblue;
  }
  td{
    font-style: bold;
  }
      </style>
</head>
<body >
    <?php 
    include 'Sellerpage.php';
     ?>
 <div class= 'panel-heading'>
<table width='100%' border='0'>
<tr>
<td  align='center' <div class='panel panel-primary'>
<div class='panel-heading'>
    <i>Real Estate Transfer</i>

    <div class='pull-right'>
                </div>
</div>     </td>
</tr>
</table>
</div>
<div class="panel-body" class="insertBody">
<form  action="houseTransferDb.php" method="POST" enctype="multipart/form-data">
<table  cellspacing="10">
<tr><td> Name Of Buyer &nbsp;  &nbsp;&nbsp;&nbsp;</td>
<td>
<input type="text" class="form-control input-lg" required="" name="buyername" data-error="enter valid name" >&nbsp;  &nbsp;&nbsp;&nbsp;
</td>
</tr>
<tr>
<td> Name of Seller</td>
<td><input type="text" class="form-control input-lg" required="" name="sellername" > &nbsp;  &nbsp;&nbsp;</td>
</tr>
<tr>
<td> Price</td>
<td><input type="text" class="form-control input-lg" required="" name="price" > &nbsp;  &nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td> Location</td>
<td><input type="text" class="form-control input-lg" required="" name="price" > &nbsp;  &nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-danger">Reset Button</button>
&nbsp;&nbsp;<button   type="submit" class="btn btn-primary" >Transfer</button>


</form>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
</body>
</html>