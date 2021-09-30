<?php
include_once("fonction/session.php");
//
if (@$_GET['k']=="Deconnexion") {
	header("location:deconnexion.php");
	exit;
}else{
	//
	include_once("fonction/code_login.php");
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
    <title>LOGIN | Trazishop</title>
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
									<h3>LOGIN</h3>
									<?php 
										if (!empty($_GET['r'])) {
											$id_login=$_GET['r'];
											$message2="Votre identifiant est deja là mettez juste votre mot de passe";
										}
									?>
									<p style="color:red"><?= @$message; ?></p>
									<p style="color:orange;"><?= @$message2; ?></p>
								</div>
								<form class="form" method="post" name="formulaire" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>IDENTIFIANT <span>*</span></label>
												<input name="login" value="<?= @$id_login; ?>" type="text" placeholder="Ex: ENTREPRISE_DERsarl_junias">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Mot de passe<span>*</span></label>
												<input name="mot_passe" type="password" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" name="btn_connexion" class="btn ">Connexion</button>
												<br>
												<hr>
												<br>
												<a href="#">Récuperer votre compte ou mot de passe </a> &nbsp;&nbsp;|&nbsp;&nbsp; 
												<a href="creation_entite.php">Créer une nouvelle entité </a> 
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
							    <div class="single-info">
								  <img src="images/login.png" style="width:160px; position: relative; left: 50px; top:30px;"/>
								</div>
							</div>
						</div>
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