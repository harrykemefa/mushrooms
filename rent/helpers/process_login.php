   
<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/mates/core/init.php';
 $email = sanitize($_POST['email']);
 $email = trim($email);
 $password = sanitize($_POST['password']);
 $password = trim($password);

$query = $db->query("SELECT * FROM users WHERE email = '$email'");
$user_info = mysqli_fetch_assoc($query);
$userCount = mysqli_num_rows($query);

   if ($userCount < 1) {
 	   $status = 'fail';
		$message = 'This email doesnt exist in our database';
          
          }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
 		
 		$status = 'fail';
		$message = 'You must enter a valid email';

      }elseif(!password_verify($password, $user_info['password'])) {
 	
 	$status = 'fail';
		$message = 'the password does not match our records!';

 	
 	}else{

 		$status = 'ok';
		$message = '';

		if ( isset( $_SESSION['fb_user_info']['id'] ) ) { // if we have facebook id save it
			$userid = $userInfo['id'];
			$fbuser_id = $_SESSION['fb_user_info']['id'];
			$db->query("UPDATE users SET fb_user_id = '$fbuser_id' WHERE id = '$userid'");
		}

		if ( isset( $_SESSION['fb_access_token'] ) ) { // if we have an access token save it
			$userid = $userInfo['id'];
			$fb_accesstoken = $_SESSION['fb_access_token'];
			$db->query("UPDATE users SET fb_access_token = '$fb_accesstoken' WHERE id = '$userid'");
		}


		// get updated info
		$updated_query = $db->query("SELECT * FROM users WHERE email = '$email'");
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