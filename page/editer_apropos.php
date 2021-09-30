<?php
	//
	$id=$_GET['id'];
	$entite=$_GET['k'];
	$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$resultat2= $con2->query("SELECT * FROM apropos WHERE id='$id' ");
	if (!$resultat2) {
		$mes_erreur2=$con2->errorInfo();
        echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
	} else {
		$row2 = $resultat2->fetch(PDO::FETCH_NUM);								
	}
	if (isset($_POST['btn_enr'])) {
		//
		//
		@$texte=htmlspecialchars($_POST['texte'], ENT_QUOTES);
		@$vision=htmlspecialchars($_POST['vision'], ENT_QUOTES);
		@$mission=htmlspecialchars($_POST['mission'], ENT_QUOTES);
		if (empty($texte)) {
			echo '
				<script>
					alert("Le champs texte est requis !");
				</script>
			';
		}else{
			try {
				//
				if (empty($id)) {
					$con2->exec("INSERT INTO apropos(texte, vision, mission, entite) VALUES ('$texte', '$vision', '$mission', '$entite')");
					echo '
						<script>
							alert("Votre à propos a été ajouté avec succès !");
							location.href="details_affichage.php?k='.$entite.'";
						</script>
					';
				} else {
					$con2->exec("UPDATE apropos SET texte='$texte', vision='$vision', mission='$mission', entite='$entite' WHERE id='$id'");
					echo '
						<script>
							alert("Edition terminée !");
							location.href="details_affichage.php?k='.$entite.'";
						</script>
					';
				}
				//
			} catch (PDOException $e_apropos) {
				echo $e_apropos;
			}
		}	
	}
	
?>
<div class="col-12">			
	<div class="reply">
		<div class="reply-head">
			<h2 class="reply-title">Edition A propos</h2>
			<!-- Comment Form -->
			<form class="form" method="post">
			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label>Texte (Historique ou autre)<span>*</span></label>
							<textarea name="texte" placeholder="">
								<?= @$row2[1]; ?>
							</textarea>
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<label>Vision</label>
							<textarea name="vision" placeholder="">
								<?= @$row2[2]; ?>
							</textarea>
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<label>Mission</label>
							<textarea name="mission" placeholder="">
								<?= @$row2[3]; ?>
							</textarea>
					</div>
				</div>
				<div class="col-12">
						<div class="form-group button">
							<button type="submit" name="btn_enr" class="btn">
								Enregistrer
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>			
</div>	