<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
 ?>

<?php if(user_is_logged_in()) : ?>
 <?php

 $fav_query =  $db->query("SELECT * FROM apt_favorite WHERE sender_id = $logged_user_id ORDER BY id DESC");
 $fav_total = mysqli_num_rows($fav_query);
 $bed =  $logged_seeker['bed'];
 ?>

   <?php if($fav_total > 0): ?>   
 <?php while($fav_info = mysqli_fetch_assoc($fav_query)): ?>
 <?php
          $user_data_id = $fav_info['receiver_id'];
            $rent_query = $db->query("SELECT * FROM renters WHERE id = $user_data_id");
           $rent_data = mysqli_fetch_assoc($rent_query);
            $space_id = $rent_data['space_type'];
            $space_Query = $db->query("SELECT type FROM space WHERE id = $space_id");
             $space_info = mysqli_fetch_assoc($space_Query);
           $hood_id =  $rent_data['location'];

            $hoodQuery = $db->query("SELECT id, location, parent FROM location WHERE id = $hood_id");
             $hood_info = mysqli_fetch_assoc($hoodQuery);
          ?>

  
<div id="listings_card_48288" class="nooklyn_listing_square nklyn-listing flex-listing">
 <a href="view.php?id=<?=$rent_data['id']?>">
  <div class="listing-card-img" style="background-image: url(../images/placeholder.jpeg);">
  
</div>
</a>
<div><a href="view.php?id=<?=$rent_data['id']?>">
  <div class="nooklyn_listing_tag">

 
     <div class="nooklyn_listing_square_room">
      <?=time_left($rent_data['move_date']);?> 
        </div>
         <div class="nooklyn_listing_square_fee"><?=($bed == $rent_data['bed'])?'<ul><li><i class="nookons-star-fill"></i></li><li><i class="nookons-star-fill"></i></li><li><i class="nookons-star-fill"></i></li></ul>':'<ul><li><i class="nookons-star-fill"></i></li><li><i class="nookons-star"></i></li></ul>'?></div> 
      </div><div class="listing-card-stub container-fluid">
      <div class="row">
        <div class="col-4 text-left" style="font-size: 14px; font-weight: 600; border-right: 0px;">
       <?=money($rent_data['budget']);?>
      </div>
      <div class="col-8 text-right" style="color: rgb(156, 156, 156);"></div></div></div>

      <div class="listing-card-stub container-fluid">
        <div class="row top-row">
          <div class="col-12" style="font-size: 14px;">
          <?=$space_info['type'];?>
        </div>
      </div>
    </div>
   <div class="listing-card-stub container-fluid">
      <div class="row top-row"><div class="col-6 text-left"> <?=$rent_data['bed'];?> bed<?=($rent_data['bed'] > 1) ? 's' : '';?>  <i class="nookons-bed"></i></div>
      <div class="col-6 text-left"><?=$rent_data['bath'];?> bath<?=($rent_data['bath'] > 1) ? 's' : '';?>   <i class="nookons-bath"></i></div>
      
  </div>
</div>

<div class="listing-card-stub container-fluid"><div class="row top-row">
  <div class="col-12 text-left"> <?=$hood_info['location'];?></div></div>
</div></a>
<div class="listing-card-stub container-fluid card-bottom-row-border">
  <div class="row top-row bottom-row" style="padding: 0px; cursor: pointer;">

  <div class="col-2 text-center remove_list" id="<?=$rent_data['id'];?>" style="padding: 7px;"><div>
       <div  style="">
        <i class="nookons-heart-fill" id="nklyn-listing-like-img"></i>
      </div>
    </div></div>
  <div class="col-4 text-center">
    <a class="" href="tel:<?=$rent_data['phone'];?>" style="color: #ffc03a !important;">  <i class="nookons-phone float-right" id="nklyn-listing-like-img"  style="color: rgb(255, 192, 58); font-weight: 500;"></i>
      Call  </a>
  
  </div>
    <div class="col-6 text-center" style="padding: 7px 15px; border: 0px;">
      <?php
          $whatsapp_message = 'Hey '.$rent_data['full_name'].", I'm interested in your apartment you posted on Mushrooms, can i see some photos?";
      ?>
      <a href="https://wa.me/234<?=$rent_data['phone'];?>?text=<?=$whatsapp_message;?>" target="_blank">
        <i class="nookons-messages float-right" id="nklyn-listing-like-img"  style="color: rgb(255, 192, 58); font-weight: 500;"></i>
      Message 
      </a>
    </div>
  </div></div>
  </div>
</div>
 <?php endwhile; ?>

   <?php else: ?>

   <div class="empty-request">
                     <img class="img-fluid empty-state" src="../images/brain.png"> 
                    <h6 class="standard-type nklyn-yellow">Hey  <?=$user_data['first_name'];?>, It's pretty quiet over here,<br> Don't you think?
                    </h6>
                   
                    
                  
                    
                     
                     <!--  <label for="tab2" class="button btn-rounded btn-yellow-black reset_filters" id="">Reset <i class="nookons-reply"></i></label> -->
                  </div>
   <?php endif; ?>
   <br><br><br>


   <?php endif; ?>
  
