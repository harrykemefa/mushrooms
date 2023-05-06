
	
<?php 
include 'includes/header.php';
include 'includes/nav.php';

	// Change Password Logic
$hashed = $admin_data['password'];
 
 $old_password = ((isset($_POST['old_password']))?sanitize($_POST['old_password']) : '');
 $old_password = trim($old_password);

  $confirm = ((isset($_POST['confirm']))?sanitize($_POST['confirm']) : '');
 $confirm = trim($confirm);

  $admin_password = ((isset($_POST['admin_password']))?sanitize($_POST['admin_password']) : '');
 $admin_password = trim($admin_password);

if ($_POST) {



    $errors= array();
  

  
      $required = array('old_password','admin_password','confirm');
        foreach($required as $field){
       if ($_POST[$field] == '') {
         $errors[] = 'Oops all Fields are reqired';
         break;
       }
     }

      if (!password_verify($old_password, $hashed)) {
           $errors[] .= 'Oops the Old password does not Match our Records';
     
        }

      if($admin_password != $confirm) {
        $errors[] .= 'The new password and confirm password does not match!';
      }

          if (!empty($errors)) {
        //Display the errors
        $display = display_errors($errors);?>
        <script type="text/javascript">
            jQuery('document').ready(function() {
                // body...
                jQuery("#error").css("display", "block");
                jQuery('#errors').html('<?=$display;?>');
            });
        </script>
     <?php
     }else{

              $admin_id = $admin_data['id'];
               $hashed = password_hash($admin_password, PASSWORD_DEFAULT);
             
                $updateSql = "UPDATE admin_users SET password = '$hashed' WHERE id = '$admin_id'";
                  $db->query($updateSql);

                    ?>
                       <script type="text/javascript">
            jQuery('document').ready(function() {
               
                            jQuery('#old_password').val('');
                            jQuery('#admin_password').val('');
                            jQuery('#confirm').val('');
            });
        </script>

                    <?php
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
						<h2>Change Password</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					 <div id="errors">
                  <span id="errors"></span>
                   </div>
					<form method="post" action="changepassword.php">
						<div class="row">
					

							<div class="col-12 col-md-7 form__content">
								<div class="row">
									<div class="col-8">
										<input class="form__input"  placeholder="Enter Old Password" type="password" name="old_password" id="old_password" value="<?=$old_password;?>">
									</div>

									<div class="col-8">
										<input class="form__input"  placeholder="Enter New Password" type="password" name="admin_password" id="admin_password" value="<?=$admin_password;?>">
									</div>

									<div class="col-8">
										<input class="form__input"  placeholder="Confirm Password" type="password" name="confirm" id="confirm" value="<?=$confirm;?>">
									</div>

									

									
						
								</div>
							</div>

					
							
							<div class="col-12">
								<div class="row">
									
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
	<!-- end main content -->


 <?php 
 include 'includes/footer.php';
 ?>