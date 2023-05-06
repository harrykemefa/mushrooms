   
<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';

 if(isset($_POST)) {
 	  $renter_id = ((isset($_POST['renter_id']) && !empty($_POST['renter_id']))?sanitize($_POST['renter_id']):'');
       $tour_type = ((isset($_POST['tour_type_input']) && !empty($_POST['tour_type_input']))?sanitize($_POST['tour_type_input']):'');
 	    $lead_move_in = ((isset($_POST['lead_move_in']) && !empty($_POST['lead_move_in']))?sanitize($_POST['lead_move_in']):'');
 	     $time = strtotime($lead_move_in);
        $new_date = date('Y-m-d', $time);
 	  


    
 

$query = $db->query("SELECT * FROM tour_request WHERE user_id = $logged_user_id AND renter_id = $renter_id ");
$user_info = mysqli_fetch_assoc($query);
$userCount = mysqli_num_rows($query);

   if ($userCount < 1) {
    

		 $InsertSql = $db->query("INSERT INTO tour_request (user_id, renter_id, tour_date, tour_type) VALUES ('$logged_user_id', '$renter_id', '$new_date', '$tour_type')");

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
 		 $message = "Oops! you've already sent a request for this apartment.";
       
 	}


 	echo json_encode(
		array(
			'status' => $status,
			'message' => $message
		)
	);

}