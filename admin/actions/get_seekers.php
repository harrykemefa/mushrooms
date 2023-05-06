 <?php if(isset($_POST["action"])) : ?>

 <?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/rent/core/init.php';

   $sql="SELECT * FROM seekers ORDER BY move_date ASC";
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
    <?php while($seeker = mysqli_fetch_assoc($result)):
    	$no++;
    	 $space_id = $seeker['space_type'];
    	  $spaceQuery = $db->query("SELECT type FROM space WHERE id = $space_id");
             $space_info = mysqli_fetch_assoc($spaceQuery);


     ?>
								<tr>
									<td>
										<div class="main__table-text"><?=$no;?></div>
									</td>
									<td>
										<div class="main__table-text"><?=substr($seeker['full_name'], 0, 10).'..';?></div>
									</td>
									<!--
									<td>
										<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 7.9</div>
									</td>
								-->
									<td>
										<div class="main__table-text"><a href="tel:<?=$seeker['phone'];?>" class="main__table-text--green"><?=$seeker['phone'];?></a></div>
									</td>
									
									<td>
										<div class="main__table-text"> <?=$space_info['type'];?> </div>
									</td>
									
									<td>
										<div class="main__table-text"> <?=$seeker['bed'];?> </div>
									</td>
							
									<td>
										<div class="main__table-text">
											<?php
												 $hoods = explode(',',$seeker['hood']);

												    foreach($hoods as $hood) :?>


										    	<?php
												    			
                                             
												   $hoodQuery = $db->query("SELECT location FROM location WHERE id = $hood");

            									 $hood_info = mysqli_fetch_assoc($hoodQuery);
											   

            									echo $hood_info['location']. '  ';
											?>
											
											

										<?php endforeach; ?>
											
												
											</div>
									</td>
									<td>
										<div class="main__table-text"> <?=money($seeker['budget']);?> </div>
									</td>

									<td>
										<div class="main__table-text"> <?=pretty_date($seeker['move_date']);?> </div>
									</td>


									
								</tr>
							
						<?php endwhile; ?>
						<?php endif; ?>

						<?php endif; ?>