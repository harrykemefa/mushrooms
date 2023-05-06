    <nav class="navbar navbar-expand-md bg-dark nklyn-navigation">
  <!--  Show this only on mobile to medium screens  -->
    <ul class="navbar-nav d-flex flex-row d-md-none">
      <li class="nav-item d-inline-flex">
        <a class="nav-link" data-toggle="popover" data-container="body" data-html="true" id="mobile-search-popover-link" href="#">
         <i class="nookons-search"></i>
</a>      </li>
    </ul>
  <a href="/rent">
    <img class="navbar-wordmark navbar-brand d-md-none" src="images/logo.png" alt="Mushrooms logo">
</a>     <a class="button btn-black-yellow-login btn-rounded d-block d-sm-none" href="login.php">Login</a>
  <!--  Use flexbox utility classes to change how the child elements are justified  -->
  <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-block">
        <a class="nav-link" data-toggle="popover" data-container="body" data-html="true" id="search-popover-click" href="#">
         <i class="nookons-search"></i> Browse <i class="nookons-chevron-down"></i>
</a>      </li>
<!--
      <li class="nav-item d-none d-sm-block">
        <a class="nav-link" data-toggle="popover" data-container="body" data-html="true" id="explore-popover-click" href="#">
         <i class="nookons-map"></i> Explore <i class="nookons-chevron-down"></i>
</a>      </li>
-->
    </ul>
    <!--   Show this only md screens and up   -->
    <a href="/rent">
      <img class="navbar-wordmark navbar-brand d-none d-md-block" src="images/logo.png" alt="Mushrooms logo">
</a>       <?php if (user_is_logged_in()): ?>
      <div class="ml-auto">
    <ul class="navbar-nav nklynbar-nav">
        <li class="nav-item">
          <a class="nav-link"  href="#">
     <div class="nav-agent-name d-none d-lg-inline-flex ml-1">  <?=$user_data['first_name'];?></div>
</a>        </li>
         <div class="vertical-divider d-none d-md-inline-block"></div>
   <!--     <li class='nav-item'><a class="nav-link" href="/conversations"><i class="nookons-messages-fill "></i></a></li> -->
       <!-- <li class='nav-item'><a class="nav-link" href="/conversations"><i class="nookons-messages-fill "></i></a></li>-->
        <li class="dropdown agent-dropdown nav-item">
  <a href="#" class="nav-link" data-toggle="dropdown"> <span class="d-lg-none meta-x">Menu</span> <i class="nookons-settings-fill meta-x"></i></a>
   <a href="/menu" class="nav-link meta-link"> <span class="d-lg-none">Dashboard</span> <i class="nookons-home"></i></a>
      <a href="#" class="nav-link meta-link" id="logout-button"> <span class="d-lg-none">Log out</span> <i class="nookons-log-out"></i></a>
  <ul class="dropdown-menu nklynbar-nav-dark dropdown-menu-right">
       <li class="dropdown-item">
      <a href="#">
        <i class="nookons nookons-home float-right"></i>
        Dashboard
</a>    </li>

    <li class="dropdown-item">
      <a id="logout-button"  href="#">
        <i class="nookons-log-out float-right"></i>
        Logout
</a>    </li>
  </ul>
</li>

    </ul>
  </div>
<?php else: ?>
       <ul class="navbar-nav">
     <li class="nav-item d-none d-sm-block">
        <a class="button btn-black-yellow-login btn-rounded" href="login.php" >Log in</a>
         
        </li>
       <li class="nav-item d-none d-sm-block">
         <a class="button btn-black-yellow-signup btn-rounded" href="signup">Sign Up</a>
        </li>
        <li class="nav-item d-block d-sm-none">
          <a class="nav-link login">Login</a>
        </li>
        <li class="nav-item d-block d-sm-none">
          <a class="nav-link register">Create Account</a>
        </li>
    </ul>
<?php endif; ?>
  </div>
</nav>


<div id="search-content" class="d-none">
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <a href="apartments/">
          <img class="img-fluid mx-auto" src="images/listing-24955abcff0277f7f80c1d6b129663b8b789a1a4745d1bfbe101c0a46898942a.png" alt="Listing">
          Apartments
</a>      </div>
      <div class="col-4">
        <a href="/mates">
        <img class="img-fluid mx-auto" src="images/rooms-c7345d41634ec4f688cc89b41caa64f2dd6dcf65378dd8178305eb751c8f2cf4.png" alt="Rooms">
        Rooms
</a>      </div>
      <div class="col-4">
        <a href="/mates">
        <img class="img-fluid mx-auto" src="images/agents-4c3b7c6517b9f95f49bb000649270ae8773da7bb581a2ca30c927b539d02f8a8.png" alt="Roommates" target="_blank">
        Roommates
</a>      </div>
    </div>
    <hr>
  
 <br>
  </div>
</div>