<?php 

 ob_start();
  include 'includes/header.php';
  include 'includes/nav.php';

 

if (isset($_GET['edit'])) {
     $edit_id = (int)$_GET['edit'];
     $renterResults =  $db->query("SELECT * FROM extra WHERE renter_id = $edit_id");
 $renter = mysqli_fetch_assoc($renterResults);
      

}




   if (isset($_GET['add']) || isset($_GET['edit'])) {
   
    $description = ((isset($_POST['description']))?sanitize($_POST['description']) : '');
     $amenities = ((isset($_POST['amenities']) && $_POST['amenities'] != '')?$_POST['amenities']:'');
        $amenities = ((isset($_POST['amenities']) && $_POST['amenities'] != '')?implode(',', $_POST['amenities']):'');
   
    if (isset($_GET['edit'])) {
       $edit_id = (int)$_GET['edit'];
     $renterResults =  $db->query("SELECT * FROM extra WHERE renter_id = $edit_id");

   $renter = mysqli_fetch_assoc($renterResults);
  

   $description = ((isset($_POST['description']) && $_POST['description'] != '')?sanitize($_POST['description']) : $renter['description']);
$amenities = ((isset($_POST['amenities']) && $_POST['amenities'] != '')?$_POST['amenities']:$renter['amenities']);
 $amenities = ((isset($_POST['amenities']) && $_POST['amenities'] != '')?implode(',', $_POST['amenities']):$renter['amenities']);

         
  }
    $errors = array();
    if ($_POST) {
    
    
      //make sure required fields are not empty
      $required = array('amenities', 'description');
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
        $display = display_errors($errors);
        ?>
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

        	$renter_id = (int)$_GET['add'];
          
         $InsertSql = $db->query("INSERT INTO extra (renter_id, description, amenities) VALUES ('$renter_id', '$description', '$amenities')");
        }
       
        if (isset($_GET['edit'])) {
           $insertSql = "UPDATE extra SET description = '$description', amenities = '$amenities' WHERE renter_id ='$edit_id'";
            $db->query($insertSql);
        }


        ?>
        <script type="text/javascript">
           $('document').ready(function() {
             
             
           window.location.href = "dashboard.php";
         
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
						<h2><?=((isset($_GET['edit']))?'Update':'Add'); ?>  Extra Info</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					 <div id="error" >
                  <span id="errors" style="background-color: red;"></span>
                   </div>
					<form method="post" enctype="multipart/form-data" action="extra.php?<?=((isset($_GET['edit']))?'edit='.$_GET['edit'] : 'add='.$_GET['add']);?>">
						<div class="row">
				
							<div class="col-12 col-md-7 form__content">
								<div class="row">
								

									<div class="col-12">
										<textarea id="text" name="description" class="form__textarea" placeholder="More Info about this apartment"><?=$description;?></textarea>
									</div>
									
								

								
								
						

                              	

								

								

								
							<br><br>
								
								</div>
							</div>

						  <?php
              $checked = explode(',', $amenities);
            $sql3 = "SELECT * FROM amenities";
            $tagg = $db->query($sql3);
            $count = 0;
        ?>

        <div class="container">
  <ul class="ks-cboxtags">

  	<?php   while($tagged = mysqli_fetch_assoc($tagg)):  ?>
  		<?php
  			$count++;
  		?>
    <li><input type="checkbox"  value="<?=$tagged['id']?>" name="amenities[]" id="check<?=$count;?>" class="check" <?=(in_array($tagged['id'], $checked))?'checked': '';?>><label for="check<?=$count;?>"><?=$tagged['type']?></label></li>
    <?php endwhile; ?>
  </ul>

</div>
        	
							<div class="col-12">
								<div class="row">
									

									<div class="col-12">
										<button type="submit" class="form__btn">publish</button>
										<a href="add.php?edit=<?=((isset($_GET['edit']))?$edit_id:$_GET['add']); ?> " class="form__btn">Go back</a>
										
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