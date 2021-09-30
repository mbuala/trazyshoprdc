<?php
include_once("fonction/session.php");
//
$btn_titre="Poster";
include_once("fonction/operation_offre.php");
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
    <title>Formulaire | création offre d'emploi</title>
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
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>TRAZISHOP</h4>
									<h3>Enregistrement de l'offre d'emploi</h3>

								</div>
								<form class="form" method="post" name="formulaire" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Intitulé <span>*</span></label>
												<input name="intitule_offre" value="<?= @$intitule_offre; ?>" type="text" placeholder="" required >
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Employeur<span>*</span></label>
												<input name="employeur" value="<?= @$employeur; ?>" type="text" placeholder="" required>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Lieu<span>*</span></label>
												<input name="lieu" value="<?= @$lieu; ?>" type="text" placeholder="" required>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Type contrat<span>*</span></label>
												<input name="type_contrat" value="<?= @$type_contrat ?>" type="text" placeholder="" required>
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Date d'emission<span>*</span></label>
												<input name="date_emission" value="<?= @$date_emission; ?>" type="date" required>
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Date d'expiration<span>*</span></label>
												<input name="date_expiration" value="<?= @$date_expiration; ?>" type="date" required>
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Logo de l'employeur<span>*</span></label>
					 							<input type="file" name="logo_img" value="<?php echo $logo_img; ?>" id="logo_img" accept="image/*" onchange="loadFile_logo(event)" required/>
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Présentation de l'employeur</label>
												<textarea name="pe">
													<?= @$pe; ?>
												</textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Contexte</label>
												<textarea name="contexte">
													<?= @$contexte; ?>
												</textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Cahier de charge</label>
												<textarea name="cc">
													<?= @$cc; ?>
												</textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Qualifications</label>
												<textarea name="qualification">
													<?= @$qualification; ?>
												</textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Critere d'eligibilité</label>
												<textarea name="critere">
													<?= @$critere; ?>
												</textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Mode de candidature</label>
												<textarea name="mode">
													<?= @$mode; ?>
												</textarea>
											</div>
										</div>
										<hr>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" name="btn_execution" class="btn "><?= @$btn_titre ?></button>
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
						<div class="col-lg-4 col-12">
							<script>
							  	var loadFile_logo = function(event) {
							    var output_logo = document.getElementById('output_logo');
							    output_logo.src = URL.createObjectURL(event.target.files[0]);
							    output2.onload = function() {
							      URL.revokeObjectURL(output_logo.src) // free memory
							    }
							  };
							</script>
							<form enctype="multipart/form-data" action="fileupload.php" method="post">
								<div class="single-head">
								    <div class="single-info">
								    	<h4>Logo de l'entreprise</h4>
									  <img id="output_logo" src="images/foire/profil/logo_tous.png" style="width:550px;"/>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	<?php
		include_once('page/pieds.php');
	?>
</body>
</html>