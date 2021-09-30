<?php
	include_once('fonction/modif_code.php');
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
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h2>Modifier les images</h2>

								</div>
								<form class="form" method="post" name="formulaire" enctype="multipart/form-data">
									<div class="row">
										<div class="image">
											<img id="output2" src="<?= $_GET['k']; ?>" alt="couverture">
											<hr>
										</div>
										
										<div class="col-lg-6 col-12">
											
											<div class="form-group">
												<label>Votre logo</label>
					 							<input type="file" name="logo_img" value="<?php echo $logo_img; ?>" id="logo_img" accept="image/*" onchange="loadFile_logo(event)"/>
											</div>	
											<div class="form-group button">
												<button type="submit" name="btn_upload_logo" class="btn ">Télécharger</button>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Profil du Répresentant</label>
					 							<input type="file" name="profil_img" value="<?php// echo $profil_img; ?>" accept="image/*" onchange="loadFile(event)"/>
											</div>
											<div class="form-group button">
												<button type="submit" name="btn_upload_profil" class="btn ">Télécharger</button>
											</div>	
										</div>
										
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Image de couverture</label>
					 							<input type="file" name="couverture_img" value="<?php// echo $couverture_img; ?>" accept="image/*" onchange="loadFile2(event)" />
											</div>
											<div class="form-group button">
												<button type="submit" name="btn_upload_couverture" class="btn ">Télécharger</button>
											</div>	
										</div> 
										<br>
									</div>
								</form>

							</div>
						</div>
						<div class="col-lg-4 col-12">
							<script>
							  var loadFile = function(event) {
							    var output = document.getElementById('output');
							    output.src = URL.createObjectURL(event.target.files[0]);
							    output.onload = function() {
							      URL.revokeObjectURL(output.src) // free memory
							    }
							  };
							  var loadFile2 = function(event) {
							    var output2 = document.getElementById('output2');
							    output2.src = URL.createObjectURL(event.target.files[0]);
							    output2.onload = function() {
							      URL.revokeObjectURL(output2.src) // free memory
							    }
							  };
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
								  <img id="output_logo" src="<?= $_GET['h']; ?>" style="width:550px;"/>
								</div>
								<hr>
								   <div class="single-info">
							    	<h4>Photo profil du répresentant</h4>
								  	<img id="output" src="<?= $_GET['i']; ?>" style="width:550px;"/>
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
		include_once('page/terme1.php');
		include_once('page/pieds.php');
	?>
</body>
</html>