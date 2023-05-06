
<?php
  // load up global things
   require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';

  if ( isset( $_GET['state'] ) && FB_APP_STATE == $_GET['state'] ) { // coming from facebook
    // try and log the user in with $_GET vars from facebook 
    $fbLogin = tryAndLoginWithFacebook( $_GET );
  }



  // only if you are logged out can you view the login page
  if (isset($_SESSION['fb_log_true'])) {
    loggedInRedirect();
  }elseif(isset($_SESSION['fb_sign_true'])){
    ?>
  <script type="text/javascript">
    window.location.href = "/menu";
  </script>
      

    <?php
  }else{
    loggedInRedirect();
  }


  // only if you are logged out can you view the login page
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
    <div class="container-fluid">
  <div class="row">
    <div id="nklyn-homepage-main-section" style="margin-bottom: 1px;">
      <h1>Find your next apartment <br class="hidden-xs">from it's current tenant.</h1>
      <p class="standard-type">
       List your current apartment <br>it's someonelse's dream apartment.
      </p>
      <a class="button btn-yellow-black btn-2x" href="get-started/">Find a Home</a>
      <a class="button btn-black-yellow btn-2x" href="onboarding/">List your Apartment</a>
      
    </div>
  </div>
</div>

<div class="container">
  <div class="nklyn-advertise-agents-intermezzo">
    <h2 class="standard-type nklyn-white">
      Mushrooms is trusted by over 50,000+ renters in Lagos.
    </h2>
   
  </div>
</div>


<div class="nklyn-mates-intermezzo-section">
  <img class="img-fluid mx-auto" id="img-squiggly" src="images/rm-squiggly-887ffff16a281b1c6ce29dd3782793d713075d23a8bbfe2eab65b418e118f294.png" alt="Rm squiggly">
  <h2> Move Better with Mushrooms.</h2>
  <p>Mushroom's peer-to-peer platform connects the person moving out <br class="hidden-xs"> of an apartment  with the person who wants to move in.</p>
  <img class="img-fluid mx-auto" id="img-squiggly" src="images/rm-squiggly-887ffff16a281b1c6ce29dd3782793d713075d23a8bbfe2eab65b418e118f294.png" alt="Rm squiggly">
</div>

<!--
<div class="container-fluid">
  <div id="nklyn-homepage-type-header">
    <h2 class="standard-type nklyn-white">Trending Apartments</h2>
    <h6 class="standard-type nklyn-white"><a href="apartments/"> View All Apartments <i class="nookons-chevron-right"></i></a></h6><br>
    <div class="my-slider">
      <div class="nklyn-listing-card" id="listing_card_45366">
  <div class="nklyn-listing-card-img" style="background-image: url(images/house1.jpg);">
    <a href="#">
     
</a>  </div>

  <div class="nklyn-listing-card-stub container-fluid">
    <div class="row">
      <div class="col-4">
        &#8358;4million
      </div>
      <div class="col-4 col-bed">
        4 beds
      </div>
      <div class="col-4">
        4 bath
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-hood">
        Lagos
      </div>
      <div class="col-6 col-train">
       <i class="nookons-money"></i>
      <i class="nookons-calendar"></i>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
      Chevron Lekki
      </div>
    </div>
    <div class="row">
      <div class="col-2 col-like">
        <i class="nookons-heart"></i>
      </div>
      <div class="col-2 col-share">
        <i class="nookons-share"></i>
      </div>
      <div class="col-8">
        Schedule a Tour
        <span class="float-right">
          <i class="nookons-arrow-right nklyn-yellow"></i>
        </span>
      </div>
    </div>
  </div>
</div>
<div class="nklyn-listing-card">
  <div class="nklyn-listing-card-img" style="background-image: url(images/house2.jpg);">
    <a href="#">
    
</a>  </div>
  <div class="nklyn-listing-card-stub container-fluid">
    <div class="row">
      <div class="col-4">
        &#8358;3.5million
      </div>
      <div class="col-4 col-bed">
        4 beds
      </div>
      <div class="col-4">
        4 bath
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-hood">
        Lekki Lagos
      </div>
      <div class="col-6 col-train">
        <i class="nookons-money"></i>
      <i class="nookons-calendar"></i>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        Orchid road lekki
      </div>
    </div>
   <div class="row">
      <div class="col-2 col-like">
        <i class="nookons-heart"></i>
      </div>
      <div class="col-2 col-share">
        <i class="nookons-share"></i>
      </div>
      <div class="col-8">
        Schedule a Tour
        <span class="float-right">
          <i class="nookons-arrow-right nklyn-yellow"></i>
        </span>
      </div>
    </div> 
  </div>
</div>
<div class="nklyn-listing-card">
  <div class="nklyn-listing-card-img"  style="background-image: url(images/house3.jpg);">
    <a href="#">
     
</a>  </div>
  <div class="nklyn-listing-card-stub container-fluid">
    <div class="row">
      <div class="col-4">
        &#8358;3million
      </div>
      <div class="col-4 col-bed">
        3 beds
      </div>
      <div class="col-4">
        3 bath
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-hood">
        Lekki Lagos
      </div>
      <div class="col-6 col-train">
        <i class="nookons-money"></i>
      <i class="nookons-calendar"></i>
     
      </div>
    </div>
    <div class="row">
      <div class="col-12">
       Osapa London Lekki Lagos.
      </div>
    </div>
   <div class="row">
      <div class="col-2 col-like">
        <i class="nookons-heart"></i>
      </div>
      <div class="col-2 col-share">
        <i class="nookons-share"></i>
      </div>
      <div class="col-8">
        Schedule a Tour
        <span class="float-right">
          <i class="nookons-arrow-right nklyn-yellow"></i>  
        </span>
      </div>
    </div> 
  </div>
</div>
<div class="nklyn-listing-card">
  <div class="nklyn-listing-card-img"  style="background-image: url(images/hosuea4.jpg);">
    <a href="#">
    
</a>  </div>
  <div class="nklyn-listing-card-stub container-fluid">
    <div class="row">
      <div class="col-4">
        &#8358;4million
      </div>
      <div class="col-4 col-bed">
        4 beds
      </div>
      <div class="col-4">
        4 bath
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-hood">
        Lagos
      </div>
      <div class="col-6 col-train">
        <i class="nookons-money"></i>
      <i class="nookons-calendar"></i>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
       Chevron Lekki Lagos
      </div>
    </div>
   <div class="row">
      <div class="col-2 col-like">
        <i class="nookons-heart"></i>
      </div>
      <div class="col-2 col-share">
        <i class="nookons-share"></i>
      </div>
      <div class="col-8">
        Schedule a Tour
        <span class="float-right">
          <i class="nookons-arrow-right nklyn-yellow"></i>
        </span>
      </div>
    </div> 
  </div>
</div>
<div class="nklyn-listing-card" >
  <div class="nklyn-listing-card-img"  style="background-image: url(images/housea5.jpg);">
    <a href="#">
    
</a>  </div>
  <div class="nklyn-listing-card-stub container-fluid">
    <div class="row">
      <div class="col-4">
         &#8358;3.5million
      </div>
      <div class="col-4 col-bed">
        3 beds
      </div>
      <div class="col-4">
        3 bath
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-hood">
        Lagos
      </div>
      <div class="col-6 col-train">
     <i class="nookons-money"></i>
      <i class="nookons-calendar"></i>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        Orchid road Lekki, Lagos
      </div>
    </div>
    <div class="row">
      <div class="col-2 col-like">
        <i class="nookons-heart"></i>
      </div>
      <div class="col-2 col-share">
        <i class="nookons-share"></i>
      </div>
      <div class="col-8">
        Schedule a Tour
        <span class="float-right">
          <i class="nookons-arrow-right nklyn-yellow"></i>
        </span>
      </div>
    </div> 
  </div>
</div>
</div>
</div>
<ul class="tns-controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
    <li class="prev" data-controls="prev" aria-controls="tns1" tabindex="-1" aria-disabled="false">
        <i class="nookons-chevron-left nklyn-white nklyn-4x"></i>
    </li>
    <li class="next" data-controls="next" aria-controls="tns1" tabindex="-1" aria-disabled="false">
        <i class="nookons-chevron-right nklyn-white nklyn-4x"></i>
    </li>
  </ul>
</div>
<br><br><br><br>
-->
<div class="container">

  <div class="nklyn-advertise-agents-features">
   <div class="row nklyn-advertise-agents-features-row">
      <div class="col-sm-6">
        <div class="nklyn-advertise-agents-features-type-area">
          <img class="img-fluid mx-auto d-block d-sm-none illustration" src="images/money.png" alt="1">
           <!--
          <h6 class="standard-type">List your current apartment</h6>
           <h3 class="standard-type">Get access to your future apartment</h3>
            <p class="standard-type">Unlock and secure apartments while the current tenant still lives in it. Share what you know about your current place, see everyone else's. </p>
          -->
         
          <h3 class="standard-type">Make money when you move-out</h3>
          <p class="standard-type">Tenants who register their apartment on Mushrooms make an average of 30 - 100k when they move out. Give tours to people who want to move in and when the next tenant is approved you get a refund.</p>
      
          <a class="button btn-yellow-black btn-2x" href="onboarding/">Register your apartment</a>
          <hr>
          <p class="standard-type">“It's one of the easiest ways to make money.”</p>
          <p class="standard-type">Kemefa Harry, CEO at Mushrooms</p>
        </div>
      </div>
      <div class="col-sm-6">
        <img class="img-fluid mx-auto d-none d-sm-block illustration" src="images/money.png" alt="1">
      </div>
    </div>

    <hr>

    <div class="nooklyn_listing_square nklyn-listing flex-listing" style="border: 1px solid rgb(48, 48, 48); background-color: rgb(16, 16, 16); margin-bottom: 5px; height: 370px;"><div class="nklyn-listing-ad"><div class="nklyn-pal-note">Looking for Flatmates?</div><div class="nklyn-pal-headline">Find roommates,</div><div class="nklyn-pal-headline"> and subletters</div><div class="nklyn-pal-headline pb-4"></div><a class="nklyn-pal-link" href="/mates" target="_blank">Meet Roommates<i class="nookons-chevron-right"></i></a></div></div>
     <hr>

    <div class="row nklyn-advertise-agents-features-row">
      <div class="col-sm-6">
        <img class="img-fluid mx-auto d-none d-sm-block illustration" src="images/calendar.png" alt="2">
      </div>
      <div class="col-sm-6">
        <div class="nklyn-advertise-agents-features-type-area">
          <img class="img-fluid mx-auto d-block d-sm-none illustration" src="images/calendar.png" alt="2">
          <h6 class="standard-type">Rent ahead</h6>
          <h3 class="standard-type">Settle in without moving in</h3>
          <p class="standard-type">Mushrooms platform lets you search for apartments and sign a new lease up to 90 days in advance. Goodbye to house hunting wahala.</p>
           <a class="button btn-yellow-black btn-2x" href="get-started/" >Browse Apartments</a>
          <hr>
          <p class="standard-type">“Mushrooms shows you exclusive info about apartments to rent months before they become vacant.”</p>
          <p class="standard-type">Rahim Momoh, COO at Mushrooms</p>
        </div>
      </div>
    </div>

 <hr>
    <div class="row nklyn-advertise-agents-features-row">
      <div class="col-sm-6">
        <div class="nklyn-advertise-agents-features-type-area">
          <img class="img-fluid mx-auto d-block d-sm-none illustration" src="images/cat.png" alt="3">
          <h6 class="standard-type">No agent / legal fees</h6>
          <h3 class="standard-type">No agency fees</h3>
          <p class="standard-type">How much of your rent are you coughing up as fees? 30%, 40%? Well mushrooms saves you from all these surging overhead costs.</p>
          <a class="button btn-yellow-black btn-2x" href="get-started/">Find a Home</a>
          <hr>
          <p class="standard-type">“Mushrooms is a platform where tenants help tenants rent, no middle man.”</p>
          <p class="standard-type">Oseiwe Ehiremhen, CFO at Mushrooms</p>
        </div>
      </div>
      <div class="col-sm-6">
        <img class="img-fluid mx-auto d-none d-sm-block illustration" src="images/cat.png" alt="3">
      </div>
    </div>

</div>
  
</div>

<br><br>
<div class="nklyn-advertise-agents-whats-new">
  <div class="container">
    <h2 class="standard-type">Whats New</h2><br><br>
    <div class="row">
           <div class="col-sm-4">
        <div class="nklyn-advertise-agents-new-feature-card">
          <img class="img-fluid mx-auto" src="images/tour.jpeg" alt="Virtual Tours">
          <div class="nklyn-advertise-agents-new-feature-card-stub">
            <h4 class="standard-type">Virtual Tour Requests</h4><br>
            <p class="standard-type">Renters and Tenant safety is incredibly important to us. That's why we've introduced virtual tour requests.</p><br>
             <a class="button btn-black-yellow btn-2x" href="get-started/">Request Tour</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="nklyn-advertise-agents-new-feature-card">
          <img class="img-fluid mx-auto" src="images/land2.jpg" alt="Flat Mates">
          <div class="nklyn-advertise-agents-new-feature-card-stub">
            <h4 class="standard-type">Find roommates </h4><br>
            <p class="standard-type">Join Mushrooms if you're looking for a new BFF to live with or just need someone to move in and split the rent.</p><br>
            <a class="button btn-black-yellow btn-2x" href="/mates" target="_blank">Find roommates</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="nklyn-advertise-agents-new-feature-card">
          <img class="img-fluid mx-auto" src="images/guide.jpg" alt="City Guide">
          <div class="nklyn-advertise-agents-new-feature-card-stub">
            <h4 class="standard-type">City Guide</h4><br>
            <p class="standard-type"> Explore your new neighborhood, get access to quality curated content of the hottest places and events around your city.</p><br>
             <a class="button btn-black-yellow btn-2x" href="#">Explore Cities</a>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

<div class="nklyn-advertise-agents-cta-final text-center">
  <h2 class="standard-type nklyn-white">Join the Community Today</h2><br>
  <a class="button btn-yellow-black btn-rounded btn-3x" href="onboarding/">
    List your Apartment <i class="nookons-arrow-right"></i>
</a></div>

<br><br><br><br><br><br>
<script type="module">
/*
      var slider = tns({
    container: '.my-slider',
    slideBy: 'page',
    center: false,
    arrowKeys: true,
    swipeAngle: false,
    controls: true,
    controlsContainer: "#customize-controls",
    nav: false,
    autoplayButtonOutput: false,
    fixedWidth: 280,
    mouseDrag: true,
    autoplay: false,
    loop: false,
    responsive: {
      320: {
        items: 3
      },
      640: {
        items: 2
      },
      736: {
        items: 4
      },
      960: {
        items: 8,
        gutter: 10
      }
    }
  });

    var slider1 = tns({
    container: '.rooms-slider',
    slideBy: 'page',
    center: false,
    arrowKeys: true,
    swipeAngle: false,
    controls: true,
    controlsContainer: "#customize-controls-rooms",
    nav: false,
    autoplayButtonOutput: false,
    fixedWidth: 280,
    mouseDrag: true,
    autoplay: false,
    loop: false,
    responsive: {
      320: {
        items: 2
      },
      640: {
        items: 2
      },
      736: {
        items: 4
      },
      960: {
        items: 8,
        gutter: 10
      }
    }
  });
  var slider2 = tns({
    container: '.jobs-slider',
    slideBy: 'page',
    center: false,
    arrowKeys: true,
    swipeAngle: false,
    controls: true,
    controlsContainer: "#customize-controls-jobs",
    nav: false,
    autoplayButtonOutput: false,
    fixedWidth: 280,
    mouseDrag: true,
    autoplay: false,
    loop: false,
    responsive: {
      320: {
        items: 2
      },
      640: {
        items: 2
      },
      736: {
        items: 4
      },
      960: {
        items: 8,
        gutter: 10
      }
    }
  });
  var slider4 = tns({
    container: '.collections-slider',
    slideBy: 'page',
    center: false,
    arrowKeys: true,
    swipeAngle: false,
    controls: true,
    controlsContainer: "#customize-controls-collections",
    nav: false,
    autoplayButtonOutput: false,
    fixedWidth: 480,
    mouseDrag: true,
    autoplay: false,
    loop: false,
    responsive: {
      320: {
        items: 2
      },
      640: {
        items: 2
      },
      736: {
        items: 4
      },
      960: {
        items: 8,
        gutter: 10
      }
    }
  });
  var slider5 = tns({
    container: '.story-slider',
    slideBy: 'page',
    center: false,
    arrowKeys: true,
    swipeAngle: false,
    controls: true,
    controlsContainer: "#customize-controls-stories",
    nav: false,
    autoplayButtonOutput: false,
    fixedWidth: 278,
    mouseDrag: true,
    autoplay: false,
    loop: false,
    responsive: {
      320: {
        items: 2
      },
      640: {
        items: 2
      },
      736: {
        items: 4
      },
      960: {
        items: 8,
        gutter: 10
      }
    }
  });
  */
  </script>


<?php include 'includes/footer.php'; ?>