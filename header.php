<div class="topbar bg-main">
	<div class="container">
		<div class="topbar-inner">
			<div class="topbar-item topbar-padding">
				<ul class="social-list social-list-white">
					<!-- <li><a href="#" title="Facebook"><i class="flaticon-facebook"></i></a></li>
					<li><a href="" title="Twitter"><i class="flaticon-twitter"></i></a></li>
					<li><a href="" title="Linkedin"><i class="flaticon-linkedin"></i></a></li>
					<li><a href="" title="Youtube"><i class="flaticon-youtube"></i></a></li>
					<li><a href="" title="Instagram"><i class="flaticon-instagram-1"></i></a></li> -->
				</ul>
			</div>
			<div class="topbar-item">
				<div class="topbar-right d-flex flex-wrap topbar-right justify-content-center justify-content-md-start full-height">

					<div class="topbar-right-item topbar-padding color-white">
						<i class="flaticon-email"></i>&nbsp;hungers1411@gmli.com
					</div>
					<div class="topbar-right-item topbar-padding color-white">
						<i class="flaticon-smartphone-call"></i>
						<a href="tel:001-964-565-87652" class="color-white">(+91)87350 60385</a>
					</div>
					<div class="topbar-right-item topbar-padding color-white">
						<i class="flaticon-user"></i>
						<?php
						if ($_SESSION['userid'] == "")
						{
						?>

							<a href="login.php" class="color-white">Log in</a>
						<?php
						} else
						{
						?>
							<a href="logout.php" class="color-white">Log out</a>&nbsp;

							<i class="fas fa-tachometer-alt"></i>&nbsp;<a href="usermaster.php" class="color-white">Dashboard</a>
						<?php
						}
						?>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>



<header>
<?php
if($_SESSION['userid']!="")
{
?>
<div style="display: none;" id="tx">

</div>
<?php
}
?>

	<div class="fixed-top">
		<div class="navbar-area navbar-dark">

			<div class="mobile-nav">
				<a href="index.php" class="mobile-brand">
					<img src="assets/images/flogo.png" alt="logo" class="blue-logo">
				</a>

				<div class="navbar-option d-flex align-items-center">
					<div class="navbar-option-item navbar-option-dots mobile-hide">
						<button class="dropdown-toggle" type="button" id="mobileOptionDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="flaticon-menu-1"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="mobileOptionDropdown">
							<div class="navbar-option-item navbar-option-cart">
								<a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
								<span class="option-badge">0</span>
							</div>
							<div class="navbar-option-item navbar-option-order">
								<a href="shops-grid.html" class="btn">
									<i class="flaticon-shopping-cart-black-shape"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="navbar-option-item navbar-option-cart mobile-block">
						<a href="#" class="productCart"><i class="flaticon-supermarket-basket"></i></a>
						<span class="option-badge">0</span>
					</div>
					<div class="navbar-option-item navbar-option-order mobile-block">
						<a href="shops-grid.html" class="btn">
							<i class="flaticon-shopping-cart-black-shape"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="main-nav">
				<div class="container">
					<nav class="navbar navbar-expand-md navbar-light">
						<a class="navbar-brand" href="index.php" title="keep calm and Eat strong">
							<img src="assets/images/flogo.png" alt="logo" class="logo">
						</a>

						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav ms-auto">
							    <?php
								 if($_SESSION['page']=="index")
								 {
								?>
								<li class="nav-item">
									<a href="index.php" class="nav-link active">HOME</a>
								</li>
                                <?php
								 }
								 else
								 {
								 ?>
								 <li class="nav-item">
									<a href="index.php" class="nav-link">HOME</a>
								</li>
								<?php
								 }
								 ?>

								<?php
								 if($_SESSION['page']=="aboutus")
								 {
								?>
								<li class="nav-item">
									<a href="about-us.php" class="nav-link active">About Us</a>
								</li>
								<?php
								 }
								 else
								 {
								 ?>
								 <li class="nav-item">
									<a href="about-us.php" class="nav-link">About Us</a>
								</li>
								 <?php
								 }
								 ?>

								 <?php
								 if($_SESSION['page']=="allitems")
								 {
								?>
								<li class="nav-item">
									<a href="allitems.php" class="nav-link active">Items</a>
								</li>
                                <?php
								 }
								 else
								 {
								 ?>
                                <li class="nav-item">
									<a href="allitems.php" class="nav-link">Items</a>
								</li>
								<?php
								 }
								 ?>


                                <?php
								 if($_SESSION['page']=="allfixthali")
								 {
								?>
								<li class="nav-item">
									<a href="allfixthali.php" class="nav-link active">Fixthali</a>
								</li>
                                <?php
								 }
								 else
								 {
								 ?>
								<li class="nav-item">
									<a href="allfixthali.php" class="nav-link">Fixthali</a>
								</li>
								<?php
								 }
								?>

                                <?php
								 if($_SESSION['page']=="contactus")
								 {
								?>
								<li class="nav-item">
									<a href="contact-us.php" class="nav-link active">CONTACT US</a>
								</li>
                                <?php
								 }
								 else
								 {
								 ?>
								 <li class="nav-item">
									<a href="contact-us.php" class="nav-link">CONTACT US</a>
								</li>
								<?php
								 }
								?>

							</ul>
						</div>

                        <?php
								 if($_SESSION['page']=="cart")
								 {
								?>
								<div class="navbar-option-item navbar-option-order">
							        <a href="carthistory.php" class="btn text-nowrap">
								    Cart History&nbsp;<i class="flaticon-supermarket-basket"></i>
							        </a>
						        </div>
                                <?php
								 }
								 else
								 {
								 ?>
								 <div class="navbar-option-item navbar-option-order">
							        <a href="cart.php" class="btn text-nowrap">
								    Cart&nbsp;<i class="flaticon-supermarket-basket"></i>
							        </a>
						        </div>
								<?php
								 }
								?>

				</div>
				</nav>
			</div>
		</div>
	</div>
	</div>

</header>
