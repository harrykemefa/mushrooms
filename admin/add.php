<?php 
 // $title = 'Dejx - Dashboard';
 ob_start();
  include 'includes/header.php';
  include 'includes/nav.php';

 

if (isset($_GET['edit'])) {
     $edit_id = (int)$_GET['edit'];
     $renterResults =  $db->query("SELECT * FROM renters WHERE id = $edit_id");
 $renter = mysqli_fetch_assoc($renterResults);
      

}

   if (isset($_GET['add']) || isset($_GET['edit'])) {
   
    $phone = ((isset($_POST['phone']))?sanitize($_POST['phone']) : '');
    $full_name = ((isset($_POST['full_name']))?sanitize($_POST['full_name']) : '');
    $email = ((isset($_POST['email']))?sanitize($_POST['email']) : '');
    $location = ((isset($_POST['location']))?sanitize($_POST['location']) : '');
     $budget = ((isset($_POST['budget']))?sanitize($_POST['budget']) : '');
       $bed = ((isset($_POST['bed']))?sanitize($_POST['bed']) : '');
          $bath = ((isset($_POST['bath']))?sanitize($_POST['bath']) : '');
        $space_type = ((isset($_POST['space_type']))?sanitize($_POST['space_type']) : '');
          $move_date = ((isset($_POST['move_date']))?sanitize($_POST['move_date']) : '');
    if (isset($_GET['edit'])) {
       $edit_id = (int)$_GET['edit'];
     $renterResults =  $db->query("SELECT * FROM renters WHERE id = $edit_id");

   $renter = mysqli_fetch_assoc($renterResults);
  

       $phone = ((isset($_POST['phone']) && $_POST['phone'] != '')?sanitize($_POST['phone']) : $renter['phone']);

      $full_name = ((isset($_POST['full_name']) && $_POST['full_name'] != '')?sanitize($_POST['full_name']) :  $renter['full_name']);

        $email = ((isset($_POST['email']) && $_POST['email'] != '')?sanitize($_POST['email']) : $renter['email']);

          $location = ((isset($_POST['location']) && $_POST['location'] != '')?sanitize($_POST['location']) :  $renter['location']);
            $budget = ((isset($_POST['budget']) && $_POST['budget'] != '')?sanitize($_POST['budget']) :  $renter['budget']);
            $bed = ((isset($_POST['bed']) && $_POST['bed'] != '')?sanitize($_POST['bed']) :  $renter['bed']);
             $bath = ((isset($_POST['bath']) && $_POST['bath'] != '')?sanitize($_POST['bath']) :  $renter['bath']);
             $space_type = ((isset($_POST['space_type']) && $_POST['space_type'] != '')?sanitize($_POST['space_type']) :  $renter['space_type']);
              $move_date = ((isset($_POST['move_date']) && $_POST['move_date'] != '')?sanitize($_POST['move_date']) :  $renter['move_date']);

              
    }
    $errors = array();
    if ($_POST) {
    
    
      //make sure required fields are not empty
      $required = array('phone', 'email', 'full_name', 'budget', 'bed', 'bath', 'space_type', 'move_date');
       foreach ($required as $f) {
        if (empty($_POST[$f])) {
         $errors[] = 'You must fill out all fields.';
         break;
        }
       }
 
           /**
           if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {
       
             $photo = $_FILES['photo'];
             $name = $photo['name'];
             $nameArray = explode('.',$name);
             $fileName = current($nameArray);
             $fileExt =  end($nameArray);
             $tmpLoc = $photo['tmp_name'];
            $fileSize = $photo['size'];
            $uploadName = md5(microtime()).'.'.$fileExt;
            $uploadPath = BASEURL.'images/movies/'.$uploadName;
            $dbpath = '/cinemax/images/movies/'.$uploadName;
           $allowed = array('png','jpg','JPG','PNG','jpeg','GIF','gif');

      
         
         if (!in_array($fileExt, $allowed)) {
           $errors[] .= 'The file extension must be a png, jpg, jpeg, or gif.';
         }
        if ($fileSize > 15000000) {
           $errors[] .= 'The file size must be under 15mb';
         } 
        
     } **/

       if (!empty($errors)) {
         //Display the errors
        $display = display_errors($errors);?>
       <script type="text/javascript">
            $('document').ready(function() {
                // body...
                $("#error").css("display", "block");
                $('#errors').html('you must fill out all fields');
            });
        </script>
     <?php
       }else{
       	    if (isset($_GET['add'])) {
          
         $InsertSql = $db->query("INSERT INTO renters (user_type, phone, full_name, email, location, address, bath, bed, space_type, budget, move_date) VALUES ('3', '$phone', '$full_name', '$email', '$location', '', '$bath', '$bed', '$space_type', '$budget', '$move_date')");
        }


        if (isset($_GET['edit'])) {
           $insertSql = "UPDATE renters SET phone = '$phone',full_name = '$full_name',email = '$email',location = '$location', address = '', bath = '$bath', bed = '$bed', space_type = '$space_type', budget = '$budget', move_date = '$move_date', status = 1 WHERE id ='$edit_id'";
            $db->query($insertSql);
        }
       
           ?>


        <script type="text/javascript">
           jQuery('document').ready(function() {
             
             
           window.location.href = "dashboard.php";
         
     });
        </script>
      }

     
    
    

        
      <?php

       }

   }
   

     

 ?>
	
<style type="text/css">
	select{
   background: rgba(210,201,255,0.04);
    width: 100%;
    color: #fff;
    padding:0 40px 0 20px;
   font-size: 16px;
    -webkit-border-radius: 6;
    border-radius: 6;
    border:none;
    outline: none !important;
    position: relative;
    height: 46px;
	}

	option{
		background:  #222;
	}
</style>
	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<?php if(isset($_GET['edit'])):?>
						<?php
							 $extraResults =  $db->query("SELECT * FROM extra WHERE renter_id = $edit_id");

                              $counter = mysqli_num_rows($extraResults);
						?>
					<?php endif; ?>
						<h2><?=((isset($_GET['edit']))?'Verify':'Add New'); ?>  Renter</h2>
						<?php if(isset($_GET['edit'])):?>
						<a href="extra.php?<?=($counter > 0)?'edit=' : 'add=';?><?=$edit_id?>" class="main__title-link">Exta Info</a>
					<?php endif; ?>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					 <div id="error">
                  <span id="errors" style="background-color: red;"></span>
                   </div>
					<form method="post" enctype="multipart/form-data" action="add.php?<?=((isset($_GET['edit']))?'edit='.$edit_id : 'add=1');?>">
						<div class="row">
				
							<div class="col-12 col-md-7 form__content">
								<div class="row">
									<div class="col-6">
										<input type="text" class="form__input" name="full_name" placeholder="Full Name" value="<?=$full_name;?>">
									</div>

									<div class="col-6">
										<input type="text" class="form__input" name="phone" placeholder="phone" value="<?=$phone;?>">
									</div>
									
									<div class="col-6">
										<input type="email" class="form__input"  name="email" placeholder="Email" value="<?=$email;?>">
									</div>

									<div class="col-6">
										<input type="tel" class="form__input"  name="budget" placeholder="Current Rent" value="<?=$budget;?>">
									</div>
										<div class="col-12 col-sm-6 col-lg-3">
										<input type="date" name="move_date" class="form__input" style="line-height: 46px;" placeholder="Move Date" value="<?=$move_date;?>">
									</div>
								
								
							<div class="col-6">
										<select class="js-example-basic" name="space_type" id="space_type" >
											<option value=""></option>
											<?php
												 $space_type_sql =  $db->query("SELECT * FROM space");
												

												while($space = mysqli_fetch_assoc($space_type_sql)):?>
											?>
											<option value="<?=$space['id']?>"<?=(($space_type == $space['id'])?' selected="selected"':'');  ?>><?=$space['type']?></option>
										<?php endwhile; ?>
											
										
											
											
											
											
											
											
										</select>
									</div>
                                     
								<?php
		                         $hoodQuery = $db->query("SELECT id, location, parent FROM location WHERE parent != 0");
		                         
                              ?>

                              	<div class="col-6">
										<select class="js-example-basic-single" name="location" id="location">
												<option value="" <?=(($location == '')?' selected="selected"':'');  ?>></option>
											<?php while($hood_info = mysqli_fetch_assoc($hoodQuery)): ?>
				
											<option value="<?=$hood_info['id'];?>"<?=(($location == $hood_info['id'])?' selected="selected"':'');  ?>><?=$hood_info['location'];?></option>
											<?php endwhile; ?>
										</select>
									</div>

									<div class="col-6">
										<select class="js-example-basic-single" name="bed" id="bed">
											<option value="" <?=(($bed == '')?' selected="selected"':'');  ?>>No of Beds</option>
											<option value="1"<?=(($bed == 1)?' selected="selected"':'');  ?>>1 bedroom</option>
											<option value="2"<?=(($bed == 2)?' selected="selected"':'');  ?>>2 bedroom</option>
											<option value="3"<?=(($bed == 3)?' selected="selected"':'');  ?>>3 bedroom</option>
											<option value="4"<?=(($bed == 4)?' selected="selected"':'');  ?>>4 bedroom</option>
											<option value="5"<?=(($bed == 5)?' selected="selected"':'');  ?>>5 bedroom</option>
											
										</select>
									</div>

											<div class="col-6">
										<select class="js-example-basic-single" name="bath" id="bath">
											<option value="" <?=(($bath == '')?' selected="selected"':'');  ?>>No of Baths</option>
											<option value="1"<?=(($bath == 1)?' selected="selected"':'');  ?>>1 Bath / toilet</option>
											<option value="2"<?=(($bath == 2)?' selected="selected"':'');  ?>>2 Bath / toilet</option>
											<option value="3"<?=(($bath == 3)?' selected="selected"':'');  ?>>3 Bath / toilet</option>
											<option value="4"<?=(($bath == 4)?' selected="selected"':'');  ?>>4 Bath / toilet</option>
											<option value="5"<?=(($bath == 5)?' selected="selected"':'');  ?>>5 Bath / toilet</option>
											
										</select>
									</div>

								
							<br><br>
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
										<button type="submit" class="form__btn">publish</button>
										<?php if(isset($_GET['edit'])):?>
										<button type="button" class="form__btn remove_renter" id="<?=$edit_id;?>">Delete</button>
									<?php endif; ?>
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
}
	?>

 <?php 
 include 'includes/footer.php';
 ?>