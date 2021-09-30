<?php
	// Details de votre selection
	try {
			include_once("fonction/connexion.php");
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$resultat = $con->query("SELECT * FROM entite WHERE identifiant='".$_GET['k']."'");
			if (!$resultat) {
				$mes_erreur=$con->errorInfo();
                echo "Lecture impossible, code : ", $con->errorCode(),$mes_erreur[2];
			}else{
				$row = $resultat->fetch(PDO::FETCH_NUM);
			}

			} catch (PDOException $e) {
							
		}

?>