

<?php
  // load up global things
   require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';

  if ( isset( $_GET['state'] ) && FB_APP_STATE == $_GET['state'] ) { // coming from facebook
    // try and log the user in with $_GET vars from facebook 
    $fbLogin = tryAndLoginWithFacebook( $_GET );
  }



  // only if you are logged out can you view the login page
  if (isset($_SESSION['fb_log_true'])) {
    // loggedInRedirect();
  }elseif(isset($_SESSION['fb_sign_true'])){
    ?>
  <script type="text/javascript">
    window.location.href = "onboarding";
  </script>
      

    <?php
  }else{
   //  loggedInRedirect();
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
<meta property="og:image" content="images/homepage-april-2017-bw@2x.jpg">
<meta property="og:description" content="Search Lagos apartments for rent, no agency fee. Connect with flatmates and rent rooms in lagos.">
<meta property="og:type" content="">
<meta property="place:location:latitude" content="">
<meta property="place:location:longitude" content="">

    <!-- Fav Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/mushrooms-icon.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="images/mushrooms-icon.png" color="#111111">
<meta name="msapplication-TileColor" content="#ffc03a">
<meta name="theme-color" content="#ffffff">

    <script src="js/application-9fef5a1e0193ed8e146cff8d2d010422128e6f00c5824343ad0973a12027572b.js"></script>
    <script src="js/application-5c79625404f508a477f7.js"></script>
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





    <div id="react-flash"></div>
 
    
<div class="nklyn-about-jumbotron">
  <div class="container">
    <h5 id="yellow-section-header">About</h5>
    <h1>Mushrooms is an all-in-one rental platform that connects apartment seekers, departing tenant and landlords.</h1>
  </div>
</div>
<!--
<div class="container">
  <div class="nklyn-about-page-section">
    <h5 id="yellow-section-header">Team</h5><br>
    <div class="row">
      <div class="col-sm-4">
        <img class="img-fluid mx-auto" src="images/harry.jpeg" alt="Harry Kemefa" />
        <h4>Harry kemefa</h4>
        <h5>Chief Executive Officer, Co-founder</h5>
        <h6>&nbsp;</h6>
        <p>Harry is a fullstack developer and serial entrepreneur.</p>
      </div>
 
  
    </div><br>



</div>
</div>

<div class="nklyn-about-page-section">
  <div class="container nklyn-values-overview">
    <h5 id="yellow-section-header">Our Values</h5>
    <div class="row">
      <div class="col-sm-4">
        <img class="img-fluid" src="//a03.nook.land/assets/about/values-design-0ba8058bb9aa3e8f45bac47231c581d79eeb2cab6693cf5146139be294dff18b.png" alt="Values design" />
        <h4>Design</h4>
        <p>Good design creates trust <br class="hidden-xs">and makes renting easy.</p>
      </div>
    </div>

  </div>
</div>

-->


<div class="nklyn-about-cta">
  <h2>The Vision</h2>
  <p>Re-invent Rent in Africa.</p>
  <a class="button btn-rounded btn-transparent" href="mailto:harry@mushrooms.ng">Join the Team</a>
</div>


<?php include 'includes/footer.php'; ?>