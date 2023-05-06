
<?php
  // load up global things
   require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';

if (!user_is_logged_in()) {
   user_login_error_redirect();
}

if (isset($_GET['id'])) {
 $profile_id = sanitize($_GET['id']);
  $flatQuery = $db->query("SELECT * FROM renters WHERE id = $profile_id");
  $flat_info = mysqli_fetch_assoc($flatQuery);

  $like_Query = $db->query("SELECT id FROM apt_favorite WHERE receiver_id = $profile_id");
  $like_count = mysqli_num_rows($like_Query);
  
   $space_id = $flat_info['space_type'];
  $space_Query = $db->query("SELECT type FROM space WHERE id = $space_id");
  $space_info = mysqli_fetch_assoc($space_Query);


       
$hood_id =  $flat_info['location'];

$hoodQuery = $db->query("SELECT id, location, parent FROM location WHERE id = $hood_id");
$hood_info = mysqli_fetch_assoc($hoodQuery);
$state_id = $hood_info['parent'];
$stateQuery = $db->query("SELECT location FROM location WHERE id = $state_id");
$state_info = mysqli_fetch_assoc($stateQuery);

$hood_apt = $db->query("SELECT id FROM renters WHERE location = $hood_id");
$hood_apt_count = mysqli_num_rows($hood_apt);
$hood_mates = $db->query("SELECT id FROM flatmates WHERE location = $hood_id");
$hood_mates_count = mysqli_num_rows($hood_mates);



$favorite_apt =  $db->query("SELECT sender_id FROM apt_favorite WHERE receiver_id = $profile_id");


    //   $user_query = $db->query("SELECT first_name FROM users WHERE email = $email");
    //  $user_details = mysqli_fetch_assoc($user_query);


}


?>

<!DOCTYPE html>
<html>
  <head>
    <title>View apartment</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta name="description" content="Search Lagos apartments for rent, no agency fee. Connect with flatmates and rent rooms in lagos">
<meta name="og:description" content="Search Lagos apartments for rent, no agency fee. Connect with flatmates and rent rooms in lagos">
<meta name="keywords" content="rent apartment in lagos, flatmates in lagos, roommates in lagos, No agent fee, rent in lagos, cheap houses in lagos">
<meta charset="UTF-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en">
<meta name="robots" content=" index, follow">
<meta name="theme-color" content="#000">
    <!-- Windows phone -->
<meta name="msapplication-navbutton-color" content="#000">
    <!-- ios Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#000">

<link rel="stylesheet" type="text/css" href="../css/57F33A142F587B9C7.css">
<link rel="stylesheet" href="../css/tiny-slider.css">
<link rel="stylesheet" href="../font/flaticon.css">
<link rel="stylesheet" media="all" href="../css/application-e303fe9381305f668a289716fb4afc97b544e02fa090a84e3661e967ba8fd7ed.css">




    <!-- Fav Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="../images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/mushrooms-icon.png">
<link rel="mask-icon" href="../images/mushrooms-icon.png" color="#111111">
<meta name="theme-color" content="#000">

    <script src="../js/application-9fef5a1e0193ed8e146cff8d2d010422128e6f00c5824343ad0973a12027572b.js"></script>
    <script src="../js/application-5c79625404f508a477f7.js"></script>
    <link rel="stylesheet" media="screen" href="../css/application-3d2c695f.css">
     <link rel="stylesheet" type="text/css" href="../css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="../css/tabstyles.css" />
    <link rel="stylesheet" type="text/css" href="../css/media.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark nklyn-navigation">
  <!--  Show this only on mobile to medium screens  -->
    <ul class="navbar-nav d-flex flex-row d-md-none">
      <li class="nav-item d-inline-flex">
        <a class="nav-link" data-toggle="popover" data-container="body" data-html="true" id="mobile-search-popover-link" href="#">
         <i class="nookons-search"></i>
</a>      </li>
    </ul>
  <a href="index.php">
    <img class="navbar-wordmark navbar-brand d-md-none" src="../images/logo.png" alt="Mushrooms logo">
</a>  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--  Use flexbox utility classes to change how the child elements are justified  -->
  <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-block">
        <a class="nav-link" data-toggle="popover" data-container="body" data-html="true" id="search-popover-click" href="#">
         <i class="nookons-search"></i> Browse <i class="nookons-chevron-down"></i>
</a>      </li>
<!--
      <li class="nav-item d-none d-sm-block">
        <a class="nav-link" data-toggle="popover" data-container="body" data-html="true" id="explore-popover-click" href="#">
         <i class="nookons-map"></i> Explore <i class="nookons-chevron-down"></i>
</a>      </li>
-->
    </ul>
    <!--   Show this only md screens and up   -->
    <a href="index.php">
      <img class="navbar-wordmark navbar-brand d-none d-md-block" src="../images/logo.png" alt="Mushrooms logo">
</a>       <?php if (user_is_logged_in()): ?>
      <div class="ml-auto">
    <ul class="navbar-nav nklynbar-nav">
        <li class="nav-item">
          <a class="nav-link"  href="#">
     <div class="nav-agent-name d-none d-lg-inline-flex ml-1">  <?=$user_data['first_name'];?></div>
</a>        </li>
         <div class="vertical-divider d-none d-md-inline-block"></div>
   <!--     <li class='nav-item'><a class="nav-link" href="/conversations"><i class="nookons-messages-fill "></i></a></li> -->
       <!-- <li class='nav-item'><a class="nav-link" href="/conversations"><i class="nookons-messages-fill "></i></a></li>-->
        <li class="dropdown agent-dropdown nav-item">
  <a href="#" class="nav-link" data-toggle="dropdown"> <span class="d-lg-none meta-x">Menu</span> <i class="nookons-settings-fill meta-x"></i></a>
   <a href="/menu" class="nav-link meta-link"> <span class="d-lg-none">Dashboard</span> <i class="nookons-home"></i></a>
      <a href="#" class="nav-link meta-link" id="logout-button"> <span class="d-lg-none" >Log out</span> <i class="nookons-log-out"></i></a>
  <ul class="dropdown-menu nklynbar-nav-dark dropdown-menu-right">
       <li class="dropdown-item">
      <a href="/menu">
        <i class="nookons nookons-home float-right"></i>
        Dashboard
</a>    </li>
     
    <li class="dropdown-item">
      <a id="logout-button"  href="#">
        <i class="nookons-log-out float-right"></i>
        Logout
</a>    </li>
  </ul>
</li>

    </ul>
  </div>
<?php else: ?>
       <ul class="navbar-nav">
     <li class="nav-item d-none d-sm-block">
        <div class="button btn-black-yellow-login btn-rounded login"  >Log in</div>
         
        </li>
       <li class="nav-item d-none d-sm-block">
         <div class="button btn-black-yellow-signup btn-rounded register">Sign Up</div>
        </li>
        <li class="nav-item d-block d-sm-none">
          <a class="nav-link login">Login</a>
        </li>
        <li class="nav-item d-block d-sm-none">
          <a class="nav-link register">Create Account</a>
        </li>
    </ul>
<?php endif; ?>
  </div>
</nav>


<div id="search-content" class="d-none">
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <a href="#">
          <img class="img-fluid mx-auto" src="../images/listing-24955abcff0277f7f80c1d6b129663b8b789a1a4745d1bfbe101c0a46898942a.png" alt="Listing">
          Apartments
</a>      </div>
      <div class="col-4">
        <a href="#">
        <img class="img-fluid mx-auto" src="../images/rooms-c7345d41634ec4f688cc89b41caa64f2dd6dcf65378dd8178305eb751c8f2cf4.png" alt="Rooms">
        Rooms
</a>      </div>
      <div class="col-4">
        <a href="/mates">
        <img class="img-fluid mx-auto" src="../images/agents-4c3b7c6517b9f95f49bb000649270ae8773da7bb581a2ca30c927b539d02f8a8.png" alt="Roommates" target="_blank">
        Roommates
</a>      </div>
    </div>
    <hr>
  
 <br>
  </div>
</div>



    
    <div id="react-flash"></div>
     <div class="err"></div>
        

  <!-- Apartments -->
  <div id="" >
    <div id="" ><div>
      <div class="col-sm-12 nklyn-listing-search-bar view">
      <div class=" flex-row">
        <div class=" flex-col">
          <div class=" flex-row">
            <div class=" flex-row">
              <div class="searchbar-col flex-col">
                <button type="button" class="button btn-rounded btn-black-white btn-search-bar-size" style="height: 32.78px;">
                  <div class="listing-show-back-btn" style="position: relative; right: 3px;"><a href="index.php"><i class="nookons-chevron-left" style="position: relative; font-size: 11px; padding-right: 3px;"></i>Back</a></div>
                </button>
              </div>
              <div class="vertical-divider" style="position: relative; display: block; bottom: 3px;">
                
              </div></div>

              <div class=" flex-row">
                <div class="searchbar-col flex-col">
                <div class="lead_schedule">
                    <?php
          $whatsapp_message = 'Hey '.$flat_info['full_name'].", I'm interested in your apartment you posted on Mushrooms, can i see a video tour of the place?";
      ?>
                <a class="button btn-yellow-black btn-rounded btn-search-bar-size text-left mb-2 d-flex" href="https://wa.me/234<?=$flat_info['phone'];?>?text=<?=$whatsapp_message;?>" style="justify-content: space-between;"><span class="d-flex">Message Tenant</span><i class="nookons-messages d-flex ml-2" id="nklyn-listing-tour-img" style="line-height: 1.7; font-weight: 500;"></i>
                </a>
              </div>
            </div>
            <div class="searchbar-col flex-col"></div>
            <div class="searchbar-col flex-col">
              <div class="listing-like">
              <div class="button btn-transparent btn-block btn-rounded btn-search-bar-size" id="listing_card_6727">
                <div>

                  <div><a href="#" class="unlike-button btn-transparent"><div class="flex-row" style="justify-content: center;">
                  <div class="flex-col" style="padding: 2px;"><i class="nookons-heart nooklyn_square_heart"></i></div><div class="flex-col"><?=$like_count;?> Likes</div></div></a>
                </div>
              </div>
            </div>
          </div>
        </div>

<!--
    <div class="searchbar-col flex-col">
      <div role="button" tabindex="0" id="copy-url-button-clipboard" data-original-title="Copied" data-clipboard-text="https://mushrooms.ng/">
      <div class="button btn-transparent btn-block btn-rounded btn-block btn-search-bar-size">Copy URL</div></div></div>
-->
      <div class="searchbar-col flex-col"></div>
    </div>
  </div>
</div>
</div>
</div>

      <div class="listing-show-container">
        <div class="" id="nooklyn_listings_index_container">
        <div class="listings-col"><div style="height: 794px;"><div class="listing-show-container"><div class="listing-show-content-side" style="position: relative; overflow-y: scroll;"><div style="position: relative; height: 0px; transform: scale(0.5, 0); transform-origin: center top; transition: all 0.3s ease-in-out 0s;"></div>
  <!--
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel"><ol class="carousel-indicators"><li class="" data-target="#carousel-example-generic" data-slide-to="0"></li><li class="active" data-target="#carousel-example-generic" data-slide-to="1"></li><li class="" data-target="#carousel-example-generic" data-slide-to="2"></li></ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="d-block w-100" src="images/img1.jpg" alt="6aa58091-569a-4f18-b105-016217109f7c"></div>
            <div class="carousel-item "><img class="d-block w-100" src="images/img2.jpg" alt="435fda7d-8dd6-42e6-8472-055c4c0c9d9c"></div>
            <div class="carousel-item"><img class="d-block w-100" src="images/img3.jpg" alt=""></div>

      
          </div><a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>

        -->

          <div class="container-fluid"><div class="row"><div class="col-sm-8 nklyn-listing-about-area">
            <div id="" class="paint-layer default-fade-end">
              <div class="listing-details-area">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="details-title"><?=money($flat_info['budget']);?>/ year</span>
                  <button class="button btn-rounded btn-transparent details-button m-0 show_date"><?=time_left($flat_info['move_date']);?></button></div>
                  <div class="d-flex">
                    <div class="flex-fill"> <i class="flaticon-bedroom"></i> <?=$flat_info['bed'];?> Bedroom<?=($flat_info['bed'] > 1) ? 's' : '';?></div>
                    <div class="flex-fill border-left"><i class="flaticon-bathroom"></i>&nbsp; <?=$flat_info['bath'];?>  Bathroom<?=($flat_info['bath'] > 1) ? 's' : '';?> </div>
                  </div>
                  <div class="d-flex align-items-center">
                 <?=$space_info['type'];?>&nbsp; <i class="nookons-home"></i>
                </div>
                </div>
              </div>
      <?php
           $extraResults =  $db->query("SELECT * FROM extra WHERE renter_id = $profile_id");
          $extra = mysqli_fetch_assoc($extraResults);
          $extra_count = mysqli_num_rows($extraResults);
      ?>
                    <div id="" class="paint-layer default-fade-end">
                <h5>About the Place</h5>
                <p><?=($extra_count > 0)?$extra['description']:'There is no description for this listing yet.'?></p><hr>
              </div>
              <div id="" class="paint-layer default-fade-end">
                <h5>Amenities</h5>
                <?php if($extra_count > 0):?>
                <div class="amenities">
                    <?php
                         $amenities = explode(',',$extra['amenities']);

                            foreach($amenities as $amenity) :?>
                                <?php
                                  
                             $amenityQuery = $db->query("SELECT type, icon FROM amenities WHERE id = $amenity");

                               $amenity_info = mysqli_fetch_assoc($amenityQuery);
                              ?>

         <div class="amenities-item"><i class="<?=$amenity_info['icon'];?>"></i>  <?=$amenity_info['type'];?>

         </div>
       <?php endforeach; ?>
</div>
<?php else: ?>
   <div class="amenities-item"> No amenities available for this listing.</div>
<?php endif; ?>
</div>

<!--
<div id="" class="paint-layer default-fade-end"><hr><h5>Lease Details</h5><div class="lease-details-card"><div class="row no-gutters"><div class="col-6"><div class="lease-details-label">Pet Policy</div><div class="lease-details-value">Pets Upon Approval</div></div><div class="col-6"><div class="lease-details-label">Utilities Included</div><div class="lease-details-value">None</div></div></div>
<div class="row no-gutters">
  <div class="col-6"><div class="lease-details-label pt-3">Move In Costs</div><div class="lease-details-value">First Month, Security</div></div></div></div></div>


 <div class="price-history">
  <hr><h5>Price History</h5>
  <div class="responsive-table" style="padding: 0px 10px;">
    <table class="table nklyn-table nklyn-table-dark">
      <thead><tr><th>Price</th><th>Date</th><th>Change</th></tr>
      </thead>
      <tbody><tr class="text-center"><td>3,125</td><td>November 2, 2021</td><td> - 125</td></tr>
    </table>
  </div>
</div>
-->
<hr>
  <?php
  $count_interest =  mysqli_num_rows($favorite_apt);
  ?>
  <?php if($count_interest > 0): ?>
<h5>Interested Apartment seekers</h5>
<ul class="list-unstyled list-inline">

<?php while($fav_id =  mysqli_fetch_assoc($favorite_apt)): ?>
  <?php
  $sender_id = $fav_id['sender_id'];
  $sender_query =  $db->query("SELECT first_name FROM users WHERE id = $sender_id");
  $fav_name =  mysqli_fetch_assoc($sender_query)
  ?>
  <li class="interested-mate-item list-inline-item"><a  href="#"><i class="nookons-human"></i> <h6><?=$fav_name['first_name'];?></h6></a></li>
<?php endwhile; ?>

</ul>

<?php endif; ?>
</div>

<div class="col-sm-4" style="right: 0px;">
  <div class="nklyn-listing-contact-area">
    <div class="lead_schedule">
      <a class="button btn-yellow-black btn-rounded btn-search-bar-size text-left mb-2 d-flex add_list" style="justify-content: space-between;" id="<?=$profile_id;?>">
        <span class="d-flex">Save  apartment</span><i class="nookons-heart d-flex ml-2" id="nklyn-listing-tour-img" style="line-height: 1.7; font-weight: 500;"></i>
      </a>
      <a class="button btn-white-black btn-rounded btn-search-bar-size text-left mb-2 d-flex remove_list" style="display: none !important; justify-content: space-between;" id="<?=$profile_id;?>">
        <span class="d-flex"> Remove from favorites </span><i class="nookons-heart-fill d-flex ml-2" id="nklyn-listing-tour-img" style="line-height: 1.7; font-weight: 500;"></i>
      </a>
    </div>
 

     <div class="row no-gutters">
      <div class="col-6">
        <div class="listing-like">
        <div class="button btn-transparent btn-block btn-rounded btn-search-bar-size" id="listing_card_6727"><div>
          <div>
              <?php
          $whatsapp_message = 'Hey '.$flat_info['full_name'].", I'm interested in your apartment you posted on Mushrooms, can i see a video tour of the place?";
      ?>
            <a href="https://wa.me/234<?=$flat_info['phone'];?>?text=<?=$whatsapp_message;?>" class="unlike-button btn-transparent"><div class="flex-row" style="justify-content: center;"><div class="flex-col" style="padding: 2px;"><i class="nookons-messages"></i>
          </div><div class="flex-col"> &nbsp;Message Tenant</div>
        </div></a>
      </div>
    </div>
  </div>
</div>
</div>

<div class="col-6">
  <a href="tel:<?=$flat_info['phone'];?>">
      <div role="menu" class="button btn-transparent btn-block btn-rounded btn-search-bar-size"> <i class="nookons-phone" id="nklyn-listing-share-img"></i> &nbsp;Call Tenant
  </div>
  </a>

</div>
</div>
<hr>
<div id="" class="paint-layer default-fade-end">
  <h5>Tenant</h5>
    <a href="#"><?=$flat_info['full_name'];?></a></h3>
   
  </div>
  </div>
</div>
</div>
</div>
<hr>
<div class="neighborhood-jumbotron"><h5 class="neighborhood-title">the Neighborhood</h5>
  <!--
  <div class="neighborhood-img" style="background-image: url(../images/guide.jpg);">
    
  </div>
-->

  <h3 class="neighborhood-text"><?=$hood_info['location'];?>, <?=$state_info['location'];?></h3><p></p>


  <div class="neighborhood-info"><?=$hood_apt_count;?> apartments •  <?=$hood_mates_count;?> roommates 
 </div>
 <!--
 <a class="button btn-rounded btn-transparent neighborhood-button" href="/neighborhoods/windsor-terrace-brooklyn-ny">See the rest of the neighborhood<i class="nookons-chevron-right pl-3"></i>
 </a>
-->

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container-fluid">
  <div id="action_call" class="row" style="display: none">
     <div class="col-6">
      <a class="button btn-yellow-black btn-rounded btn-search-bar-size text-left mb-2 d-flex" href="https://wa.me/234<?=$flat_info['phone'];?>?text=<?=$whatsapp_message;?>" style="justify-content: space-between;"><span class="d-flex">Message Tenant</span><i class="nookons-messages d-flex ml-2" id="nklyn-listing-tour-img" style="line-height: 1.7; font-weight: 500;"></i>
          </a>
   </div>           
     <div class="col-6">       
    <a href="tel:<?=$flat_info['phone'];?>" class="button btn-white-black btn-block btn-rounded btn-search-bar-size">
       <i class="nookons-phone" id="nklyn-listing-share-img"></i> &nbsp;Call Tenant
  </a>
  
  </div>

</div>
</div>


 <?php 

 include 'includes/footer.php'; 

 ?>