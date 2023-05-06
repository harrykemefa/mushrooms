  <?php if(isset($_POST["action"])) : ?>

 <?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
  $place_filter = explode("','", $logged_seeker['hood']);
$place_filter = implode("','", $place_filter);
$bed =  $logged_seeker['bed'];



  $query = "SELECT * FROM renters WHERE location IN($place_filter)";

   $query .=" ORDER BY move_date ASC";
     if (isset($_POST["commentNewCount"])) {
              $commentNewCount = $_POST['commentNewCount']; 
              $start = 0;
               $query .= " LIMIT $commentNewCount";
               }
 $rent_query = $db->query($query);
 $total = mysqli_num_rows($rent_query);
  ?>
  <?php if($total < 12):?>
  <style type="text/css">
     .load-div{
      display: none;
     }

  </style>
<?php endif; ?>
<?php if($total > 0): ?> 
   <div class="nooklyn_listing_square show_title nklyn-listing flex-listing" style="border: 1px solid rgb(48, 48, 48); background-color: rgb(16, 16, 16); margin-bottom: 5px; height: 370px;">
    <div class="nklyn-listing-ad">
      <div class="nklyn-pal-headline">No photos?</div>
      <div class="nklyn-pal-note">For the safety and privacy of tenants, we will never show photos of homes that are not yet vacant.<br>Message tenants to send you photos privately.
      </div>
    </div>
  </div>
  <h5 class="standard-type nklyn-white show_title">Apartments just for you</h5>
 <?php while($rent_info = mysqli_fetch_assoc($rent_query)): ?>
 	    <?php
         
  
          
           $space_id = $rent_info['space_type'];
             $user_type_id = $rent_info['user_type'];
              $type_Query = $db->query("SELECT type FROM user_type WHERE id = $user_type_id");
             $type_info = mysqli_fetch_assoc($type_Query);

            $space_Query = $db->query("SELECT type FROM space WHERE id = $space_id");
             $space_info = mysqli_fetch_assoc($space_Query);


       
           $hood_id =  $rent_info['location'];

            $hoodQuery = $db->query("SELECT id, location, parent FROM location WHERE id = $hood_id");
             $hood_info = mysqli_fetch_assoc($hoodQuery);

        ?>


<div id="listings_card_48288" class="nooklyn_listing_square nklyn-listing flex-listing">
<div>
  <a href="view.php?id=<?=$rent_info['id']?>">
      <div class="listing-card-img" style="background-image: url('../images/placeholder.jpeg');">
    
  </div>
  </a>
<a href="view.php?id=<?=$rent_info['id']?>">
  <div class="nooklyn_listing_tag">

     <div class="nooklyn_listing_square_room">
      <?=time_left($rent_info['move_date']);?> 
        </div>

    <div class="nooklyn_listing_square_fee"><?=($bed == $rent_info['bed'])?'<ul><li><i class="nookons-star-fill"></i></li><li><i class="nookons-star-fill"></i></li><li><i class="nookons-star-fill"></i></li></ul>':'<ul><li><i class="nookons-star-fill"></i></li><li><i class="nookons-star"></i></li></ul>'?></div> 
      </div>
  <div class="listing-card-stub container-fluid">
      <div class="row">
        <div class="col-4 text-left" style="font-size: 14px; font-weight: 600; border-right: 0px;">
       <?=money($rent_info['budget']);?>
      </div>
      <div class="col-8 text-right  <?=($rent_info['budget'] > $logged_seeker['budget'])? 'spend_more' : 'save_more';?>">
        <?php
              
              $remainder = $rent_info['budget'] - $logged_seeker['budget'];
                echo ($rent_info['budget'] > $logged_seeker['budget'])? 'Spend '. money($remainder) . '+' : 'Save '. money(abs($remainder));
                
               ?>
    
      </div>
    </div>
  </div>

      <div class="listing-card-stub container-fluid">
        <div class="row top-row">
          <div class="col-12" style="font-size: 14px;">
          <?=$space_info['type'];?>
        </div>
      </div>
    </div>
    <div class="listing-card-stub container-fluid">
      <div class="row top-row"><div class="col-6 text-left"> <?=$rent_info['bed'];?> bed<?=($rent_info['bed'] > 1) ? 's' : '';?>  <i class="nookons-bed"></i></div>
      <div class="col-6 text-left"><?=$rent_info['bath'];?> bath<?=($rent_info['bath'] > 1) ? 's' : '';?>   <i class="nookons-bath"></i></div>
      
  </div>
</div>

<div class="listing-card-stub container-fluid"><div class="row top-row">
  <div class="col-12 text-left"> <?=$hood_info['location'];?></div></div>
</div>
</a>
<div class="listing-card-stub container-fluid card-bottom-row-border">
  <div class="row top-row bottom-row" style="padding: 0px; cursor: pointer;">
    <div class="col-12 text-center add_list" id="<?=$rent_info['id'];?>" style="padding: 7px;"><div>
      <div>
  Join the Waitlist  <i class="nookons-heart" id="nklyn-listing-tour-img" style="color: rgb(255, 192, 58); font-weight: 500;"></i>
      </div>
    </div></div>

      <div class="col-12 text-center remove_list" id="<?=$rent_info['id'];?>" style="padding: 7px;display: none"><div>
       <div  style="">
     Remove from favorites   <i class="nookons-heart-fill" id="nklyn-listing-like-img"></i>
      </div>
    </div></div>

 
  </div></div></div></div>

        <?php endwhile; ?>

<?php else: ?>
    <div class="empty-request">
                     <img class="img-fluid empty-state" src="../images/brain.png"> 
                    <h6 class="standard-type nklyn-yellow">Hey <?=(user_is_logged_in())? $user_data['first_name'] : 'there';?> <i class="nookons-face-smile-fill"></i>, There are no renters in your preffered areas Yet.
                    </h6>
                    <p class="empty-text">Update your location to get better results. </p>
                  
                     <a class="button btn-rounded btn-white-black" href="location.php"> <i class="nookons-current-location-fill"></i> Change my Location</a>
                    
                  </div>

<?php endif; ?>
<br><br><br>

<?php endif; ?>