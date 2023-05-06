 
  <?php 
   require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
   if (!user_is_logged_in()) {
  // user_login_error_redirect();
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title> Mushrooms -Join the renters Community</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<meta name="description" content="Join Mushrooms help other renters in lagos, make money when you move out">
<meta name="og:description" content="Join Mushrooms help other renters in lagos, make money when you move out">
<meta name="keywords" content="rent house in lagos, apartments in lagos">
<meta charset="UTF-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en">
<meta name="robots" content=" index, follow">
<link href="css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/57F33A142F587B9C7.css">
<link rel="stylesheet" media="all" href="css/application-dd806337e821c6b2db769d43cf5cdcca9f28ee612b593025620bf5e4cb19e298.css">
<link rel="stylesheet" href="css/tiny-slider.css">


    <!-- Fav Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="../images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/mushrooms-icon.png">
<link rel="mask-icon" href="fonts/safari-pinned-tab.svg" color="#000000">
<link rel="shortcut icon" href="../images/mushrooms-icon.png">
<meta name="msapplication-TileColor" content="#000000">
<meta name="theme-color" content="#000000">

    <script src="js/application-f3094d2db080a6b15da09fd71782034e341345c37f2a9085f9f8c5376cdc56d6.js"></script>
    <script src="js/jquery.raty-a7f5d9ef3a7c11415fcaef9755f05d350676af93e46cd83a2fc139615c2fcdde.js"></script>
    <script src="js/application-66eec9f00b5976a621fe.js"></script>
    <link rel="stylesheet" media="screen" href="css/application-4da6956f.css">
     <link rel="stylesheet" media="screen" href="../css/onboard.css">
     <link rel="stylesheet" media="screen" href="../css/media.css">
     <style type="text/css">
       div#nklyn-mates-jumbotron {
    background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),url(../images/tours.jpg);
}

.select2-container--default .select2-selection--single {
    background-color: transparent;
    border: 1px solid #aaa;
    border-radius: 4px;
    height: 40px;
}

 @media screen and (max-width: 414px){

  .select2-container--default .select2-selection--single {
    background-color: transparent;
    border: 1px solid #aaa;
    border-radius: 4px;
    height: 40px;
    width: 400px;
    position: relative;
    left: 10px;
}

 div#nklyn-mates-jumbotron.lastword h1{
    font-size: 26px !important;
    font-weight: 500 !important;
}

div#nklyn-mates-jumbotron.lastword h5 {
    font-weight: 400 !important;
}

}

 @media screen and (max-width: 375px){

  .select2-container--default .select2-selection--single {
    width: 350px;
    left: 15px;
}

}

@media screen and (max-width: 360px){

div.favorites-search {
    padding-top: 1px;
    padding-right: 15px;
    margin-top: -20px;
}


.select2-container--default .select2-selection--single {
    
    left: 10px;
}

}

@media screen and (max-width: 320px){

  div.apply-dark-container div.nklyn-apply-renter ul.cities li {
    width: 40%;
    padding: 0;
}

.select2-container--default .select2-selection--single {
    width: 300px;
    left: 14px;
}

img.navbar-wordmark {
    width: 90px;
}

div.first_screen ul li img.img-fluid.mx-auto {
    width: 100px;
}
}

     </style>
   
   
  </head>
  <body style="background-color: #111 !important;">



    <div id="react-flash"></div>

<div id="">
  <div>
    <div class="dark-mega-container apply-dark-container">
      <div class="container nklyn-apply nklyn-apply-renter">
        <div class="listings-index-search-bar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <a href="/<?=(user_is_logged_in())?'menu':'rent';?>">
       <img class="navbar-wordmark" src="../images/logo.png" alt="Mushrooms logo">
       </a>
        <div class="float-right favorites-search d-none d-sm-inline-block">
          <span id="favorites-link">
              <a href="#"><i class="nookons-face-smile"></i> Hello <?=(user_is_logged_in() ? $user_data['first_name'] : 'there');?></a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
       <div class="err">
              
            </div> 


  <div class="first_screen">

    <ul>
         
            <li class="">
              <img class="img-fluid mx-auto" src="../images/money.png" alt="Mushrooms Community">
              <h5>Make money when you move-out.</h5>
              <p>Tenants who register their apartment on Mushrooms make an average of 30 - 100k when they move out.
                </p>
            </li>



          </ul>

           <button class="button btn-rounded btn-next" type="button">Get Started</button>

    
  </div>
               
     <div class="choose_type" style="display: none">
        <h6 class="text-center">Step 1 of 8</h6>
          <h1>Which One Are You?</h1>
          <ul class="userType">
         
            <li class="use_case" id="tenant"><div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
              <img class="img-fluid mx-auto" src="../images/roommate.png" alt="Rm subletter">
              <h5>Tenant.</h5>
              <p>I am renting the apartment i'm currently living in</p>
            </li>

               <li class="use_case" id="landlord"><div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
              <img class="img-fluid mx-auto" src="../images/scarf-lady.png" alt="Landlord">
              <h5>Landlord.</h5>
              <p>I own the apartment i'm currently living in.</p></li>

          </ul>
          <br /> <br /> <br /> <br />
          <button class="button btn-rounded btn-next" type="button">Continue</button>
          </div>

           <form class="stepper-enter-done roomie_form" method="POST" id="rent_form" style="display: none;"  enctype="multipart/form-data" novalidate="">
           

  <div class="step1">
     <button type="button" class="button btn-rounded btn-transparent back-to-apply"> &lt;  Back</button>
       <h6 class="text-center">Step 2 of 8</h6>
         <h1>Which Neighborhood Are You? <i class="nookons-neighborhood"></i></h1>
       
              <?php 
                    $hood_sql = $db->query("SELECT id, location FROM location WHERE parent != 0");
                     while ($hood = mysqli_fetch_assoc($hood_sql)) :
                ?>


               <?php
                 $arraym[] = $hood['location'];
                 ?>
            <?php endwhile; ?>
            <?php 
             
            $string = implode(",", $arraym);

            ?>
        <div class="country">
            <select id="country" style="width: 500px">
        <option value="">Pick a Neighborhood</option>
      <!-- Dropdown List Option -->
      </select> 
        </div>
        <br><br>
          <button class="button btn-rounded btn-next" type="button">Continue</button>

  </div>

 <div class="step2" style="display: none">
                <button type="button" class="button btn-rounded btn-transparent back-to-apply"> &lt;  Back</button><br><br>
                <h6 class="text-center">Step 3 of 8</h6>
   <h1>What type of space do you live in? <i class="nookons-home"></i></h1>

   <ul class="cities">
      <?php 
                    $space_sql = $db->query("SELECT id, type FROM space");
                     while ($space = mysqli_fetch_assoc($space_sql)) :
                ?>
            <li class="" id="s<?=$space['id'];?>"><div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
            
              <h5><?=$space['type'];?>.</h5>
           <?php endwhile; ?>
          </ul>
          <button class="button btn-rounded btn-next" type="button">Continue</button>
      </div>
               
                  <div class="container agent-edit-form step3" style="display: none">
                <button type="button" class="button btn-rounded btn-transparent back-to-apply"> &lt;  Back</button><br><br>
                <h6 class="text-center">Step 4 of 8</h6>

                 <h1>How Many Bedrooms? <i class="nookons-bed"></i></h1>
          <ul class="prof">

            <li class="" id="b1">
                  <div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
                  <p>One Bedroom.</p>
                </li>
            
                 <li class="" id="b2">
                  <div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
                  <p>Two Bedroom.</p>
                </li>

                 <li class="" id="b3">
                  <div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
                  <p>Three Bedroom.</p>
                </li>

                 <li class="" id="b4">
                  <div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
                  <p>Four Bedroom.</p>
                </li>

                 <li class="" id="b5">
                  <div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
                  <p>Five Bedroom.</p>
                </li>
               
             
          </ul>
   
           <button class="button btn-rounded btn-next" type="button">Continue</button>
        </div>


  <div class="step4" style="display: none">
     <button type="button" class="button btn-rounded btn-transparent back-to-apply"> &lt;  Back</button><br><br>
      <h6 class="text-center">Step 5 of 8</h6>
     <h1>How Many Bathroom / toilet? <i class="nookons-bath"></i></h1>
          <ul class="bath">

            <li class="" id="u1">
                  <div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
                  <p>One Bathroom.</p>
                </li>
            
                 <li class="" id="u2">
                  <div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
                  <p>Two Bathroom.</p>
                </li>

                 <li class="" id="u3">
                  <div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
                  <p>Three Bathroom.</p>
                </li>

                 <li class="" id="u4">
                  <div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
                  <p>Four Bathroom.</p>
                </li>

                 <li class="" id="u5">
                  <div class="active-shape"><i class="nookons-check nklyn-3x"></i></div>
                  <p>Five Bathroom.</p>
                </li>
               
             
          </ul>
            <button class="button btn-rounded btn-next" type="button">Continue</button>


  </div>
    <script type="text/javascript">
      $(document).ready(function() {
        var str = '<?=$string;?>';
          var string = str.split(",")
        $("#country").select2({
          data: string
        });
      });
    </script>

       
          <p style="display: block; clear: both" />

           <div class="step5" style="display: none">
                     <div class="schedule-tour"><button type="button" class="button btn-rounded btn-transparent back-to-apply"> &lt;  Back</button>
            <h6 class="text-center">Step 6 of 8</h6>

            <h1>Please fill the blank space</h1><div class="sentence"><span>My current rent costs</span><input class="budget" name="budget" id="budget" value="" type="tel" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency"><span>yearly and the rent would expire on </span><div id="root-picker-outlet"><div class="picker" id="lead_move_in_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__month">November</div><div class="picker__year">2020</div><div class="picker__nav--prev picker__nav--disabled" data-nav="-1" role="button" aria-controls="lead_move_in_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="lead_move_in_table" title="Next month"> </div></div><table class="picker__table" id="lead_move_in_table" role="grid" aria-controls="lead_move_in" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1604185200000" role="gridcell" aria-label="1 November, 2020" aria-disabled="true">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1604271600000" role="gridcell" aria-label="2 November, 2020" aria-disabled="true">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1604358000000" role="gridcell" aria-label="3 November, 2020" aria-disabled="true">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1604444400000" role="gridcell" aria-label="4 November, 2020" aria-disabled="true">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1604530800000" role="gridcell" aria-label="5 November, 2020" aria-disabled="true">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1604617200000" role="gridcell" aria-label="6 November, 2020" aria-disabled="true">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1604703600000" role="gridcell" aria-label="7 November, 2020" aria-disabled="true">7</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1604790000000" role="gridcell" aria-label="8 November, 2020" aria-disabled="true">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1604876400000" role="gridcell" aria-label="9 November, 2020" aria-disabled="true">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1604962800000" role="gridcell" aria-label="10 November, 2020" aria-activedescendant="true">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605049200000" role="gridcell" aria-label="11 November, 2020">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605135600000" role="gridcell" aria-label="12 November, 2020">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605222000000" role="gridcell" aria-label="13 November, 2020">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605308400000" role="gridcell" aria-label="14 November, 2020">14</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605394800000" role="gridcell" aria-label="15 November, 2020">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605481200000" role="gridcell" aria-label="16 November, 2020">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605567600000" role="gridcell" aria-label="17 November, 2020">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605654000000" role="gridcell" aria-label="18 November, 2020">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605740400000" role="gridcell" aria-label="19 November, 2020">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605826800000" role="gridcell" aria-label="20 November, 2020">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605913200000" role="gridcell" aria-label="21 November, 2020">21</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1605999600000" role="gridcell" aria-label="22 November, 2020">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1606086000000" role="gridcell" aria-label="23 November, 2020">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1606172400000" role="gridcell" aria-label="24 November, 2020">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1606258800000" role="gridcell" aria-label="25 November, 2020">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1606345200000" role="gridcell" aria-label="26 November, 2020">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1606431600000" role="gridcell" aria-label="27 November, 2020">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1606518000000" role="gridcell" aria-label="28 November, 2020">28</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1606604400000" role="gridcell" aria-label="29 November, 2020">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1606690800000" role="gridcell" aria-label="30 November, 2020">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1606777200000" role="gridcell" aria-label="1 December, 2020">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1606863600000" role="gridcell" aria-label="2 December, 2020">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1606950000000" role="gridcell" aria-label="3 December, 2020">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1607036400000" role="gridcell" aria-label="4 December, 2020">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1607122800000" role="gridcell" aria-label="5 December, 2020">5</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1607209200000" role="gridcell" aria-label="6 December, 2020">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1607295600000" role="gridcell" aria-label="7 December, 2020">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1607382000000" role="gridcell" aria-label="8 December, 2020">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1607468400000" role="gridcell" aria-label="9 December, 2020">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1607554800000" role="gridcell" aria-label="10 December, 2020">10</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1607641200000" role="gridcell" aria-label="11 December, 2020">11</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1607727600000" role="gridcell" aria-label="12 December, 2020">12</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1604962800000" aria-controls="lead_move_in" disabled="disabled">Today</button><button class="picker__button--clear" type="button" data-clear="1" aria-controls="lead_move_in" disabled="disabled">Clear</button><button class="picker__button--close" type="button" data-close="true" aria-controls="lead_move_in" disabled="disabled">Close</button></div></div></div></div></div></div></div><input class="datepicker general-text-field picker__input" type="text" name="lead_move_in" id="lead_move_in" readonly="" value="" placeholder="Choose Date" aria-haspopup="true" aria-readonly="false" aria-owns="lead_move_in_root" aria-expanded="false"></div> <button class="button btn-rounded btn-next" type="button">Continue</button></div>
    
          </div>


           <p style="display: block; clear: both" />

            <div class="step6" style="display: none">
               <div class="schedule-tour">
                          <button type="button" class="button btn-rounded btn-transparent back-to-apply"> &lt;  Back</button><br><br>
                <h6 class="text-center">Step 7 of 8</h6>

            <h1>Signup Details</h1>
            <div class="sentence"><span>My Name is <i class="nookons-passport"></i></span> 
   <input type="text" name="full_name" id="full_name" value="<?=(user_is_logged_in())? $user_data['first_name'] .' '. $user_data['last_name'] : ''?>" <?=(user_is_logged_in())?'readonly':'';?>><span>call me on <i class="nookons-phone"></i></span> <input type="tel" name="phone" id="phone"><span> and email me @ <i class="nookons-email-fill"></i></span> <input type="email" name="email" id="email" value="<?=(user_is_logged_in())? $user_data['email'] : ''?>" <?=(user_is_logged_in())?'readonly':'';?>><span style="display: <?=(user_is_logged_in())?'none':'block';?>">Enter Password <i class="nookons-lock-fill"></i></span> <input type="<?=(user_is_logged_in())?'hidden':'password';?>" name="password" id="password"
    value="<?=(user_is_logged_in())? $user_data['password'] : ''?><?=(isset($_SESSION['fb_sign_true']) || isset($_SESSION['fb_log_true']))?'password':'';?>">
  </div> 

         </div>
             <button class="button btn-rounded btn-next" type="button">Continue</button>
            </div>


 
         
  


      <!----- FORM FIELDS HIDDEN FIELDS ----------->

      <input type="hidden" name="user_type" id="user_type" value="">
      <input type="hidden" name="space_type" id="space_type" value="">
       <input type="hidden" name="bath" id="bath" value="">
        <input type="hidden" name="hood" id="hood" value="">
        <input type="hidden" name="bed" id="bed" value="">
       
       
    
       <!----- FORM FIELDS HIDDEN FIELDS ----------->

            <div class="step7" style="display: none">
              <div id="nklyn-mates-jumbotron" class="lastword">
  <h1>Getting paid is super easy</h1>
  <h5>Give tours to people who want to move in.<br>Collect your 10% fee when the new tenant is accepted by your landlord .</h5>
   <button class="button btn-next  btn-yellow-black" type="submit" style="color: #000;">Post my apartment >></button>
      <button type="button" class="button btn-rounded btn-white-black  back-to-apply"> &lt; Go Back</button>
     
</div>
            
            </div>
        
  </form>


  </body>
   <div id="rainbow-progress-bar">
  
</div>
<?php include 'includes/validate.php'; ?>


</html>
