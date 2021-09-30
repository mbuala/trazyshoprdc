								<?php
									@$titre=htmlspecialchars($_POST['titre'], ENT_QUOTES);
									@$contenu=htmlspecialchars($_POST['contenu'], ENT_QUOTES);
									@$date_c = date('d/m/y');
									@$entite=htmlspecialchars($_GET['k'], ENT_QUOTES);
									if (isset($_POST['poster'])) {
										if (empty($titre) or empty($contenu)) {
											echo'
												<script>
													alert("Le champ vide ne passe pas !");
												</script>
											';
										}else{
											$logo=$_FILES['logo_img']['name'];
											if ($logo!="") {
												require "uploadimage.php";
												if($sortie==false){$logo=$dest_dossier . $dest_fichier;}
												else {$logo="notdid";}
											}
											if ($logo!="notdid") {
												$logo_img = $logo;
												//
												try {
													include_once("fonction/connexion2.php");
													$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								                    $con2->exec("INSERT INTO actualite(titre, contenu, date_publication, entite, img) VALUES ('$titre','$contenu','$date_c','$entite','$logo_img')");
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
												//
											}else{
												echo"Echec de chargement de l'immage! Recommencez svp !";
											}
										}
									}

								?>
								<div class="col-12">			
									<div class="reply">
										<div class="reply-head">
											<h2 class="reply-title">Ajouter une actualité</h2>
											<!-- Comment Form -->
											<form class="form" action="#" method="post" enctype="multipart/form-data">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Titre<span>*</span></label>
															<input type="text" name="titre" value="<?= $titre; ?>" placeholder="" required="required">
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
													<div class="col-lg-6 col-12">
														<div class="form-group">
															<label>Votre logo</label>
								 							<input type="file" name="logo_img" value="<?php echo $logo_img; ?>" id="logo_img" accept="image/*"/>
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