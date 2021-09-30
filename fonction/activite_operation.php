<?php

	$id_entite=$_GET['k'];
	//
	$id_activite=$_GET['id'];
	//
	$id_portefeuille=$_GET['programme'];
	//
	if ($_GET['fonction']=="suppresion_activite") {
			include_once("connexion.php");
			@$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			@$con->exec("DELETE FROM activite WHERE identifiant='$id_activite'");
			echo'
			<script>
				alert("Suppression reussie");
				location.href="../details_portefeuille.php?k='.$id_entite.'&l='.$id_portefeuille.'&pg=prog";
			</script>
			';
		}else{
			include_once("fonction/connexion.php");
		}

?>
<?php 
	if (isset($_POST['btn_modifier_activite'])) {

			$titre_activite=htmlspecialchars($_POST['titre_activite'], ENT_QUOTES);
			$lieu_activite=htmlspecialchars($_POST['lieu_activite'], ENT_QUOTES);
			$date_activite=htmlspecialchars($_POST['date_activite'], ENT_QUOTES);
			$article_activite=htmlspecialchars($_POST['article_activite'], ENT_QUOTES);
			$img1_activite=$_FILES['img1_activite'];
			$commentaire_1=htmlspecialchars($_POST['commentaire_1'], ENT_QUOTES);
			//
			if (empty($titre_activite) or empty($lieu_activite) or empty($date_activite) or empty($article_activite)) {
				echo "Le vide ne passe pas !";
				@$display="";
			} else {
				//
				if (empty($img1_activite['name'])) { // Modification sans image
					try {
							$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$con->exec("UPDATE activite SET titre='$titre_activite', lieu='$lieu_activite', date_activite='$date_activite', article='$article_activite', commentaire_1='$commentaire_1' WHERE identifiant='$id_activite'");
							echo '
								<script>
									alert("votre activité est bien modifiée");
									location.href="details_portefeuille.php?k='.$id_entite.'&l='.$id_portefeuille.'&pg=prog";
								</script>
							';
							//
						} catch (PDOException $e) {
							echo "<h1> '$id_activite' </h1>";
							echo"erreur : ".$e;
						}
						//
				} else { //modification y compris l'image
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
							$con3->exec("UPDATE activite SET titre='$titre_activite', lieu='$lieu_activite', date_activite='$date_activite', article='$article_activite', img1='$img1_activite', commentaire_1='$commentaire_1' WHERE identifiant='$id_activite'");
							echo '
								<script>
									alert("votre activité est bien modifiée");
									location.href="details_portefeuille.php?k='.$id_entite.'&l='.$id_portefeuille.'&pg=prog";
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

			}
	}
?>
<?php
		//include_once("fonction/connexion.php");
	if ($_GET['fonction']<>"suppresion_programme") {
			//
		$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$resultat2 = $con2->query("SELECT * FROM activite WHERE identifiant='$id_activite'");
		if (!$resultat2) {
			$mes_erreur2=$con2->errorInfo();
			echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
		}else{
			$row2 = $resultat2->fetch(PDO::FETCH_NUM);
		}
	}

?>