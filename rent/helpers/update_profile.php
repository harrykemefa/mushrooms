   
<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/mates/core/init.php';

 if(isset($_POST)) {
 	  $budget = ((isset($_POST['budget']) && !empty($_POST['budget']))?sanitize($_POST['budget']):'');
 	   $bio = ((isset($_POST['bio']) && !empty($_POST['bio']))?sanitize($_POST['bio']):'');
 	   $gender_type = ((isset($_POST['gender_type']) && !empty($_POST['gender_type']))?sanitize($_POST['gender_type']):'');
 	   $smoke_type = sanitize($_POST['smoke_type']);
 	   $pet_type = sanitize($_POST['pet_type']);
 	   $profession_type = ((isset($_POST['profession_type']) && !empty($_POST['profession_type']))?sanitize($_POST['profession_type']):'');
 	   $location_type = ((isset($_POST['location_type']) && !empty($_POST['location_type']))?sanitize($_POST['location_type']):'');
 	    $lead_move_in = ((isset($_POST['lead_move_in']) && !empty($_POST['lead_move_in']))?sanitize($_POST['lead_move_in']):'');
 	     $time = strtotime($lead_move_in);
        $new_date = date('Y-m-d', $time);
 	  
	$query = $db->query("SELECT * FROM flatmates WHERE user_id = $logged_user_id");
$user_info = mysqli_fetch_assoc($query);
$userCount = mysqli_num_rows($query);	

    $dbpath = ''; 
     //CHECKS FOR THE IMAGE FILE
         if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {

			 $photo = $_FILES['photo'];
             $name = $photo['name'];
             $nameArray = explode('.',$name);
             $fileName = current($nameArray);
             $fileExt =  end($nameArray);
             $tmpLoc = $photo['tmp_name'];
            $fileSize = $photo['size'];
            $uploadName = md5(microtime()).'.'.$fileExt;
            $uploadPath = BASEURL.'images/users/'.$uploadName;
            $dbpath = '/mates/images/users/'.$uploadName;


			}else{
              $dbpath = $user_info['profile_image'];
            }

    
 



   if ($userCount > 0) {

   
		 $UpdateSql =  $db->query("UPDATE flatmates SET gender = '$gender_type', profession = '$profession_type', bio = '$bio', profile_image = '$dbpath', location = '$location_type', budget = '$budget', move_date = '$new_date', pets = '$pet_type', smoking = '$smoke_type' WHERE user_id = $logged_user_id"); 
	

     if ($UpdateSql) {
            // DO A FURTHER CHECK ON THE INPUT INTO THE DATABASE BEFORE YOU SET THE STATUS TO OK
     if (!empty($_FILES)) {
          move_uploaded_file($tmpLoc, $uploadPath);
      }

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