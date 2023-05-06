
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
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body>

	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="index.html" class="header__logo">
				<img src="img/logo.svg" alt="">
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

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="index.html" class="sidebar__logo">
			<img src="img/logo.svg" alt="">
		</a>
		<!-- end sidebar logo -->
		
		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="img/user.svg" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<p>John Doe</p>
			</div>

			<button class="sidebar__user-btn" type="button">
				<i class="icon ion-ios-log-out"></i>
			</button>
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a href="index.html" class="sidebar__nav-link"><i class="icon ion-ios-keypad"></i> Dashboard</a>
			</li>

			<li class="sidebar__nav-item">
				<a href="catalog.html" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> Catalog</a>
			</li>

			<li class="sidebar__nav-item">
				<a href="users.html" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-contacts"></i> Users</a>
			</li>

			<li class="sidebar__nav-item">
				<a href="comments.html" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> Comments</a>
			</li>

			<li class="sidebar__nav-item">
				<a href="reviews.html" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> Reviews</a>
			</li>

			<!-- dropdown -->
			<li class="dropdown sidebar__nav-item">
				<a class="dropdown-toggle sidebar__nav-link" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-copy"></i> Pages</a>

				<ul class="dropdown-menu sidebar__dropdown-menu scrollbar-dropdown" aria-labelledby="dropdownMenuMore">
					<li><a href="add-item.html">Add item</a></li>
					<li><a href="edit-user.html">Edit user</a></li>
					<li><a href="signin.html">Sign In</a></li>
					<li><a href="signup.html">Sign Up</a></li>
					<li><a href="forgot.html">Forgot password</a></li>
					<li><a href="404.html">404 Page</a></li>
				</ul>
			</li>
			<!-- end dropdown -->
		</ul>
		<!-- end sidebar nav -->
		
		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© 2020 HotFlix. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
		<!-- end sidebar copyright -->
	</div>
	<!-- end sidebar -->

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Users</h2>

						<span class="main__title-stat">3,702 Total</span>

						<div class="main__title-wrap">
							<!-- filter sort -->
							<div class="filter" id="filter__sort">
								<span class="filter__item-label">Sort by:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Date created">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
									<li>Date created</li>
									<li>Pricing plan</li>
									<li>Status</li>
								</ul>
							</div>
							<!-- end filter sort -->

							<!-- search -->
							<form action="#" class="main__title-form">
								<input type="text" placeholder="Find user..">
								<button type="button">
									<i class="icon ion-ios-search"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
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
									<th>BASIC INFO</th>
									<th>USERNAME</th>
									<th>PRICING PLAN</th>
									<th>COMMENTS</th>
									<th>REVIEWS</th>
									<th>STATUS</th>
									<th>CRAETED DATE</th>
									<th>ACTIONS</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>
										<div class="main__table-text">23</div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3>John Doe</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
									<td>
										<div class="main__table-text">Premium</div>
									</td>
									<td>
										<div class="main__table-text">13</div>
									</td>
									<td>
										<div class="main__table-text">1</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Approved</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="edit-user.html" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">24</div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3>John Doe</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
									<td>
										<div class="main__table-text">Free</div>
									</td>
									<td>
										<div class="main__table-text">1</div>
									</td>
									<td>
										<div class="main__table-text">15</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Approved</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="edit-user.html" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">25</div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3>John Doe</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
									<td>
										<div class="main__table-text">Premium</div>
									</td>
									<td>
										<div class="main__table-text">6</div>
									</td>
									<td>
										<div class="main__table-text">6</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Approved</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="edit-user.html" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">26</div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3>John Doe</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
									<td>
										<div class="main__table-text">Free</div>
									</td>
									<td>
										<div class="main__table-text">11</div>
									</td>
									<td>
										<div class="main__table-text">15</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--red">Banned</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="edit-user.html" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">27</div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3>John Doe</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
									<td>
										<div class="main__table-text">Basic</div>
									</td>
									<td>
										<div class="main__table-text">0</div>
									</td>
									<td>
										<div class="main__table-text">0</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Approved</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="edit-user.html" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">28</div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3>John Doe</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
									<td>
										<div class="main__table-text">Free</div>
									</td>
									<td>
										<div class="main__table-text">2</div>
									</td>
									<td>
										<div class="main__table-text">1</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Approved</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="edit-user.html" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">29</div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3>John Doe</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
									<td>
										<div class="main__table-text">Cinematic</div>
									</td>
									<td>
										<div class="main__table-text">65</div>
									</td>
									<td>
										<div class="main__table-text">0</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Approved</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="edit-user.html" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">30</div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3>John Doe</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
									<td>
										<div class="main__table-text">Premium</div>
									</td>
									<td>
										<div class="main__table-text">0</div>
									</td>
									<td>
										<div class="main__table-text">0</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--red">Banned</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="edit-user.html" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">31</div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3>John Doe</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
									<td>
										<div class="main__table-text">Premium</div>
									</td>
									<td>
										<div class="main__table-text">13</div>
									</td>
									<td>
										<div class="main__table-text">1</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Approved</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="edit-user.html" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="main__table-text">32</div>
									</td>
									<td>
										<div class="main__user">
											<div class="main__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="main__meta">
												<h3>John Doe</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td>
									<td>
										<div class="main__table-text">Username</div>
									</td>
									<td>
										<div class="main__table-text">Free</div>
									</td>
									<td>
										<div class="main__table-text">1</div>
									</td>
									<td>
										<div class="main__table-text">15</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--red">Banned</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="edit-user.html" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- end users -->

				<!-- paginator -->
				<div class="col-12">
					<div class="paginator-wrap">
						<span>10 from 3 702</span>

						<ul class="paginator">
							<li class="paginator__item paginator__item--prev">
								<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
							</li>
							<li class="paginator__item"><a href="#">1</a></li>
							<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
							<li class="paginator__item"><a href="#">3</a></li>
							<li class="paginator__item"><a href="#">4</a></li>
							<li class="paginator__item paginator__item--next">
								<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
							</li>
						</ul>
					</div>
				</div>
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
		<h6 class="modal__title">User delete</h6>

		<p class="modal__text">Are you sure to permanently delete this user?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Delete</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal delete -->

	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>