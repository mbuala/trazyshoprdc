<?php
	include_once("fonction/session.php");
	include_once("fonction/connexion.php");
	$id=$_GET['id'];
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$resultat= $con->query("SELECT * FROM offre WHERE id='$id' ");
	if (!$resultat) {
		$mes_erreur=$con->errorInfo();
        echo "Lecture impossible, code : ", $con->errorCode(),$mes_erreur[2];
	} else {
		$row = $resultat->fetch(PDO::FETCH_NUM);								
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
    <title><?= $_GET['entreprise']; ?></title>
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
		<?php
		 	include_once("page/entete2.php");
		?>
		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									<div class="blog-detail">
										<h2 class="blog-title" style="background:rgb(2, 0, 97) !important; color:white; text-align:center; padding: 5px;">
											OFFRE D'EMPLOI
										</h2>
										<h5>Intitulé : <?= $row[1]; ?></h5>
										<br>
										<blockquote>
												EMPLOYEUR :<strong><?= $row[2]; ?></strong> <br>
												LIEU DU TRAVAIL :<strong><?= $row[3]; ?></strong> <br>
												TYPE DE CONTRAT :<strong><?= $row[4]; ?></strong> <br>
												DATE D’EMISSION :<strong><?= $row[5]; ?></strong><br>
												DATE D’EXPIRATION : <strong><?= $row[6]; ?></strong><br>
												<?php 
													$aujourdhui= date("Y-m-d");
													$date1= strtotime($row[6]);
													$date2= strtotime($aujourdhui);
													$valeur=round(($date2-$date1)/60/60/24,0);
															//
													if ($row[6]==$aujourdhui) {
														echo "<span style=\"padding:5px; background:orange; margin:2px\"></span>La date limite c'est aujourdhui";
													} elseif ($row[6]>$aujourdhui) {
														echo "<span style=\"padding:5px; background:green; margin:2px\"></span>DISPONIBLE";
													}elseif ($row[6]<$aujourdhui) {
														echo "<span style=\"padding:5px; background:red; margin:2px\"></span>NON DISPONIBLE";
													}
												?>
										</blockquote>

										<div class="content">
											<div class="reply">
												<div class="reply-head">
													<h6 class="reply-title">PRESENTATION DE L’EMPLOYEUR</h6>
												</div>
											</div>
											<p>
												<?= $row[7]; ?>
											</p>
											<div class="reply">
												<div class="reply-head">
													<h6 class="reply-title">CONTEXTE DU RECRUTEMENT</h6>
												</div>
											</div>
											<p>
												<?= $row[8]; ?>
											</p>
											<div class="reply">
												<div class="reply-head">
													<h6 class="reply-title">CAHIER DE CHARGE</h6>
												</div>
											</div>
											<p>
												<?= $row[9]; ?>
											</p>
											<div class="reply">
												<div class="reply-head">
													<h6 class="reply-title">QUALIFICATIONS</h6>
												</div>
											</div>
											<p>
												<?= $row[10]; ?>
											</p>
											<div class="reply">
												<div class="reply-head">
													<h6 class="reply-title">CRITERES D’ELIGIBILITE
</h6>
												</div>
											</div>
											<p>
												<?= $row[11]; ?>
											</p>
											<div class="reply">
												<div class="reply-head">
													<h6 class="reply-title">MODE DE CANDIDATURE
</h6>
												</div>
											</div>
											<p>
												<?= $row[12]; ?>
											</p>
										</div>
									</div>
								</div>			
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<div class="single-widget newsletter">
								<h3 class="title"><?= $row[2]; ?></h3>
								<div class="letter-inner">
									<img src="<?= $row[13]; ?>" alt="Logo" style="width: 250px;">
								</div>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blog Single -->
			
	<?php include_once("page/pieds.php"); ?>
</body>
</html>