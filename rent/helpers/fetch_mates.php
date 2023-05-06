 <?php 

  if(isset($_POST["action"])) : 
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
  $place_filter = explode("','", $logged_seeker['hood']);
$place_filter = implode("','", $place_filter);
  $query = "SELECT * FROM flatmates WHERE user_id != $logged_user_id AND location IN($place_filter) ORDER BY RAND() LIMIT 14";




  $featured = $db->query($query);
  $total = mysqli_num_rows($featured);

 ?>



         <?php if($total > 0): ?>               

         				  <?php while($user_info = mysqli_fetch_assoc($featured)): 
                               $user_id = $user_info['user_id'];
                               $user_query = $db->query("SELECT first_name FROM users WHERE id = $user_id");
                               $user_data = mysqli_fetch_assoc($user_query);
                                $hood_id =  $user_info['location'];

                                $hoodQuery = $db->query("SELECT id, location, parent FROM location WHERE id = $hood_id");
                                 $hood_info = mysqli_fetch_assoc($hoodQuery);
                                 $Lparent_id =  $hood_info['parent'];
                                  $Lparent_Q = $db->query("SELECT location FROM location WHERE id = $Lparent_id");
                                   $Lparent = mysqli_fetch_assoc($Lparent_Q);
                            ?>

<div class="roommate_card">
   <div class="roommate_heart nooklyn_square_heart add_roomie" id="<?=$user_info['user_id'];?>">
    <i class="nookons-heart"></i>
  </div>

  <div class="roommate_heart nooklyn_square_heart remove_roomie" id="<?=$user_info['user_id'];?>" style="display: none">
    <i class="nookons-heart-fill"></i>
  </div>

  
<a title="<?=$user_data['first_name'];?>" href="/mates/profile/index.php?id=<?=$user_info['user_id'];?>" target="_blank">
  <div class="roommate_image photo-ratio" style="background-image: url('<?=$user_info['profile_image'];?>');">
     
  </div>
</a>
 
  <div class="roommate-card-stub">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h6 class="standard-type"><a title="<?=$user_data['first_name'];?>" href="../profile/index.php?id=<?=$user_info['user_id'];?>" target="_blank"><?=$user_data['first_name'];?></a></h6>
        </div>
        <div class="col-sm-12">
          <h6 style="text-transform: capitalize;"> <i class="nookons-neighborhood"></i> <?=$hood_info['location'];?></h6>
        </div>
      </div>
      <div class="row">
         <?php
          $whatsapp_message = 'Hey '.$user_data['first_name'].", We matched on Mushrooms and I'm interested in sharing a room with you.";
      ?>
         
        <div class="col-sm-12">
      <a href="https://wa.me/234<?=$user_info['phone'];?>?text=<?=$whatsapp_message;?>" target="_blank">  <h6 class="">  Message  <i class="nookons-messages float-left"></i> 
     </h6> </a>
        </div>
        </div>
      <div class="row">
        <div class="col-6">
          <i class="nookons-money"></i><?=money($user_info['budget']);?>
        </div>
        <div class="col-6">
          <i class="nookons-human"></i><?=$user_info['gender'];?>
        </div>
        </div>
        
        
      
    </div>
  </div>
</div>

        <?php endwhile; ?> 
        <?php else: ?>
    <div class="empty-request">
                     <img class="img-fluid empty-state" src="../images/brain.png"> 
                    <h6 class="standard-type nklyn-yellow">Hey <?=$user_data['first_name']?>, There are no flatmates <br>available in your area yet. <br/>
                    </h6>
                    <p class="empty-text">Check back here later. </p>
                    
                     
                    <!--   <label for="tab2" class="button btn-rounded btn-yellow-black reset_filters" id="">Reset <i class="nookons-reply"></i></label> -->
                  </div>

    <?php endif; ?>

  <br><br><br><br><br>

  <?php endif; ?>


