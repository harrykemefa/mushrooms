   
<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';

 if(isset($_POST)) {
 	
 	   $hood = ((isset($_POST['hood']) && !empty($_POST['hood']))?sanitize($_POST['hood']):'');
 	 
	$query = $db->query("SELECT * FROM seekers WHERE email = '$Logged_user_email'");
    $user_info = mysqli_fetch_assoc($query);
    $userCount = mysqli_num_rows($query);	


   if ($userCount > 0) {

   
		 $UpdateSql =  $db->query("UPDATE seekers SET hood = '$hood' WHERE email = '$Logged_user_email'"); 
	

     if ($UpdateSql) {
 
     $status = 'ok';
    $message = '';
     }else{

         $status = 'fail';
        $message = "Oops Something went wrong!";
     }
         

        // DO A FURTHER CHECK ON THE INPUT INTO THE DATABASE BEFORE YOU SET THE STATUS TO OK   

	
          
          }else{

 		 $status = 'fail';
 		 $message = "Oops Something went wrong!";
       
 	}


 	echo json_encode(
		array(
			'status' => $status,
			'message' => $message
		)
	);

}