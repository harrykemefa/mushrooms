 	<!-- end main content -->

	<!-- JS -->

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/admin.js"></script>

	<script type="text/javascript">
		   function logout(){
                 if(confirm("Are you sure you want to Logout?")){
                  $.ajax({
                      url:"signout.php",
                      method:"POST",
                      success:function(){
                        window.location.href="./";
                       }
                  });
              }
        
       }


          get_seekers();
      function get_seekers(){

            var action = 'fetch_data';
             var commentCount = 24;

               $.ajax({
          url:"actions/get_seekers.php",
          method: "POST",
          data:{action:action,commentNewCount:commentCount},
          success:function(data){
            $('.seekers_feed').html(data);
          }
         });
           }


         // get_renters();
      function get_renters(){

            var action = 'fetch_data';
             var commentCount = 24;

               $.ajax({
          url:"actions/get_renters.php",
          method: "POST",
          data:{action:action,commentNewCount:commentCount},
          success:function(data){
            $('.renter_feeds').html(data);
          }
         });
           }

                var commentCount = 24;
         $(".load-more").click(function(){
          var action = 'fetch_data';
         commentCount = commentCount + 24;
              $.ajax({
          url:"actions/get_renters.php",
          method: "POST",
          data:{action:action,commentNewCount:commentCount},
           beforeSend:function(){
                        $('.load-more').html('Loading..');
                      },
          success:function(data){
            $('.renter_feeds').html(data);
          },

          complete:function(data){
                         $('.load-more').html('More Results');
                        }
         });

          });

         $('.remove_renter').on('click', function(){


         	

  	 var delete_id = $(this).attr("id");

		             if(confirm("Are you sure you want to delete this renter?")){
		               $.ajax({

		          url:"actions/delete_renter.php",
		          method: "POST",
		          data:{delete_id:delete_id},
		          success:function(data){
                 window.location.href = "dashboard.php";
		          }

		         });

                 }

		 


         	});
	</script>
</body>
</html>