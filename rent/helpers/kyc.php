   
<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
 $phone = sanitize($_POST['phone']);
 $password = sanitize($_POST['password']);
 $password = trim($password);
 $email = sanitize($_POST['email']);
 $email = trim($email);

 	
 

    if(strlen($password) < 6) {
 	
 	$status = 'fail';
		$message = 'the password must be more than 5digits!';

 	
 	}elseif(strlen($phone) < 10){

 		$status = 'fail';
		$message = 'Please insert the correct phone number';

 	}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
 		
 		$status = 'fail';
		$message = 'You must enter a valid email';

      }else{

 		$status = 'ok';
		$message = '';
		


 	}


 	
 

	echo json_encode(
		array(
			'status' => $status,
			'message' => $message
		)
	);