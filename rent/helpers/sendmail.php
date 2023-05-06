
<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
  
	$reg_email = sanitize($_POST['reg_email']);

	     $to = $reg_email;
         $subject = 'Welcome to the Mushrooms Community';
         $message = 'Thanks for signing up, our team would be in touch with you soon'; 
         $headers = 'Mime-Version: 1.0' . '\r\n';
         $headers .= 'Content-type:text/html;charset=UTF-8' . '\r\n';
         $headers .= 'From:<Mushrooms.ng>' . '\r\n';

         if(@mail($to,$subject,$message,$headers))
  {
  	
  }
	

