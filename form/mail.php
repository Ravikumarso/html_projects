<?php
     if(isset($_POST['btnContact']))
	   {
		$name = $_POST['name'];
		$cname = $_POST['cname'];
		$email = $_POST['email'];
       $phone = $_POST['phone'];
       
     
        $to_email = 'priyanka.codingclave@gmail.com';
        $subject = 'Digeemed - Test';
        $message = "Name: ".$name."\r\nCompany Name: ".$cname."\r\nEmail: ".$email."\r\nPhone: ".$phone;
        $headers = 'From:no-reply@codingclave.org' . "\r\n" .'BCC:priyanka.codingclave@gmail.com,shashankbrh@gmail.com'; 

			
			
		   $retval = mail ($to_email,$subject,$message,$headers);
		   if($retval==true)
		   {
			  echo "Thank you for contacting us. We will respond to you as soon as possible.";
		   }
			else
		   {
			  echo "failed";
		   }
	   }

 ?>