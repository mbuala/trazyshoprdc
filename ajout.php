<?php
	 include_once("fonction/session.php"); 
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
	<!-- Start Blog Single -->
		<section class="blog-single section">
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
									echo'
										<div class="col-lg-8 col-12">
											<div class="blog-single-main">
												<div class="row">
													<div class="col-12">
														<div class="image" style="background:url('.$row[5].'); height:300px; background-size: 100%; background-repeat: no-repeat;">
														  <a href="modifier.php?k='.$row[5].'&h='.$row[3].'&i='.$row[13].'&j='.$row[0].'">
															<img src="'.$row[3].'" style="width:150px;height:150px; position:relative; top:115px;left:10px; box-shadow: 1px 1px 12px #555;"/>
														  </a>
														  <a href="modifier.php?k='.$row[5].'&h='.$row[3].'&i='.$row[13].'&j='.$row[0].'" class="lien">Modifier</a>
														</div>
														<div class="blog-detail">
															<h2 class="blog-title">
																<a href="details_affichage.php?k='.$row[0].'">
																'.$row[1].'&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
																	'.$row[15].'
																</a>
															</h2>
															<h6 style="background:rgb(2, 0, 97); color:white; padding:10px 10px 10px 10px">'.$row[2].'</h6>
														    <div class="blog-meta">
																<span class="author">
																	<a href="tel:'.$row[27].'">
																      <i class="ti-headphone-alt"></i>'.$row[27].'
																    </a>
																	<a href="mailto:'.$row[24].'">
																	  <i class="ti-email"></i>'.$row[24].'
																	</a>
																	<a href="'.$row[28].'" target="_blanc" >
																	  '.$row[28].'
																	</a>
																</span>
															</div>
														</div>
														
													</div>'; 
									if ($_GET['pg']=="ajout_actu") {
										include_once("page/ajout_actu.php");
									}elseif ($_GET['pg']=="ajout_as") {
										include_once("page/ajout_activite.php");
									}elseif($_GET['pg']=="ajout_portefeuille"){
										//
										include_once('page/ajout_portefeuille.php');
										//
									}elseif($_GET['pg']=="apropos"){
										//
										include_once('page/editer_apropos.php');
										//
									}
									
									 echo'</div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="main-sidebar">
												<!-- Single Widget -->
												<div class="single-widget newsletter">
													<h3 class="title">Répresentant</h3>
													<div class="letter-inner">
														<a href="modifier.php?k='.$row[5].'&h='.$row[3].'&i='.$row[13].'&j='.$row[0].'">
															<img id="output" src="'.$row[13].'" style="width:550px;"/>
														</a>
														<p style="text-align:center">
														<strong>'.strtoupper($row[12]).'</strong> <br>
														'.$row[14].'
														</p>
														<div class="form-inner">
															<a href="#" onClick="mot_re()">Mot du répresentant</a>
															<script>
																function mot_re()
																{
																	alert("'.ucfirst(strtolower($row[11])).'");
																}
															</script>
														</div>
													</div>
												</div>
												<hr>
												<!--/ End Single Widget -->
												<!-- Single Widget -->
												<div class="single-widget search">
													
													<hr>
												</div>
												<!--/ End Single Widget -->
												<!-- Single Widget -->
												<div class="single-widget category">
													<h3 class="title">'.ucfirst(strtolower($row[15])).' & coordonées</h3>
													<ul class="categor-list">
														<li><a href="mailto:'.$row[24].'">Mail : '.$row[24].'</a></li>
														<li><a href="#">Adresse : '.$row[10].'</a></li>
														<li><a href="#">Ville : '.$row[8].'</a></li>
														<li><a href="#">Pays : '.$row[9].'</a></li>
														';
														//Creation des champs en rapport avec les cat
													if ($row[15]=="ENTREPRISE") {
														echo'
														<li><a href="#">RCCM : '.$row[16].'</a></li>
														<li><a href="#">ID.NAT : '.$row[17].'</a></li>
														<li><a href="#">N° IMP : '.$row[18].'</a></li>
															';
															}elseif ($row[15]=="ORGANISATION") {
														echo'
														<li><a href="#">F92 : '.$row[19].'</a></li>
														<li><a href="#">ACCORD DE SIEGE : '.$row[20].'</a></li>
															';
															}elseif ($row[15]=="ECOLE") {
														echo'
														<li><a href="#">PERS. JUR. : '.$row[22].'</a></li>
															';
															}else{
														echo'
														<li><a href="#">ARRET. MIN. : '.$row[21].'</a></li>
															';
															} 
												echo'

													</ul>
												</div>
												<!--/ End Single Widget -->
												
											</div>
										</div>
									';

								
							}

						} catch (PDOException $e) {
							
						}

					?>
					
				</div>
			</div>
		</section>
		<!--/ End Blog Single -->
	<?php 
		include_once('page/terme1.php');
		include_once('page/pieds.php');
	?>
</body>
</html>