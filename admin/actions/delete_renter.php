  <?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';




   $delete_id = sanitize($_POST['delete_id']);
   $sql = "SELECT * FROM renters WHERE id = '$delete_id'";
   $result = $db->query($sql);
   $renter = mysqli_fetch_assoc($result);
   $db->query("DELETE FROM renters WHERE id = $delete_id");
  
  

 