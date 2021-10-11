<!-- Start Product Area -->

<?php

include_once("fonction/connexion.php");

//pagination

if (isset($_GET['page']) || !empty($_GET['page'])) {

	//

	$pagecourante = (int)strip_tags($_GET['page']);

	//

} else {

	$pagecourante = 1;
}



//Organisation

if (isset($_GET['page_o']) || !empty($_GET['page_o'])) {

	//

	$pagecourante_o = (int)strip_tags($_GET['page_o']);

	//

} else {

	$pagecourante_o = 1;
}

// EGlise

if (isset($_GET['page_eg']) || !empty($_GET['page_eg'])) {

	//

	$pagecourante_eg = (int)strip_tags($_GET['page_eg']);

	//

} else {

	$pagecourante_eg = 1;
}

//Ecole

if (isset($_GET['page_ec']) || !empty($_GET['page_ec'])) {

	//

	$pagecourante_ec = (int)strip_tags($_GET['page_ec']);

	//

} else {

	$pagecourante_ec = 1;
}

//Université

if (isset($_GET['page_u']) || !empty($_GET['page_u'])) {

	//

	$pagecourante_u = (int)strip_tags($_GET['page_u']);

	//

} else {

	$pagecourante_u = 1;
}

//Service public

if (isset($_GET['page_sp']) || !empty($_GET['page_sp'])) {

	//

	$pagecourante_sp = (int)strip_tags($_GET['page_sp']);

	//

} else {

	$pagecourante_sp = 1;
}

//

// Fin pagination

if (isset($_GET['recherche'])) {

	$act_e = "active";

	$act_o = "";

	$act_eg = "";

	$act_ec = "";

	$act_u = "";

	$act_sp = "";

	//

	$show_e = "show active";

	$show_o = "";

	$show_eg = "";

	$show_ec = "";

	$show_u = "";

	$show_sp = "";
} elseif (isset($_GET['recherche_o'])) {

	$act_e = "";

	$act_o = "active";

	$act_eg = "";

	$act_ec = "";

	$act_u = "";

	$act_sp = "";

	//

	$show_e = "";

	$show_o = "show active";

	$show_eg = "";

	$show_ec = "";

	$show_u = "";

	$show_sp = "";
} elseif (isset($_GET['recherche_eg'])) {

	$act_e = "";

	$act_o = "";

	$act_eg = "active";

	$act_ec = "";

	$act_u = "";

	$act_sp = "";

	//

	$show_e = "";

	$show_o = "";

	$show_eg = "show active";

	$show_ec = "";

	$show_u = "";

	$show_sp = "";
} elseif (isset($_GET['recherche_ec'])) {

	$act_e = "";

	$act_o = "";

	$act_eg = "";

	$act_ec = "active";

	$act_u = "";

	$act_sp = "";

	//

	$show_e = "";

	$show_o = "";

	$show_eg = "";

	$show_ec = "show active";

	$show_u = "";

	$show_sp = "";
} elseif (isset($_GET['recherche_u'])) {

	$act_e = "";

	$act_o = "";

	$act_eg = "";

	$act_ec = "";

	$act_u = "active";

	$act_sp = "";

	//

	$show_e = "";

	$show_o = "";

	$show_eg = "";

	$show_ec = "";

	$show_u = "show active";

	$show_sp = "";
} elseif (isset($_GET['recherche_sp'])) {

	$act_e = "";

	$act_o = "";

	$act_eg = "";

	$act_ec = "";

	$act_u = "";

	$act_sp = "active";

	//

	$show_e = "";

	$show_o = "";

	$show_eg = "";

	$show_ec = "";

	$show_u = "";

	$show_sp = "show active";
} else {

	$act_e = "active";

	$act_o = "";

	$act_eg = "";

	$act_ec = "";

	$act_u = "";

	$act_sp = "";

	//

	$show_e = "show active";

	$show_o = "";

	$show_eg = "";

	$show_ec = "";

	$show_u = "";

	$show_sp = "";
}

//Pagination



if (!empty($_GET['page'])) {

	$act_e = "active";

	$act_o = "";

	$act_eg = "";

	$act_ec = "";

	$act_u = "";

	$act_sp = "";

	//

	$show_e = "show active";

	$show_o = "";

	$show_eg = "";

	$show_ec = "";

	$show_u = "";

	$show_sp = "";
} elseif (!empty($_GET['page_o'])) {

	$act_e = "";

	$act_o = "active";

	$act_eg = "";

	$act_ec = "";

	$act_u = "";

	$act_sp = "";

	//

	$show_e = "";

	$show_o = "show active";

	$show_eg = "";

	$show_ec = "";

	$show_u = "";

	$show_sp = "";
} elseif (!empty($_GET['page_eg'])) {

	$act_e = "";

	$act_o = "";

	$act_eg = "active";

	$act_ec = "";

	$act_u = "";

	$act_sp = "";

	//

	$show_e = "";

	$show_o = "";

	$show_eg = "show active";

	$show_ec = "";

	$show_u = "";

	$show_sp = "";
} elseif (!empty($_GET['page_ec'])) {

	$act_e = "";

	$act_o = "";

	$act_eg = "";

	$act_ec = "active";

	$act_u = "";

	$act_sp = "";

	//

	$show_e = "";

	$show_o = "";

	$show_eg = "";

	$show_ec = "show active";

	$show_u = "";

	$show_sp = "";
} elseif (!empty($_GET['page_u'])) {

	$act_e = "";

	$act_o = "";

	$act_eg = "";

	$act_ec = "";

	$act_u = "active";

	$act_sp = "";

	//

	$show_e = "";

	$show_o = "";

	$show_eg = "";

	$show_ec = "";

	$show_u = "show active";

	$show_sp = "";
} elseif (!empty($_GET['page_sp'])) {

	$act_e = "";

	$act_o = "";

	$act_eg = "";

	$act_ec = "";

	$act_u = "";

	$act_sp = "active";

	//

	$show_e = "";

	$show_o = "";

	$show_eg = "";

	$show_ec = "";

	$show_u = "";

	$show_sp = "show active";
} else {

	$act_e = "active";

	$act_o = "";

	$act_eg = "";

	$act_ec = "";

	$act_u = "";

	$act_sp = "";

	//

	$show_e = "show active";

	$show_o = "";

	$show_eg = "";

	$show_ec = "";

	$show_u = "";

	$show_sp = "";
}

include_once("fonction/select_pour_filtre.php");

?>



<div class="product-area section" style="margin-top:0px; padding-top:0px">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="product-info">

					<div class="nav-main">

						<!-- End Tab Nav -->

					</div>

					<div class="nav-main">

						<!-- Tab Nav -->

						<ul class="nav nav-tabs" id="myTab" role="tablist">

							<li class="nav-item"><a class="nav-link <?= @$act_e; ?>" data-toggle="tab" href="#man" role="tab" style="font-size:15px; font-weight:bold">ENTREPRISE</a></li>

							<li class="nav-item"><a class="nav-link <?= @$act_o; ?>" data-toggle="tab" href="#women" role="tab" style="font-size:15px; font-weight:bold">ORGANISATION</a></li>

							<li class="nav-item"><a class="nav-link <?= @$act_eg; ?>" data-toggle="tab" href="#kids" role="tab" style="font-size:15px; font-weight:bold">EGLISE</a></li>

							<li class="nav-item"><a class="nav-link <?= @$act_ec; ?>" data-toggle="tab" href="#accessories" role="tab" style="font-size:15px; font-weight:bold">ECOLE</a></li>

							<li class="nav-item"><a class="nav-link <?= @$act_u; ?>" data-toggle="tab" href="#essential" role="tab" style="font-size:15px; font-weight:bold">UNIVERSITE</a></li>

							<li class="nav-item"><a class="nav-link <?= @$act_sp; ?>" data-toggle="tab" href="#prices" role="tab" style="font-size:15px; font-weight:bold">SERVICES PUBLIQUES</a></li>

						</ul>

						<!--/ End Tab Nav -->

					</div>

					<div class="tab-content" id="myTabContent" style="background: #F9F9F9; padding-left:25px; text-align: center;">

						<!-- Start Single Tab -->

						<div class="tab-pane fade <?= @$show_e; //show active 
													?>" id="man" role="tabpanel">

							<hr>

							<!-- Start recherche  -->

							<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

								<div class="container">

									<div class="inner-top">

										<div class="row">

											<div class="col-lg-8 offset-lg-2 col-12">

												<!-- Start Newsletter Inner -->

												<div class="inner">

													<form method="get" class="newsletter-inner">

														<div>

															<label>Filtres et recherche : </label>

															<br>

															<select>

																<option>Tout</option>

																<?php if ($filtre_rempli == "ok") { ?>

																	<?php while ($row = $resultat->fetch(PDO::FETCH_NUM)) { ?>

																		<?php if ($row[0] <> "") { ?>

																			<option>

																				<?= $row[0]; ?>

																			</option>

																		<?php } ?>

																	<?php } ?>

																<?php } ?>

															</select>

														</div>

														<input name="recherche" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche']; ?>" required="" type="text">

														<button class="btn" name="btn_recherche" value="recherche"><i class="ti-search"></i></button>

													</form>

												</div>

												<!-- End Newsletter Inner -->

											</div>

										</div>

									</div>

								</div>

							</section>

							<!-- End recherche -->

							<hr>

							<div class="tab-single">

								<div class="row">

									<?php



									// code affichage des entreprises

									//

									try {

										if (isset($_GET['btn_recherche'])) {

											if (!empty($_GET['recherche'])) {

												//Variable recherche 

												$mot_cle = strtoupper($_GET['recherche']);

												$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

												//

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='ENTREPRISE' AND 	statut='Approuvé' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
											}
										} else {

											$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

											//Code pagination debut

											$compter = $con->query("SELECT COUNT(identifiant) AS nbr_entite FROM entite WHERE categorie='ENTREPRISE' AND statut='Approuvé'");

											$nbr_entite = $compter->fetch(PDO::FETCH_NUM);

											$par_page = 12;

											$pages = ceil($nbr_entite[0] / $par_page);

											$premier = ($pagecourante * $par_page) - $par_page;

											//echo $compter->fetch();

											$resultat = $con->query("SELECT * FROM entite WHERE categorie='ENTREPRISE' AND 	statut='Approuvé' ORDER BY date_creation DESC LIMIT $premier, $par_page");
										}

										//

										//

										if (!$resultat) {

											$mes_erreur = $con->errorInfo();

											echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
										} else {

											//

											//;

											while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

									?>



												<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

													<div class="single-product" style="padding-top: 0px;">

														<div class="product-img">

															<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;"><?= $row[1]; ?>

															</h6>

															<br>

															<a href="details_affichage.php?k=<?= $row[0]; ?>">

																<img style="width:150px; height: 120px;" class="default-img" src="<?= $row[3]; ?>" alt="#">

															</a>

															<div class="button-head">

																<div class="product-action">

																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="details_affichage.php?k=<?= $row[0]; ?>"><i class=" ti-eye"></i><span><?= $row[10]; ?></span></a>

																</div>

																<div class="product-action-2">

																	<a title="Add to cart" href="details_affichage.php?k=<?= $row[0]; ?>">

																		<?= $row[9]; ?>



																	</a>

																</div>

															</div>

														</div>

														<div class="product-content">

															<div class="product-price">

																<span style="font-size:12px">

																	<?= $row[2]; ?>

																</span>

															</div>

														</div>

													</div>

												</div>

									<?php

											}
										}

										$resultat->closeCursor();
									} catch (PDOException $e) {



										echo "ERREUR :" . $e;
									}





									//

									//

									?>



								</div>

								<?php if (empty($_GET['recherche'])) { ?>

									<div class="row">

										<nav style="margin:10px">

											<ul class="pagination">

												<li class="page-item <?= ($pagecourante == 1) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page=<?= $pagecourante - 1; ?>" class="page-link" style="cursor: pointer;">Précédente</a>

												</li>

												<?php for ($page = 1; $page <= $pages; $page++) : ?>

													<li class="page-item <?= ($pagecourante == $page) ? "active" : "" ?>" style="display:inline-block;">

														<a href="foire.php?page=<?= $page ?>" class="page-link" style="cursor: pointer;">

															<?= $page; ?>

														</a>

													</li>

												<?php endfor ?>

												<li class="page-item <?= ($pagecourante == $pages) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page=<?= $pagecourante + 1; ?>" class="page-link" style="cursor: pointer;">Suivante</a>

												</li>

											</ul>

										</nav>

									</div>

								<?php } ?>

							</div>

						</div>

						<!--/ End Single Tab -->

						<!-- Start Single Tab -->

						<div class="tab-pane fade <?= @$show_o; //show active 
													?>" id="women" role="tabpanel">

							<hr>

							<!-- Start recherche  -->

							<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

								<div class="container">

									<div class="inner-top">

										<div class="row">

											<div class="col-lg-8 offset-lg-2 col-12">

												<!-- Start Newsletter Inner -->

												<div class="inner">

													<form method="get" class="newsletter-inner">

														<div>

															<label>Filtres et recherche : </label>

															<br>

															<select>

																<option>Tout</option>

																<?php if ($filtre_rempli2 == "ok") { ?>

																	<?php while ($row2 = $resultat2->fetch(PDO::FETCH_NUM)) { ?>

																		<?php if ($row2[0] <> "") { ?>

																			<option>

																				<?= $row2[0]; ?>

																			</option>

																		<?php } ?>

																	<?php } ?>

																<?php } ?>

															</select>

														</div>

														<input name="recherche_o" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_o']; ?>" required="" type="text">

														<button class="btn" name="btn_recherche_o" value="recherche"><i class="ti-search"></i></button>

													</form>

												</div>

												<!-- End Newsletter Inner -->

											</div>

										</div>

									</div>

								</div>

							</section>

							<!-- End recherche -->

							<hr>

							<div class="tab-single">

								<div class="row">

									<?php



									// code affichage des entreprises

									//

									try {

										if (isset($_GET['btn_recherche_o'])) {

											if (!empty($_GET['recherche_o'])) {

												//Variable recherche 

												$mot_cle = strtoupper($_GET['recherche_o']);

												$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

												//

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='ORGANISATION' AND statut='Approuvé' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
											}
										} else {

											$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

											//Code pagination debut

											$compter_o = $con->query("SELECT COUNT(identifiant) AS nbr_entite FROM entite WHERE categorie='ORGANISATION' AND statut='Approuvé'");

											$nbr_entite_o = $compter_o->fetch(PDO::FETCH_NUM);

											//($nbr_entite_o==0)?""

											$par_page_o = 12;

											$pages_o = ceil($nbr_entite_o[0] / $par_page_o);

											$premier_o = ($pagecourante_o * $par_page_o) - $par_page_o;

											$resultat = $con->query("SELECT * FROM entite WHERE categorie='ORGANISATION' AND statut='Approuvé' ORDER BY date_creation DESC LIMIT $premier_o, $par_page_o");
										}

										//

										//

										if (!$resultat) {

											$mes_erreur = $con->errorInfo();

											echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
										} else {

											while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

												echo '

														<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

																<div class="single-product">

																	<div class="product-img">

																	<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

																		<a href="details_affichage.php?k=' . $row[0] . '">

																			<img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

																		</a>

																		<div class="button-head">

																		<div class="product-action">

																			<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="details_affichage.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

																			</div>

																			<div class="product-action-2">

																				<a title="Add to cart" href="details_affichage.php?k=' . $row[0] . '">' . $row[9] . '</a>

																			</div>

																		</div>

																	</div>

																	<div class="product-content">

																		<h3><a href="details_affichage.php?k=' . $row[0] . '">' . $row[15] . '</a></h3>

																		<div class="product-price">

																			<span style="font-size:12px">' . $row[2] . '</span>

																	</div>

																</div>

															</div>

														</div>

														';
											}
										}

										$resultat->closeCursor();
									} catch (PDOException $e) {



										echo "ERREUR :" . $e;
									}





									//

									//

									?>

								</div>

								<?php if (empty($_GET['recherche'])) { ?>

									<div class="row">

										<nav style="margin:10px">

											<ul class="pagination">

												<li class="page-item <?= ($pagecourante_o == 1) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page_o=<?= $pagecourante_o - 1; ?>" class="page-link" style="cursor: pointer;">Précédente</a>

												</li>

												<?php for ($page_o = 1; $page_o <= $pages_o; $page_o++) : ?>

													<li class="page-item <?= ($pagecourante_o == $page_o) ? "active" : "" ?>" style="display:inline-block;">

														<a href="foire.php?page_o=<?= $page_o ?>" class="page-link" style="cursor: pointer;">

															<?= $page_o; ?>

														</a>

													</li>

												<?php endfor ?>

												<li class="page-item <?= ($pagecourante_o == $pages_o) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page_o=<?= $pagecourante_o + 1; ?>" class="page-link" style="cursor: pointer;">Suivante</a>

												</li>

											</ul>

										</nav>

									</div>

								<?php } ?>

							</div>

						</div>

						<!--/ End Single Tab -->

						<!-- Start Single Tab -->

						<div class="tab-pane fade <?= @$show_eg; //show active 
													?>" id="kids" role="tabpanel">

							<hr>

							<!-- Start recherche  -->

							<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

								<div class="container">

									<div class="inner-top">

										<div class="row">

											<div class="col-lg-8 offset-lg-2 col-12">

												<!-- Start Newsletter Inner -->

												<div class="inner">

													<form method="get" class="newsletter-inner">

														<div>

															<label>Filtres et recherche : </label>

															<br>

															<select>

																<option>Tout</option>

																<?php if ($filtre_rempli3 == "ok") { ?>

																	<?php while ($row3 = $resultat3->fetch(PDO::FETCH_NUM)) { ?>

																		<?php if ($row3[0] <> "") { ?>

																			<option>

																				<?= $row3[0]; ?>

																			</option>

																		<?php } ?>

																	<?php } ?>

																<?php } ?>

															</select>

														</div>

														<input name="recherche_eg" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_eg']; ?>" required="" type="text">

														<button class="btn" name="btn_recherche_eg" value="recherche"><i class="ti-search"></i></button>

													</form>

												</div>

												<!-- End Newsletter Inner -->

											</div>

										</div>

									</div>

								</div>

							</section>

							<!-- End recherche -->

							<hr>

							<div class="tab-single">

								<div class="row">

									<?php



									// code affichage des entreprises

									//

									try {

										if (isset($_GET['btn_recherche_eg'])) {

											if (!empty($_GET['recherche_eg'])) {

												//Variable recherche 

												$mot_cle = strtoupper($_GET['recherche_eg']);

												$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

												//

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='EGLISE' AND statut='Approuvé' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
											}
										} else {

											$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

											//Code pagination debut

											$compter_eg = $con->query("SELECT COUNT(identifiant) AS nbr_entite FROM entite WHERE categorie='EGLISE' AND statut='Approuvé'");

											$nbr_entite_eg = $compter_eg->fetch(PDO::FETCH_NUM);

											//($nbr_entite_eg==0)?""

											$par_page_eg = 12;

											$pages_eg = ceil($nbr_entite_eg[0] / $par_page_eg);

											$premier_eg = ($pagecourante_eg * $par_page_eg) - $par_page_eg;

											$resultat = $con->query("SELECT * FROM entite WHERE categorie='EGLISE' AND statut='Approuvé' ORDER BY date_creation DESC LIMIT $premier_eg, $par_page_eg");
										}

										//

										if (!$resultat) {

											$mes_erreur = $con->errorInfo();

											echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
										} else {

											while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

												echo '

														<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

																<div class="single-product">

																	<div class="product-img">

																	<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

																		<a href="details_affichage.php?k=' . $row[0] . '">

																			<img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

																		</a>

																		<div class="button-head">

																		<div class="product-action">

																			<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="details_affichage.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

																			</div>

																			<div class="product-action-2">

																				<a title="Add to cart" href="details_affichage.php?k=' . $row[0] . '">' . $row[9] . '</a>

																			</div>

																		</div>

																	</div>

																	<div class="product-content">

																		<h3><a href="details_affichage.php?k=' . $row[0] . '">' . $row[15] . '</a></h3>

																		<div class="product-price">

																			<span style="font-size:12px">' . $row[2] . '</span>

																	</div>

																</div>

															</div>

														</div>

														';
											}
										}

										$resultat->closeCursor();
									} catch (PDOException $e) {



										echo "ERREUR :" . $e;
									}





									//

									//

									?>

								</div>

								<?php if (empty($_GET['recherche'])) { ?>

									<div class="row">

										<nav style="margin:10px">

											<ul class="pagination">

												<li class="page-item <?= ($pagecourante_eg == 1) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page_eg=<?= $pagecourante_eg - 1; ?>" class="page-link" style="cursor: pointer;">Précédente</a>

												</li>

												<?php for ($page_eg = 1; $page_eg <= $pages_eg; $page_eg++) : ?>

													<li class="page-item <?= ($pagecourante_eg == $page_eg) ? "active" : "" ?>" style="display:inline-block;">

														<a href="foire.php?page_eg=<?= $page_eg ?>" class="page-link" style="cursor: pointer;">

															<?= $page_eg; ?>

														</a>

													</li>

												<?php endfor ?>

												<li class="page-item <?= ($pagecourante_eg == $pages_eg) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page_eg=<?= $pagecourante_eg + 1; ?>" class="page-link" style="cursor: pointer;">Suivante</a>

												</li>

											</ul>

										</nav>

									</div>

								<?php } ?>

							</div>

						</div>

						<!--/ End Single Tab -->

						<!-- Start Single Tab -->

						<div class="tab-pane fade <?= @$show_ec; //show active 
													?>" id="accessories" role="tabpanel">

							<hr>

							<!-- Start recherche  -->

							<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

								<div class="container">

									<div class="inner-top">

										<div class="row">

											<div class="col-lg-8 offset-lg-2 col-12">

												<!-- Start Newsletter Inner -->

												<div class="inner">

													<form method="get" class="newsletter-inner">

														<div>

															<label>Filtres et recherche : </label>

															<br>

															<select>

																<option>Tout</option>

																<?php if ($filtre_rempli4 == "ok") { ?>

																	<?php while ($row4 = $resultat4->fetch(PDO::FETCH_NUM)) { ?>

																		<?php if ($row4[0] <> "") { ?>

																			<option>

																				<?= $row4[0]; ?>

																			</option>

																		<?php } ?>

																	<?php } ?>

																<?php } ?>

															</select>

														</div>

														<input name="recherche_ec" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_ec']; ?>" required="" type="text">

														<button class="btn" name="btn_recherche_ec" value="recherche"><i class="ti-search"></i></button>

													</form>

												</div>

												<!-- End Newsletter Inner -->

											</div>

										</div>

									</div>

								</div>

							</section>

							<!-- End recherche -->

							<hr>

							<div class="tab-single">

								<div class="row">

									<?php



									// code affichage des entreprises

									//

									try {

										if (isset($_GET['btn_recherche_ec'])) {

											if (!empty($_GET['recherche_ec'])) {

												//Variable recherche 

												$mot_cle = strtoupper($_GET['recherche_ec']);

												$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

												//

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='ECOLE' AND statut='Approuvé' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
											}
										} else {

											$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

											//Code pagination debut

											$compter_ec = $con->query("SELECT COUNT(identifiant) AS nbr_entite FROM entite WHERE categorie='ECOLE' AND statut='Approuvé'");

											$nbr_entite_ec = $compter_ec->fetch(PDO::FETCH_NUM);

											//($nbr_entite_ec==0)?""

											$par_page_ec = 12;

											$pages_ec = ceil($nbr_entite_ec[0] / $par_page_ec);

											$premier_ec = ($pagecourante_ec * $par_page_ec) - $par_page_ec;

											$resultat = $con->query("SELECT * FROM entite WHERE categorie='ECOLE' AND statut='Approuvé' ORDER BY date_creation DESC");
										}

										//

										if (!$resultat) {

											$mes_erreur = $con->errorInfo();

											echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
										} else {

											while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

												echo '

														<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

																<div class="single-product">

																	<div class="product-img">

																	<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

																		<a href="details_affichage.php?k=' . $row[0] . '">

																			<img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

																		</a>

																		<div class="button-head">

																		<div class="product-action">

																			<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="details_affichage.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

																			</div>

																			<div class="product-action-2">

																				<a title="Add to cart" href="details_affichage.php?k=' . $row[0] . '">' . $row[9] . '</a>

																			</div>

																		</div>

																	</div>

																	<div class="product-content">

																		<h3><a href="details_affichage.php?k=' . $row[0] . '">' . $row[15] . '</a></h3>

																		<div class="product-price">

																			<span style="font-size:12px">' . $row[2] . '</span>

																	</div>

																</div>

															</div>

														</div>

														';
											}
										}

										$resultat->closeCursor();
									} catch (PDOException $e) {



										echo "ERREUR :" . $e;
									}





									//

									//

									?>

								</div>

								<?php if (empty($_GET['recherche'])) { ?>

									<div class="row">

										<nav style="margin:10px">

											<ul class="pagination">

												<li class="page-item <?= ($pagecourante_ec == 1) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page_ec=<?= $pagecourante_ec - 1; ?>" class="page-link" style="cursor: pointer;">Précédente</a>

												</li>

												<?php for ($page_ec = 1; $page_ec <= $pages_ec; $page_ec++) : ?>

													<li class="page-item <?= ($pagecourante_ec == $page_ec) ? "active" : "" ?>" style="display:inline-block;">

														<a href="foire.php?page_ec=<?= $page_ec ?>" class="page-link" style="cursor: pointer;">

															<?= $page_ec; ?>

														</a>

													</li>

												<?php endfor ?>

												<li class="page-item <?= ($pagecourante_ec == $pages_ec) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page_ec=<?= $pagecourante_ec + 1; ?>" class="page-link" style="cursor: pointer;">Suivante</a>

												</li>

											</ul>

										</nav>

									</div>

								<?php } ?>

							</div>

						</div>

						<!--/ End Single Tab -->

						<!-- Start Single Tab -->

						<div class="tab-pane fade <?= @$show_u; //show active 
													?>" id="essential" role="tabpanel">

							<hr>

							<!-- Start recherche  -->

							<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

								<div class="container">

									<div class="inner-top">

										<div class="row">

											<div class="col-lg-8 offset-lg-2 col-12">

												<!-- Start Newsletter Inner -->

												<div class="inner">

													<form method="get" class="newsletter-inner">

														<div>

															<label>Filtres et recherche : </label>

															<br>

															<select>

																<option>Tout</option>

																<?php if ($filtre_rempli5 == "ok") { ?>

																	<?php while ($row5 = $resultat5->fetch(PDO::FETCH_NUM)) { ?>

																		<?php if ($row5[0] <> "") { ?>

																			<option>

																				<?= $row5[0]; ?>

																			</option>

																		<?php } ?>

																	<?php } ?>

																<?php } ?>

															</select>

														</div>

														<input name="recherche_u" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_u']; ?>" required="" type="text">

														<button class="btn" name="btn_recherche_u" value="recherche"><i class="ti-search"></i></button>

													</form>

												</div>

												<!-- End Newsletter Inner -->

											</div>

										</div>

									</div>

								</div>

							</section>

							<!-- End recherche -->

							<hr>

							<div class="tab-single">

								<div class="row">

									<?php



									// code affichage des entreprises

									//

									try {

										if (isset($_GET['btn_recherche_u'])) {

											if (!empty($_GET['recherche_u'])) {

												//Variable recherche 

												$mot_cle = strtoupper($_GET['recherche_u']);

												$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

												//

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='UNIVERSITE' AND statut='Approuvé' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
											}
										} else {

											$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

											//Code pagination debut

											$compter_u = $con->query("SELECT COUNT(identifiant) AS nbr_entite FROM entite WHERE categorie='UNIVERSITE' AND statut='Approuvé'");

											$nbr_entite_u = $compter_u->fetch(PDO::FETCH_NUM);

											//($nbr_entite_u==0)?""

											$par_page_u = 12;

											$pages_u = ceil($nbr_entite_u[0] / $par_page_u);

											$premier_u = ($pagecourante_u * $par_page_u) - $par_page_u;

											$resultat = $con->query("SELECT * FROM entite WHERE categorie='UNIVERSITE' AND statut='Approuvé' ORDER BY date_creation DESC LIMIT $premier_u, $par_page_u");
										}

										//

										if (!$resultat) {

											$mes_erreur = $con->errorInfo();

											echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
										} else {

											while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

												echo '

														<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

																<div class="single-product">

																	<div class="product-img">

																	<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

																		<a href="details_affichage.php?k=' . $row[0] . '">

																			<img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

																		</a>

																		<div class="button-head">

																		<div class="product-action">

																			<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="details_affichage.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

																			</div>

																			<div class="product-action-2">

																				<a title="Add to cart" href="details_affichage.php?k=' . $row[0] . '">' . $row[9] . '</a>

																			</div>

																		</div>

																	</div>

																	<div class="product-content">

																		<h3><a href="details_affichage.php?k=' . $row[0] . '">' . $row[15] . '</a></h3>

																		<div class="product-price">

																			<span style="font-size:12px">' . $row[2] . '</span>

																	</div>

																</div>

															</div>

														</div>

														';
											}
										}

										$resultat->closeCursor();
									} catch (PDOException $e) {



										echo "ERREUR :" . $e;
									}





									//

									//

									?>

								</div>

								<?php if (empty($_GET['recherche'])) { ?>

									<div class="row">

										<nav style="margin:10px">

											<ul class="pagination">

												<li class="page-item <?= ($pagecourante_u == 1) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page=<?= $pagecourante_u - 1; ?>" class="page-link" style="cursor: pointer;">Précédente</a>

												</li>

												<?php for ($page_u = 1; $page_u <= $pages_u; $page_u++) : ?>

													<li class="page-item <?= ($pagecourante_u == $page_u) ? "active" : "" ?>" style="display:inline-block;">

														<a href="foire.php?page=<?= $page_u ?>" class="page-link" style="cursor:pointer;">

															<?= $page_u; ?>

														</a>

													</li>

												<?php endfor ?>

												<li class="page-item <?= ($pagecourante_u == $pages_u) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page=<?= $pagecourante_u + 1; ?>" class="page-link" style="cursor: pointer;">Suivante</a>

												</li>

											</ul>

										</nav>

									</div>

								<?php } ?>

							</div>

						</div>

						<!--/ End Single Tab -->

						<!-- Start Single Tab -->

						<div class="tab-pane fade <?= @$show_sp; //show active 
													?>" id="prices" role="tabpanel">

							<hr>

							<!-- Start recherche  -->

							<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

								<div class="container">

									<div class="inner-top">

										<div class="row">

											<div class="col-lg-8 offset-lg-2 col-12">

												<!-- Start Newsletter Inner -->

												<div class="inner">

													<form method="get" class="newsletter-inner">

														<div>

															<label>Filtres et recherche : </label>

															<br>

															<select>

																<option>Tout</option>

																<?php if ($filtre_rempli6 == "ok") { ?>

																	<?php while ($row6 = $resultat6->fetch(PDO::FETCH_NUM)) { ?>

																		<?php if ($row6[0] <> "") { ?>

																			<option>

																				<?= $row6[0]; ?>

																			</option>

																		<?php } ?>

																	<?php } ?>

																<?php } ?>

															</select>

														</div>

														<input name="recherche_sp" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_sp']; ?>" required="" type="text">

														<button class="btn" name="btn_recherche_sp" value="recherche"><i class="ti-search"></i></button>

													</form>

												</div>

												<!-- End Newsletter Inner -->

											</div>

										</div>

									</div>

								</div>

							</section>

							<!-- End recherche -->



							<hr>

							<div class="tab-single">

								<div class="row">

									<?php



									// code affichage des entreprises

									//

									try {

										if (isset($_GET['btn_recherche_sp'])) {

											if (!empty($_GET['recherche_sp'])) {

												//Variable recherche 

												$mot_cle = strtoupper($_GET['recherche_sp']);

												$mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

												//

												$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat = $con->query("SELECT * FROM entite WHERE categorie='SERVICE PUBLIC' AND statut='Approuvé' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
											}
										} else {

											$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

											//Code pagination debut

											$compter_sp = $con->query("SELECT COUNT(identifiant) AS nbr_entite FROM entite WHERE categorie='SERVICE PUBLIC' AND statut='Approuvé'");

											$nbr_entite_sp = $compter_sp->fetch(PDO::FETCH_NUM);

											//($nbr_entite_sp==0)?""

											$par_page_sp = 12;

											$pages_sp = ceil($nbr_entite_sp[0] / $par_page_sp);

											$premier_sp = ($pagecourante_sp * $par_page_sp) - $par_page_sp;

											$resultat = $con->query("SELECT * FROM entite WHERE categorie='SERVICE PUBLIC' AND statut='Approuvé' ORDER BY date_creation DESC LIMIT $premier_sp, $par_page_sp");
										}

										//

										//

										if (!$resultat) {

											$mes_erreur = $con->errorInfo();

											echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
										} else {

											while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

												echo '

														<div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

																<div class="single-product">

																	<div class="product-img">

																	<h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

																		<a href="details_affichage.php?k=' . $row[0] . '">

																			style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

																		</a>

																		<div class="button-head">

																		<div class="product-action">

																			<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="details_affichage.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

																			</div>

																			<div class="product-action-2">

																				<a title="Add to cart" href="details_affichage.php?k=' . $row[0] . '">' . $row[9] . '</a>

																			</div>

																		</div>

																	</div>

																	<div class="product-content">

																		<h3><a href="details_affichage.php?k=' . $row[0] . '">' . $row[15] . '</a></h3>

																		<div class="product-price">

																			<span style="font-size:12px">' . $row[2] . '</span>

																	</div>

																</div>

															</div>

														</div>

														';
											}
										}

										$resultat->closeCursor();
									} catch (PDOException $e) {



										echo "ERREUR :" . $e;
									}





									//

									//

									?>

								</div>

								<?php if (empty($_GET['recherche'])) { ?>

									<div class="row">

										<nav style="margin:10px">

											<ul class="pagination">

												<li class="page-item <?= ($pagecourante_sp == 1) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page=<?= $pagecourante_sp - 1; ?>" class="page-link" style="cursor: pointer;">Précédente</a>

												</li>

												<?php for ($page_sp = 1; $page_sp <= $pages_sp; $page_sp++) : ?>

													<li class="page-item <?= ($pagecourante_sp == $page_sp) ? "active" : "" ?>" style="display:inline-block;">

														<a href="foire.php?page=<?= $page_sp ?>" class="page-link" style="cursor:pointer;">

															<?= $page_sp; ?>

														</a>

													</li>

												<?php endfor ?>

												<li class="page-item <?= ($pagecourante_sp == $pages_sp) ? "disabled" : "" ?>" style="display:inline-block;">

													<a href="foire.php?page=<?= $pagecourante_sp + 1; ?>" class="page-link" style="cursor: pointer;">Suivante</a>

												</li>

											</ul>

										</nav>

									</div>

								<?php } ?>

							</div>

						</div>

						<!--/ End Single Tab -->

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<!-- End Product Area -->