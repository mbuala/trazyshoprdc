								<?php
									@$intitule_as=htmlspecialchars($_POST['intitule_as'], ENT_QUOTES);
									@$op_as=htmlspecialchars($_POST['op_as'], ENT_QUOTES);
									@$lieu_as=htmlspecialchars($_POST['lieu_as'], ENT_QUOTES);
									@$duree_as=htmlspecialchars($_POST['duree_as'], ENT_QUOTES);
									@$objectif_as=htmlspecialchars($_POST['objectif_as'], ENT_QUOTES);
									@$bd_as=htmlspecialchars($_POST['bd_as'], ENT_QUOTES);
									@$date_debut_as = $_POST['date_debut_as'];
									@$date_fin_as = $_POST['date_fin_as'];
									@$entite_as=$_GET['k'];
									@$portefeuille_as=htmlspecialchars('Activité spéciale', ENT_QUOTES);
									//
									if (isset($_POST['poster_as'])) {
										
										if (empty($intitule_as) or empty($op_as) or empty($lieu_as) or empty($duree_as) or empty($objectif_as) or empty($bd_as) or empty($date_debut_as) or empty($date_fin_as)) {
											echo'
												<script>
													alert("Le champ vide ne passe pas !");
												</script>
											';
										}else{

												try {
													//
													include_once("fonction/connexion2.php");
													$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								                    $con2->exec("INSERT INTO portefeuille(intitule, organise_par, lieu, duree, objectif, description, date_debut, date_fin, portefeuille, entite) VALUES ('$intitule_as','$op_as','$lieu_as','$duree_as','$objectif_as','$bd_as','$date_debut_as','$date_fin_as','$portefeuille_as','$entite_as')");
								                    //
								                    echo'
															<script>
																alert("Ajout de l\'activité spéciale réussi !");
															</script>
														';
													
												} catch (PDOException $e) {
													echo "<h3>Erreur !</h3>";
													echo "<p>$e</p>";
											//
											//
												}

											}
										}
										//Code de programme
										if (isset($_POST['poster_p'])) {
											@$intitule_p=htmlspecialchars($_POST['intitule_p'], ENT_QUOTES);
											@$fp_p=htmlspecialchars($_POST['fp_p'], ENT_QUOTES);
											@$ep_p=htmlspecialchars($_POST['ep_p'], ENT_QUOTES);
											@$duree_p=htmlspecialchars($_POST['duree_p'], ENT_QUOTES);
											@$objectif_p=htmlspecialchars($_POST['objectif_p'], ENT_QUOTES);
											@$bd_p=htmlspecialchars($_POST['bd_p'], ENT_QUOTES);
											@$date_debut_p = $_POST['date_debut_p'];
											@$date_fin_p = $_POST['date_fin_p'];
											@$entite_p=$_GET['k'];
											@$portefeuille_p=htmlspecialchars('Programme', ENT_QUOTES);
											@$villepays_p=htmlspecialchars($_POST['villepays_p'], ENT_QUOTES);
										if (empty($intitule_p) or empty($fp_p) or empty($ep_p) or empty($duree_p) or empty($objectif_p) or empty($bd_p) or empty($date_debut_p) or empty($date_fin_p) or empty($villepays_p)) {
											echo'
												<script>
													alert("Le champ vide ne passe pas !");
												</script>
											';
										}else{

												try {
													//
													include_once("fonction/connexion2.php");
													$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								                    $con2->exec("INSERT INTO portefeuille(intitule, lieu, duree, objectif, description, date_debut, date_fin, portefeuille, entite, finance_par, executer_par) VALUES ('$intitule_p','$villepays_p','$duree_p','$objectif_p','$bd_p','$date_debut_p','$date_fin_p','$portefeuille_p','$entite_p','$fp_p','$ep_p')");
								                    //
								                    echo'
															<script>
																alert("Ajout du programme réussi !");
															</script>
														';
													
												} catch (PDOException $e) {
													echo "<h3>Erreur !</h3>";
													echo "<p>$e</p>";
											//
											//
												}

											}
										}

								?>
								<div class="col-12">			
									<div class="reply">
										<div class="reply-head">
											<h2 class="reply-title">Portefeuille</h2>
											<!-- Comment Form -->
											<div class="product-info">
												<div class="nav-main">
													<!-- Tab Nav -->
													<ul class="nav nav-tabs" id="myTab" role="tablist">
														<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Activité speciale</a></li>
														<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Programme</a></li>
													</ul>
													<!--/ End Tab Nav -->
												</div>
												<div class="tab-content" id="myTabContent">
													<!-- Start Single Tab -->
													<div class="tab-pane fade show active" id="man" role="tabpanel">
														<form class="form" method="post">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Intitulé<span>*</span></label>
																		<input type="text" name="intitule_as" value="<?= @$intitule_as; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Organiser par <span>*</span></label>
																		<input type="text" name="op_as" value="<?= @$op_as; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Lieu<span>*</span></label>
																		<input type="text" name="lieu_as" value="<?= @$lieu_as; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Durée<span>*</span></label>
																		<input type="text" name="duree_as" value="<?= @$duree_as; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Objectif<span>*</span></label>
																		<input type="text" name="objectif_as" value="<?= @$objectif_as; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-12">
																	<div class="form-group">
																		<label>Breve description<span>*</span></label>
																		<textarea name="bd_as" placeholder="">
																			<?= @$bd_as; ?>
																		</textarea>
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Date debut<span>*</span></label>
																		<input type="date" name="date_debut_as" value="<?= @$date_debut_as; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Date fin<span>*</span></label>
																		<input type="date" name="date_fin_as" value="<?= @$date_fin_as; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-12">
																	<div class="form-group button">
																		<button type="submit" name="poster_as" class="btn">Poster</button>
																	</div>
																</div>
															</div>
														</form>
											<!-- End Comment Form -->
													</div>
													<!--/ End Single Tab -->
													<!-- Start Single Tab -->
													<div class="tab-pane fade" id="kids" role="tabpanel">
														<form class="form" method="post">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Intitulé<span>*</span></label>
																		<input type="text" name="intitule_p" value="<?= @$intitule_p; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Financé par <span>*</span></label>
																		<input type="text" name="fp_p" value="<?= @$fp_p; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Executé par<span>*</span></label>
																		<input type="text" name="ep_p" value="<?= @$ep_p; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Durée<span>*</span></label>
																		<input type="text" name="duree_p" value="<?= @$duree_p; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Objectif<span>*</span></label>
																		<input type="text" name="objectif_p" value="<?= @$objectif_p; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Basé à (Ville / Pays)<span>*</span></label>
																		<input type="text" name="villepays_p" value="<?= @$villepays_p; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-12">
																	<div class="form-group">
																		<label>Breve description<span>*</span></label>
																		<textarea name="bd_p" placeholder="">
																			<?= @$bd_p; ?>
																		</textarea>
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Date debut<span>*</span></label>
																		<input type="date" name="date_debut_p" value="<?= @$date_debut_p; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-12">
																	<div class="form-group">
																		<label>Date fin<span>*</span></label>
																		<input type="date" name="date_fin_p" value="<?= @$date_fin_p; ?>" placeholder="" required="required">
																	</div>
																</div>
																<div class="col-12">
																	<div class="form-group button">
																		<button type="submit" name="poster_p" class="btn">Poster</button>
																	</div>
																</div>
															</div>
														</form>
											<!-- End Comment Form -->
													</div>
													<!--/ End Single Tab -->
												</div>
											</div>
											
										</div>
									</div>			
								</div>	