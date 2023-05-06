<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
if (!is_logged_in()) {
   login_error_redirect();
}
$admin_id =  $admin_data['id'];
$admin_email =  $admin_data['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="theme-color" content="#1a191f">
    <meta name="application-name" content="Mushrooms">
    <meta name="msapplication-TileColor" content="#1a191f">
    <meta name="theme-color" content="#1a191f">
    <meta name="theme-color" content="#1a191f">
        <!-- Windows phone -->
    <meta name="msapplication-navbutton-color" content="#1a191f">
	<script src="js/jquery-3.5.1.min.js"></script>
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
	<meta name="author" content="Kemefa Harrison">
	<title>  Mushrooms - Team Dashboard </title>

</head>
<body>

	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="dashboard.php" class="header__logo">
				<img src="images/logo.png" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->
