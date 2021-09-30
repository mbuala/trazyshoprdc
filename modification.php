<?php
	 include_once("fonction/session.php"); 

	 if ($_GET['fonction']=="entite") {
	 	include_once("fonction/modification_code.php");
	 	include_once("fonction/recherche_entite.php");
	 }
	 if ($_GET['fonction']=="Programme") {
	 	//
	 	include_once("fonction/programmes_et_modication.php");
	 }
	 if ($_GET['fonction']=="as") {
	 	//
	 	include_once("fonction/as_operations.php");
	 }
	 if ($_GET['fonction']=="activité") {
	 	//
	 	include_once("fonction/activite_operation.php");
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
											<form class="form" method="post" name="formulaire">
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
								<?php if ($_GET['fonction']=="Programme") { ?>
									<div class="col-lg-8 col-12">
										<div class="form-main">
											<div class="title">
												<h4></h4>
												<h3>Modification du programme</h3>
												</div>
												    <form class="form" method="post">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Intitulé<span>*</span></label>
																		<input type="text" name="intitule_p" value="<?= @$row[1]; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Financé par <span>*</span></label>
																		<input type="text" name="fp_p" value="<?= @$row[11]; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Executé par<span>*</span></label>
																		<input type="text" name="ep_p" value="<?= @$row[12]; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Durée<span>*</span></label>
																		<input type="text" name="duree_p" value="<?= @$row[4]; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Objectif<span>*</span></label>
																		<input type="text" name="objectif_p" value="<?= @$row[5]; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Basé à (Ville / Pays)<span>*</span></label>
																		<input type="text" name="villepays_p" value="<?= @$row[3]; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-12">
																	<div class="form-group">
																		<label>Breve description<span>*</span></label>
																		<textarea name="bd_p" placeholder="">
																			<?= @$row[6]; ?>
																		</textarea>
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Date debut<span>*</span></label>
																		<input type="date" name="date_debut_p" value="<?= @$row[7]; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Date fin<span>*</span></label>
																		<input type="date" name="date_fin_p" value="<?= @$row[8]; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-12">
																	<div class="form-group button">
																		<button type="submit" name="btn_modifier_prog" class="btn">Modifier</button>
																	</div>
																</div>
															</div>
												</form>
										</div>
									</div>
								<?php } ?>
								<?php if ($_GET['fonction']=="as") { ?>
									<div class="col-lg-8 col-12">
										<div class="form-main">
											<div class="title">
												<h4></h4>
												<h3>Modification de l'activité speciale</h3>
											</div>
											<form class="form" method="post">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Intitulé<span>*</span></label>
															<input type="text" name="intitule_as" value="<?= @$row2[1]; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Organiser par <span>*</span></label>
															<input type="text" name="op_as" value="<?= @$row2[2]; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Lieu<span>*</span></label>
															<input type="text" name="lieu_as" value="<?= @$row2[3]; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Durée<span>*</span></label>
															<input type="text" name="duree_as" value="<?= @$row2[4]; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Objectif<span>*</span></label>
															<input type="text" name="objectif_as" value="<?= @$row2[5]; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<label>Breve description<span>*</span></label>
															<textarea name="bd_as" placeholder="">
																<?= @$row2[6]; ?>
															</textarea>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Date debut<span>*</span></label>
															<input type="date" name="date_debut_as" value="<?= @$row2[7]; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Date fin<span>*</span></label>
															<input type="date" name="date_fin_as" value="<?= @$row2[8]; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-12">
														<div class="form-group button">
															<button type="submit" name="btn_modifier_as" class="btn">Modifier</button>
														</div>
													</div>
												</div>
											</form>
												 
										</div>
									</div>
								<?php } ?>
								<?php if ($_GET['fonction']=="activité") { ?>
									<div class="col-lg-8 col-12">
										<div class="form-main">
											<div class="title">
												<h4></h4>
												<?php //$row[15]=$_GET['cat']; ?>
												<h3>Modification de l'activité</h3>
											</div>
										<form method="post" enctype="multipart/form-data">
											<div class="row">
												<!--<div class="col-lg-6 col-md-6 col-12">
													<div class="form-group">
													   <?php //include_once('page/champs_type_activite.php'); ?>
													</div>
												</div>-->
												<div class="col-lg-6 col-md-6 col-12">
													<div class="form-group">
														<label>Titre<span>*</span></label>
														<input type="text" name="titre_activite" value="<?= @$row2[1]; ?>" placeholder="" required="required">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-12">
													<div class="form-group">
														<label>Lieu<span>*</span></label>
														<input type="text" name="lieu_activite" value="<?= @$row2[3]; ?>" placeholder="" required="required">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-12">
													<div class="form-group">
														<label>Date<span>*</span></label>
														<input type="date" name="date_activite" value="<?= @$row2[4]; ?>" placeholder="" required="required">
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<label>Ecrire un text<span>*</span></label>
														<textarea name="article_activite" placeholder="">
															<?= @$row2[5];?>
														</textarea>
													</div>
												</div>
												<div class="col-lg-6 col-12">
													<div class="form-group">
														<label>L'image qui illustre</label>
														<input type="file" name="img1_activite" value="<?php echo $img1_activite; ?>" accept="image/*"/>
													</div>	
												</div>
												<div class="col-lg-6 col-md-6 col-12">
													<div class="form-group">
														<label>Thème de l'activité<span>*</span></label>
														<input type="text" name="commentaire_1" value="<?= @$row2[10]; ?>" placeholder="" required="required">
													</div>
												</div>
												<div class="col-12">
													<div class="form-group button">
														<button type="submit" name="btn_modifier_activite" class="btn">Modifier</button>
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