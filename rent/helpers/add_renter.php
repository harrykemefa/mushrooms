<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
 $receiver_id = sanitize($_POST['list_id']);
 $favorite_type = sanitize($_POST['type']);
  $query =  $db->query("SELECT id FROM apt_favorite WHERE sender_id = $logged_user_id AND receiver_id = $receiver_id");
  $email_query =  $db->query("SELECT email FROM renters WHERE id = $receiver_id");
  $email_info = mysqli_fetch_assoc($email_query);
  $email = $email_info['email'];
 $userCount = mysqli_num_rows($query);


  if ($userCount < 1) {
   
  	$db->query("INSERT INTO apt_favorite (sender_id,receiver_id,receiver_email,favorite_type) VALUES ('$logged_user_id','$receiver_id','$email','$favorite_type')");
  	# code...
  	
  	  $status = 'ok';
  }else{
  
  	 $status = 'fail';
  }


  echo json_encode(
    array(
      'status' => $status,
      
    )
  );


 