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
    <title> Mushrooms - Find a Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<meta name="description" content="Rent a flat in lagos with Mushrooms, get access to apartments not yet vacant in lagos">
<meta name="og:description" content="Rent a flat in lagos with Mushrooms, get access to apartments not yet vacant in lagos">
<meta name="keywords" content="rent house in lagos, apartments in lagos">
<meta charset="UTF-8">
<meta name="google" content="notranslate">
<meta http-equiv="Content-Language" content="en">
<meta name="robots" content=" index, follow">
<link rel="stylesheet" type="text/css" href="../get-started/css/57F33A142F587B9C7.css">
<link rel="stylesheet" media="all" href="../get-started/css/application-dd806337e821c6b2db769d43cf5cdcca9f28ee612b593025620bf5e4cb19e298.css">
<link rel="stylesheet" href="../get-started/css/tiny-slider.css">


    <!-- Fav Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="../images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../images/mushrooms-icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="../images/mushrooms-icon.png">
<link rel="mask-icon" href="fonts/safari-pinned-tab.svg" color="#000000">
<link rel="shortcut icon" href="../images/mushrooms-icon.png">
<meta name="msapplication-TileColor" content="#000000">
<meta name="theme-color" content="#000000">

    <script src="../get-started/js/application-f3094d2db080a6b15da09fd71782034e341345c37f2a9085f9f8c5376cdc56d6.js"></script>
    <script src="../get-started/js/jquery.raty-a7f5d9ef3a7c11415fcaef9755f05d350676af93e46cd83a2fc139615c2fcdde.js"></script>
    <script src="../get-started/js/application-66eec9f00b5976a621fe.js"></script>
    <link rel="stylesheet" media="screen" href="../get-started/css/application-4da6956f.css">
     <link rel="stylesheet" media="screen" href="../css/onboard.css">
     <link rel="stylesheet" media="screen" href="../css/media.css">
     <link href="../get-started/css/select2.min.css" rel="stylesheet" />

   

     <style type="text/css">
   

.select2-container--default .select2-results__option[aria-selected=true] {
    background-color: #ffc03a;
    color: #000;
    font-weight: bold;
}

li.select2-search.select2-search--inline{
  max-height: 0!important;
  border: none !important;
}

.select2-container--default .select2-selection--multiple {
    background-color: transparent;
    border: 2px solid #404040;
    border-radius: 4px;
    cursor: text;
    width: 500px;
    height: 40px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
     background-color: transparent;
    border: none;
   border-radius: 0; 
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px;
}


.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid #fff 1px;
    outline: 0;
}
.select2-container--default .select2-results>.select2-results__options{
      background: #222;
}

.select2-container--default .select2-search--inline .select2-search__field{
          background: transparent;
      width:auto !important;
    color: rgb(255, 255, 255);
    font-weight: bolder;
    font-size: 14px;
    top: -23px;
    position: relative;
}

.select2-container--default .select2-search--inline .select2-search__field:focus{
   width:auto !important;
}

.select2-container--open .select2-dropdown--below {
    width: 500px !important;
}

@media screen and (max-width: 414px){

  .select2-container--open .select2-dropdown--below {
    width: 2px !important;
}



  .select2-container--default .select2-results>.select2-results__options {
    background: #222;
    width: 400px;
    position: relative;
    left: 9px;
}

.select2-container--default .select2-selection--multiple {
    background-color: transparent;
    border: 2px solid #fff;
    border-radius: 4px;
    cursor: text;
    width: 400px;
    height: 40px;
    left: 9px;
    position: relative;
}

.select2-container--default .select2-search--inline .select2-search__field{
  top: -10px;
   width: auto!important;
   position: none;
}

.select2-container--default .select2-search--inline .select2-search__field:focus{
   width:auto !important;
}

@media screen and (max-width: 375px){

    .select2-container--default .select2-results>.select2-results__options {
        left: 17px;
         width: 350px;
    }
.select2-container--default .select2-selection--multiple {

    width: 350px;
    height: 20px;
    left: 17px;

    }
  }

  
  @media screen and (max-width: 360px){
     .select2-container--default .select2-results>.select2-results__options {
        left: 25px;
         width: 320px;
    }
  .select2-container--default .select2-selection--multiple {
    width: 320px;
    height: 20px;
    left: 25px;
}

}

@media screen and (max-width: 320px){


 .select2-container--default .select2-results>.select2-results__options {
        left: 25px;
         width: 280px;
    }
.select2-container--default .select2-selection--multiple {
    width: 280px;
    height: 20px;
    left: 25px;
}

}

     </style>
     <script type="text/javascript">
      $(document).ready(function() {
       
        $("#country").select2({
          placeholder: "Select 3 Area's - Max"
        });
         
      
      });
    </script>
  </head>
  <body>
 <div id="react-flash"></div>
     <div class="err"></div>
<div id="">
  <div>
    <div class="dark-mega-container apply-dark-container">
      <div class="container nklyn-apply nklyn-apply-renter">
        <div class="listings-index-search-bar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <a href="index.php">
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





           <form class="stepper-enter-done roomie_form" method="POST" id="locate_form" enctype="multipart/form-data" novalidate="">
           

  <div class="step1">
     <a href="index.php" class="button btn-rounded btn-transparent back-to-apply"> &lt;  Back</a><br><br>
         <h1>Update Where would you like to stay? <br>
          Pick at least 3 areas
          <i class="nookons-neighborhood"></i></h1>
       
              <?php 
                    $hood_sql = $db->query("SELECT id, location FROM location WHERE parent != 0");
                   
                ?>

        <div class="country">
            <select id="country" name="city[]" multiple="multiple" data-maximum-selection-length="3">
         <?php while ($hood = mysqli_fetch_assoc($hood_sql)) : ?>
        <option value="<?=$hood['id'];?>"><?=$hood['location'];?></option>
          <?php endwhile; ?>
      <!-- Dropdown List Option -->
      </select> 
        </div>
        <br><br><br>
 <input type="hidden" name="hood" id="hood" value="">
          <button type="submit" class="button btn-rounded btn-next" type="button">Update Location</button>

  </div>

</form>

    
</div>
</div>

</div>
</div>
       





   



<script type="text/javascript">
    $('#country').on('change', function(){
      var data = $(this).val();
       $('#hood').val(data);
  });

      $('#locate_form').on('submit', function(event){
                  
               event.preventDefault();
                    // assume no fields are blank
   
              var hood =     $('[name=hood]').val();
                 
    

                       if ( hood != '' ) { // all fields are filled in!

                         $.ajax({
                      url:"change_location.php",
                      method:"post",
                      data:new FormData(this),
                      contentType:false,
                      cache:false,
                      processData:false,
                      dataType: 'json',
                       beforeSend:function(){
                        $('.err').html("<div class='alert'>Authenticating.. please wait. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                      },
                               success: function( data ) {
                            
                                    if (data.status ==  'ok') {
      

                                      $('.err').html("<div class='alert'>Success.. redirecting.. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");

                                       window.location.href = "index.php";
                                   
                              } else if (data.status ==  'fail') {
                               
                                $('.err').html("<div class='alert'>"+data.message+"<button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                              
                                
                              }

                              },

                  });

                       }else{
                         $('.err').html("<div class='alert'>You must choose at aleast one area<button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                              setTimeout(function(){
                     $('.alert').fadeOut('fast');
                   }, 3000);
                     $( window ).scrollTop( 0 );
                       }
               
                 });
</script>

  <script src="../get-started/js/select2.min.js"></script>
  <script type="text/javascript" src="../get-started/js/jquery.lazyload.min.js"></script>


</body>
  
   </html>