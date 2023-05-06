 <?php
$db = mysqli_connect('localhost','root','','mushrooms');

if (mysqli_connect_errno()) {
	echo "database connection failed with following errors: ". mysqli_connect_error();
	die();
}
session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/rent/config.php';
require_once BASEURL.'helpers/helpers.php';
require_once BASEURL.'helpers/facebook_api.php';


if (isset($_SESSION['admin'])) {
	$admin_id = $_SESSION['admin'];
	$query = $db->query("SELECT * FROM admin_users WHERE id = '$admin_id'");
	$admin_data = mysqli_fetch_assoc($query);
	$fn = explode(' ', $admin_data['full_name']);
	$admin_data['first'] = current($fn);
	$admin_data['last'] =  end($fn);
}





//  USER PROFILE DATA AVAIALABLE EVERY WHERE ON THE SITE

if (isset($_SESSION['user_info'])) {
	$user_id = sanitize($_SESSION['user_info']['id']);
	$query = $db->query(" SELECT * FROM users WHERE id = '$user_id'");
	$user_data = mysqli_fetch_assoc($query);

//  USER PROFILE DATA AVAIALABLE EVERY WHERE ON THE SITE
	

	//LOGGED IN USER TENANTS DATA AVAILABLE EVERY WHERE ON THE SITE
	$logged_user_id = $user_data['id'];
	$Logged_user_email = $user_data['email'];
    $Check_query = $db->query("SELECT * FROM renters WHERE email = '$Logged_user_email'");
    $logged_tenant = mysqli_fetch_assoc($Check_query);
    $logged_tenant_count = mysqli_num_rows($Check_query);

  //LOGGED IN USER TENANTS DATA AVAILABLE EVERY WHERE ON THE SITE

     //LOGGED IN USER APARTMENT SEEKERS DATA AVAILABLE EVERY WHERE ON THE SITE

      $seeker_query = $db->query("SELECT * FROM seekers WHERE email = '$Logged_user_email'");
    $logged_seeker = mysqli_fetch_assoc($seeker_query);
    $logged_seeker_count = mysqli_num_rows($seeker_query);

     //LOGGED IN USER APARTMENT SEEKERS DATA AVAILABLE EVERY WHERE ON THE SITE

}




if (isset($_SESSION['success_flash'])) {
	echo '<div class="alert ">
        <button class="close" data-dismiss="alert"><i class="nookons-close-circle-fill pull-right"></i></button>'.$_SESSION['success_flash'].'</div>'.$_SESSION['success_flash'].'</div>';
	unset($_SESSION['success_flash']);
}

if (isset($_SESSION['error_flash'])) {
	echo '<div class="alert ">
        <button class="close" data-dismiss="alert"><i class="nookons-close-circle-fill pull-right"></i></button>'.$_SESSION['error_flash'].'</div>';
	unset($_SESSION['error_flash']);
}
