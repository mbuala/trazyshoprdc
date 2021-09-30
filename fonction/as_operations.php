<?php
		$id_entite=$_GET['k'];
		//
		$id_portefeuille=$_GET['id'];
		//
		if ($_GET['fonction']=="suppresion_as") {
			include_once("connexion.php");
			@$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			@$con->exec("DELETE FROM portefeuille WHERE id='$id_portefeuille'");
			echo'
			<script>
				alert("Suppression reussie");
				location.href="../details_affichage.php?k='.$id_entite.'";
			</script>
			';
		}else{
			include_once("fonction/connexion.php");
		}

?>
<?php
		include_once("fonction/connexion.php");
	if ($_GET['fonction']<>"suppresion_programme") {
			//
		$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$resultat2 = $con2->query("SELECT * FROM portefeuille WHERE entite='$id_entite' AND id='$id_portefeuille'");
		if (!$resultat2) {
			$mes_erreur2=$con2->errorInfo();
			echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
		}else{
			$row2 = $resultat2->fetch(PDO::FETCH_NUM);
		}
	}
	if (isset($_POST['btn_modifier_as'])) {

		@$intitule_as=htmlspecialchars($_POST['intitule_as'], ENT_QUOTES);
		@$op_as=htmlspecialchars($_POST['op_as'], ENT_QUOTES);
		@$lieu_as=htmlspecialchars($_POST['lieu_as'], ENT_QUOTES);
		@$duree_as=htmlspecialchars($_POST['duree_as'], ENT_QUOTES);
		@$objectif_as=htmlspecialchars($_POST['objectif_as'], ENT_QUOTES);
		@$bd_as=htmlspecialchars($_POST['bd_as'], ENT_QUOTES);
		@$date_debut_as = $_POST['date_debut_as'];
		@$date_fin_as = $_POST['date_fin_as'];
		@$portefeuille_as=htmlspecialchars('Activité spéciale', ENT_QUOTES);
		//
		if (empty($intitule_as) or empty($op_as) or empty($lieu_as) or empty($duree_as) or empty($objectif_as) or empty($bd_as) or empty($date_debut_as) or empty($date_fin_as)) {
			echo'
				<script>
					alert("Le champ vide ne passe pas !");
				</script>
			';
			}else{

				try {
					$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					//
					$con2->exec("UPDATE portefeuille SET intitule='$intitule_as', organise_par='$op_as', lieu='$lieu_as', duree='$duree_as', objectif='$objectif_as', description='$bd_as', date_debut='$date_debut_as', date_fin='$date_fin_as', portefeuille='$portefeuille_as', entite='$id_entite' WHERE id='$id_portefeuille'");
								                    //
					 echo'
						<script>
							alert("Modification réussie !");
							location.href="details_portefeuille.php?k='.$id_entite.'&l='.$id_portefeuille.'&pg=as";
						</script>
					';
													
				} catch (PDOException $e) {
					echo "<h3>Erreur de modification !</h3>";
					//
				}

		}
	}

?>
