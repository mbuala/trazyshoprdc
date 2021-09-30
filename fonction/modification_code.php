<?php
	@$identifiant ="";
	@$denomination = htmlspecialchars($_POST['denomination'], ENT_QUOTES);
	@$specialite = htmlspecialchars($_POST['specialite'], ENT_QUOTES);
	@$slogan = htmlspecialchars($_POST['slogan'], ENT_QUOTES);
	@$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
	@$ville = htmlspecialchars($_POST['ville'], ENT_QUOTES);
	@$pays = htmlspecialchars($_POST['pays'], ENT_QUOTES);
	@$adresse = htmlspecialchars($_POST['adresse'], ENT_QUOTES);
	@$description = htmlspecialchars($_POST['description'], ENT_QUOTES);
	@$nom_representant = htmlspecialchars($_POST['nom_representant'], ENT_QUOTES);
	@$qualite_rep = htmlspecialchars($_POST['qualite_rep'], ENT_QUOTES);
	@$mot_rep = htmlspecialchars($_POST['mot_rep'], ENT_QUOTES);
	@$statut=$_POST['statut'];
	@$tel = htmlspecialchars($_POST['tel'], ENT_QUOTES);
	@$siteweb = htmlspecialchars($_POST['siteweb'], ENT_QUOTES);
	//
	//@$extension="";
	//@$souscategorie="";
	//	
	if(isset($_POST['btn_modifier']))
	{
		//
		if (empty($denomination) or empty($specialite) or empty($slogan) or empty($email) or empty($ville) or empty($pays) or empty($adresse) or empty($description) or empty($nom_representant) or empty($qualite_rep) or empty($mot_rep)) {
			//
			echo'
				 <script>
				 	alert("Certains champs sont vides, veuillez remplire tous les champs svp !");
				 </script>
				';
			//
		}else{ 
				try
				 {
				                	//$identifiant=$cat."_".$denomination."_".str_replace(" ","_", $nom_representant);
				                    include_once("fonction/connexion.php");
				                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				                    $id_entite= $_GET['k'];
				                    $con->exec("UPDATE entite SET denomination='$denomination', specialite='$specialite', slogan='$slogan', description='$description', ville='$ville', pays='$pays', adresse='$adresse', mot_repr='$mot_rep', representant='$nom_representant', qualite='$qualite_rep', compte='$email', statut='$statut', tel='$tel', siteweb='$siteweb' WHERE identifiant='$id_entite'");
				                    //
				                    //
				                    echo "<Script>";
				                    echo "alert('Votre modification est prise en compte, seul VOTRE IDENTIFIANT DE CONNEXION  RESTE : $id_entite')";
				                    echo "</Script>";
				                    //d
					                 echo'
					                  <script>
					                     location.href="details_affichage.php?k='.$id_entite.'";
					                  </script>
					                 ';
				                   //
				 }
				 catch(PDOException $e)
				    {
				                	
				        echo"Echec d'enregistrement veuillez réessayer !".$e;
				                	  
				    }
				//
				//
					
		}//FIN X
		
	}
?>