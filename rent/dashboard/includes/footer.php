

 <div id="rainbow-progress-bar">
  
</div>
   <script src="../js/cbpFWTabs.js"></script>
  <script src="../js/tiny-slider.js"></script>
  <script type="text/javascript" src="../js/jquery.lazyload.min.js"></script>

    <script type="text/javascript">

      // Login Functions *********************
      $( function() { // once the document is ready, do things
        // initialize our loader overlay

                 if ($(window).width() <= 480) {

                    $(document).scroll(function(){
                          var y = $(this).scrollTop();
                          if (y < 100){
                              $('#action_call').fadeIn();
                          }else{
                            $('#action_call').fadeOut();
                          }
                      });

              }

       



  




               $(document).on('click', '#logout-button', function(){
            
              if(confirm("Are you sure you want to Logout?")){
                  $.ajax({
                      url:"../helpers/process_logout.php",
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

            // TABS MENU SETTINGS ///

      (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
          new CBPFWTabs( el );
        });

      })();

       // TABS MENU SETTINGS ///

        get_renters();
      function get_renters(){

            var action = 'fetch_data';
             var commentCount = 12;

               $.ajax({
          url:"../helpers/get_renters.php",
          method: "POST",
          data:{action:action,commentNewCount:commentCount},
          success:function(data){
            $('.renter_feeds').html(data);
          }
         });
           }

             var commentCount = 12;
         $(".load-more").click(function(){
          var action = 'fetch_data';
         commentCount = commentCount + 12;
              $.ajax({
          url:"../helpers/get_renters.php",
          method: "POST",
          data:{action:action,commentNewCount:commentCount},
           beforeSend:function(){
                        $('.load-more').html('Loading..');
                      },
          success:function(data){
            $('.renter_feeds').html(data);
          },

          complete:function(data){
                         $('.load-more').html('More Apartments →');
                        }
         });

          });


    $( '.favorite_apt' ).on( 'click', function() { // onclick for our login button
          favorite_renters();
        });

        favorite_renters();
      function favorite_renters(){

            var action = 'fetch_data';

               $.ajax({
          url:"../helpers/get_favorites.php",
          method: "POST",
          data:{action:action},
          success:function(data){
            $('.favorite_feeds').html(data);
          }
         });
           }

                   fetch_mates();
      function fetch_mates(){

            var action = 'fetch_data';

               $.ajax({
          url:"../helpers/fetch_mates.php",
          method: "POST",
          data:{action:action},
          success:function(data){
            $('.filter_data').html(data);
          }
         });
           }




 // LOGIN FINCTIONS *********************




  let progressBar = document.querySelector("#rainbow-progress-bar");
  window.onload = function() {
      progressBar.style.display = 'none';
  };


 





 // FADE OUT ALERT BLOCK MESSAGE ///
                       function fade(){
             setTimeout(function(){
                         $('.alert').fadeOut('fast');
                       }, 3000);
           }

           fade();
   //  FADE OUT ALERT BLOCK MESSAGE///



        $(document).on('click', '.add_list', function(){

                 var list_id = $(this).attr("id");
                 var type = 'renter';
                 <?php if (user_is_logged_in()): ?>
                     $.ajax({
                         url : '../helpers/add_renter.php',
                         method : 'post',
                         data:{list_id:list_id, type:type},
                         success : function(data){

                            var result = JSON.parse(data);
                               
                                    if (result.status ==  'ok') {
                             $('.err').html("<div class='alert'>listing added to favorites. <button class='close' data-dismiss='alert'><i class='nookons-close-circle-fill pull-right'></i></button></div>");
                              setTimeout(function(){
                               $('.alert').fadeOut('fast');
                             }, 3000);
                           $('#' + list_id + '.add_list').hide();
                            $('#' + list_id + '.remove_list').show();
              
                          }else{

                          }
                        },
                    beforeSend:function(){
                        $('#rainbow-progress-bar').show();
                      },

               complete:function(){
                          $('#rainbow-progress-bar').hide();
                      },
             error : function(){alert("something went wrong");}
          });
             <?php else: ?>
               $(".ReactModalPortal").show();
               $("#mod-log").show();
              $("#mod-sign").hide();

                   <?php endif; ?>
             
               

                 });



                  $(document).on('click', '.remove_list', function(){

                 var list_id = $(this).attr("id");
                 var type = 'renter';
                     $('#' + list_id + '.add_list').show();
                      $('#' + list_id + '.remove_list').hide();
                        
                     $.ajax({
                         url : '../helpers/remove_renter.php',
                         method : 'post',
                         data:{list_id:list_id, type:type},
                         success : function(){
                          favorite_renters();
                        },
                    beforeSend:function(){
                        $('#rainbow-progress-bar').show();
                      },

               complete:function(){
                          $('#rainbow-progress-bar').hide();
                      },
             error : function(){alert("something went wrong");}
          });

               

                 });

          

      
</script> 
  </body>

  
</html>
