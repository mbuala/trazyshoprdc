<?php
	$id=$_GET['j'];
	if (empty($id)) {
		header('Location: foire.php');
  		exit();
	}
	if (isset($_POST['btn_upload_logo'])) {
		//
		$logo=$_FILES['logo_img']['name'];
		
		if ($logo!="") {
			require "uploadimage.php";
			if($sortie==false)
				{
					$logo=$dest_dossier . $dest_fichier;
				}else {
					$logo="notdid";
				}

		}
		if ($logo!="notdid") {
			$logo_img = $logo;
			//SQL modification
			try {

				include_once("fonction/connexion.php");
				$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$con->exec("UPDATE entite SET logo='$logo_img' WHERE identifiant='$id'");
				echo'
					<script>
						location.href="modifier.php?k='.$_GET['k'].'&h='.$logo_img.'&i='.$_GET['i'].'&j='.$id.'";
					</script>
				';
				//header('Location: modifier.php?k='.$_GET['k'].'&h='.$logo_img.'&i='.$_GET['i'].'&j='.$id.'');
  				//exit();
				
			} catch (PDOException $e) {
				echo'
				 <script>
				 	alert("'.$e.'");
				 </script>
				';
			}
		}else{
			echo'
				 <script>
				 	alert("Chargement echoué, veuillez refaire svp !");
				 </script>
				';
		}
		
	}elseif(isset($_POST['btn_upload_profil'])){
		$logo=$_FILES['profil_img']['name'];
		
		if ($logo!="") {
			require "uploadimage2.php";
			if($sortie==false)
				{
					$logo=$dest_dossier . $dest_fichier;
				}else {
					$logo="notdid";
				}

		}
		if ($logo!="notdid") {
			$profil_img = $logo;
			//SQL modification
			try {

				include_once("fonction/connexion.php");
				$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$con->exec("UPDATE entite SET img_profil='$profil_img' WHERE identifiant='$id'");
				echo'
					<script>
						location.href="modifier.php?k='.$_GET['k'].'&h='.$_GET['h'].'&i='.$profil_img.'&j='.$id.'";
					</script>
				';
				//header('Location: modifier.php?k='.$_GET['k'].'&h='.$_GET['h'].'&i='.$profil_img.'&j='.$id.'');
  				//exit();
				//
				
			} catch (PDOException $e) {
				echo'
				 <script>
				 	alert("'.$e.'");
				 </script>
				';
			}
		}else{
			echo'
				 <script>
				 	alert("Chargement echoué, veuillez refaire svp !");
				 </script>
				';
		}

	}elseif (isset($_POST['btn_upload_couverture'])) {
		$logo=$_FILES['couverture_img']['name'];
		
		if ($logo!="") {
			require "uploadimage3.php";
			if($sortie==false)
				{
					$logo=$dest_dossier . $dest_fichier;
				}else {
					$logo="notdid";
				}

		}
		if ($logo!="notdid") {
			$couverture_img = $logo;
			try {

				include_once("fonction/connexion.php");
				$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$con->exec("UPDATE entite SET img_ban='$couverture_img', img_paysage='$couverture_img' WHERE identifiant='$id'");
				echo'
					<script>
						location.href="modifier.php?k='.$couverture_img.'&h='.$_GET['h'].'&i='.$_GET['i'].'&j='.$id.'";
					</script>
				';
				/*
				header('Location: modifier.php?k='.$couverture_img.'&h='.$_GET['h'].'&i='.$_GET['i'].'&j='.$id.'');
  				exit();
				  */
				
			} catch (PDOException $e) {
				echo'
				 <script>
				 	alert("'.$e.'");
				 </script>
				';
			}
		}else{
			echo'
				 <script>
				 	alert("Chargement echoué, veuillez refaire svp !");
				 </script>
				';
		}
	}
?>