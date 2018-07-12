<?php include'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Property Details </title>
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
</style>
</head>
<body>
<div class="container">

<?php
$price = $_GET['price'];
$UserName = $_GET['username'];
?>

<?php
 $con=mysqli_connect("localhost","root","","real_estate");
  $sql="SELECT amount FROM virtual_bank WHERE UserName='$UserName'";
 // $sql = "SELECT amount FROM virtual_bank where UserName='$UserName'"
  if(!($result = mysqli_query($con,$sql)))
    echo "sql error ";
$row = mysqli_fetch_array($result);

  $original = $row['amount'];
$updated = $original-$price;
if ($updated<0) {
  
  echo "<div class='properties-listing spacer'>
 <div class='spacer'> 
 <div class='panel panel-primary'>
 <div class= 'panel-heading' id='insertTitle'>
      <table width='100%' border='0'>
      <tr>
<td  align='center' <div class='panel panel-primary'>
<div class='panel-heading'>
  <td  align='center' <div class='panel panel-primary'>
<div class='panel-heading'>
<h1>Hello <?php echo $UserName ?></h1>
    <i> Dear User You cannot buy this real estate becuase you don't have" .$price  ."birr in your  virtual bank account </i>
    </div>
    </div>     

</div>
</div>
</div>
</div>";
}
else{
  echo "<div class='properties-listing spacer'>


 <div class='spacer'> 
 <div class='panel panel-primary'>
 <div class= 'panel-heading' id='insertTitle'>
      <table width='100%' border='0'>
      <tr>
<td  align='center' <div class='panel panel-primary'>
<div class='panel-heading'>
  <td  align='center' <div class='panel panel-primary'>
<div class='panel-heading'>
<h1>Hello <?php echo $UserName ?></h1>
    <i>Congradulation you have bought a new Real Estate And " .$price  ."amount is  decreased from virtual bank</i>
    </div>
    </div>     

</div>
</div>
</div>
</div>";
}
echo "the updated result is " .$updated;
$sql1="UPDATE virtual_bank SET amount='$updated' WHERE UserName='$UserName"
  ?>





</div>
</body>
</html>

