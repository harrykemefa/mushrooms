<?php
function display_errors($errors){

         $display = '<div class="alert ">
        <button class="close" data-dismiss="alert"><i class="nookons-close-circle-fill pull-right"></i></button>
        ';
   foreach ($errors as $error) {
   	  $display .= '<br>'.$error.'<br>';
   }
   $display .= '</div>';
   return $display;

}

function sanitize($dirty){
	return htmlentities($dirty,ENT_QUOTES,"UTF-8");
}

function money($number){
    return '&#8358;' .number_format($number);


}


// USER LOGIN CONTROLLERS
//The User_id Variable is coming from the login page
function user_login($user_id){
	// So we are  setting the session of Admin to the userid passed
	$_SESSION['user_info'] = $user_id;
	global $db;
	$date = date("Y-m-d H:i:s");
	$db->query("UPDATE users SET last_login = '$date' WHERE id = '$user_id'");
	//header('Location: try.php');
}

function user_is_logged_in(){
	if (isset($_SESSION['user_info']) && $_SESSION['user_info'] > 0) {
		return true;
	}
	return false;
}

function user_login_error_redirect($url = 'login.php'){
	echo '<script> window.location.assign("/rent/login.php");</script>';
	$_SESSION['error_flash'] = 'You must be logged in to access that page';

}

  /**
   * If user is logged in, redirect to homepage
   *
   * @param void
   *
   * @return boolean
   */

    function isLoggedIn() {
    if ( ( isset( $_SESSION['is_logged_in'] ) && $_SESSION['is_logged_in'] ) && ( isset( $_SESSION['user_info'] ) && $_SESSION['user_info'] ) ) { // check session variables, user is logged in
      return true;
    } else { // user is not logged in
      return false;
    }
  }

  function loggedInRedirect() {
    if ( isLoggedIn() ) { // user is logged in
      // send them to the home page
      header( 'location: /menu');
      $_SESSION['error_flash'] = 'login authenticated';
    }
  }








// USER LOGIN CONTROLLERS END

// ADMIN LOGIN CONTROLLERS
//The Admin_id Variable is coming from the login page
function login($admin_id){
	// So we are  setting the session of Admin to the userid passed
	$_SESSION['admin'] = $admin_id;
	global $db;
	$date = date("Y-m-d H:i:s");
	$db->query("UPDATE admin_users SET last_login = '$date' WHERE id = '$admin_id'");
//	echo '<script>window.location.assign("home.php");</script>';
	
}

function is_logged_in(){
	if (isset($_SESSION['admin']) && $_SESSION['admin'] > 0) {
		return true;
	}
	return false;
}

function login_error_redirect($url = 'index.php'){
	echo '<script> window.location.assign("/admin");</script>';
	$_SESSION['error_flash'] = 'You must be logged in to access that page';

}

function permission_error_redirect(){
	echo '<script> window.location.assign("/rent");</script>';
	$_SESSION['error_flash'] = 'You do not have permission to access that page';

}

function has_permission($permission = 'admin'){
	global $admin_data;
	$permissions = explode(',', $admin_data['permissions']);
	if (in_array($permission,$permissions,true)) {
		return true;
	}
	return false;
}

// ADMIN LOGIN CONTROLLERS
function pretty_date($date){
	return date("M d, Y", strtotime($date));
}



function get_category($child_id){
	global $db;
	$id = sanitize($child_id); 
	$sql =  "SELECT p.id AS 'pid', p.category AS 'parent', c.id AS 'cid', c.category AS 'child'
	  FROM categories c
	  INNER JOIN categories p
	  ON c.parent = p.id
	  WHERE c.id = '$id'";
	  $query = $db->query($sql);
	  $category = mysqli_fetch_assoc($query);
	  return $category;
}


function sizesToArray($string){
    $sizesArray = explode(',', $string);
    $returnArray = array();
    foreach ($sizesArray as $size) {
    	$s = explode(':', $size);
    	$returnArray[] = array('size' => $s[0], 'quantity' => $s[1]);
    }

    return $returnArray;
}


function sizesToString($sizes) {
	$sizeString = '';
	foreach ($sizes as $size ) {
	$sizeString .= $size['size'].':'.$size['quantity'].',';
	}

	$trimmed = rtrim($sizeString, ',');
	return $trimmed;
}

date_default_timezone_set('Africa/Lagos');

/*
function time_left($timestamp){
  $current_time = date('y-m-d');
  $current_time = date_create($current_time);
  $time_left = $timestamp;
  $time_left = date_create($timestamp);
  $time_difference = date_diff($current_time,$time_left);
  $months = $time_difference->format('%m months');
  $years = $time_difference->format('%y years');
  $days = $time_difference->format('%m days');

 

  return $years.' '. $months.' '.$days;

}

*/

function time_ago($timestamp){
   $time_ago = strtotime($timestamp);
   $current_time = time();
   $time_difference = $current_time - $time_ago;
   $seconds = $time_difference;
   $minutes = round($seconds / 60);   //Value 60 is seconds
   $hours = round($seconds / 3600);   // Value 3600 is 60 minutes
    $days = round($seconds / 86400);   // 86400 = 24 * 60 * 60
     $weeks = round($seconds / 604800);   // 7 * 24 * 60 * 60
      $months = round($seconds / 2629440);  
       $years = round($seconds / 31553280);  

       if ($seconds <= 60) {
       	 return "just now";
       }
       elseif($minutes <= 60){
       		if ($minutes == 1) {
       			return "one minute ago";
       		}else{
       	  return "$minutes minutes ago";
       }

       }

       elseif ($hours<=24) {
          if ($hours==1) {
          	return "an hour ago";
          }else{
          	 return "$hours hrs ago";
          }
       }

       elseif ($days <= 7) {
       if ($days==1) {
       	return "yesterday";
       }else{
       	 return "$days days ago";
       }
       }

       elseif ($weeks <= 4.3) {
       if ($weeks==1) {
       			return "a week ago";
       }else{
       	  return "$weeks weeks ago";
       }
       }

       elseif ($months <= 12) {
       		if ($months==1) {
       			return "a month ago";
       		}else{
       			return "$months months ago";
       		}
       }

       else{
       	 if ($years==1) {
       	 	return "a year ago";
       	 }else{
       	 	return "$years years ago";
       	 }
       }

}


function time_left($timestamp){
   $time_ago = strtotime($timestamp);
   $current_time = time();
   $time_difference = $time_ago -  $current_time;
   $seconds = $time_difference;
    $days = round($seconds / 86400);   // 86400 = 24 * 60 * 60
     $weeks = round($seconds / 604800);   // 7 * 24 * 60 * 60
      $months = round($seconds / 2629440);  
       $years = round($seconds / 31553280);  

      

       if($days <= 7) {
       if ($days==1) {
        return "1 day";
       }elseif($days <= 0){
          return 'Available Now';
       }else{
         return 'Vacant in '.$days." days";
       }
       }

       elseif ($weeks <= 4.3) {
       if ($weeks==1) {
            return "Vacant in 1 week";
       }else{
          return "Vacant in $weeks weeks";
       }
       }

       elseif ($months <= 12) {
          if ($months==1) {
            return "Vacant in 1 month";
          }else{
            return "Vacant in $months months";
          }
       }

       else{
         if ($years==1) {
          return "Vacant in 1 year";
         }else{
          return "Vacant in $years years";
         }
       }

}





