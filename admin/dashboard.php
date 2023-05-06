<?php 
 ob_start();
  include 'includes/header.php';
  include 'includes/nav.php';


 ?>

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Dashboard</h2>
													       <?php
    $sql="SELECT * FROM renters ORDER BY move_date ASC";
    $result = $db->query($sql);

    $count = mysqli_num_rows($result);
    $no = 0;

     $tab_sql="SELECT * FROM tab";
    $tab_result = $db->query($tab_sql);
    $tab_count = mysqli_num_rows($tab_result);

      $match_sql="SELECT * FROM match_mates";
    $match_result = $db->query($match_sql);
    $match_count = mysqli_num_rows($match_result);

         $fav_sql="SELECT * FROM favorites";
    $fav_result = $db->query($fav_sql);
    $fav_count = mysqli_num_rows($fav_result);

      $roommie_sql= $db->query("SELECT * FROM flatmates");
     $roomie_count = mysqli_num_rows($roommie_sql);


      $users_sql= $db->query("SELECT * FROM users");
     $users_count = mysqli_num_rows($users_sql);

      $seekers_sql=  $db->query("SELECT * FROM seekers");
      $seekers_count = mysqli_num_rows($seekers_sql);
    ?>



					<a href="add.php?add=1" class="main__title-link">Add Renter</a>
					</div>
				</div>

				<div class="col-6 col-sm-6 col-xl-3 ">
					<div class="stats">
						<span>Total No of Users</span>
						<p><?=$users_count;?></p>
						<i class="icon ion-ios-happy"></i>
					</div>
				</div>
				<!-- end main title -->
				<div class="col-6 col-sm-6 col-xl-3">
					<div class="stats">
						<span>No of Flatmates</span>
						<p><?=$roomie_count;?></p>
						<i class="icon ion-ios-man"></i>
					</div>
				</div>

				<div class="col-6 col-sm-6 col-xl-3">
					<div class="stats">
						<span>No of Renters</span>
						<p><?=$count;?></p>
						<i class="icon ion-ios-home"></i>
					</div>
				</div>

					<div class="col-6 col-sm-6 col-xl-3">
							<a href="seekers.php">
					<div class="stats">

						<span>Apartment Seekers</span>
						<p><?=$seekers_count;?></p>
						<i class="icon ion-ios-home"></i>
					</div>
					</a>
				</div>

				<div class="col-6 col-sm-6 col-xl-3">
							
					<div class="stats">

						<span>Total no of clicks </span>
						<p><?=$tab_count;?></p>
						<i class="icon ion-ios-hand"></i>
					</div>
					
				</div>

					<div class="col-6 col-sm-6 col-xl-3">
							
					<div class="stats">

						<span>No of favorite clicks </span>
						<p><?=$fav_count;?></p>
						<i class="icon ion-ios-heart"></i>
					</div>
					
				</div>

					<div class="col-6 col-sm-6 col-xl-3">
							
					<div class="stats">

						<span>Total no of matches </span>
						<p><?=$match_count;?></p>
						<i class="icon ion-ios-flame"></i>
					</div>
					
				</div>


				<!-- users -->
				<!--
				<div class="col-12">
					<div class="main__table-wrap">
						<table class="main__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Phone</th>
									<th>Status</th>
									<th>Availability</th>
									<th>Location</th>
									<th>Rent cost</th>

								

									<th>Actions</th>
								</tr>
							</thead>

							<tbody class="renter_feeds">
		
							</tbody>
						</table>
					</div>
				</div>
			-->
				<!-- end users -->

				<!-- paginator -->
				<!--
				<div class="col-12 load_div">
					<div class="paginator-wrap">
					<span  class="load-more">More Results</span>

					
					</div>
				</div>
			-->
			
				<!-- end paginator -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- modal status -->
	<div id="modal-status" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Status change</h6>

		<p class="modal__text">Are you sure about immediately change status?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Apply</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal status -->

	<!-- modal delete -->
	<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Item delete</h6>

		<p class="modal__text">Are you sure to permanently delete this item?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Delete</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal delete -->

 <?php 
 include 'includes/footer.php';
 ?>