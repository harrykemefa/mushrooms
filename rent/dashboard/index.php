<?php
  // load up global things
   require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';

if (!user_is_logged_in()) {
   user_login_error_redirect();
}elseif($logged_seeker_count < 1){
    echo '<script> window.location.assign("/rent/get-started");</script>';
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Mushrooms - Explore Apartments in Lagos</title>

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
<link rel="stylesheet" media="all" href="../css/application-e303fe9381305f668a289716fb4afc97b544e02fa090a84e3661e967ba8fd7ed.css">


    <!-- Twitter Cards -->
<meta name="twitter:card" content="">
<meta name="twitter:site" content="">
<meta name="twitter:creator" content="">
<meta name="twitter:title" content=">Find your next apartment from it's current tenant in lagos - Mushrooms">
<meta name="twitter:description" content="Search Lagos apartments for rent, no agency fee. Connect with flatmates and rent rooms in lagos">
<meta name="twitter:image0:src" content="">
<meta name="twitter:image1:src" content="">
<meta name="twitter:image2:src" content="">
<meta name="twitter:image3:src" content="">
    <!-- Facebook Open Graph -->
<meta property="og:title" content="lagos Apartments, Rooms, Roommates, and Sublets - Mushrooms">
<meta property="og:site_name" content="Mushrooms">
<meta property="og:url" content="https://mushrooms.ng/">
<meta property="og:image" content="../images/homepage-april-2017-bw@2x.jpg">
<meta property="og:description" content="Search Lagos apartments for rent, no agency fee. Connect with flatmates and rent rooms in lagos.">
<meta property="og:type" content="">

    <!-- Fav Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="../images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/mushrooms-icon.png">
<link rel="mask-icon" href="images/mushrooms-icon.png" color="#111111">


    <script src="../js/application-9fef5a1e0193ed8e146cff8d2d010422128e6f00c5824343ad0973a12027572b.js"></script>
    <script src="../js/application-5c79625404f508a477f7.js"></script>
    <link rel="stylesheet" media="screen" href="../css/application-3d2c695f.css">
     <link rel="stylesheet" type="text/css" href="../css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="../css/tabstyles.css" />
    <link rel="stylesheet" type="text/css" href="../css/media.css">
       <link rel="stylesheet"type="text/css" href="../css/explore.css">
       <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <style type="text/css">
.spend_more{
  color: #d9534f;
  font-weight: bold;
  text-transform: capitalize;
}

.save_more{
  color: #5cb85c;
  font-weight: bold;
  text-transform: capitalize;
}
      div.flex-listing {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    width: 20%;
    max-width: 50%;
    padding: 8px;
}


div.err{
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 9999;
}

div.nooklyn_listing_square_fee ul{
  left: -18px;
  position: relative;
}

div.nooklyn_listing_square_fee ul, div.nooklyn_listing_square_fee ul li{
  display: inline-block;
}

div.nooklyn_listing_square_fee ul, div.nooklyn_listing_square_fee ul li i{
    color: #bd0fe0;
    font-size: 12px;
    font-weight: 600;
  }
div.nooklyn_listing_square_fee {
  width: auto !important;
}


      @media screen and (max-width: 480px){
     
      div.flex-listing {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    width: 100%;
    max-width: 100%;
    padding: 8px;
}

    }
    </style>
  </head>
  <body>
<?php include 'includes/nav.php'; ?>





    <div id="react-flash"></div>
    <div class="err"></div>
   
<div class="col-sm-12 nklyn-listing-search-bar view">
      <div class=" flex-row">
        <div class=" flex-col">
          <div class=" flex-row">
            <div class=" flex-row">
              <div class="searchbar-col flex-col">
                <button type="button" class="button btn-rounded btn-black-white btn-search-bar-size" style="height: 32.78px;">
                  <div class="listing-show-back-btn" style="position: relative; right: 3px;"><a href="/mates"><i class="nookons-human" style="position: relative; font-size: 11px; padding-right: 3px;"></i>Find Flatmates</a></div>
                </button>
              </div>
              <div class="vertical-divider" style="position: relative; display: block; bottom: 3px;">
                
              </div></div>

              <div class=" flex-row">
                <div class="searchbar-col flex-col">
                <div class="lead_schedule">
                                    <a class="button btn-yellow-black btn-rounded btn-search-bar-size text-left mb-2 d-flex" href="location.php" style="justify-content: space-between;"><span class="d-flex">Change My Location</span><i class="nookons-current-location-fill d-flex ml-2" id="nklyn-listing-tour-img" style="line-height: 1.7; font-weight: 500;"></i>
                </a>
              </div>
            </div>
            <div class="searchbar-col flex-col"></div>
            <div class="searchbar-col flex-col">
          
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
<div class="tabs tabs-style-underline">
     <div class="content-wrap">

        <?php 
        include 'includes/section1.php'; 
        include 'includes/section2.php'; 
        include 'includes/section3.php';
        ?>
    
           

          </div><!-- /content -->

     <div class="dark-pagination-area text-center">
          <nav>
            <ul>
              <li><a href="#section-underline-1" class="icon"><i class="nookons-home"></i> <span>Renters</span></a></li>

                 <li><a href="#section-underline-2" class="icon"> <i class="nookons-human"></i> <span>Mates</span></a></li>
              <li><a href="#section-underline-3" class="icon favorite_apt"> <i class="nookons-heart"></i> <span>Saved Homes</span></a></li>
            
            

            </ul>
          </nav>
        
        </div>

  </div>


 <?php 

 include 'includes/footer.php'; 

 ?>