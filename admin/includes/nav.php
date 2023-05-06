<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="dashboard.php" class="sidebar__logo">
			<img src="images/logo.png" alt="">
		</a>
		<!-- end sidebar logo -->
		
		<!-- sidebar user -->
		<div class="sidebar__user">
			<?php if($admin_data['profile_image'] != ''):?>
			<div class="sidebar__user-img">

				<img src="<?=$admin_data['profile_image'];?>" alt="">
			</div>
		<?php endif; ?>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<p><?=$admin_data['full_name'];?></p>
			</div>

			<button onclick="logout()" class="sidebar__user-btn" type="button">
				<i class="icon ion-ios-log-out"></i>
			</button>
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a href="dashboard.php" class="sidebar__nav-link"><i class="icon ion-ios-keypad"></i> Dashboard</a>
			</li>

			

			<li class="sidebar__nav-item">
				<a href="seekers.php" class="sidebar__nav-link"><i class="icon ion-ios-home"></i>Apartment Seekers</a>
			</li>
<!--
			<li class="sidebar__nav-item">
				<a href="catalog.php" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> Movie Catalog</a>
			</li>
		-->

			<!-- dropdown -->
			<li class="dropdown sidebar__nav-item">
				<a class="dropdown-toggle sidebar__nav-link" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-contact"></i> My Settings</a>

				<ul class="dropdown-menu sidebar__dropdown-menu scrollbar-dropdown" aria-labelledby="dropdownMenuMore">
					<li><a href="changepassword.php">Change Password</a></li>
					<li><a href="settings.php">Profile Settings</a></li>
					
				</ul>
			</li>
			<!-- end dropdown -->
		</ul>
		<!-- end sidebar nav -->
		
		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© 2021 Mushrooms. <br>Created by <a href="#">Mushrooms</a></div>
		<!-- end sidebar copyright -->
	</div>
	<!-- end sidebar -->
