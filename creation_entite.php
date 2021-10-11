<?php

include_once("fonction/session.php");

//

include_once('fonction/code_identification.php');

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

    <title>Formulaire | création de l'entité</title>

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



	

	

	<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-207299206-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-207299206-1');

</script>



	

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

	<!-- Start Contact -->

	<section class="shop checkout section">

		<div class="container">

					<div class="row">

						<div class="col-lg-8 col-12">

							<div class="checkout-form">

								<div class="title">

									<h6>Votre espace foire sera créé après verification par nos agents</h6>

									<h3>Remplissez avec soin ce formulaire s'il vous plait !</h3>

									<br>

									<br>

								</div>

								<form class="form" method="post" name="formulaire" enctype="multipart/form-data">

									<div class="row">

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>DENOMINATION <span>*</span></label>

												<input name="denomination" value="<?php echo $denomination; ?>" type="text" placeholder="">

											</div>

										</div>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>SOUS-TITRE (SPECIALITE)<span>*</span></label>

												<input name="specialite" value="<?php echo $specialite; ?>" type="text" placeholder="">

											</div>

										</div>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>SLOGAN<span>*</span></label>

												<input name="slogan" value="<?php echo $slogan; ?>" type="text" placeholder="">

											</div>

										</div>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>MAIL<span>*</span></label>

												<input name="email" value="<?php echo $email; ?>" type="email" placeholder="">

											</div>	

										</div>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>TEL<span>*</span></label>

												<input name="tel" value="<?php echo $tel; ?>" type="phone" placeholder="+243892808999">

											</div>	

										</div>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>SITEWEB</label>

												<input name="siteweb" value="<?php echo $siteweb; ?>" type="url" placeholder="">

											</div>	

										</div>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>VILLE<span>*</span></label>

												<input name="ville" value="<?php echo $ville; ?>" type="text" placeholder="">

											</div>	

										</div>



										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>PAYS<span>*</span></label> <br>

												<?php include_once('page/pays.php');  ?>

											</div>	

										</div>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>Votre logo</label>

					 							<input type="file" name="logo_img" value="<?php echo $logo_img; ?>" id="logo_img" accept="image/*" onchange="loadFile_logo(event)"/>

											</div>	

										</div>

										<!--

										<div class="col-lg-6 col-12">

											<div class="form-group">

												<label>Profil du Répresentant</label>

					 							<input type="file" name="profil_img" value="<? // echo $profil_img; ?>" accept="image/*" onchange="loadFile(event)"/>

											</div>	

										</div>

										

										<div class="col-lg-6 col-12">

											<div class="form-group">

												<label>Image de couverture</label>

					 							<input type="file" name="couverture_img" value="<? // echo $couverture_img; ?>" accept="image/*" onchange="loadFile2(event)" />

											</div>	

										</div> 

									-->

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>ADRESSE<span>*</span></label>

												<input name="adresse" type="text" value="<?php echo $adresse; ?>" placeholder="">

											</div>	

										</div>

										

										<div class="col-12">

											<div class="form-group message">

												<label>DESCRIPTION <span>*</span></label>

												<textarea name="description" placeholder="" style="height: 225px;">

													<?php echo $description; ?>

												</textarea>

											</div>

										</div>

										<?php include_once('page/cat.php');  ?>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>NOM DU REPRESENTANT<span>*</span></label>

												<input name="nom_representant" value="<?php echo $nom_representant; ?>" type="text" placeholder="">

											</div>	

										</div>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>QUALITE DU REPRESENTANT<span>*</span></label>

												<input name="qualite_rep" value="<?php echo $qualite_rep; ?>" type="text" placeholder="">

											</div>	

										</div>

										<div class="col-12">

											<div class="form-group message">

												<label>MOT DU REPRESENTANT <span>*</span></label>

												<textarea name="mot_rep" placeholder="">

													<?php echo $mot_rep; ?>

												</textarea>

											</div>

										</div>

										<br>

										<br>

										<hr>

										<hr>

										<hr>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>Pour en finir créez vous un mot de passe d'accès<span>*</span></label>

												<input name="mot_passe" type="password" placeholder="">

											</div>	

										</div>

										<div class="col-lg-6 col-md-6 col-12">

											<div class="form-group">

												<label>Confirmer votre mot de passe <span>*</span></label>

												<input name="confirme_mot_passe" type="password" placeholder="">

											</div>	

										</div>

										<br>

										<br>

										<div class="col-12">

											<div class="form-group button">

												<button type="submit" name="btn_soumettre" class="btn ">Soumettre</button>

											</div>

										</div>

									</div>

								</form>



							</div>

						</div>

						<div class="col-lg-4 col-12">

							<?php include_once("page/image.php");?>

						</div>

					</div>		

			</div>

	</section>

	<!--/ End Contact -->

	

	<?php 

		include_once('page/terme1.php');

		include_once('page/pieds.php');

	?>

</body>

</html>