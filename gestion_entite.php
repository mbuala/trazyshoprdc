<?php include_once("fonction/session.php");

$btn_text = "Approuver";

include_once("fonction/connexion.php");

if (isset($_GET['btn_appr'])) {

	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$con->exec("UPDATE entite SET statut='Approuvé' WHERE identifiant='" . $_GET['k'] . "'");

	echo '

			<script>

				alert("L\'operation résussie !");

				location.href="gestion_entite.php";

			</script>

		';
}

if (isset($_GET['btn_suppr'])) {

	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$con->exec("DELETE FROM entite WHERE identifiant='" . $_GET['k'] . "'");

	$con->exec("DELETE FROM activite WHERE entite='" . $_GET['k'] . "'");

	$con->exec("DELETE FROM actualite WHERE entite='" . $_GET['k'] . "'");

	$con->exec("DELETE FROM portefeuille WHERE entite='" . $_GET['k'] . "'");

	//

	echo '

			<script>

				alert("Vous venez de supprimer la structure avec tout ce qui l\'accompagne (Portefeuilles, actualités, palmares, etc. ) !");

				location.href="gestion_entite.php";

			</script>

		';
}

?>

<!DOCTYPE html>

<html lang="fr">

<head>

	<!-- Start of Async Callbell Code -->

	<script>
		window.callbellSettings = {

			token: "JAReCdWRNiPpetVwHJK9XSoa"

		};
	</script>

	<script>
		(function() {
			var w = window;
			var ic = w.callbell;
			if (typeof ic === "function") {
				ic('reattach_activator');
				ic('update', callbellSettings);
			} else {
				var d = document;
				var i = function() {
					i.c(arguments)
				};
				i.q = [];
				i.c = function(args) {
					i.q.push(args)
				};
				w.Callbell = i;
				var l = function() {
					var s = d.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = 'https://dash.callbell.eu/include/' + window.callbellSettings.token + '.js';
					var x = d.getElementsByTagName('script')[0];
					x.parentNode.insertBefore(s, x);
				};
				if (w.attachEvent) {
					w.attachEvent('onload', l);
				} else {
					w.addEventListener('load', l, false);
				}
			}
		})()
	</script>

	<!-- End of Async Callbell Code -->

	<!-- Meta Tag -->

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name='copyright' content=''>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title Tag  -->

	<title>FOIRE | Trazishop</title>

	<!-- Favicon -->

	<link rel="icon" type="image/png" href="images/favicon.png">

	<!-- Web Font -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">



	<!-- StyleSheet -->



	<!-- Bootstrap -->

	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->

	<link rel="stylesheet" href="css/magnific-popup.min.css">

	<!-- Font Awesome -->

	<link rel="stylesheet" href="css/font-awesome.css">

	<!-- Fancybox -->

	<link rel="stylesheet" href="css/jquery.fancybox.min.css">

	<!-- Themify Icons -->

	<link rel="stylesheet" href="css/themify-icons.css">

	<!-- Nice Select CSS -->

	<link rel="stylesheet" href="css/niceselect.css">

	<!-- Animate CSS -->

	<link rel="stylesheet" href="css/animate.css">

	<!-- Flex Slider CSS -->

	<link rel="stylesheet" href="css/flex-slider.min.css">

	<!-- Owl Carousel -->

	<link rel="stylesheet" href="css/owl-carousel.css">

	<!-- Slicknav -->

	<link rel="stylesheet" href="css/slicknav.min.css">



	<!-- Eshop StyleSheet -->

	<link rel="stylesheet" href="css/reset.css">

	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="css/responsive.css">





</head>

<body class="js">



	<!-- Preloader -->

	<div class="preloader">

		<div class="preloader-inner">

			<div class="preloader-icon">

				<span></span>

				<span></span>

			</div>

		</div>

	</div>

	<!-- End Preloader -->

	<!-- Header -->

	<header class="header shop">

		<!-- Topbar -->

		<div class="topbar">

			<div class="container">

				<div class="row">

					<div class="col-lg-5 col-md-12 col-12">

						<!-- Top Left -->

						<div class="top-left">

							<ul class="list-main">

								<li><i class="ti-headphone-alt"></i> <a href="tel:+243997375050">+243 99 73 75 050</a></li>

								<li><i class="ti-email"></i>

									<a href="mailto:contact@trazishop.com">contact@trazishop.com</a>
								</li>

							</ul>

						</div>

						<!--/ End Top Left -->

					</div>

					<?php include_once("page/con_decon.php"); ?>

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

							<a href="index.html"><img src="images/logo.jpg" alt="logo"></a>

						</div>

						<!--/ End Logo -->

						<div class="mobile-nav"></div>

					</div>

					<div class="col-lg-8 col-md-7 col-12">

						<div class="search-bar-top">

							<div class="search-bar">

								<marquee>
									<h4> Portrait du marché </h4>
								</marquee>

							</div>

						</div>

					</div>

					<div class="col-lg-2 col-md-3 col-12">

						<div class="right-bar">

							<!-- Search Form -->

							<div class="sinlge-bar shopping">

								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>

								<!-- Shopping Item -->

								<div class="shopping-item">

									<div class="dropdown-cart-header">

										<span>Nombre produit</span>

										<a href="#">Votre panier</a>

									</div>

									<ul class="shopping-list">

										<li>

											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>

											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>

											<h4><a href="#">Produit 1</a></h4>

											<p class="quantity">1x - <span class="amount">00.00 USD</span></p>

										</li>

										<li>

											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>

											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>

											<h4><a href="#">Produit 2</a></h4>

											<p class="quantity">1x - <span class="amount">00.00 USD</span></p>

										</li>

									</ul>

									<div class="bottom">

										<div class="total">

											<span>Total</span>

											<span class="total-amount">00.00 USD</span>

										</div>

										<a href="checkout.html" class="btn animate">Valider</a>

									</div>

								</div>

								<!--/ End Shopping Item -->

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

						<div class="col-lg-3">

							<div class="all-category">

								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>Module</h3>

								<ul class="main-category">

									<li><a href="#">Entités</a></li>

									<li><a href="#">Supprimer offre d'emploi</a></li>

									<li><a href="#">Modifier Offre d'emploi</a></li>

									<li><a href="creation_offre.php">ajouter offre d'emploi</a></li>

								</ul>

							</div>

						</div>

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

	<!--/ End Slider Area -->

	<section class="section free-version-banner" style="margin-bottom:5px; padding-bottom:10px">

		<div class="container">

			<div class="row align-items-center">

				<div class="col-md-8 offset-md-2 col-xs-12">

					<div class="section-title mb-60">

						<span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Cette page privée</span>

						<h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Tableau de gestion des <br> Entités </h2>

						<p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Text

						</p>



					</div>

				</div>

			</div>

		</div>

	</section>

	<!-- Start Product Area -->

	<?php

	if (isset($_GET['recherche'])) {

		$act_e = "active";

		$act_o = "";

		$act_eg = "";

		$act_ec = "";

		$act_u = "";

		$act_sp = "";

		//

		$show_e = "show active";

		$show_o = "";

		$show_eg = "";

		$show_ec = "";

		$show_u = "";

		$show_sp = "";
	} elseif (isset($_GET['recherche_o'])) {

		$act_e = "";

		$act_o = "active";

		$act_eg = "";

		$act_ec = "";

		$act_u = "";

		$act_sp = "";

		//

		$show_e = "";

		$show_o = "show active";

		$show_eg = "";

		$show_ec = "";

		$show_u = "";

		$show_sp = "";
	} elseif (isset($_GET['recherche_eg'])) {

		$act_e = "";

		$act_o = "";

		$act_eg = "active";

		$act_ec = "";

		$act_u = "";

		$act_sp = "";

		//

		$show_e = "";

		$show_o = "";

		$show_eg = "show active";

		$show_ec = "";

		$show_u = "";

		$show_sp = "";
	} elseif (isset($_GET['recherche_ec'])) {

		$act_e = "";

		$act_o = "";

		$act_eg = "";

		$act_ec = "active";

		$act_u = "";

		$act_sp = "";

		//

		$show_e = "";

		$show_o = "";

		$show_eg = "";

		$show_ec = "show active";

		$show_u = "";

		$show_sp = "";
	} elseif (isset($_GET['recherche_u'])) {

		$act_e = "";

		$act_o = "";

		$act_eg = "";

		$act_ec = "";

		$act_u = "active";

		$act_sp = "";

		//

		$show_e = "";

		$show_o = "";

		$show_eg = "";

		$show_ec = "";

		$show_u = "show active";

		$show_sp = "";
	} elseif (isset($_GET['recherche_sp'])) {

		$act_e = "";

		$act_o = "";

		$act_eg = "";

		$act_ec = "";

		$act_u = "";

		$act_sp = "active";

		//

		$show_e = "";

		$show_o = "";

		$show_eg = "";

		$show_ec = "";

		$show_u = "";

		$show_sp = "show active";
	} else {

		$act_e = "active";

		$act_o = "";

		$act_eg = "";

		$act_ec = "";

		$act_u = "";

		$act_sp = "";

		//

		$show_e = "show active";

		$show_o = "";

		$show_eg = "";

		$show_ec = "";

		$show_u = "";

		$show_sp = "";
	}

	?>

	<div class="product-area section" style="margin-top:0px; padding-top:0px">

		<div class="container">

			<div class="row">

				<div class="col-12">

					<div class="product-info">

						<div class="nav-main">

							<!--/ End Tab Nav -->

						</div>

						<div class="nav-main">

							<!-- Tab Nav -->

							<ul class="nav nav-tabs" id="myTab" role="tablist">

								<li class="nav-item"><a class="nav-link <?= @$act_e; ?>" data-toggle="tab" href="#man" role="tab" style="font-size:20px">ENTREPRISE</a></li>

								<li class="nav-item"><a class="nav-link <?= @$act_o; ?>" data-toggle="tab" href="#women" role="tab" style="font-size:20px">ORGANISATION</a></li>

								<li class="nav-item"><a class="nav-link <?= @$act_eg; ?>" data-toggle="tab" href="#kids" role="tab" style="font-size:20px">EGLISE</a></li>

								<li class="nav-item"><a class="nav-link <?= @$act_ec; ?>" data-toggle="tab" href="#accessories" role="tab" style="font-size:20px">ECOLE</a></li>

								<li class="nav-item"><a class="nav-link <?= @$act_u; ?>" data-toggle="tab" href="#essential" role="tab" style="font-size:20px">UNIVERSITE</a></li>

								<li class="nav-item"><a class="nav-link <?= @$act_sp; ?>" data-toggle="tab" href="#prices" role="tab" style="font-size:20px">SERVICES PUBLIQUES</a></li>

							</ul>

							<!--/ End Tab Nav -->

						</div>

						<div class="tab-content" id="myTabContent" style="background: #F9F9F9; padding-left:25px; text-align: center;">

							<!-- Start Single Tab -->

							<div class="tab-pane fade <?= @$show_e; //show active 
														?>" id="man" role="tabpanel">

								<hr>

								<!-- Start recherche  -->

								<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

									<div class="container">

										<div class="inner-top">

											<div class="row">

												<div class="col-lg-8 offset-lg-2 col-12">

													<!-- Start Newsletter Inner -->

													<div class="inner">

														<form method="get" class="newsletter-inner">

															<input name="recherche" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche']; ?>" required="" type="text">

															<button class="btn" name="btn_recherche" value="recherche"><i class="ti-search"></i></button>

														</form>

													</div>

													<!-- End Newsletter Inner -->

												</div>

											</div>

										</div>

									</div>

								</section>

								<!-- End recherche -->

								<hr>

								<div class="tab-single">

									<div class="row">

										<?php



										// code affichage des entreprises

										//

										try {

											if (isset($_GET['btn_recherche'])) {

												if (!empty($_GET['recherche'])) {

													//Variable recherche 

													$mot_cle = strtoupper($_GET['recherche']);

													$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

													//

													$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

													$resultat = $con->query("SELECT * FROM entite WHERE categorie='ENTREPRISE' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
												}
											} else {

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='ENTREPRISE' ORDER BY statut DESC");
											}

											//

											//

											if (!$resultat) {

												$mes_erreur = $con->errorInfo();

												echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
											} else {

												while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

													//style en attente

													if ($row[25] == "En attente") {

														$style_enattente = "#710120";

														$etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

														$btn_approuv = "submit";
													} else {

														$style_enattente = "#fff";

														$etat = "";

														$btn_approuv = "hidden";
													}



										?>



													<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">



														<form method="get" style="background: <?= $style_enattente; ?>;">

															<input type="hidden" name="k" value="<?= $row[0]; ?>">

															<input type="<?= $btn_approuv; ?>" name="btn_appr" value="<?= $btn_text; ?>" style="width: 150px; padding:5px;">

															<br>

															<input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">

															<hr>

														</form>

														<span style="font-size: 11px;"><?= $etat ?></span>

														<div class="single-product" style="padding-top: 0px;">

															<div class="product-img">

																<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;"><?= $row[1]; ?>

																</h6>

																<br>

																<a href="gestion_details_affichage_entite.php?k=<?= $row[0]; ?>">

																	<img style="width:150px; height: 120px;" class="default-img" src="<?= $row[3]; ?>" alt="#">

																</a>

																<div class="button-head">

																	<div class="product-action">

																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="gestion_details_affichage_entite.php?k=<?= $row[0]; ?>"><i class=" ti-eye"></i><span><?= $row[10]; ?></span></a>

																	</div>

																	<div class="product-action-2">

																		<a title="Add to cart" href="gestion_details_affichage_entite.php?k=<?= $row[0]; ?>">

																			<?= $row[9]; ?>

																		</a>

																	</div>

																</div>

															</div>

															<div class="product-content">

																<div class="product-price">

																	<hr>

																	<span style="font-size:15px; font-weight:bold;">

																		<i>

																			<?= $row[25]; ?>

																		</i>

																	</span>

																	<br>

																	<a href="gestion_details_affichage_entite.php?k=<?= $row[0]; ?>" style="font-size: 11px;">

																		<strong>ID :</strong> <?= $row[0]; ?>

																	</a>

																</div>

															</div>

														</div>

													</div>

										<?php

												}
											}

											$resultat->closeCursor();
										} catch (PDOException $e) {



											echo "ERREUR :" . $e;
										}





										//

										//

										?>

									</div>

								</div>

							</div>

							<!--/ End Single Tab -->

							<!-- Start Single Tab -->

							<div class="tab-pane fade <?= @$show_o; //show active 
														?>" id="women" role="tabpanel">

								<hr>

								<!-- Start recherche  -->

								<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

									<div class="container">

										<div class="inner-top">

											<div class="row">

												<div class="col-lg-8 offset-lg-2 col-12">

													<!-- Start Newsletter Inner -->

													<div class="inner">

														<form method="get" class="newsletter-inner">

															<input name="recherche_o" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_o']; ?>" required="" type="text">

															<button class="btn" name="btn_recherche_o" value="recherche"><i class="ti-search"></i></button>

														</form>

													</div>

													<!-- End Newsletter Inner -->

												</div>

											</div>

										</div>

									</div>

								</section>

								<!-- End recherche -->

								<hr>

								<div class="tab-single">

									<div class="row">

										<?php



										// code affichage des entreprises

										//

										try {

											if (isset($_GET['btn_recherche_o'])) {

												if (!empty($_GET['recherche_o'])) {

													//Variable recherche 

													$mot_cle = strtoupper($_GET['recherche_o']);

													$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

													//

													$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

													$resultat = $con->query("SELECT * FROM entite WHERE categorie='ORGANISATION' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
												}
											} else {

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='ORGANISATION' ORDER BY date_creation DESC");
											}

											//

											//

											if (!$resultat) {

												$mes_erreur = $con->errorInfo();

												echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
											} else {

												while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

													if ($row[25] == "En attente") {

														$style_enattente = "#710120";

														$etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

														$btn_approuv = "submit";
													} else {

														$style_enattente = "#fff";

														$etat = "";

														$btn_approuv = "hidden";
													}

													echo '

														<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

														<form method="get" style="background: ' . $style_enattente . ';">

															<input type="hidden" name="k" value="' . $row[0] . '">

															<input type="' . $btn_approuv . '" name="btn_appr" value="' . $btn_text . '" style="width: 150px; padding:5px;">	

															<br>

															<input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">	

															<hr>

														</form>

														<span style="font-size: 11px;">' . $etat . '</span>

																<div class="single-product">

																	<div class="product-img">

																	<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

																		<a href="gestion_details_affichage_entite.php?k=' . $row[0] . '">

																			<img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

																		</a>

																		<div class="button-head">

																		<div class="product-action">

																			<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="gestion_details_affichage_entite.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

																			</div>

																			<div class="product-action-2">

																				<a title="Add to cart" href="gestion_details_affichage_entite.php?k=' . $row[0] . '">' . $row[9] . '</a>

																			</div>

																		</div>

																	</div>

																	<div class="product-content">

																		

																		<div class="product-price">

																			<hr>

																			<span style="font-size:15px; font-weight:bold;">

																			<i>

																				' . $row[25] . '

																			</i>

																			</span>

																			<br>

																		<a href="gestion_details_affichage_entite.php?k=' . $row[0] . '" style="font-size: 11px;">

																		<strong>ID :</strong> 	

																		' . $row[0] . '

																		</a>

																	</div>

																</div>

															</div>

														</div>

														';
												}
											}

											$resultat->closeCursor();
										} catch (PDOException $e) {



											echo "ERREUR :" . $e;
										}





										//

										//

										?>

									</div>

								</div>

							</div>

							<!--/ End Single Tab -->

							<!-- Start Single Tab -->

							<div class="tab-pane fade <?= @$show_eg; //show active 
														?>" id="kids" role="tabpanel">

								<hr>

								<!-- Start recherche  -->

								<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

									<div class="container">

										<div class="inner-top">

											<div class="row">

												<div class="col-lg-8 offset-lg-2 col-12">

													<!-- Start Newsletter Inner -->

													<div class="inner">

														<form method="get" class="newsletter-inner">

															<input name="recherche_eg" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_eg']; ?>" required="" type="text">

															<button class="btn" name="btn_recherche_eg" value="recherche"><i class="ti-search"></i></button>

														</form>

													</div>

													<!-- End Newsletter Inner -->

												</div>

											</div>

										</div>

									</div>

								</section>

								<!-- End recherche -->

								<hr>

								<div class="tab-single">

									<div class="row">

										<?php



										// code affichage des entreprises

										//

										try {

											if (isset($_GET['btn_recherche_eg'])) {

												if (!empty($_GET['recherche_eg'])) {

													//Variable recherche 

													$mot_cle = strtoupper($_GET['recherche_eg']);

													$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

													//

													$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

													$resultat = $con->query("SELECT * FROM entite WHERE categorie='EGLISE' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
												}
											} else {

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='EGLISE' ORDER BY date_creation DESC");
											}

											//

											if (!$resultat) {

												$mes_erreur = $con->errorInfo();

												echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
											} else {

												while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

													if ($row[25] == "En attente") {

														$style_enattente = "#710120";

														$etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

														$btn_approuv = "submit";
													} else {

														$style_enattente = "#fff";

														$etat = "";

														$btn_approuv = "hidden";
													}

													echo '

														<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

														<form method="get" style="background: ' . $style_enattente . ';">

														<input type="hidden" name="k" value="' . $row[0] . '">

															<input type="' . $btn_approuv . '" name="btn_appr" value="' . $btn_text . '" style="width: 150px; padding:5px;">	

															<br>

															<input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">	

															<hr>

														</form>

														<span style="font-size: 11px;">' . $etat . '</span>

																<div class="single-product">

																	<div class="product-img">

																	<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

																		<a href="gestion_details_affichage_entite.php?k=' . $row[0] . '">

																			<img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

																		</a>

																		<div class="button-head">

																		<div class="product-action">

																			<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="gestion_details_affichage_entite.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

																			</div>

																			<div class="product-action-2">

																				<a title="Add to cart" href="gestion_details_affichage_entite.php?k=' . $row[0] . '">' . $row[9] . '</a>

																			</div>

																		</div>

																	</div>

																	<div class="product-content">

																		

																		<div class="product-price">

																			<hr>

																			<span style="font-size:15px; font-weight:bold;">

																			<i>

																				' . $row[25] . '

																			</i>

																			</span>

																			<br>

																		<a href="gestion_details_affichage_entite.php?k=' . $row[0] . '" style="font-size: 11px;">

																		<strong>ID :</strong> 	

																		' . $row[0] . '

																		</a>

																	</div>

																</div>

															</div>

														</div>

														';
												}
											}

											$resultat->closeCursor();
										} catch (PDOException $e) {



											echo "ERREUR :" . $e;
										}





										//

										//

										?>

									</div>

								</div>

							</div>

							<!--/ End Single Tab -->

							<!-- Start Single Tab -->

							<div class="tab-pane fade <?= @$show_ec; //show active 
														?>" id="accessories" role="tabpanel">

								<hr>

								<!-- Start recherche  -->

								<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

									<div class="container">

										<div class="inner-top">

											<div class="row">

												<div class="col-lg-8 offset-lg-2 col-12">

													<!-- Start Newsletter Inner -->

													<div class="inner">

														<form method="get" class="newsletter-inner">

															<input name="recherche_ec" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_ec']; ?>" required="" type="text">

															<button class="btn" name="btn_recherche_ec" value="recherche"><i class="ti-search"></i></button>

														</form>

													</div>

													<!-- End Newsletter Inner -->

												</div>

											</div>

										</div>

									</div>

								</section>

								<!-- End recherche -->

								<hr>

								<div class="tab-single">

									<div class="row">

										<?php



										// code affichage des entreprises

										//

										try {

											if (isset($_GET['btn_recherche_ec'])) {

												if (!empty($_GET['recherche_ec'])) {

													//Variable recherche 

													$mot_cle = strtoupper($_GET['recherche_ec']);

													$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

													//

													$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

													$resultat = $con->query("SELECT * FROM entite WHERE categorie='ECOLE' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
												}
											} else {

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='ECOLE' ORDER BY date_creation DESC");
											}

											//

											if (!$resultat) {

												$mes_erreur = $con->errorInfo();

												echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
											} else {

												while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

													if ($row[25] == "En attente") {

														$style_enattente = "#710120";

														$etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

														$btn_approuv = "submit";
													} else {

														$style_enattente = "#fff";

														$etat = "";

														$btn_approuv = "hidden";
													}

													echo '

														<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

														<form method="get" style="background: ' . $style_enattente . ';">

														<input type="hidden" name="k" value="' . $row[0] . '">

															<input type="' . $btn_approuv . '" name="btn_appr" value="' . $btn_text . '" style="width: 150px; padding:5px;">	

															<br>

															<input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">	

															<hr>

														</form>

														<span style="font-size: 11px;">' . $etat . '</span>

																<div class="single-product">

																	<div class="product-img">

																	<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

																		<a href="gestion_details_affichage_entite.php?k=' . $row[0] . '">

																			<img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

																		</a>

																		<div class="button-head">

																		<div class="product-action">

																			<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="gestion_details_affichage_entite.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

																			</div>

																			<div class="product-action-2">

																				<a title="Add to cart" href="gestion_details_affichage_entite.php?k=' . $row[0] . '">' . $row[9] . '</a>

																			</div>

																		</div>

																	</div>

																	<div class="product-content">

																		

																		<div class="product-price">

																			<hr>

																			<span style="font-size:15px; font-weight:bold;">

																			<i>

																				' . $row[25] . '

																			</i>

																			</span>

																			<br>

																		<a href="gestion_details_affichage_entite.php?k=' . $row[0] . '" style="font-size: 11px;">

																		<strong>ID :</strong> 	

																		' . $row[0] . '

																		</a>

																	</div>

																</div>

															</div>

														</div>

														';
												}
											}

											$resultat->closeCursor();
										} catch (PDOException $e) {



											echo "ERREUR :" . $e;
										}





										//

										//

										?>

									</div>

								</div>

							</div>

							<!--/ End Single Tab -->

							<!-- Start Single Tab -->

							<div class="tab-pane fade <?= @$show_u; //show active 
														?>" id="essential" role="tabpanel">

								<hr>

								<!-- Start recherche  -->

								<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

									<div class="container">

										<div class="inner-top">

											<div class="row">

												<div class="col-lg-8 offset-lg-2 col-12">

													<!-- Start Newsletter Inner -->

													<div class="inner">

														<form method="get" class="newsletter-inner">

															<input name="recherche_u" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_u']; ?>" required="" type="text">

															<button class="btn" name="btn_recherche_u" value="recherche"><i class="ti-search"></i></button>

														</form>

													</div>

													<!-- End Newsletter Inner -->

												</div>

											</div>

										</div>

									</div>

								</section>

								<!-- End recherche -->

								<hr>

								<div class="tab-single">

									<div class="row">

										<?php



										// code affichage des entreprises

										//

										try {

											if (isset($_GET['btn_recherche_u'])) {

												if (!empty($_GET['recherche_u'])) {

													//Variable recherche 

													$mot_cle = strtoupper($_GET['recherche_u']);

													$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

													//

													$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

													$resultat = $con->query("SELECT * FROM entite WHERE categorie='UNIVERSITE' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
												}
											} else {

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='UNIVERSITE' ORDER BY date_creation DESC");
											}

											//

											if (!$resultat) {

												$mes_erreur = $con->errorInfo();

												echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
											} else {

												while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

													if ($row[25] == "En attente") {

														$style_enattente = "#710120";

														$etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

														$btn_approuv = "submit";
													} else {

														$style_enattente = "#fff";

														$etat = "";

														$btn_approuv = "hidden";
													}

													echo '

														<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

														<form method="get" style="background: ' . $style_enattente . ';">

														<input type="hidden" name="k" value="' . $row[0] . '">

															<input type="' . $btn_approuv . '" name="btn_appr" value="' . $btn_text . '" style="width: 150px; padding:5px;">	

															<br>

															<input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">	

															<hr>

														</form>

														<span style="font-size: 11px;">' . $etat . '</span>

																<div class="single-product">

																	<div class="product-img">

																	<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

																		<a href="gestion_details_affichage_entite.php?k=' . $row[0] . '">

																			<img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

																		</a>

																		<div class="button-head">

																		<div class="product-action">

																			<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="gestion_details_affichage_entite.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

																			</div>

																			<div class="product-action-2">

																				<a title="Add to cart" href="gestion_details_affichage_entite.php?k=' . $row[0] . '">' . $row[9] . '</a>

																			</div>

																		</div>

																	</div>

																	<div class="product-content">

																		

																		<div class="product-price">

																			<hr>

																			<span style="font-size:15px; font-weight:bold;">

																			<i>

																				' . $row[25] . '

																			</i>

																			</span>

																			<br>

																		<a href="gestion_details_affichage_entite.php?k=' . $row[0] . '" style="font-size: 11px;">

																		<strong>ID :</strong> 	

																		' . $row[0] . '

																		</a>

																	</div>

																</div>

															</div>

														</div>

														';
												}
											}

											$resultat->closeCursor();
										} catch (PDOException $e) {



											echo "ERREUR :" . $e;
										}





										//

										//

										?>

									</div>

								</div>

							</div>

							<!--/ End Single Tab -->

							<!-- Start Single Tab -->

							<div class="tab-pane fade <?= @$show_sp; //show active 
														?>" id="prices" role="tabpanel">

								<hr>

								<!-- Start recherche  -->

								<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

									<div class="container">

										<div class="inner-top">

											<div class="row">

												<div class="col-lg-8 offset-lg-2 col-12">

													<!-- Start Newsletter Inner -->

													<div class="inner">

														<form method="get" class="newsletter-inner">

															<input name="recherche_sp" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_sp']; ?>" required="" type="text">

															<button class="btn" name="btn_recherche_sp" value="recherche"><i class="ti-search"></i></button>

														</form>

													</div>

													<!-- End Newsletter Inner -->

												</div>

											</div>

										</div>

									</div>

								</section>

								<!-- End recherche -->



								<hr>

								<div class="tab-single">

									<div class="row">

										<?php



										// code affichage des entreprises

										//

										try {

											if (isset($_GET['btn_recherche_sp'])) {

												if (!empty($_GET['recherche_sp'])) {

													//Variable recherche 

													$mot_cle = strtoupper($_GET['recherche_sp']);

													$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

													//

													$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

													$resultat = $con->query("SELECT * FROM entite WHERE categorie='SERVICE PUBLIC' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
												}
											} else {

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='SERVICE PUBLIC' ORDER BY date_creation DESC");
											}

											//

											//

											if (!$resultat) {

												$mes_erreur = $con->errorInfo();

												echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
											} else {

												while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

													if ($row[25] == "En attente") {

														$style_enattente = "#710120";

														$etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

														$btn_approuv = "submit";
													} else {

														$style_enattente = "#fff";

														$etat = "";

														$btn_approuv = "hidden";
													}

													echo '

														<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

														<form method="get" style="background: ' . $style_enattente . ';" >

														<input type="hidden" name="k" value="' . $row[0] . '">

															<input type="' . $btn_approuv . '" name="btn_appr" value="' . $btn_text . '" style="width: 150px; padding:5px;">	

															<br>

															<input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">	

															<hr>

														</form>

														<span style="font-size: 11px;">' . $etat . '</span>

																<div class="single-product">

																	<div class="product-img">

																	<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

																		<a href="gestion_details_affichage_entite.php?k=' . $row[0] . '">

																			style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

																		</a>

																		<div class="button-head">

																		<div class="product-action">

																			<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="gestion_details_affichage_entite.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

																			</div>

																			<div class="product-action-2">

																				<a title="Add to cart" href="gestion_details_affichage_entite.php?k=' . $row[0] . '">' . $row[9] . '</a>

																			</div>

																		</div>

																	</div>

																	<div class="product-content">

																		

																		<div class="product-price">

																			<hr>

																			<span style="font-size:15px; font-weight:bold;">

																			<i>

																				' . $row[25] . '

																			</i>

																			</span>

																			<br>

																		<a href="gestion_details_affichage_entite.php?k=' . $row[0] . '" style="font-size: 11px;">

																		<strong>ID :</strong> 	

																		' . $row[0] . '

																		</a>

																	</div>

																</div>

															</div>

														</div>

														';
												}
											}

											$resultat->closeCursor();
										} catch (PDOException $e) {



											echo "ERREUR :" . $e;
										}





										//

										//

										?>

									</div>

								</div>

							</div>

							<!--/ End Single Tab -->

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- End Product Area -->

	<?php

	include_once('page/pieds.php');

	?>

</body>

</html>