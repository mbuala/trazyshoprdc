<?php
	 include_once("fonction/session.php"); 
	 include_once("fonction/modification_code.php");
	 include_once("fonction/recherche_entite.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
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
	
	
	<?php
	include_once('page/entete2.php');
	?>
		 <!-- Start Contact -->
			<section id="contact-us" class="contact-us section">
				<div class="container">
						<div class="contact-head">
							<div class="row">
								<?php if ($_GET['fonction']=="entite") { ?>
									<div class="col-lg-8 col-12">
										<div class="form-main">
											<div class="title">
												<h4></h4>
												<h3>Modification</h3>

											</div>
											<form class="form" method="post" name="formulaire" enctype="multipart/form-data">
												<div class="row">
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>DENOMINATION <span>*</span></label>
															<input name="denomination" value="<?= $row[1]; ?>" type="text" placeholder="">
														</div>
													</div>
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>SOUS-TITRE (SPECIALITE)<span>*</span></label>
															<input name="specialite" value="<?= $row[2]; ?>" type="text" placeholder="">
														</div>
													</div>
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>SLOGAN<span>*</span></label>
															<input name="slogan" value="<?= $row[6]; ?>" type="text" placeholder="">
														</div>
													</div>
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>MAIL<span>*</span></label>
															<input name="email" value="<?= $row[24]; ?>" type="email" placeholder="">
														</div>	
													</div>
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>TEL<span>*</span></label>
															<input name="tel" value="<?= $row[27]; ?>" type="phone" placeholder="+243892808999">
														</div>	
													</div>
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>SITEWEB</label>
															<input name="siteweb" value="<?= $row[28]; ?>" type="url" placeholder="">
															<input name="statut" value="<?= $row[25]; ?>" type="hidden" >
														</div>	
													</div>
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>VILLE<span>*</span></label>
															<input name="ville" value="<?= $row[8]; ?>" type="text" placeholder="">
														</div>	
													</div>

													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>PAYS<span>*</span></label> <br>
															<?php include_once('page/pays.php');  ?>
														</div>	
													</div>
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>ADRESSE<span>*</span></label>
															<input name="adresse" type="text" value="<?= $row[10]; ?>" placeholder="">
														</div>	
													</div>
													
													<div class="col-12">
														<div class="form-group message">
															<label>DESCRIPTION <span>*</span></label>
															<textarea name="description" wrap="hard" spellcheck="true" placeholder="" rows="5" cols="33">
																<?= $row[7]; ?>
															</textarea>
														</div>
													</div>
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>NOM DU REPRESENTANT<span>*</span></label>
															<input name="nom_representant" value="<?= $row[12]; ?>" type="text" placeholder="">
														</div>	
													</div>
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>QUALITE DU REPRESENTANT<span>*</span></label>
															<input name="qualite_rep" value="<?= $row[14]; ?>" type="text" placeholder="">
														</div>	
													</div>
													<div class="col-12">
														<div class="form-group message">
															<label>MOT DU REPRESENTANT <span>*</span></label>
															<textarea name="mot_rep" placeholder="">
																<?= $row[11]; ?>
															</textarea>
														</div>
													</div>
													<br>
													<hr>
													<div class="col-12">
														<div class="form-group button">
															<button type="submit" name="btn_modifier" class="btn ">Modifier</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								<?php } ?>
								<div class="col-lg-4 col-12">
									<div class="main-sidebar">
										<div class="single-widget newsletter">
											<h3 class="title">
												<a href="details_affichage.php?k=<?= $_GET['k']; ?>">
													<?= $_GET['entite']; ?>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
													<?= $_GET['cat']; ?>
												</a>
											</h3>
											<div class="letter-inner">
												<img id="output" src="<?= $_GET['l']; ?>" style="width:550px;"/>
												<p style="text-align:center">
													<strong>
															
													</strong> 
												</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<!--/ End Contact -->
		<br>
		<br>
	<?php 
		include_once('page/pieds.php');
	?>
</body>
</html>