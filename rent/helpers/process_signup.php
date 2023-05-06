   
<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/mates/core/init.php';
  $first_name = sanitize($_POST['first_name']);
  $last_name = sanitize($_POST['last_name']);
 $reg_email = sanitize($_POST['reg_email']);
 $reg_email = trim($reg_email);
 $reg_password = sanitize($_POST['reg_password']);
 $reg_password = trim($reg_password);

$query = $db->query("SELECT * FROM users WHERE email = '$reg_email'");
$user_info = mysqli_fetch_assoc($query);
$userCount = mysqli_num_rows($query);

   if ($userCount > 0) {
 	   $status = 'fail';
		$message = 'This email already exist in our database';
          
          }elseif(!filter_var($reg_email,FILTER_VALIDATE_EMAIL)) {
 		
 		$status = 'fail';
		$message = 'You must enter a valid email';

      }elseif(strlen($reg_password) < 6) {
 	
 	$status = 'fail';
		$message = 'the password must be more than 5digits!';

 	
 	}else{

 		$status = 'ok';
		$message = '';

	      $hashed = password_hash($reg_password,PASSWORD_DEFAULT);
		$updatesql = "INSERT INTO users (email,first_name,last_name,password,fb_user_id,fb_access_token) VALUES ('$reg_email','$first_name','$last_name','$hashed','','')";
         $db->query($updatesql);

		// get updated info
		$updated_query = $db->query("SELECT * FROM users WHERE email = '$reg_email'");
		$userInfo = mysqli_fetch_assoc($updated_query);

 		// save info to php session
		$_SESSION['is_logged_in'] = true;
		$_SESSION['user_info'] = $userInfo;
		


 	}


 	
 

	echo json_encode(
		array(
			'status' => $status,
			'message' => $message
		)
	);