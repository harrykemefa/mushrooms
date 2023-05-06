

    <div class="nooklyn-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-6">
        <img class="footer-wordmark" src="images/logo.png" alt="Mushrooms logo">
        <ul class="list-unstyled">
          <li><a href="about.php">About</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Privacy</a></li>
         
        </ul>
      </div>
      <div class="col-md-3 col-sm-3 col-6">
        <h5>Search</h5>
        <ul class="list-unstyled">
          <li><a href="get-started/">Apartment Finder</a></li>
          <li><a href="onboarding/">Register Apartment</a></li>
          <li><a href="/mates">Meet Roommates</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-3 col-6">
        <h5>Create</h5>
        <ul class="list-unstyled">
          <li><a class="" href="onboarding/">Post Apartment</a></li>
          <li><a href="/mates">Roommate Profile</a></li>
          <li><a href="/mates">List Your Sublet</a></li>
          
        </ul>
      </div>
      <div class="col-md-3 col-sm-3 col-6">
        <h5>Products</h5>
        <ul class="list-unstyled">
          <li><a href="#">Commercial</a></li>
          <li><a href="#">City Guide</a></li>
          <li><a href="#">Split</a></li>
          
        </ul>
      </div>
  

    </div>
    <hr>
     <div class="social-icons-row text-left">
       <ul class="list-unstyled list-inline">
     
         <li class="list-inline-item">
           <a target="_blank" href="#">
             <i class="nookons-brand-facebook"></i>
</a>         </li>

         <li class="list-inline-item">
           <a target="_blank" href="https://twitter.com/mushroomslivin">
             <i class="nookons-brand-twitter"></i>
</a>         </li>
         <li class="list-inline-item">
           <a target="_blank" href="https://instagram.com/mushroomslivin">
             <i class="nookons-brand-instagram"></i>
</a>         </li>
        
         <li class="float-right list-inline-item"><p>&copy; 2021 Mushrooms</p></li>
       </ul>
     </div>
  </div>
</div>

 <div id="bottomAdd" style="display: none">
  <a class="button btn-outline btn-facebook-outline mx-auto" id="login_button"><i class="nookons-unlock"></i> Login</a>
</div>
<div class="ReactModalPortal" style="display: none;">
  <div class="ReactModal__Overlay ReactModal__Overlay--after-open" style="position: fixed; inset: 0px; background-color: rgba(0, 0, 0, 0.5);">
    <div class="ReactModal__Content ReactModal__Content--after-open Modal__Bootstrap modal-dialog dark-gray-container auth-modal" tabindex="-1"><div class="modal-content" id="modal-con">
     
      <div class="login-page" id="mod-log" style="display: none;">
        <div class="row no-no-gutters">
          <div class="col-md-6 login-form-side">
            
            <button class="close"><i class="nookons-close-circle-fill"></i></button>
            <h1 id="login-headline">Login</h1>
            <form name="sign_in" id="login_form">
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
                <p class="or">or</p>
                <a class="button btn-outline btn-auth-outline mx-auto" href="<?=getFacebookLoginUrl();?>"><span class="nookons-brand-facebook" style="font-size: 16px; line-height: 1.3;"></span>Sign in with Facebook</a>
              </form>
              <hr><div class="auth-notes register">Don't have an account? <span>Sign up</span></div>
           </div>
           <div class="col-md-6 d-none d-md-inline-block auth-text border-0" style="padding: 120px">
            <h4>Welcome Back</h4><p>Yay! You’re back! Thanks for renting with Mushrooms. We knew you’d love us.</p>
           </div>
         </div>
       </div>
       <div class="login-page" style="display: none;" id="mod-sign"><div class="row no-no-gutters">
        <div class="col-md-6 login-form-side">
          <button class="close"><i class="nookons-close-circle-fill"></i></button>
          <h1>Signup</h1>
          <form name="sign_up" class="new_agent" id="signup_form">
              <div id="error_message2" class="error-message">
                <?php if ( isset( $_SESSION['eci_login_required_to_connect_facebook'] ) && $_SESSION['eci_login_required_to_connect_facebook'] ) : // enter password to connect account ?>
                  <div style="margin-bottom:10px;">
                    An account already exists with that email address. To connect your Facebook account, enter your password.
                  </div>
                <?php endif; ?>
              </div>

                <a class="button btn-outline btn-auth-outline mx-auto" href="<?=getFacebookLoginUrl();?>"><span class="nookons-brand-facebook" style="font-size: 16px; line-height: 1.3;"></span>Continue with Facebook</a>
                 <p class="or">or</p>
            <div class="row">
              <div class="col-sm-6">
                  <label class="auth-label">First Name</label>
                  <div class="input-group"><div class="ipnut-group-prepend">
              <span class="input-group-text"><i class="nookons-human"></i></span>
            </div>
            <input class="general-text-field mb-3 form-control signn" placeholder="Sarah " type="text" name="first_name" id="agent_name" autocomplete="given-name" required=""></div>
              </div>
              <div class="col-sm-6">
                 <label class="auth-label">Last Name</label>
                  <div class="input-group"><div class="ipnut-group-prepend">
              <span class="input-group-text"><i class="nookons-human"></i></span>
            </div>
            <input class="general-text-field mb-3 form-control signn" placeholder="Doe" type="text" name="last_name" id="agent_name2" autocomplete="given-name" required=""></div>
              </div>
            </div>
          
          

            <label class="auth-label">Email</label>
            <div class="input-group">
              <div class="ipnut-group-prepend">
                <span class="input-group-text"><i class="nookons-email-fill"></i></span></div><input placeholder="Email" class="general-text-field mb-3 form-control signn" type="email" name="reg_email" id="agent_email" autocomplete="off"></div>

                <label class="auth-label">Password</label>
                <div class="input-group">
                  <div class="ipnut-group-prepend"><span class="input-group-text"><i class="nookons-lock-fill"></i></span></div><input placeholder="Password" class="general-text-field mb-3 form-control signn" type="password" name="reg_password" id="agent_password" autocomplete="off">
                </div>
                 <button type="button" name="commit" id="signup_button" class="button btn-yellow-black btn-login btn-rounded w-100" style="font-size: 12px;">Join the community<i class="nookons-arrow-right float-right" style="line-height: 1.5;"></i></button>
                 <hr>
                                 <div class="auth-notes mb-5 login">Already have an account? <span>Log in</span></div></form>
               </div>
               <div class="col-md-6 d-none d-md-inline-block auth-text border-0" style="padding: 120px">
                <h4>Why?</h4><p>With an account, you can save apartments, message tenants and securely apply and pay for apartments.<br> Get exclusive info about apartments to rent months before they become vacant.</p>
               </div>
             </div>
           </div>
     </div>
   </div>
 </div>
</div>
  </body>
 <!-- <script src="js/tiny-slider.js"></script>
   <script src="js/mapkit.js"></script>
 -->
  <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
 
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
             if (email_check && pass_check) {         
                         $('#password').val(pass_check);
                          $('#email').val(email_check);
                            if ($(window).width() <= 480) {

                    $(document).scroll(function(){
                          var y = $(this).scrollTop();
                          if (y > 5){
                              $('#bottomAdd').fadeIn();
                          }else{
                            $('#bottomAdd').fadeOut();
                          }
                      });

              }
                        }
        }

               

                 $( '.close' ).on( 'click', function() { // onclick for our login button
          $(".ReactModalPortal").hide();
        });
        

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
          

          // server side login
          $.ajax( {
            url: 'helpers/process_login.php',
            data: $( '#login_form' ).serialize(),
            type: 'post',
            dataType: 'json',
            success: function( data ) {
              if ( 'ok' == data.status ) {
                    window.location.href = "/menu";
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

 // SIGNUP FINCTIONS *********************


      $( function() { // once the document is ready, do things
        // initialize our loader overlay
        

        $( '#signup_button' ).on( 'click', function() { // onclick for our login button
          processSignup();
        });

        $( '.form-input' ).keyup( function( e ) {
          if ( e.keyCode == 13 ) { // our enter key
            processSignup();
          }
        } );
      } );

      function processSignup() {
        // clear error message and red borders on signup click
        $( '#error_message2' ).html( '' );
        $( '#error_message_fb_php' ).html( '' );
        $( 'input.signn' ).removeClass( 'invalid-input' );

        // assume no fields are blank
        var allFieldsFilledIn = true;

        $( 'input.signn' ).each( function() { // simple front end check, loop over inputs
          if ( '' == $( this ).val() ) { // input is blank, add red border and set flag to false
            $( this ).addClass( 'invalid-input ');
            allFieldsFilledIn = false;
          }
        });

        if ( allFieldsFilledIn ) { // all fields are filled in!
          

          // server side login
          $.ajax( {
            url: 'helpers/process_signup.php',
            data: $( '#signup_form' ).serialize(),
            type: 'post',
            dataType: 'json',
            success: function( data ) {
              if ( 'ok' == data.status ) {
                window.location.href = "/menu";
              } else if ( 'fail' == data.status ) {
                $( '#error_message2' ).html( data.message );
                
              }
            }
          } );
        } else { // some fields are not filled in, show error message and scroll to top of page
          $( '#error_message2' ).html( 'All fields must be filled in.' );
          $( window ).scrollTop( 0 );
        }
      }
  // SIGNUP FINCTIONS *********************


  let progressBar = document.querySelector("#rainbow-progress-bar");
  window.onload = function() {
      progressBar.style.display = 'none';
  };

    $(document).on('click touchstart tap', '.register', function(){
    $(".ReactModalPortal").show();
    $("#mod-sign").show();
    $("#mod-log").hide();
  });


  
     $('.howto').on('click', function(){
        $('.howto').toggleClass('active');
        $('.room_show').toggleClass('active');

  });



 $(document).on('click', '.login', function(){
    $(".ReactModalPortal").show();
    $("#mod-log").show();
    $("#mod-sign").hide();
  });

  $(document).mouseup(function(e){
     var container = $('#modal-con');
    

     if(!container.is(e.target) && container.has(e.target).length === 0){
         $(".ReactModalPortal").hide();
     }
  });


 // FADE OUT ALERT BLOCK MESSAGE ///
  
   //  FADE OUT ALERT BLOCK MESSAGE///



      
</script> 
  
</html>
