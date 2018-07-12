<html>
<head>
    <link rel="stylesheet" href="css/registrationform.css" type="text/css">

  </head>
<body>
          <h1 id="Feature"> Featured Home  Available For Sale,Rent and Commercial </h1>

  <?php 
$con=mysqli_connect("localhost","root","","re");

// mysql_select_db("re");
 
$search_query = "SELECT * FROM reproperty where Status ='Accepted' and Property_for = 'Sell' order by Acc_Date DESC limit 3";
    
    $run_query = mysqli_query($con,$search_query);
while ($search_row=mysqli_fetch_array($run_query)){
    $post_name = $search_row['RE_Name'];
    $post_title ="Price:". $search_row['Price'];
    $post_image = $search_row['image'];
    $post_content = "Country:".substr($search_row['Country'],0,150);
     $Bedroom ="Number of Bedroom:". $search_row['Bedroom'];
       $Category ="Category of realestate:". $search_row['Category'];
        $Veiwdet ="View Details: ". $search_row['Category'];
echo "<a href='searchdisplay.php?get=full&id=".$search_row["RE_ID"]."'</a>";
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <body>
  <table  width="33.33%" align="left">
  <tr>
    <td width="14%" align="center">
<h2><?php echo $post_name; ?> Real Estate</h2>
<input type="image" src="images/<?php echo $post_image; ?>" width="200" height="150">

<!--<p data-placement="top" data-toggle="tooltip" title="<?php echo $post_name; ?> Real Estate
"><button class="btn btn-danger btn-xs" data-title="gg" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></p><p>-->
<p><?php echo $post_title; ?></p>
<p><?php echo $post_content; ?></p>
<p><?php echo$Bedroom; ?></p>
<p><?php echo  $Category; ?></p>
<h2 id="view"> View Details</h2>
<hr>
</table>
</body>
</head>
</html>
<?php 
   }
 ?>
           
<div align="left" class="readmore">
      <a href="seeall.php">See All</a>
    </div><!--close content_cream-->   
</body>
</html>

