<?php
	 include_once("fonction/session.php"); 
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
    <style type="text/css">
    	.slider{
               max-width: 100% ;
               /*border: 10px solid #29a8e2;*/
               margin: auto;
               position: relative;
               overflow: hidden;
          }
          .slider .left-slide, .slider .right-slide{
               position: absolute;
               height: 40px;
               width: 40px;
               background: #444;
               border-radius: 50%;
               color: #fff;
               font-size: 14px;
               top: 60%;
               margin-top: -20px;
               text-align: center;
               line-height: 40px;
               cursor: pointer;
               transition: all .5s ease;
          }
          .slider .left-slide:hover, .slider .right-slide:hover{
               box-shadow: 0px 0px 10px black;
               background: #29a8e2;
          }
          .slider .left-slide{
               left: 30px;
          }
          .slider .right-slide{
               right: 30px;
          }
          .slider .slider-items .item img{
               max-width: 100%;
               margin: auto;
               height: auto;
          }
          @keyframes zoom{
          	0%{transform: scale(2); opacity: 0;}
          	100%{transform: scale(1); opacity: 1;}
          }
          .slider .slider-items .item {
          	text-align: center;
               display: none;
               position: relative;
               animation: zoom 1s ease;

          }
          .slider .slider-items .item .caption {
               position: absolute;
               width: 100%;
               height: 60px;
               bottom: 0px;
               left: 0px;
               background: rgba(0, 0, 0,.5);
               line-height: 60px;
               text-align: center;
               color: #fff;
               font-size: 15px;
          }
          .slider .slider-items .item.active {
               display: block;
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
						         }

						} catch (PDOException $e) {
							echo $e;
						}
					?>
								
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									
									<div class="blog-detail">
									<div class="slider">
										<div class="slider-items">

										<?php 
										// Les activités
										try {
											$id_entite=$_GET['k'];
											$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$resultat2 = $con2->query("SELECT * FROM actualite WHERE entite='$id_entite'");
											if (!$resultat2) {
												$mes_erreur2=$con2->errorInfo();
												echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
											}else{
												while ($row2 = $resultat2->fetch(PDO::FETCH_NUM)) {
												
										?>	
											<?php if($row2[0]==$_GET['actid']){ ?>
												<div class="item active">
													<div style="padding: 10px; text-align: left;">
														<h5 class="title">
															| <?= $row2[1]; ?>
														</h5>
														<span>
															Publié depuis : <?= date('d/m/Y', strtotime($row2[3])); ?>
														</span>
													</div>
												 	<img src="<?= $row2[5]; ?>">
												 	<div class="caption">
												 		Image illustrative
												 	</div>
												 	<h4 style="padding:10px" class="title">Contenu </h4>
												 	<blockquote style="text-align: justify;">
												 		<?= $row2[2]; ?>
												 	</blockquote>
												</div>
											<?php }else{ ?>
												<div class="item">
													<div style="padding: 10px; text-align: left;">
														<h5 class="title">
															| <?= $row2[1]; ?>
														</h5>
														<span>
															Publié depuis : <?= date('d/m/Y', strtotime($row2[3])); ?>
														</span>
													</div>
												 	<img src="<?= $row2[5]; ?>">
												 	<div class="caption">
												 		Image illustrative
												 	</div>
												 	<h4 style="padding:10px" class="title">Contenu </h4>
												 	<blockquote style="text-align: justify; ">
												 		<?= $row2[2]; ?>
												 	</blockquote>
												</div>
										<?php
														}
													}

											    }

											} catch (PDOException $e) {
												echo $e;
											}
										?>
											
										</div>
										<div class="left-slide"><</div>
										<div class="right-slide">></div>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
												<!-- Single Widget -->
							<div class="single-widget newsletter">
								<h3 class="title">
									<a href="details_affichage.php?k=<?= $_GET['k']; ?>">
										<?= $row[1]; ?>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
										<?= $row[15]; ?>
									</a>
								</h3>
								<div class="letter-inner">
									<img id="output" src="<?= $_GET['logo']; ?>" style="width:550px;"/>
									<p style="text-align:center">
										<strong>
												
										</strong> 
									</p>
									<div class="form-inner">
										<a href="#" onClick="mot_re()">Details</a>
											<script>
												function mot_re()
													{
														alert("<?= ucfirst(strtolower($row[11])) ?>");
													}
											</script>
										</div>
									</div>
								</div>
							</div>
						</div>

				</div>
			</div>
		</section>
		<!--/ End Blog Single -->
		<br>
		<br>
		<br>
	<?php 
		include_once('page/pieds.php');
	?>
</body>
<script type="text/javascript">
    var slides =document.querySelector('.slider-items').children;
    var nextSlide=document.querySelector('.right-slide');
    var prevSlide=document.querySelector('.left-slide');
    var totalSlider=slides.length;
    var index=0;
    //
    nextSlide.onclick=function(){
      next("next");
    }
    prevSlide.onclick=function(){
      next("prev");
    }
    function next(direction){
      if (direction=="next") {
        index++;
        if(index==totalSlider){
          index=0;
        }
      }
      else{
        if (index==0) {
          index=totalSlider-1;
        }
        else{
          index--;
        }
      }
      for (i=0; i<slides.length; i++) {
        slides[i].classList.remove("active");
      }
      slides[index].classList.add("active");
    }
</script>
</html>