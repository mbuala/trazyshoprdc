<?php 
	include_once("fonction/session.php");
	include_once("fonction/connexion.php");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Code pagination debut
	$resultat= $con->query("SELECT * FROM offre ORDER BY date_emission DESC");
	if (!$resultat) {
		$mes_erreur=$con->errorInfo();
        echo "Lecture impossible, code : ", $con->errorCode(),$mes_erreur[2];
        $sortie="cassée";
	} else {
		$sortie="passée";									
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
  (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
</script>
<!-- End of Async Callbell Code -->
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Offre d'emploi</title>
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
		<?php include_once('page/entete2.php'); ?>	
		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
								<!-- Shopping Summery -->
									<table class="table" border="true" >
										<thead>
											<tr style="background:#000; color:#fff">
												<th class="text-left">Intitulé</th>
												<th class="text-left">Employeur</th>
												<th class="text-left">Lieu</th>
												<th class="text-left">Etat</th>
											</tr>
										</thead>
										<tbody>
										<?php if($sortie=="passée") { ?>
											<?php while($row = $resultat->fetch(PDO::FETCH_NUM)){ ?>
											<tr>
												<td>
													<p class="product-name">
														<a href="details_offre.php?entreprise=<?= $row[2]; ?>&id=<?= $row[0]; ?>">
															<?= $row[1]; ?>
														</a>
													</p>
												</td>
												<td><span><?= $row[2]; ?> </span></td>
													<?php 
														$aujourdhui= date("Y-m-d");
														//$date1= strtotime($row[6]);
														//$date2= strtotime($aujourdhui);
														//$valeur=round(($date2-$date1)/60/60/24,0);
														//
														if ($row[6] > $aujourdhui) {
															$couleur_etat="green";
															$text_etat="Encours";
														} else if ($row[6] == $aujourdhui) {
															$couleur_etat="orange";
															$text_etat="Aujourd'hui la fin";
														} else {
															$couleur_etat="red";
															$text_etat="Expiré";
														}
													 ?>
												<td>
													<?= $row[3]; ?>
												</td>
												<td style="background:<?= $couleur_etat; ?>; color: white;">
													<?= $text_etat; ?>
												</td>
											</tr>
											<?php } ?>
										<?php } ?>
										</tbody>
									</table>
									<!--/ End Shopping Summery -->
								</div>			
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget newsletter">
								<h3 class="title">TRAZISHOP</h3>
								<div class="letter-inner">
									<h4>Souscrire <br> et reçois des offres par mail.</h4>
									<div class="form-inner">
										<input type="email" placeholder="Votre mail">
										<a href="#">Soumettre</a>
									</div>
								</div>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blog Single -->
			
	<?php include_once('page/pieds.php'); ?>
</body>
</html>