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
						<h2>Apartment seekers</h2>

					<a href="dashboard.php" class="main__title-link">Dashboard</a>
					</div>
				</div>

		


				<!-- users -->
				<div class="col-12">
					<div class="main__table-wrap">
						<table class="main__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Phone</th>
									<th>Space Type</th>
									<th>Room No</th>
									<th>Hood</th>
									<th>Budget</th>
									<th>Move Date</th>

								
								</tr>
							</thead>

							<tbody class="seekers_feed">
		
							</tbody>
						</table>
					</div>
				</div>
				<!-- end users -->

				<!-- paginator -->
				
				<div class="col-12">
					<div class="paginator-wrap">
					<span>More Results</span>

					
					</div>
				</div>
			
				<!-- end paginator -->
			</div>
		</div>
	</main>
	<!-- end main content -->
 <?php 
 include 'includes/footer.php';
 ?>