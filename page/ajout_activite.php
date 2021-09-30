<?php
									@$titre=htmlspecialchars($_POST['titre'], ENT_QUOTES);
									@$soustitre=htmlspecialchars($_POST['soustitre'], ENT_QUOTES);
									@$contenu=htmlspecialchars($_POST['contenu'], ENT_QUOTES);
									@$lieu=htmlspecialchars($_POST['lieu'], ENT_QUOTES);
									@$pays=htmlspecialchars($_POST['pays'], ENT_QUOTES);
									@$ville=htmlspecialchars($_POST['ville'], ENT_QUOTES);
									@$date_debut=htmlspecialchars($_POST['date_debut'], ENT_QUOTES);
									@$date_fin=htmlspecialchars($_POST['date_fin'], ENT_QUOTES);
									@$date_publication = date('d/m/y');
									@$entite=htmlspecialchars($_GET['k'], ENT_QUOTES);
									//
									if (isset($_POST['poster'])) {
										if (empty($titre) or empty($soustitre) or empty($contenu)or empty($lieu)or empty($pays)or empty($ville)or empty($date_debut)or empty($date_fin) or empty($entite)) {
											echo'
												<script>
													alert("Le champ vide ne passe pas !");
												</script>
											';
										}else{
												//
												try {
													include_once("fonction/connexion2.php");
													$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								                    $con2->exec("INSERT INTO activite(titre, soustitre, contenu, lieu, pays, ville, date_debut, date_fin, date_publication, entite) VALUES ('$titre','$soustitre','$contenu','$lieu','$pays','$ville','$date_debut','$date_fin','$date_publication','$entite')");
								                    echo'
															<script>
																alert("Ajout réussi !");
															</script>
														';
													
												} catch (PDOException $e) {
													echo'
															<script>
																alert("'.$e.'");
															</script>
														';
												}
										}
									}

								?>
								<div class="col-12">			
									<div class="reply">
										<div class="reply-head">
											<h2 class="reply-title">Ajouter une activité speciale</h2>
											<!-- Comment Form -->
											<form class="form" action="#" method="post" enctype="multipart/form-data">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Titre<span>*</span></label>
															<input type="text" name="titre" value="<?= $titre; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Sous-titre<span>*</span></label>
															<input type="text" name="soustitre" value="<?= $soustitre; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<label>Contenu<span>*</span></label>
															<textarea name="contenu" placeholder="">
																<?= $contenu; ?>
															</textarea>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Lieu<span>*</span></label>
															<input type="text" name="lieu" value="<?= $lieu; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Pays<span>*</span></label>
															<input type="text" name="pays" value="<?= $pays; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Ville<span>*</span></label>
															<input type="text" name="ville" value="<?= $ville; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Date de debut<span>*</span></label>
															<input type="date" name="date_debut" value="<?= $date_debut; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Date de la fin<span>*</span></label>
															<input type="date" name="date_fin" value="<?= $date_fin; ?>" placeholder="" required="required">
														</div>
													</div>
													<div class="col-12">
														<div class="form-group button">
															<button type="submit" name="poster" class="btn">Poster</button>
														</div>
													</div>
												</div>
											</form>
											<!-- End Comment Form -->
										</div>
									</div>			
								</div>	