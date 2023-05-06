    
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';
 $email = sanitize($_POST['email']);
 $email = trim($email);
 $password = sanitize($_POST['password']);
 $password = trim($password);

$query = $db->query("SELECT * FROM admin_users WHERE email = '$email'");
$admin = mysqli_fetch_assoc($query);
$adminCount = mysqli_num_rows($query);

   if ($adminCount < 1) {
    echo '<p class="bg-danger">This email doesnt exist in our database</p>';
          
          } 

      if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo '<p class="bg-danger">You must enter a valid email</p>';

      }


 

     if(!password_verify($password, $admin['password'])) {
    echo '<p class="bg-danger">the password does not match our records!</p>';

    
    }

    if ($adminCount == 1 && password_verify($password, $admin['password'])) {
         $admin_id = $admin['id'];
 //we are passing in the users id on login into this login function
        login($admin_id);

      echo '<script>window.location.href="dashboard.php"</script>';



            }
    
  