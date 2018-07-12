
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION["username"];?></title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
      <style>
      .navbar
{
	background-color: lightblue;
	 color: black;black
}
          ul.navbar li {
 display: inline;

line-height: 80px;
text-align: center;
font-family: italic;
font-size: 20px;
text-decoration: none;
}
ul.navbar li a {
    margin-left: 100px;
    text-decoration: none;
    border-radius: 4px 4px 0 07
    color: black;
    font-size: 17px;
}
ul.navbar li a:visited
{
    color:black;
}
ul.navbar li a:hover {
    background-color: #708090;
}
      </style>

</head>

   <body>
              <?php 
              include 'buyerpage.php';
               ?>
               <div class="row">
                <!-- Page Header -->
                 <div class="col-lg-12">
                    <ul class="navbar">
                    <li> <a href="viewrequestdisplay.php">View Request</a></li>
                    <li> <a href="home.php">Send Responce</a></li>
                 </ul>

                </div>

                <!--End Page Header -->
            </div>
</body>

</html>


