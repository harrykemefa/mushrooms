
<?php
  // load up global things
   require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';

  if ( isset( $_GET['state'] ) && FB_APP_STATE == $_GET['state'] ) { // coming from facebook
    // try and log the user in with $_GET vars from facebook 
    $fbLogin = tryAndLoginWithFacebook( $_GET );
  }


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Find your next apartment from it's current tenant in lagos - Mushrooms</title>

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

<link rel="stylesheet" type="text/css" href="css/57F33A142F587B9C7.css">
<link rel="stylesheet" href="css/tiny-slider.css">
<link rel="stylesheet" media="all" href="css/application-e303fe9381305f668a289716fb4afc97b544e02fa090a84e3661e967ba8fd7ed.css">


    <!-- Twitter Cards -->
<meta property="twitter:account_id" content="">
<meta name="twitter:card" content="">
<meta name="twitter:site" content="">
<meta name="twitter:creator" content="">
<meta name="twitter:title" content="Mushrooms - Make home renting super easy">
<meta name="twitter:description" content="Search Lagos apartments for rent, no agency fee. Take first look at exclusive apartments in lagos">
<meta name="twitter:image0:src" content="">
<meta name="twitter:image1:src" content="">
<meta name="twitter:image2:src" content="">
<meta name="twitter:image3:src" content="">
    <!-- Facebook Open Graph -->
<meta property="og:title" content="Mushrooms - Make home renting super easy">
<meta property="og:site_name" content="Mushrooms">
<meta property="og:url" content="https://mushrooms.ng/">
<meta property="og:image" content="images/homepage-april-2017-bw@2x.jpg">
<meta property="og:description" content="Search Lagos apartments for rent, no agency fee. Take first look at exclusive apartments in lagos">
<meta property="og:type" content="">

    <!-- Fav Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/mushrooms-icon.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="images/mushrooms-icon.png" color="#111111">
<meta name="msapplication-TileColor" content="#ffc03a">
<meta name="theme-color" content="#000">

  <script src="js/application-9fef5a1e0193ed8e146cff8d2d010422128e6f00c5824343ad0973a12027572b.js"></script>
    <script src="js/application-5c79625404f508a477f7.js"></script>
 
      <script src="js/application-6829e2e37ba9f3ff24d26400f7e6b55e6747a112dbbfb082a52d96b1da2ee766.js"></script>
   
    <link rel="stylesheet" media="screen" href="css/application-3d2c695f.css">
    <link rel="stylesheet" media="screen" href="css/media.css">
  </head>
  <body>
<?php include 'includes/nav.php'; ?>


<!--
<div id="explore-content" class="d-none">
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <a href="/coconuts">
          <img class="img-fluid mx-auto" src="images/lifestyle-ab47b3c91f3261181e34a6d2948ab979bef34afae700ee7f203a128ed0e56378.png" alt="Lifestyle">
          Coconuts
</a>      </div>
      <div class="col-4">
        <a href="#">
        <img class="img-fluid mx-auto" src="images/neighborhoods-2a480d3970f1f602b0f2ace2a4d3ada8ee317f17fc6fbe08c0b01e6e53791bf4.png" alt="Neighborhoods">
        NYC Guides
</a>      </div>
      <div class="col-4">
        <a href="#">
        <img class="img-fluid mx-auto" src="images/food-ic-febfff6631a4899b49bc932697b34610202ea8237ceaac40354d1187a4b7c274.png" alt="Food ic">
        Places
</a>      </div>
    </div>
  </div>
</div>

-->


<script type="text/javascript">
  /*
  $('.agent-dropdown').on('click', function(){
    $("#matrix-popover-link").popover('hide');
  });
  $('#explore-popover-click').on('click', function(){
    $("#search-popover-click").popover('hide');
  });
  $('#search-popover-click').on('click', function(){
    $("#explore-popover-click").popover('hide');
  });
  $('#logout-button').on('click', function(){
    localStorage.clear();
  })

  */
</script>
    
    <div id="react-flash"></div>
        

  <!-- Apartments -->
  <div id="" >
    <div id="" ><div>
      <div class="col-sm-12 nklyn-listing-search-bar">
      <div class=" flex-row"><div class=" flex-col"><div class=" flex-row"><div class=" flex-row"><div class="searchbar-col flex-col"><button type="button" class="button btn-rounded btn-black-white btn-search-bar-size" style="height: 32.78px;"><div class="listing-show-back-btn" style="position: relative; right: 3px;"><i class="nookons-chevron-left" style="position: relative; font-size: 11px; padding-right: 3px;"></i>Back</div></button></div><div class="vertical-divider" style="position: relative; display: block; bottom: 3px;"></div></div><div class=" flex-row"><div class="searchbar-col flex-col"><div class="lead_schedule"><div class="button btn-yellow-black btn-rounded btn-search-bar-size text-left mb-2 d-flex " style="justify-content: space-between;"><span class="d-flex">Request a tour</span><i class="nookons-arrow-right d-flex ml-2" id="nklyn-listing-tour-img" style="line-height: 1.7; font-weight: 500;"></i></div></div></div><div class="searchbar-col flex-col"></div><div class="searchbar-col flex-col"><div class="listing-like"><div class="button btn-transparent btn-block btn-rounded btn-search-bar-size" id="listing_card_6727"><div><div><a href="#" class="unlike-button btn-transparent"><div class="flex-row" style="justify-content: center;"><div class="flex-col" style="padding: 2px;"><i class="nookons-heart nooklyn_square_heart"></i></div><div class="flex-col">13 Likes</div></div></a></div></div></div></div></div><div class="searchbar-col flex-col"><div><div><a class="button btn-transparent btn-rounded btn-search-bar-size text-left mb-2 d-flex" href="/listings/67938/apply?sales_agent=14789-Rachel-Skumanich" style="justify-content: space-between;"><span class="d-flex">Apply</span><img alt="apply" src="//a00.nook.land/packs/media/svg/listing_apply-d21feb63.svg" class="d-flex ml-2" style="height: 16px;"></a></div></div></div><div class="searchbar-col flex-col"><div role="button" tabindex="0" id="copy-url-button-clipboard" data-original-title="Copied" data-clipboard-text="https://nooklyn.com/listings/1901-10th-ave-brooklyn-ny-11215-usa-4d-windsor-terrace"><div class="button btn-transparent btn-block btn-rounded btn-block btn-search-bar-size">Copy URL</div></div></div><div class="searchbar-col flex-col"></div></div></div></div><div class=" flex-col" style="visibility: hidden; position: fixed; width: 0px; height: 0px;"><div class=" flex-row"><div class="searchbar-col flex-col"><button type="button" class="button btn-rounded btn-black-white btn-search-bar-size" style="height: 32.78px;">Summary</button></div><div class="searchbar-col flex-col"><input name="price" type="button" class="button btn-rounded btn-search-bar-size btn-transparent-gray" value="Price"></div><div class="searchbar-col flex-col"><input name="hood" type="button" class="button btn-rounded btn-transparent-gray btn-search-bar-size" value="Neighborhoods"></div><div class="searchbar-col flex-col"><input name="bed" type="button" class="button btn-rounded btn-transparent-gray btn-search-bar-size" value="Beds"></div><div class="searchbar-col flex-col"><input name="subwayStops" type="button" class="button btn-rounded btn-transparent-gray btn-search-bar-size" value="Subway"></div><div class="searchbar-col flex-col"><input name="more" type="button" class="button btn-rounded btn-transparent-gray btn-search-bar-size" value="More filters ..."></div><div class="searchbar-col flex-col"><input name="noFeeOnly" type="button" class="button btn-rounded btn-transparent-gray btn-search-bar-size" value="No Fee Only"></div><div class="searchbar-col flex-col"><input name="sortResultsBy" type="button" class="button btn-rounded btn-transparent-gray btn-search-bar-size" value="Sort Results By"></div><div class="searchbar-col flex-col"><input type="button" class="button btn-rounded btn-transparent btn-search-bar-size" value="Reset"></div><div></div></div></div></div></div><div class="listing-show-container">
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

          <div class="container-fluid"><div class="row"><div class="col-sm-8 nklyn-listing-about-area"><div id="" class="paint-layer default-fade-end"><div class="listing-details-area"><div class="d-flex justify-content-between align-items-center"><span class="details-title">$3,125/month</span><button class="button btn-rounded btn-transparent details-button m-0">No Fee</button></div><div class="d-flex"><div class="flex-fill">2 Beds</div><div class="flex-fill border-left">1 Baths</div></div><div class="d-flex align-items-center">Windsor Terrace</div></div></div><div id="" class="paint-layer default-fade-end"><h5>About the Place</h5><p>2 Bed / 1 Bath <a href="/buildings/26210">at 1901 10th Ave - Unit: 4D</a> in&nbsp;<a href="/neighborhoods/windsor-terrace-brooklyn-ny">Windsor Terrace</a>,&nbsp;<a href="/regions/brooklyn">Brooklyn</a>.&nbsp;Pets Upon Approval. Nearby subway stations include:&nbsp;<a href="/subway_stops/F25">15 St - Prospect Park (F, G).</a>&nbsp;Introducing 1901 10th Avenue, Windsor Terrace's newest boutique luxury residence. Meticulously crafted with condo finishes, light, space and detail are in abundance. The residences include in-unit laundry, custom kitchen countertops &amp; cabinetry, balcony or terrace, oversized windows, great closet space, great layouts. The building offerings include an elevator, package room, state of the art fitness facility, shared work space, private parking and a fully furnished and landscaped rooftop.  We can help you <a href="/roommates">find roommates</a> on Nooklyn.</p><hr></div><div id="" class="paint-layer default-fade-end"><h5>Amenities</h5><div class="amenities"><div class="amenities-item">•  Central A/C

</div><div class="amenities-item">•  High Ceilings

</div><div class="amenities-item">•  Hardwood Floors

</div><div class="amenities-item">•  Video Intercom

</div><div class="amenities-item">•  Elevator

</div><div class="amenities-item">•  Natural Light in Living Area

</div><div class="amenities-item">•  Washer dryer installed

</div><div class="amenities-item">•  Washer dryer hookup

</div><div class="amenities-item">•  Laundry in building

</div><div class="amenities-item">•  Bike storage

</div><div class="amenities-item">•  Gym

</div><div class="amenities-item">•  Private parking

</div><div class="amenities-item">•  Shared workspace

</div><div class="amenities-item">•  Public Wifi

</div><div class="amenities-item">•  Outdoor Space

</div><div class="amenities-item">•  Balcony

</div><div class="amenities-item">•  Terrace

</div><div class="amenities-item">•  Roof access

</div><div class="amenities-item">•  Eat In Kitchen

</div><div class="amenities-item">•  Stainless Steel Appliances

</div><div class="amenities-item">•  Dishwasher

</div><div class="amenities-item">•  Stone countertops</div></div></div><div id="" class="paint-layer default-fade-end"><hr><h5>Lease Details</h5><div class="lease-details-card"><div class="row no-gutters"><div class="col-6"><div class="lease-details-label">Pet Policy</div><div class="lease-details-value">Pets Upon Approval</div></div><div class="col-6"><div class="lease-details-label">Utilities Included</div><div class="lease-details-value">None</div></div></div><div class="row no-gutters"><div class="col-6"><div class="lease-details-label pt-3">Move In Costs</div><div class="lease-details-value">First Month, Security</div></div></div></div></div><div class="nearby-subway-station"><hr><h5>Nearby Subway Stations</h5><div class="nearby-subway-card row no-gutters"><div class="col-10"><div class="nearby-subway-name">15 St - Prospect Park</div><img class="train" alt="F train" src="//a00.nook.land/packs/media/2x/F-0ff36eeb.png"><img class="train" alt="G train" src="//a00.nook.land/packs/media/2x/G-d7baabae.png"></div><div class="col-2"><a href="/subway_stops/F25"><img alt="direction" src="//a00.nook.land/packs/media/svg/direction-5f83570d.svg" class="img-fluid mx-auto" style="height: 42px; margin: 8px;"></a></div></div></div><div class="price-history"><hr><h5>Price History</h5><div class="responsive-table" style="padding: 0px 10px;"><table class="table nklyn-table nklyn-table-dark"><thead><tr><th>Price</th><th>Date</th><th>Change</th></tr></thead><tbody><tr class="text-center"><td>$3,125</td><td>November 24, 2020</td><td>-$125</td></tr><tr class="text-center"><td>$3,250</td><td>November 09, 2020</td><td>Listed on Nooklyn</td></tr></tbody></table></div></div><hr><h5>Interested Roommates</h5><ul class="list-unstyled list-inline"><li class="interested-mate-item list-inline-item"><a target="_blank" href="/agents/210099"><img class="rounded-circle img-fluid rounded-circle mx-auto" src="images/harry.jpeg"><h6>Dalton</h6></a></li></ul></div><div class="col-sm-4" style="right: 0px;"><div class="nklyn-listing-contact-area"><div class="lead_schedule"><div class="button btn-yellow-black btn-rounded btn-search-bar-size text-left mb-2 d-flex " style="justify-content: space-between;"><span class="d-flex">Request a tour</span><i class="nookons-arrow-right d-flex ml-2" id="nklyn-listing-tour-img" style="line-height: 1.7; font-weight: 500;"></i></div></div><div><div><a class="button btn-transparent btn-rounded btn-search-bar-size text-left mb-2 d-flex" href="/listings/67938/apply?sales_agent=14789-Rachel-Skumanich" style="justify-content: space-between;"><span class="d-flex">Apply</span><img alt="apply" src="//a00.nook.land/packs/media/svg/listing_apply-d21feb63.svg" class="d-flex ml-2" style="height: 16px;"></a></div></div><div class="row no-gutters"><div class="col-6"><div class="listing-like"><div class="button btn-transparent btn-block btn-rounded btn-search-bar-size" id="listing_card_6727"><div><div><a href="#" class="unlike-button btn-transparent"><div class="flex-row" style="justify-content: center;"><div class="flex-col" style="padding: 2px;"><i class="nookons-heart nooklyn_square_heart"></i></div><div class="flex-col">13 Likes</div></div></a></div></div></div></div></div><div class="col-6"><div role="menu" class="button btn-transparent btn-block btn-rounded btn-search-bar-size"><i class="nookons-share" id="nklyn-listing-share-img"></i></div></div></div><hr><h4 class="text-left">Listed by Nooklyn</h4><h4 class="text-left">Listing ID: 67938</h4><hr><div id="" class="paint-layer default-fade-end"><h5>Contact</h5><a href="/agents/14789-rachel-skumanich"><img class="rounded-circle" alt="Rachel Skumanich - Licensed Real Estate Salesperson" src="https://s3.amazonaws.com/nooklyn-pro/agents/14789/thumb/IMG_3123.JPG?1513173409"></a><h3><a href="/agents/14789-rachel-skumanich">Rachel Skumanich</a></h3><h4>Licensed Real Estate Salesperson</h4></div></div></div></div></div><hr><div class="neighborhood-jumbotron"><h5 class="neighborhood-title">the Building</h5><div class="neighborhood-img" style="background-image: url(&quot;https://s3.amazonaws.com/nooklyn-pro/building_images/26210/large/1901_10th_Ave-04.jpg?1602180470&quot;);"></div>
<h3 class="neighborhood-text">1901 10th Ave</h3>
<p>Introducing 1901 10th Avenue, Windsor Terrace's newest boutique luxury residence. Meticulously crafted with condo finishes, light, space and detail are in abundance. The residences are equipped with designer kitchens containing stainless steel appliances, integrated dishwashers, stone backsplash, custom shelving, granite countertops and select units with kitchen islands. Wide plank oak hardwood flooring, in unit washer/dryer, gorgeous bathrooms with deep soak tubs, private outdoor space, fantastic closet space, and incredibly spacious bedrooms. The building offerings include an elevator, package room, state of the art fitness facility, shared work space, private parking and a fully furnished and landscaped rooftop.
</p>
<div class="neighborhood-info">Built in 2020  •  9 apartments </div><a class="button btn-rounded btn-transparent neighborhood-button" href="/buildings/1901-10th-ave-brooklyn-ny-11215-usa">See the rest of the building<i class="nookons-chevron-right pl-3"></i></a></div><hr><div class="neighborhood-jumbotron"><h5 class="neighborhood-title">the Neighborhood</h5><div class="neighborhood-img" style="background-image: url(&quot;https://s3.amazonaws.com/nooklyn-pro/neighborhoods/188/large/windsorterrace.jpg?1513444152&quot;);"></div><h3 class="neighborhood-text">Windsor Terrace, Brooklyn</h3><p></p><div class="neighborhood-info">26 apartments  •  3 rooms  •  1 roommates 
 </div>
 <a class="button btn-rounded btn-transparent neighborhood-button" href="/neighborhoods/windsor-terrace-brooklyn-ny">See the rest of the neighborhood<i class="nookons-chevron-right pl-3"></i>
 </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


  </body>
  <script src="js/tiny-slider.js"></script>
  <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
  <script src="js/mapkit.js"></script>

  
</html>
