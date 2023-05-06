<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
 $receiver_id = sanitize($_POST['list_id']);
 $favorite_type = sanitize($_POST['type']);
  $query =  $db->query("SELECT * FROM apt_favorite WHERE sender_id = $logged_user_id AND receiver_id = $receiver_id ");
 $userCount = mysqli_num_rows($query);


  if ($userCount > 0) {
    
        $db->query("DELETE FROM apt_favorite WHERE sender_id = $logged_user_id AND receiver_id = $receiver_id ");

  	# code...
  	echo "true word";
  	  $status = 'ok';
  }else{
  	echo "Fuckup na";
  	 $status = 'fail';
  }