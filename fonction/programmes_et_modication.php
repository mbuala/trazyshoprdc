<?php

	 $id_entite=$_GET['k'];
	 $id_portefeuille= $_GET['id'];
	 //
	//Affichage de l'activité selon ID et l'entité
	if ($_GET['fonction']<>"suppresion_programme") {
		include_once("fonction/connexion.php");
		// code...
	try {
			$port=htmlspecialchars($_GET['fonction'], ENT_QUOTES);
			//
			//
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$resultat = $con->query("SELECT * FROM portefeuille WHERE entite='$id_entite' AND id='$id_portefeuille'");
			if (!$resultat) {
				$mes_erreur=$con->errorInfo();
				echo "Lecture impossible, code : ", $con->errorCode(),$mes_erreur[2];
			}else{
				$row = $resultat->fetch(PDO::FETCH_NUM);
			}
		//
	 	} catch (PDOException $e) {
	 		echo "ERREUR : $e ";
	 	}
	 }
	 //
	 //Modification 
	 //
	 	if (isset($_POST['btn_modifier_prog'])) {
	 		//
			$intitule_p=htmlspecialchars($_POST['intitule_p'], ENT_QUOTES);
			$fp_p=htmlspecialchars($_POST['fp_p'], ENT_QUOTES);
			$ep_p=htmlspecialchars($_POST['ep_p'], ENT_QUOTES);
			$duree_p=htmlspecialchars($_POST['duree_p'], ENT_QUOTES);
			$objectif_p=htmlspecialchars($_POST['objectif_p'], ENT_QUOTES);
			$bd_p=htmlspecialchars($_POST['bd_p'], ENT_QUOTES);
			$date_debut_p = $_POST['date_debut_p'];
			$date_fin_p = $_POST['date_fin_p'];
			$entite_p=htmlspecialchars($_GET['k'], ENT_QUOTES);
			$portefeuille_p=htmlspecialchars('Programme', ENT_QUOTES);
			$villepays_p=htmlspecialchars($_POST['villepays_p'], ENT_QUOTES);
			//
			if (empty($intitule_p) or empty($fp_p) or empty($ep_p) or empty($duree_p) or empty($objectif_p) or empty($bd_p) or empty($date_debut_p) or empty($date_fin_p) or empty($villepays_p)) {
				echo'
					<script>
						alert("Le champ vide ne passe pas !");
					</script>
				';
			}else{

				try {
					//
					$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$con->exec("UPDATE portefeuille SET intitule='$intitule_p', lieu='$villepays_p', duree='$duree_p', objectif='$objectif_p', description='$bd_p', date_debut='$date_debut_p', date_fin='$date_fin_p', portefeuille='$portefeuille_p', entite='$entite_p', finance_par='$fp_p', executer_par='$ep_p' WHERE entite='$id_entite' AND id='$id_portefeuille'");
								                    //
					echo'
						<script>
							alert("Modification de programme réussi !");
							location.href="details_portefeuille.php?k='.$id_entite.'&l='.$id_portefeuille.'&pg=prog";
						</script>
					';								
				} catch (PDOException $e) {
					echo "<h3>Votre Modificationa echoué veuillez refaire !</h3>";
					//
					//
				}

			}
		}
?>
<?php
		if ($_GET['fonction']=="suppresion_programme") {
			include_once("connexion.php");
		?>
		 <script>
			  if (confirm("Voulez-vous vraiment supprimer ce programme ?")) { 
			<?php
						@$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					    @$con->exec("DELETE FROM portefeuille WHERE id='$id_portefeuille'");	
		    ?>
				alert("Suppresion activité réussie !");
				location.href="../details_affichage.php?k=<?= $id_entite; ?>";
				 		
				}else{
				    	
				}
		</script>
<?php	
		}	

?>