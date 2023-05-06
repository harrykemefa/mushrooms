   
<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';

 if(isset($_POST)) {
 	  $phone = ((isset($_POST['phone']) && !empty($_POST['phone']))?sanitize($_POST['phone']):'');
    $full_name = ((isset($_POST['full_name']) && !empty($_POST['full_name']))?sanitize($_POST['full_name']):'');
      $email = ((isset($_POST['email']) && !empty($_POST['email']))?sanitize($_POST['email']):'');
      $password = ((isset($_POST['password']) && !empty($_POST['password']))?sanitize($_POST['password']):'');
 	 
 	   $hood = ((isset($_POST['hood']) && !empty($_POST['hood']))?sanitize($_POST['hood']):'');
       $hood_finder = $db->query("SELECT id FROM location WHERE location = '$hood'");
       $hoodsql = mysqli_fetch_assoc($hood_finder);
       $hood = $hoodsql['id'];
 	   $bath = sanitize($_POST['bath']);
 	   $bed = sanitize($_POST['bed']);
      $space_type = sanitize($_POST['space_type']);
 	   $budget = ((isset($_POST['budget']) && !empty($_POST['budget']))?sanitize($_POST['budget']):'');
 	    $lead_move_in = ((isset($_POST['lead_move_in']) && !empty($_POST['lead_move_in']))?sanitize($_POST['lead_move_in']):'');
 	     $time = strtotime($lead_move_in);
        $new_date = date('Y-m-d', $time);
        $user_type = ((isset($_POST['user_type']) && !empty($_POST['user_type']))?sanitize($_POST['user_type']):'');
 	  


    
 

$query = $db->query("SELECT * FROM renters WHERE email = '$email'");
$user_info = mysqli_fetch_assoc($query);
$userCount = mysqli_num_rows($query);

$user_check_query = $db->query("SELECT * FROM users WHERE email = '$email'");
$user_check_info = mysqli_fetch_assoc($user_check_query);
$user_check_Count = mysqli_num_rows($user_check_query);

 
   if ($userCount < 1) {
    
      
		 $InsertSql = $db->query("INSERT INTO renters (user_type, phone, full_name, email, location, address, bath, bed, space_type, budget, move_date) VALUES ('$user_type', '$phone', '$full_name', '$email', '$hood', '', '$bath', '$bed', '$space_type', '$budget', '$new_date')");


        if($user_check_Count < 1){

           $hashed = password_hash($password,PASSWORD_DEFAULT);
    $updatesql = "INSERT INTO users (email,first_name,last_name,password,fb_user_id,fb_access_token) VALUES ('$email','$full_name','','$hashed','','')";
         $db->query($updatesql);

    // get updated info
    $updated_query = $db->query("SELECT * FROM users WHERE email = '$email'");
    $userInfo = mysqli_fetch_assoc($updated_query);
        // save info to php session
    $_SESSION['is_logged_in'] = true;
    $_SESSION['user_info'] = $userInfo;

        }else{

            // get updated info
    $updated_query = $db->query("SELECT * FROM users WHERE email = '$email'");
    $userInfo = mysqli_fetch_assoc($updated_query);
        // save info to php session
    $_SESSION['is_logged_in'] = true;
    $_SESSION['user_info'] = $userInfo;




        }
        


    


     if ($InsertSql) {
            // DO A FURTHER CHECK ON THE INPUT INTO THE DATABASE BEFORE YOU SET THE STATUS TO OK

     $status = 'ok';
    $message = '';
     }else{

         $status = 'fail';
        $message = "Oops Something went wrong!";
     }
         

        // DO A FURTHER CHECK ON THE INPUT INTO THE DATABASE BEFORE YOU SET THE STATUS TO OK   

	
          
          }else{

 		 $status = 'fail';
 		 $message = "Oops the email address is already associated with an apartment";
       
 	}


 	echo json_encode(
		array(
			'status' => $status,
			'message' => $message
		)
	);

}