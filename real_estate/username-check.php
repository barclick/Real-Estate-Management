<?php
  
  $host="localhost";
  $user="root";
  $pass="";
  $dbname="real_estate";
  
  $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  
  if($_POST) 
  {
      $name     = strip_tags($_POST['username']);
      
	  $stmt=$dbcon->prepare("SELECT UserName FROM customer_reg WHERE UserName=:username");
	  $stmt->execute(array(':username'=>$name));
	  $count=$stmt->rowCount();
	  	  
	  if($count==1)
	  {
		  echo "Sorry username already exist !!!";
	  }
	  else
	  {
	  }
  }
?>