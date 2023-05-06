<script type="text/javascript">
  let progressBar = document.querySelector("#rainbow-progress-bar");
  window.onload = function() {
      progressBar.style.display = 'none';
  };

   function budget(){

            var budget = $('#budget').val();
            budget = budget.replace(/[^0-9\.]/g, '');
            budget = Number(budget);
             $('#budget').val(budget);
   } 
      $('.userType li').on('click', function(){
    $(this).addClass('active').siblings().removeClass('active');
  });

     $('.prof li').on('click', function(){
    $(this).addClass('active').siblings().removeClass('active');
      var bed_id = $(this).attr("id");
      var trim_id = bed_id.substring(1, bed_id.length);
       $('#bed').val(trim_id);
  });

     $('.gender li').on('click', function(){
    $(this).addClass('active').siblings().removeClass('active');
     var gender_id = $(this).attr("id");
       $('#gender').val(gender_id);
  });

 

   $('.cities li').on('click', function(){
    $(this).addClass('active').siblings().removeClass('active');
     var space_id = $(this).attr("id");
    var trim_id = space_id.substring(1, space_id.length);
       $('#space_type').val(trim_id);
      
  });

   

    $('.bath li').on('click', function(){
    $(this).addClass('active').siblings().removeClass('active');
     var bath_id = $(this).attr("id");
    var trim_id = bath_id.substring(1, bath_id.length);
       $('#bath').val(trim_id);
  });

//Switch Between Subletter & Roommate

  $('.choose_type button').on('click', function(){

            if ($('li#landlord').hasClass('active')) {
            
              $('[name=user_type]').val(4);
            }else if($('li#tenant').hasClass('active')){
              
              $('[name=user_type]').val(3);
            }

            if($('li.use_case').hasClass('active')){
                $('.roomie_form').show();
               $('.step1').show();
              $('.choose_type').hide();
               
            }else{
              $('.err').html("<div class='alert'>Please select an option. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
         setTimeout(function(){
   $('.alert').fadeOut('fast');
 }, 3000);
            }
         });


    $('.first_screen button').on('click', function(){

              $('.choose_type').show();
               $('.first_screen').hide();
     
         });

  //Switch Between Subletter & Roommate 



// FORM VALIDATION BLOCK ------------->
   


// FORM VALIDATION BLOCK ------------->


// HIDE ALERT BLOCK ------------->
   
 
 
//  HIDE ALERT BLOCK ------------->


    $('.step1 .btn-next').on('click', function(){

                 if ($('#hood').val() != '') {

              $('.step2').show();
               $('.step1').hide();
          }else{
               $('.err').html("<div class='alert'>Please select a neighbourhood. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                    setTimeout(function(){
           $('.alert').fadeOut('fast');
         }, 3000);
          }
   
  });

    $('div.step1 .back-to-apply').on('click', function(){
    $('.roomie_form').hide();
    $('.step1').hide();
      $('.choose_type').show();
     
  });

     $('div.step2 .btn-next').on('click', function(){
       if ($('.cities li').hasClass('active')) {
            $('.step3').show();
             $('.step2').hide();
           }else{
         $('.err').html("<div class='alert'>Please select an option. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                    setTimeout(function(){
           $('.alert').fadeOut('fast');
         }, 3000);
              }
    });

     $('div.step2 .back-to-apply').on('click', function(){
    $('.step1').show();
    $('.step2').hide();
     
  });


        $('div.step3 .btn-next').on('click', function(){
          
              if ($('.prof li').hasClass('active')) {
           $('.step4').show();
     $('.step3').hide();
      }else{
         $('.err').html("<div class='alert'>Please select an option. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
         setTimeout(function(){
   $('.alert').fadeOut('fast');
 }, 3000);
      }
      });

      $('div.step3 .back-to-apply').on('click', function(){
    $('.step2').show();
    $('.step3').hide();
     
  });

  $('#country').on('change', function(){
      var data = $(this).val();
       $('#hood').val(data);
  });

        $('div.step4 .btn-next').on('click', function(){

                   if ($('.bath li').hasClass('active')) {
                      $('.err').html("<div class='alert'>Notice: please make sure you fill in the correct information.<button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
         setTimeout(function(){
   $('.alert').fadeOut('fast');
 }, 5000);
           $('.step5').show();
     $('.step4').hide();
      }else{
         $('.err').html("<div class='alert'>Please select an option. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
         setTimeout(function(){
   $('.alert').fadeOut('fast');
 }, 3000);
      }


  });

      $('div.step4 .back-to-apply').on('click', function(){
    $('.step3').show();
    $('.step4').hide();
     
  });

 $('div.step5 .btn-next').on('click', function(){


     if ($('input[name="lead_move_in"]').val() == '' || $('input[name="budget"]').val() == '') {

             $('.err').html("<div class='alert'>Please fill all fields. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                    setTimeout(function(){
           $('.alert').fadeOut('fast');
         }, 3000);

          }else if($('input[name="budget"]').val() < 1000){

             $('.err').html("<div class='alert'>Please Insert a proper rent price. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                    setTimeout(function(){
           $('.alert').fadeOut('fast');
         }, 3000);

          }else{
             budget();
             $('.step6').show(); 
            $('.step5').hide();
          }

       
     
  });

    $('div.step5 .back-to-apply').on('click', function(){
    $('.step4').show();
    $('.step5').hide();
     
  });



     $('div.step6 .back-to-apply').on('click', function(){
    $('.step5').show();
    $('.step6').hide();
     
  });

   function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }

     $('div.step6 .btn-next').on('click', function(){

         if ($('input[name="full_name"]').val() == '' || $('#phone').val() == '' || $('#email').val() == '' || $('#password').val() == '') {

             $('.err').html("<div class='alert'>Please fill all fields. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                    setTimeout(function(){
           $('.alert').fadeOut('fast');
         }, 3000);

          }else if($('#phone').val().length < 11){

                  $('.err').html("<div class='alert'>Please insert the correct phone number. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                    setTimeout(function(){
           $('.alert').fadeOut('fast');
         }, 3000);
          }else if(IsEmail($('#email').val()) == false){
                $('.err').html("<div class='alert'>Please insert a correct email address. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                  setTimeout(function(){
           $('.alert').fadeOut('fast');
         }, 3000);
          }else if($('#password').val().length < 5){
               $('.err').html("<div class='alert'>password must be more than 5digits. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                 setTimeout(function(){
           $('.alert').fadeOut('fast');
         }, 3000);
          }else{

                $('.step7').show();
                  $('.step6').hide();

           

          }


    
    });


       $('div.step7 .back-to-apply').on('click', function(){
    $('.step6').show();
    $('.step7').hide();
     
  });

       

         function SendEmail(){
                  var reg_email = $('#email').val();
                             $.ajax({
                                    url:"../helpers/sendmail.php",
                                    method:"POST",
                                    data:{reg_email:reg_email},
                                    success:function(response){
                                     
                                    }
                        });

             }


             $('#rent_form').on('submit', function(event){
                  
               event.preventDefault();
                    // assume no fields are blank
   
               var phone =     $('[name=phone]').val();
                var full_name =     $('[name=full_name]').val();
                 var email =     $('[name=email]').val();
                  var password =     $('[name=password]').val();
               var user_type =     $('[name=user_type]').val();
                var bath =     $('[name=bath]').val();
                 var bed =     $('[name=bed]').val();
                  var hood =     $('[name=hood]').val();
                   var space_type =     $('[name=space_type]').val();
                     var budget =     $('[name=budget]').val();
                      var lead_move_in =     $('[name=lead_move_in]').val();
    

                       if ( phone != '' ) { // all fields are filled in!

                         $.ajax({
                      url:"../helpers/onboard.php",
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
                                       SendEmail();
                                       <?php if(!user_is_logged_in()):?>
                                               var email =  $('#email').val();
                                           var password =  $('#password').val();
                                           localStorage.setItem('email', email);
                                            localStorage.setItem('password', password);
                                      <?php endif; ?>
                                                                 

                                      $('.err').html("<div class='alert'>Success.. redirecting.. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");

                                       window.location.href = "/tenant";
                                   
                              } else if (data.status ==  'fail') {
                               
                                $('.err').html("<div class='alert'>"+data.message+"<button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                               //  window.location.href = "../explore";
                                
                              }

                              },

                  });

                       }else{
                         $('.err').html("<div class='alert'>All fields must be filled in<button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                              setTimeout(function(){
                     $('.alert').fadeOut('fast');
                   }, 3000);
                     $( window ).scrollTop( 0 );
                       }
               
                 });

             



</script>
   <script type="text/javascript" src="../js/currency.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
  <script src="js/select2.min.js"></script>

