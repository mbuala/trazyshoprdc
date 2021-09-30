<?php
		$id_user=$_GET['k'];
		//
		$id_portefeuille=$_GET['l'];
		$date_enr=date("Y-m-d");
		//
		$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$resultat2 = $con2->query("SELECT * FROM portefeuille WHERE entite='$id_user' AND id='$id_portefeuille'");
		if (!$resultat2) {
			$mes_erreur2=$con2->errorInfo();
			echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
		}else{
			$row2 = $resultat2->fetch(PDO::FETCH_NUM);
		}
		@$display="none";
		if (isset($_POST['btn_display'])) {
			@$display="";
		}

		//enregistrement de l'activité
		if (isset($_POST['poster_active'])) {
			// 
			$titre_activite=htmlspecialchars($_POST['titre_activite'], ENT_QUOTES);
			$type_activite=htmlspecialchars($_POST['type_activite'], ENT_QUOTES);
			$lieu_activite=htmlspecialchars($_POST['lieu_activite'], ENT_QUOTES);
			$date_activite=htmlspecialchars($_POST['date_activite'], ENT_QUOTES);
			$article_activite=htmlspecialchars($_POST['article_activite'], ENT_QUOTES);
			$img1_activite=$_FILES['img1_activite'];
			$commentaire_1=htmlspecialchars($_POST['commentaire_1'], ENT_QUOTES);
			//
			if (empty($titre_activite) or empty($type_activite) or empty($lieu_activite) or empty($date_activite) or empty($article_activite) or empty($img1_activite)) {
				echo "Le vide ne passe pas !";
				@$display="";
			} else {
				//
				$ext= strtolower(pathinfo($img1_activite['name'], PATHINFO_EXTENSION));
				//
				$ext_valide=['jpg','png','gif','jpeg'];
				if (!in_array($ext, $ext_valide)) {
					echo "Ce type de fichier n'est pas permi ! seules les images sont pris en compte";
				}else{
					$nom_fichier=uniqid().'.'.$ext;
					$dossier="images/foire/activite/";
					if (move_uploaded_file($img1_activite['tmp_name'],$dossier.$nom_fichier)) {
						$img1_activite=$dossier.$nom_fichier;
						try {
							$con3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$con3->exec("INSERT INTO activite(titre, type, lieu, date_activite, article, img1, programme, entite, commentaire_1, date_enr) VALUES ('$titre_activite','$type_activite','$lieu_activite','$date_activite', '$article_activite','$img1_activite','$id_portefeuille','$id_user','$commentaire_1','$date_enr')");
							echo '
								<script>
									alert("votre activité est bien ajouté");
								</script>
							';
							//
						} catch (PDOException $e) {
							echo"erreur : ".$e;
						}

					} else {
						echo "Votre enregistrement a echoué suite au mauvais chargement du fichier";
					}
					
				}
			}
			//
			//
		}
?>
<div class="col-12" >			
	<div class="reply">
		<div class="reply-head">
			<h2 class="reply-title">Titre du programme : <?= $titre_programme=$row2[1]; ?></h2> 
			<?php if ($page_active=="moi") { ?>
				<form method="post" style="padding: 0px;">
					<button class="btn" type="submit" name="btn_display" style="background:white; color: black; border: none; margin: 10px; ">
					| Ajouter une activité à ce programme
					</button>
				</form>
			<!-- Comment Form -->
			<form style="display: <?= @$display; ?>;" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="form-group">
							<?php include_once('page/champs_type_activite.php'); ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="form-group">
							<label>Titre<span>*</span></label>
							<input type="text" name="titre_activite" value="<?= @$titre_activite; ?>" placeholder="" required="required">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="form-group">
							<label>Lieu<span>*</span></label>
							<input type="text" name="lieu_activite" value="<?= @$lieu_activite; ?>" placeholder="" required="required">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="form-group">
							<label>Date<span>*</span></label>
							<input type="date" name="date_activite" value="<?= @$date_activite; ?>" placeholder="" required="required">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<label>Ecrire un text<span>*</span></label>
							<textarea name="article_activite" placeholder="">
								<?= @$article_activite; ?>
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
							<input type="text" name="commentaire_1" value="<?= @$commentaire_1; ?>" placeholder="" required="required">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group button">
							<button type="submit" name="poster_active" class="btn">Poster</button>
						</div>
					</div>
				</div>
			</form>
			<br>
			<?php }?>
			<!-- End Comment Form -->
			<div style="box-shadow: 1px 1px 12px #555; padding: 20px;">
				<!-- Comment Form -->
				<form>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<p>
									Basé à <strong><?= $row2[3]; ?></strong>
								</p>
								<?php if($page_active=="moi"){  ?>
								<p>
									<a href="modification.php?k=<?= $row2[10]; ?>&entite=<?= $row[1]; ?>&cat=<?= $row[15]; ?>&l=<?= $row[3]; ?>&fonction=Programme&id=<?= $row2[0]; ?>" title="Modifier ce programme">
										<img src="images/modif.png" alt="Modifier" style="max-width: 50px;">
									</a>
									&nbsp;
									&nbsp;
									&nbsp;
									<a href="fonction/programmes_et_modication.php?k=<?= $row2[10]; ?>&fonction=suppresion_programme&id=<?= $row2[0]; ?>" title="Supprimer ce programme avec tous ces activités attanchées">
										<img src="images/sup.png" alt="Supprimer" style="max-width: 50px;">
									</a>
								</p>
								<?php }  ?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<p>
									Financé par : <strong><?= $row2[11]; ?></strong><br>
									Executé par : <strong><?= $row2[12]; ?></strong><br>
									Date du début : <strong><?= $row2[7]; ?></strong><br>
									Date de la fin : <strong><?= $row2[8]; ?></strong>
								</p>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<marquee>
									<h5 style="color:rgb(2, 0, 97)">
										Objectif : <?= $row2[5]; ?>
									</h5>
								</marquee>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<hr>
								<strong>Déscription</strong>
								<hr>
								<p style="text-align:justify; overflow: hidden;">
									<?= $row2[6]; ?>
								</p>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<hr>
									<h6>Les activités liées à ce programme</h6>
								<hr>
							<!-- Start Most Popular -->
							    <div class="product-area most-popular section" style="margin-top:20px; padding-top:0px; padding-bottom: 0px;">
							        <div class="container">
							            <div class="row">
							                <div class="col-12" style="background:#dfe3ee; border-radius:10px;">
							                    <div class="owl-carousel popular-slider">
							                    	<?php 
														$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
														$resultat2 = $con2->query("SELECT * FROM activite WHERE entite='$id_user' AND programme='$id_portefeuille'");
														if (!$resultat2) {
															$mes_erreur2=$con2->errorInfo();
															echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
														}else{
															while ($row2 = $resultat2->fetch(PDO::FETCH_NUM)) {
													?>
														<!-- Start Single Product -->
													<div class="single-product" style="margin-top:0px; padding-top:0px">
														<div class="product-img">
															<h6 style="text-align: center; margin-bottom:5px; font-size: 13px; padding-top:5px">
																<?= $row2[10]; ?>
																	
																</h6>
															<a href="slider_activite.php?prog=<?=$titre_programme?>&progid=<?=$id_portefeuille?>&ent=<?= $row[1]; ?>&logo=<?= $row[3]; ?>&k=<?= $row[0]; ?>&actid=<?= $row2[0]; ?>">
																<img class="default-img" src="<?= $row2[6]; ?>" style="width: 850px; height: 120px;" alt="img activité">
																<img class="hover-img" src="<?= $row2[6]; ?>" style="width: 850px; height: 120px;" alt="img activité">
																<span class="out-of-stock"><?= $row2[2]; ?></span>
															</a>
														</div>
														<div class="product-content">
															<p style="font-size:12px">
																<a href="slider_activite.php?prog=<?=$titre_programme?>&progid=<?=$id_portefeuille?>&ent=<?= $row[1]; ?>&logo=<?= $row[3]; ?>&k=<?= $row[0]; ?>&actid=<?= $row2[0]; ?>"> 
																	<?= $row2[3]; ?>
																</a>
															</p>
															<div class="product-price">
																<span style="font-size:12px">Date : <?= $row2[4]; ?></span>
															</div>
														</div>
													</div>
													<!-- End Single Product -->
													<?php
																
															}	
														}
													?>
							                    </div>
							                </div>
							            </div>
							        </div>
							   </div>
							<!-- End Most Popular Area -->
							</div>
						</div>
					</div>
				</form>
				<!-- End Comment Form -->
			</div>
		</div>
	</div>			
</div>
