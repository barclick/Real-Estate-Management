
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
   $News=$_POST['txtNews'];
	$Date=date('y/m/d');
  $con=mysqli_connect("localhost","root","","real_estate");
	if(mysqli_connect_errno())
	    {
		echo('could not connect to database :'. mysqli_connect_errno());
	}
$sql = "insert into News_Master(News,NewsDate) 	values('".$News."','".$Date."')";
 if(!mysqli_query($con,$sql))
	      {
	      	die('ERROR:'. mysqli_error($con));
	      }
  echo "
<table>
       <tr>
    <td colspan='2'>
      <div class='alert alert-info'>
        <strong>Success</strong>, ews Inserted Succesfully!!!
      </div>
    </td>
    </tr>
    </table>  "; 	      mysqli_close($con);
	      ?>
</body>
</html>

