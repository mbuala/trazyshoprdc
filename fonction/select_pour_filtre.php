<?php 
		try {
			//
				$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo $compter->fetch();
				$resultat = $con->query("SELECT DISTINCT souscategorie FROM entite WHERE categorie='ENTREPRISE' AND 	statut='Approuvé' ORDER BY  souscategorie");
				if (!$resultat) {
					echo"Erreur innatendue";
				} else {
					$filtre_rempli="ok";
				}
				
			//
		} catch (PDOException $e) {
			echo $e;
		}
		//
		try {
			//
			$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo $compter->fetch();
				$resultat2 = $con2->query("SELECT DISTINCT souscategorie FROM entite WHERE categorie='ORGANISATION' AND statut='Approuvé' ORDER BY  souscategorie");
				if (!$resultat2) {
					echo"Erreur innatendue";
				} else {
					$filtre_rempli2="ok";
				}
				
			//
		} catch (PDOException $e) {
			echo $e;
		}
		//
		try {
			//
		$con3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo $compter->fetch();
				$resultat3 = $con3->query("SELECT DISTINCT souscategorie FROM entite WHERE categorie='EGLISE' AND statut='Approuvé' ORDER BY  souscategorie");
				if (!$resultat3) {
					echo"Erreur innatendue";
				} else {
					$filtre_rempli3="ok";
				}
				
			//
		} catch (PDOException $e) {
			echo $e;
		}
		try {
			//
		$con4->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo $compter->fetch();
				$resultat4 = $con4->query("SELECT DISTINCT souscategorie FROM entite WHERE categorie='ECOLE' AND statut='Approuvé' ORDER BY  souscategorie");
				if (!$resultat4) {
					echo"Erreur innatendue";
				} else {
					$filtre_rempli4="ok";
				}
				
			//
		} catch (PDOException $e) {
			echo $e;
		}
		try {
			//
		$con5->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo $compter->fetch();
				$resultat5 = $con5->query("SELECT DISTINCT souscategorie FROM entite WHERE categorie='UNIVERSITE' AND statut='Approuvé' ORDER BY  souscategorie");
				if (!$resultat5) {
					echo"Erreur innatendue";
				} else {
					$filtre_rempli5="ok";
				}
				
			//
		} catch (PDOException $e) {
			echo $e;
		}
		try {
			//
		$con6->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo $compter->fetch();
				$resultat6 = $con6->query("SELECT DISTINCT souscategorie FROM entite WHERE categorie='SERVICE PUBLIC' AND statut='Approuvé' ORDER BY  souscategorie");
				if (!$resultat6) {
					echo"Erreur innatendue";
				} else {
					$filtre_rempli6="ok";
				}
				
			//
		} catch (PDOException $e) {
			echo $e;
		}
 ?>