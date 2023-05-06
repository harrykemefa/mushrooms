<?php 
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/admin.css">
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Mushrooms – Team Dashboard </title>
</head>

<body class="body">

	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">

				<div class="col-12">
					 
					<div class="sign__content">
						<!-- authorization form -->
						 <div id="modal_errors" class="bg-danger"></div>
                       <form id="login-form" method="post">
							<a href="index.html" class="sign__logo">
								<img src="images/logo.png" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" id="email" name="email" required="required" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" id="password" name="password"  required="required" placeholder="Password">
							</div>
							<!--
							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>
						-->
							
							<button class="sign__btn" id="log_admin" type="submit">Sign in</button>

						<span class="sign__text">Authorized personnel only <a href="/rent">Go Home</a></span>

						<!--	<span class="sign__text"><a href="../about.html">About us</a></span> -->
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/admin.js"></script>

	   <script type="text/javascript">
        
     $(document).ready(function(){
        
             $('#login-form').on('submit', function(event){
                    
                    event.preventDefault();
                   var email = $('#email').val();
                   var password = $('#password').val();
                  
                  
                  
                  if (email == '' || password == '') {
                        $('#modal_errors').html('Oops fields cannot be left blank.');
                              }else{
                                     
                                      $.ajax({
                                    url:"actions/login.php",
                                    method:"POST",
                                    data:$('#login-form').serialize(),
                                       beforeSend:function(){
                                        $('#log_admin').html('Checking...');
                                      },
                                    success:function(response){
                                      if(response == 'success') {
                                           
                                      }
                                      else{
                                        $('#modal_errors').html(response);
                                      }
                                    },

                                             complete:function(){
                          $('#log_admin').html("SIGN IN");
                      },
                        });
                              }
                       
                      });

          });
         
    </script>
</body>
</html>