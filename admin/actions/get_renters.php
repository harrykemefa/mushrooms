 <?php if(isset($_POST["action"])) : ?>

 <?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';

   $sql="SELECT * FROM renters ORDER BY move_date ASC";
    if (isset($_POST["commentNewCount"])) {
              $commentNewCount = $_POST['commentNewCount']; 
              $start = 0;
               $sql .= " LIMIT $commentNewCount";
               }
    $result = $db->query($sql);

    $count = mysqli_num_rows($result);
    $no = 0;

?>




 <?php if($count > 0):?>
    <?php while($renter = mysqli_fetch_assoc($result)):
    	$no++;
    	 $hood_id =  $renter['location'];

            $hoodQuery = $db->query("SELECT id, location, parent FROM location WHERE id = $hood_id");
             $hood_info = mysqli_fetch_assoc($hoodQuery);


     ?>
								<tr>
									<td>
										<div class="main__table-text"><?=$no;?></div>
									</td>
									<td>
										<div class="main__table-text"><?=substr($renter['full_name'], 0, 10).'..';?></div>
									</td>
									<!--
									<td>
										<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 7.9</div>
									</td>
								-->
									<td>
										<div class="main__table-text"><a href="tel:<?=$renter['phone'];?>" class="main__table-text--green"><?=$renter['phone'];?></a></div>
									</td>
									
									<td>
										<div class="main__table-text main__table-text--<?=($renter['status'] == 0) ?'red' : 'green';?>"><?=($renter['status'] == 0) ?'Unapproved' : 'Approved';?></div>
									</td>
									<td>
										<div class="main__table-text"> <?=time_left($renter['move_date']);?> </div>
									</td>
							
									<td>
										<div class="main__table-text"><?=$hood_info['location'];?></div>
									</td>
									<td>
										<div class="main__table-text"> <?=money($renter['budget']);?> </div>
									</td>

									
									
									<td>
										<div class="main__table-btns">
										
												<a href="tel:<?=$renter['phone'];?>" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-md-call"></i>
											</a>
										
									
											<a href="add.php?edit=<?=$renter['id'];?>" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-eye"></i>
											</a>
										
										</div>
									</td>
								</tr>
							
						<?php endwhile; ?>
						<?php endif; ?>

						<?php endif; ?>