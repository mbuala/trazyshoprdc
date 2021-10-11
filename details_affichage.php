<?php 

	 include_once("fonction/session.php"); 

	 include_once("fonction/enveloppe_login.php");

	 //Variable page_active

	 include_once("page/suppression.php");

	 //

	if (isset($_GET['btn_recherche_prog'])) {

		$act_actu="";

		$act_port="active";

		//

		$show_actu="";

		$show_port="show active";

		//

		$act_prog="active";

		$act_as="";

		//

		$show_prog="show active";

		$show_as="";

		//

	}elseif (isset($_GET['btn_recherche_as'])) {

		$act_actu="";

		$act_port="active";

		//

		$show_actu="";

		$show_port="show active";

		//

		$act_prog="";

		$act_as="active";

		//

		$show_prog="";

		$show_as="show active";

		//

	}else{

		$act_actu="active";

		$act_port="";

		//

		$show_actu="show active";

		$show_port="";

		//

		$act_prog="active";

		$act_as="";

		//

		$show_prog="show active";

		$show_as="";

		//

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

    <title><?= $_GET['k'];?></title>

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

    <style type="text/css">

    	.lien{

    		text-align: right;

    		position: relative;

			top: 110px; 

			left: 10px;

    		background: #000011;

    		margin: 5px;

    		padding: 5px;

    		color: white;

    		size: 14px;

    	}

    	.lien:hover{

    		color: white;

    		siza: 16px;

    	}

   </style>

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

	include_once('page/entete2.php');

	?>

	<!-- Start Blog Single -->

		<section class="blog-single section" style="margin:0px; padding:0px">

			<div class="container">

				<div class="row">

					<?php

						// Details de votre selection

						try {

							include_once("fonction/connexion.php");

							$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

							$resultat = $con->query("SELECT * FROM entite WHERE identifiant='".$_GET['k']."'");

							if (!$resultat) {

								$mes_erreur=$con->errorInfo();

                                echo "Lecture impossible, code : ", $con->errorCode(),$mes_erreur[2];

							}else{

								$row = $resultat->fetch(PDO::FETCH_NUM);

							?>

										<div class="col-lg-8 col-12">

											<div class="blog-single-main">

												<div class="row">

													<div class="col-12">

													<?php //Banniere et profil

														include_once('page/banniere_profil.php'); 

													?>

														<div class="blog-detail">

															<h2 class="blog-title">

																<a href="details_affichage.php?k=<?= $row[0]; ?>">

																	<?= $row[1]; ?>

																&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;

																	<?= $row[15]; ?>

																</a>

															<?php if($page_active=="moi"){ ?>

																<a href="modification.php?entite=<?= $row[1]; ?>&cat=<?= $row[15]; ?>&k=<?= $row[0]; ?>&l=<?= $row[3]; ?>&fonction=entite" class="lien_parametre">

																	<img src="images/parametre.jpg" style="max-width: 50px; margin-left: 20px;">

																</a>

															<?php } ?>

																

															</h2>

															<h6 style="background:rgb(2, 0, 97); color:white; padding:10px 10px 10px 10px">

																<?= $row[2]; ?>

															</h6>

														    <div class="blog-meta">

																<span class="author">

																	<a href="tel:<?= $row[27]; ?>">

																      <i class="ti-headphone-alt"></i>

																      	<?= $row[27]; ?>

																    </a>

																	<a href="mailto:<?= $row[24]; ?>">

																	  <i class="ti-email"></i>

																	  	<?= $row[24]; ?>

																	</a>

																	<a href="<?= $row[28]; ?>" target="_blanc" >

																		<?= $row[28]; ?>

																	</a>

																</span>

															</div>

															<div class="content">

																<blockquote> 

																	<i class="fa fa-quote-left"></i> 

																	<?= $row[7]; ?>

																</blockquote>

															</div>

														</div>

													</div>

												</div>

									<?php

										include_once('page/j.php');

									?>

										</div>

									</div>

										<div class="col-lg-4 col-12">

											<div class="main-sidebar">

												<!-- Single Widget -->

												<div class="single-widget newsletter">

													<h3 class="title">Répresentant</h3>

													<div class="letter-inner">

														<?php include_once('page/representant.php'); ?>

														<p style="text-align:center">

														<strong><?= strtoupper($row[12]); ?></strong> <br>

														<?= $row[14]; ?>

														</p>

														<div class="form-inner">

															<a href="#" onClick="mot_re()">Mot du répresentant</a>

															<script>

																function mot_re()

																{

																	alert("<?= ucfirst(strtolower($row[11])); ?>");

																}

															</script>

														</div>

													</div>

												</div>

												<hr>

												<!--/ End Single Widget -->

												<!-- Single Widget -->

												<div class="single-widget category">

													<h3 class="title"><?= ucfirst(strtolower($row[15])); ?> & coordonées</h3>

													<ul class="categor-list">

														<li><a href="mailto:<?= $row[24]; ?>">Mail : <?= $row[24]; ?></a></li>

														<li><a href="#">Adresse : <?= $row[10]; ?></a></li>

														<li><a href="#">Ville : <?= $row[8]; ?></a></li>

														<li><a href="#">Pays : <?= $row[9]; ?></a></li>

													<?php

														//Creation des champs en rapport avec les cat

													if ($row[15]=="ENTREPRISE") {

													?>

														<li><a href="#">RCCM : <?= $row[16]; ?></a></li>

														<li><a href="#">ID.NAT :<?= $row[17]; ?></a></li>

														<li><a href="#">N° IMP : <?= $row[18]; ?></a></li>

													<?php

															}elseif ($row[15]=="ORGANISATION") {

													?>

														<li><a href="#">F92 : <?= $row[19]; ?></a></li>

														<li><a href="#">ACCORD DE SIEGE : <?= $row[20]; ?></a></li>

													<?php

															}elseif ($row[15]=="ECOLE") {

													?>

														<li><a href="#">PERS. JUR. : <?= $row[22]; ?></a></li>

													<?php

															}else{

													?>

														<li><a href="#">ARRET. MIN. : <?= $row[21]; ?></a></li>

													<?php

															} 

													?>



													</ul>

												</div>

												<!--/ End Single Widget -->

												

											</div>

										</div>

						



						<?php 

								

							}



						} catch (PDOException $e) {

							

						}



					?>

					

				</div>

			</div>

		</section>

		<!--/ End Blog Single -->

		<br>

		<br>

	<?php 

		include_once('page/terme1.php');

		include_once('page/pieds.php');

	?>

</body>

</html>