<?php 
 // $title = 'Dejx - Dashboard';
 ob_start();
  include 'includes/header.php';
  include 'includes/nav.php';


 if (isset($_GET['delete'])) {
   $delete_id = sanitize($_GET['delete']);
   $sql = "SELECT * FROM movies WHERE id = '$delete_id'";
   $result = $db->query($sql);
   $movie = mysqli_fetch_assoc($result);
    $image_url = $_SERVER['DOCUMENT_ROOT'].$movie['cover_photo'];
    unlink($image_url);
   $db->query("DELETE FROM movies WHERE id = $delete_id");
  
   header('Location: catalog.php');

  }

 ?>

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Catalog</h2>
													       <?php
    $sql="SELECT * FROM movies ORDER BY id DESC";
    $result = $db->query($sql);

    $count = mysqli_num_rows($result);
    $no = 0;
    ?>

						<span class="main__title-stat"><?=$count;?> Movies Total</span>

					<a href="add.php?add=1" class="main__title-link">Add Movie</a>
					</div>
				</div>
				<!-- end main title -->

				<!-- users -->
				<div class="col-12">
					<div class="main__table-wrap">
						<table class="main__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>TITLE</th>
									<th>GENRE</th>
									<th>SHOWING DATE</th>
									<th>ACTIONS</th>
								</tr>
							</thead>

							<tbody>
	


    <?php while($movie = mysqli_fetch_assoc($result)):
    	$no++;

     ?>
								<tr>
									<td>
										<div class="main__table-text"><?=$no;?></div>
									</td>
									<td>
										<div class="main__table-text"><?=$movie['title'];?></div>
									</td>
									<!--
									<td>
										<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 7.9</div>
									</td>
								-->
									<td>
										<div class="main__table-text"><?=$movie['genre'];?></div>
									</td>
									
									<td>
										<div class="main__table-text"><?=pretty_date($movie['show_date']);?></div>
									</td>
									<td>
										<div class="main__table-btns">
										
											<a href="add.php?edit=<?=$movie['id'];?>" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="catalog.php?delete=<?=$movie['id'];?>" class="main__table-btn main__table-btn--delete">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
							
						<?php endwhile; ?>	
							</tbody>
						</table>
					</div>
				</div>
				<!-- end users -->

				<!-- paginator -->
				<!--
				<div class="col-12">
					<div class="paginator-wrap">
						<span>10 from 14 452</span>

						<ul class="paginator">
						
							<li class="paginator__item paginator__item--next">
								<a href="#"><i class="icon ion-ios-arrow-forward"></i> </a>
							</li>
						</ul>
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