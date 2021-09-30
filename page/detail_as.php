<?php
		$id_user=$_GET['k'];
		//
		$id_portefeuille=$_GET['l'];
		//
		include_once("fonction/connexion2.php");
		$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$resultat2 = $con2->query("SELECT * FROM portefeuille WHERE entite='$id_user' AND id='$id_portefeuille'");
		if (!$resultat2) {
			$mes_erreur2=$con2->errorInfo();
			echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
		}else{
			$row2 = $resultat2->fetch(PDO::FETCH_NUM);
		}
?>
<div class="col-12" >			
	<div class="reply">
		<div class="reply-head">
			<h2 class="reply-title">Titre : <?= $row2[1]; ?> </h2>
			<div style="box-shadow: 1px 1px 12px #555; padding: 20px;">
				<!-- Comment Form -->
				<form>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<p>
									Lieu : <strong><?= $row2[3]; ?></strong>
								</p>
								<?php if($page_active=="moi"){  ?>
								<p>
									<a href="modification.php?k=<?= $row2[10]; ?>&entite=<?= $row[1]; ?>&cat=<?= $row[15]; ?>&l=<?= $row[3]; ?>&fonction=as&id=<?= $row2[0]; ?>" title="Modifier cette activité speciale">
										<img src="images/modif.png" alt="Modifier" style="max-width: 50px;">
									</a>
									&nbsp;
									&nbsp;
									&nbsp;
									<a href="fonction/as_operations.php?k=<?= $row2[10]; ?>&fonction=suppresion_as&id=<?= $row2[0]; ?>" title="Supprimer ce programme avec tous ces activités attanchées">
										<img src="images/sup.png" alt="Supprimer" style="max-width: 50px;">
									</a>
								</p>
								<?php }  ?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<p>
									Organiser par : <strong><?= $row2[2]; ?></strong><br>
									Date du début : <strong><?= $row2[7]; ?></strong><br>
									Date de la fin : <strong><?= $row2[8]; ?></strong>
								</p>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<marquee>
									<h5 style="color:rgb(2, 0, 97)">
										Cela à pour objectif : <?= $row2[5]; ?>
									</h5>
								</marquee>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<hr>
								<strong>Déscription</strong>
								<hr>
								<p style="text-align: justify; overflow: hidden;">
									<?= $row2[6]; ?>
								</p>
							</div>
						</div>
					</div>
				</form>
				<!-- End Comment Form -->
			</div>
		</div>
	</div>			
</div>
<?php 

?>