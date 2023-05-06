<?php 
 // $title = 'Dejx - Dashboard';
 ob_start();
  include 'includes/header.php';
  include 'includes/nav.php';

  $dbpath = '';

 $saved_image = '';
  
    $edit_id = (int)$admin_id;
   $user_results = $db->query("SELECT * FROM admin_users WHERE id = '$edit_id'");

   $user = mysqli_fetch_assoc($user_results);
       //DELETE AND UPDATE THE IMAGE OF THE CURRENT SLIDE
        if(isset($_GET['delete_image'])){
        $image_url = $_SERVER['DOCUMENT_ROOT'].$user['profile_image'];echo $image_url;
         unlink($image_url);
         $db->query("UPDATE admin_users SET profile_image = '' WHERE id = '$edit_id'");
          header('Location: settings.php');
       }
   
        $saved_image = (($user['profile_image']!= '')?$user['profile_image']:'');
        $dbpath = $saved_image;


      $email = ((isset($_POST['email']) )?sanitize($_POST['email']):$user['email']);
      $full_name = ((isset($_POST['full_name']) )?sanitize($_POST['full_name']):$user['full_name']);

    if ($_POST) {
     
      $errors= array();
      $required = array('email');
        foreach($required as $field){
       if ($_POST[$field] == '') {
         $errors[] = 'Your email required';
         break;
       }
     }

     //Check if email already exists
    $checkmail = "SELECT * FROM admin_users WHERE email = '$email' ";
    $checkmailQ = $db->query($checkmail);

       /*  if(mysqli_num_rows($checkmailQ) > 0) {
             $errors[] = ' This User already exist please try another email';
       

             }

             */

         if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors[] = 'You Must enter a valid email address';
          
          }
          
    
    //CHECKS FOR THE MULTIPLE IMAGE FILE UPLOAD
   if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {

       $photo = $_FILES['photo'];
        $name = $photo['name'];
        $nameArray = explode('.',$name);
        $fileName = current($nameArray);
        $fileExt =  end($nameArray);
        $tmpLoc = $photo['tmp_name'];
        $fileSize = $photo['size'];
        $allowed = array('png','jpg','JPG','PNG','jpeg','gif');
        $uploadName = md5(microtime()).'.'.$fileExt;
        $uploadPath = BASEURL.'images/team/'.$uploadName;
        $dbpath = '/rent/images/team/'.$uploadName;
        if (!in_array($fileExt, $allowed)) {
           $errors[] .= 'The file extension must be a png, jpg, jpeg, or gif.';
         }

         if ($fileSize > 3000000) {
           $errors[] .= 'The file size must be under 3mb';
         } 


      } 

     
     if (!empty($errors)) {
        //Display the errors
        $display = display_errors($errors);?>
        <script type="text/javascript">
            jQuery('document').ready(function() {
                // body...
                jQuery("#error").css("display", "block");
                jQuery('#errors').html('<?php echo $display;?>');
            });
        </script>
     <?php
     }else{
      //upload file and insert into database
     if(file_exists($_FILES['photo']['tmp_name']) || is_uploaded_file($_FILES['photo']['tmp_name'])){
          move_uploaded_file($tmpLoc, $uploadPath);
      }
      
   
   
   
      
        $insertSql = "UPDATE admin_users SET profile_image = '$dbpath', email = '$email', full_name = '$full_name' WHERE id ='$edit_id'";
     

      $db->query($insertSql);
      header('Location: settings.php');
     }
    }




?>

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Update Profile</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					 <div id="errors">
                  <span id="errors"></span>
                   </div>
					<form method="post" enctype="multipart/form-data" action="settings.php">
						<div class="row">
							<div class="col-12 col-md-5 form__cover">
								<div class="row">
									<div class="col-12 col-sm-6 col-md-12">
										
                           <?php if($saved_image != ''): ?>
          <div class="saved-image"><img src="<?=$saved_image;?>" alt="saved image"><br>
           <a href="settings.php?delete_image=1&edit=<?=$edit_id;?>" class="text-danger">Delete Image</a>

          </div>
                   <?php else:?>
										<div class="form__img">
											<label for="form__img-upload">Upload cover (270 x 400)</label>
											<input id="form__img-upload" name="photo" type="file" accept=".png, .jpg, .jpeg" required="">
											<img id="form__img" src="#" alt=" ">
										</div>
					<?php endif; ?>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-7 form__content">
								<div class="row">
									<div class="col-12">
										<input type="text" class="form__input"  placeholder="Email" name="email" id="email" value="<?=$admin_email;?>">
									</div>

										<div class="col-12">
										<input type="text" class="form__input"  placeholder="Fullname" name="full_name" id="full_name" value="<?=$admin_data['full_name'];?>">
									</div>

									
									

																	<!--
									<div class="col-12">
										<div class="form__gallery">
											<label id="gallery1" for="form__gallery-upload">Upload photos</label>
											<input data-name="#gallery1" id="form__gallery-upload" name="gallery" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg" multiple>
										</div>
									</div>
								-->
								</div>
							</div>

							<!--
							<div class="col-12">
								<ul class="form__radio">
									<li>
										<span>Item type:</span>
									</li>
									<li>
										<input id="type1" type="radio" name="type" checked>
										<label for="type1">Movie</label>
									</li>
									<li>
										<input id="type2" type="radio" name="type">
										<label for="type2">TV Series</label>
									</li>
								</ul>
							</div>
						-->
							
							<div class="col-12">
								<div class="row">
									<!--
									<div class="col-12">
										<div class="form__video">
											<label id="movie1" for="form__video-upload">Upload video</label>
											<input data-name="#movie1" id="form__video-upload" name="movie" class="form__video-upload" type="file" accept="video/mp4,video/x-m4v,video/*">
										</div>
									</div>
								-->

									<div class="col-12">
										<button type="submit" class="form__btn">Update</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- end form -->
			</div>
		</div>
	</main>


 <?php 
 include 'includes/footer.php';
 ?>