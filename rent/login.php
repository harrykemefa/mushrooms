
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
    <title>Welcome to Mushrooms | Log In</title>

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
          <style type="text/css">
        .illustration-side {
  
    width: 60% !important;
}

div.nklyn-mates-icon-row img {
    width: 0;
    padding-top: 0;
}

div.login-page div.login-form-side div.login-button-row .btn-login{
  color: white;
}

@media screen and (max-width: 414px){
.favorites-search.d-none {
    display: block !important;
}

div.favorites-search {
    padding-top: 1px;
    padding-right: 15px;
}

div.login-page{
  margin: 0;
}

}
      </style>
  </head>
  <body>



    <div id="react-flash"></div>

      <div class="container">
       <div class="listings-index-search-bar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <a href="index.php">
       <img class="navbar-wordmark" src="images/logo.png"  alt="Mushrooms logo">
       </a>
        <div class="float-right favorites-search d-none d-sm-inline-block">
          <span id="favorites-link">
              <a href="#"><i class="nookons-face-smile"></i> Welcome back!</a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

 <div class="row nklyn-mates-icon-row">
    <div class="col-12">

<div class="ReactModalPortal">
      <div class="ReactModal__Overlay ReactModal__Overlay--after-open" >
    <div class="ReactModal__Content ReactModal__Content--after-open Modal__Bootstrap modal-dialog dark-gray-container auth-modal" tabindex="-1"><div class="modal-content" id="modal-con">
     
        <div class="login-page">
        <div class="row no-no-gutters">
          <div class="col-md-6 login-form-side">
            
            
            <h1 id="login-headline">Log in</h1>
            <form name="sign_in" id="login_form">

                <a class="button btn-outline btn-auth-outline mx-auto" href="<?=getFacebookLoginUrl();?>"><span class="nookons-brand-facebook" style="font-size: 16px; line-height: 1.3;"></span>Sign in with Facebook</a>
                   <p class="or">or</p>
                  <div id="error_message" class="error-message">
                <?php if ( isset( $_SESSION['eci_login_required_to_connect_facebook'] ) && $_SESSION['eci_login_required_to_connect_facebook'] ) : // enter password to connect account ?>
                  <div style="margin-bottom:10px;">
                    An account already exists with that email address. To connect your Facebook account, enter your password.
                  </div>
                <?php endif; ?>
              </div>
          <label class="auth-label">Email</label>
          <div class="input-group">
            <div class="ipnut-group-prepend">
                <?php if ( isset( $_SESSION['fb_user_info']['email'] ) ? $_SESSION['fb_user_info']['email'] : '' ) : // pre populate with facebook email ?>
                    <?php $inputEmail = $_SESSION['fb_user_info']['email']; ?>
                    <?php else : ?>
                    <?php $inputEmail = ''; ?>
                  <?php endif; ?>
              <span class="input-group-text"><i class="nookons-email-fill"></i></span>
            </div>
            <input placeholder="Email" class="general-text-field mb-3 form-control logg" type="email" name="email" id="email" value="<?=$inputEmail;?>"></div>
            <label class="auth-label">Password</label>
            <div class="input-group">
              <div class="ipnut-group-prepend"><span class="input-group-text"><i class="nookons-lock-fill"></i></span>
              </div>
              <input placeholder="Password" class="general-text-field form-control logg" type="password" name="password" id="password"></div>
              <!--
              <div class="row login-action-row"><div class="col-sm-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="agent[remember_me]" id="agent_remember_me" class="custom-control-input" checked=""><label class="custom-control-label mb-0 auth-notes" for="agent_remember_me" style="padding-left: 5px;">Keep me logged in</label>
                </div></div></div>
              -->
              <br>

                <button type="button" name="commit"  id="login_button" class="button btn-yellow-black btn-login btn-rounded w-100 mb-4" style="font-size: 12px;">Login<i class="nookons-arrow-right float-right" style="line-height: 1.5;"></i></button>
                <!--
                <div class="auth-notes">Forgot your password? <a id="forgot-password" href="/agents/password/new">Reset password</a></div>
              -->
             
              </form>
              <hr><div class="auth-notes">Don't have an account? <a href="signup.php"><span>Sign up</span></a></div>
           </div>
           <div class="col-md-6 d-none d-md-inline-block auth-text border-0" style="padding: 120px">
            <h4>Welcome Back</h4><p>Yay! You’re back! Thanks for renting with Mushrooms. We knew you’d love us.</p>
           </div>
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
<div id="rainbow-progress-bar">
  
</div>
    <script type="text/javascript">

    // Login Functions *********************
      $( function() { // once the document is ready, do things
        // initialize our loader overlay

         remember_me();

        function remember_me(){
               var email_check = localStorage.getItem('email');
          var pass_check = localStorage.getItem('password');
             if (email_check != '' && pass_check != '') {         
                         $('#password').val(pass_check);
                          $('#email').val(email_check);
                        }
        }

                 if ($(window).width() <= 480) {

                    $(document).scroll(function(){
                          var y = $(this).scrollTop();
                          if (y > 600){
                              $('#bottomAdd').fadeIn();
                          }else{
                            $('#bottomAdd').fadeOut();
                          }
                      });

              }

        

        $( '#login_button' ).on( 'click', function() { // onclick for our login button
          processLogin();
        });

        $( '.logg' ).keyup( function( e ) {
          if ( e.keyCode == 13 ) { // our enter key
            processLogin();
          }
        });

              $(document).on('click', '#logout-button', function(){
            
              if(confirm("Are you sure you want to Logout?")){
                  $.ajax({
                      url:"helpers/process_logout.php",
                      method:"POST",
                       beforeSend:function(){
                        $('.err').html("<div class='alert'>Logging Out.. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                      },
                      success:function(){

                           window.location.reload();

                            $('.err').html("<div class='alert'>Yo, be back soon... <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                               setTimeout(function(){
                         $('.alert').fadeOut('fast');
                       }, 3000);
                      }
                  });
              }
          });
      });

      function processLogin() {
        // clear error message and red borders on signup click
        $( '#error_message' ).html( '' );
        $( '#error_message_fb_php' ).html( '' );
        $( '#error_message_twitter_php' ).html( '' );
        $( '#error_message_twitch_php' ).html( '' );
        $( 'input.logg' ).removeClass( 'invalid-input' );

        // assume no fields are blank
        var allFieldsFilledIn = true;

        $( 'input.logg' ).each( function() { // simple front end check, loop over inputs
          if ( '' == $( this ).val() ) { // input is blank, add red border and set flag to false
            $( this ).addClass( 'invalid-input ');
            allFieldsFilledIn = false;
          }
        } );

        if ( allFieldsFilledIn ) { // all fields are filled in!
           var email =  $('#email').val();
           var password =  $('#password').val();
         

          // server side login
          $.ajax( {
            url: 'helpers/process_login.php',
            data: $( '#login_form' ).serialize(),
            type: 'post',
            dataType: 'json',
            success: function( data ) {
              if ( 'ok' == data.status ) {
                     localStorage.setItem('email', email);
                    localStorage.setItem('password', password);
                    location.reload();
              } else if ( 'fail' == data.status ) {
                $( '#error_message' ).html( data.message );
                
              }
            }
          } );
        } else { // some fields are not filled in, show error message and scroll to top of page
          $( '#error_message' ).html( 'All fields must be filled in.' );
          $( window ).scrollTop( 0 );
        }
      }

 // LOGIN FINCTIONS *********************


  let progressBar = document.querySelector("#rainbow-progress-bar");
  window.onload = function() {
      progressBar.style.display = 'none';
  };



      
</script>

  
</html>
