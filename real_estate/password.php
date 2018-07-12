<?php
      include "SendingMail/classes/class.phpmailer.php";
      $mail=new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPDebug=1;
      $mail->SMTPAuth=true;
      $mail->SMTPSecure='ssl';
      $mail->Host="smtp.gmail.com";
      $mail->Port=465;
      $mail->IsHTML(true);
      $mail->Username="gizachewsoft@gmail.com";
      $mail->Password="R210692SOE";
      $mail->SetFrom("gizachewsoft@gmail.com");
      $mail->Subject="Password Reset";
      $random = rand(11111111, 99999999);
      $mail->Body="Your password has been changed to : <b> ".$random . "</b>";
      $email = $_POST['email'];
      $mail->AddAddress($email);
    $con = @mysql_connect("localhost","root","");
    if (!$con)
	  {
		die('Could not connect: ' . mysql_error());
	  }
	mysql_select_db("re", $con);

    $email_check = mysql_query("SELECT * FROM customer_reg WHERE Email = '".$email."'");
	$count = mysql_num_rows($email_check);
	if($count!=0)
	{
		if(!$mail->Send())
      {
      	echo "Mailer Error:".$mail->ErrorInfo;
      }
      else
      {
      	$new_password = $random;
		$email_password = $new_password;
		mysql_query("UPDATE customer_reg SET Password = '".$new_password."' where Email='".$email."'");
      	echo "<script type='text/javascript'>
					alert('Your password has been successfully changed. Please check your email.');
					window.location.href='index.php';
			  </script>";
      }
	}
	else
	{
		echo "<script type='text/javascript'>
					alert('This email is not registered.');
					window.location.href='index.php';
			  </script>";
	}

      
      
?>