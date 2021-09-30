<?php 
	// connexion 
	include_once("fonction/connexion.php");
	if (isset($_POST['btn_execution'])) {
		$intitule_offre= htmlspecialchars($_POST['intitule_offre'], ENT_QUOTES);
		$employeur= htmlspecialchars($_POST['employeur'], ENT_QUOTES);
		$lieu= htmlspecialchars($_POST['lieu'], ENT_QUOTES);
		$type_contrat= htmlspecialchars($_POST['type_contrat'], ENT_QUOTES);
		$date_emission= htmlspecialchars($_POST['date_emission'], ENT_QUOTES);
		$date_expiration= htmlspecialchars($_POST['date_expiration'], ENT_QUOTES);
		$pe= htmlspecialchars($_POST['pe'], ENT_QUOTES);
		$contexte= htmlspecialchars($_POST['contexte'], ENT_QUOTES);
		$cc= htmlspecialchars($_POST['cc'], ENT_QUOTES);
		$qualification= htmlspecialchars($_POST['qualification'], ENT_QUOTES);
		$critere= htmlspecialchars($_POST['critere'], ENT_QUOTES);
		$mode= htmlspecialchars($_POST['mode'], ENT_QUOTES);
		$logo_img= $_FILES['logo_img'];
		//
		if (empty($intitule_offre) || empty($employeur) || empty($lieu) || empty($type_contrat) || empty($date_emission) || empty($date_expiration)) {
			echo '
				<script>
					alert("Les champs en * sont requis !");
				</script>
			';
		} else {
			// si ajout ou modification
			if ($btn_titre=="Poster") {
				// code ajout
				$ext= strtolower(pathinfo($logo_img['name'], PATHINFO_EXTENSION));
				$ext_valide=['jpg','png','gif','jpeg']; 
				if (!in_array($ext, $ext_valide)) {
					echo "Ce type de fichier n'est pas permi ! seules les images sont pris en compte";
				}else{
					$nom_fichier=uniqid().'.'.$ext;
					$dossier="images/offre/logo/";
					if (move_uploaded_file($logo_img['tmp_name'],$dossier.$nom_fichier)) {
						$logo_img=$dossier.$nom_fichier;
						try {
							$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$con->exec("INSERT INTO offre(intitule, employeur, lieu, type_contrat, date_emission, date_expiration, presentation_employeur, contexte, cahier_charge, qualification, critere, mode, logo) VALUES ('$intitule_offre','$employeur', '$lieu', '$type_contrat', '$date_emission', '$date_expiration', '$pe', '$contexte', '$cc', '$qualification', '$critere', '$mode', '$logo_img') ");
							echo '
								<script>
									alert("L\'offre ajoutée avec succès !");
								</script>
							';
						} catch (PDOException $e) {
							echo $e;
						}
					} else {
						echo "Votre enregistrement a echoué suite au mauvais chargement du fichier";
					}
					

				}
				
			}
		}
		
	}
?>