	
<?php
	if(@$_GET['k']=="identification")
	{
		@$titre1="CREATION DE VOTRE ENTITE";
	}else
	{
		@$titre1='TRAZISHOP | <a href="foire.php">FOIRE</a>';
	}
?>
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar" style="background:rgb(2, 0, 97, 0.2) !important; ">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> <a href="tel:+243997375050">+243 99 73 75 050</a></li>
								<li><i class="ti-email"></i>
									<a href="mailto:contact@trazishop.com">contact@trazishoprdc.com</a></li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<?php include_once("con_decon.php"); ?>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="images/logo.jpg" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<h4> <?php echo @$titre1; ?> </h4>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li><a href="index.php">ACCUEIL</a></li>
													<li><a href="#">ANNONCES</a></li>												
													<li><a href="offre_emploi.php"> OFFRE D’EMPLOI</a></li>
													<li><a href="#">OFFRE DE MARCHE<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="#">Offre 1</a></li>
															<li><a href="#">Offre 2</a></li>
														</ul>
													</li>
													<li><a href="#">OFFRE IMMOBILIERE</a></li>									
													<li><a href="#">Autres<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="#">Contact</a></li>
															<li><a href="#">FAQ</a></li>
														</ul>
													</li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->