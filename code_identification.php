<?php
	@$identifiant ="";
	@$denomination = htmlspecialchars($_POST['denomination'], ENT_QUOTES);
	@$specialite = htmlspecialchars($_POST['specialite'], ENT_QUOTES);
	@$slogan = htmlspecialchars($_POST['slogan'], ENT_QUOTES);
	@$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
	@$ville = htmlspecialchars($_POST['ville'], ENT_QUOTES);
	@$pays = htmlspecialchars($_POST['pays'], ENT_QUOTES);
	@$logo_img = htmlspecialchars($_POST['logo_img'], ENT_QUOTES);
	@$profil_img ="images/foire/profil/user.jpg"; // htmlspecialchars($_POST['profil_img'], ENT_QUOTES);
	@$couverture_img = "images/foire/img_fond/standard.jpg"; //htmlspecialchars($_POST['couverture_img'], ENT_QUOTES);
	@$adresse = htmlspecialchars($_POST['adresse'], ENT_QUOTES);
	@$description = htmlspecialchars($_POST['description'], ENT_QUOTES);
	@$cat = htmlspecialchars($_POST['cat'], ENT_QUOTES);
	@$RCCM = htmlspecialchars($_POST['RCCM'], ENT_QUOTES);
	@$IDNAT = htmlspecialchars($_POST['IDNAT'], ENT_QUOTES);
	@$NUMIMP = htmlspecialchars($_POST['NUMIMP'], ENT_QUOTES);
	@$F92 = htmlspecialchars($_POST['F92'], ENT_QUOTES);
	@$AS = htmlspecialchars($_POST['AS'], ENT_QUOTES);
	@$AM_E = htmlspecialchars($_POST['AM_E'], ENT_QUOTES);
	@$PJ = htmlspecialchars($_POST['PJ'], ENT_QUOTES);
	@$AM_U = htmlspecialchars($_POST['AM_U'], ENT_QUOTES);
	@$AM_SP = htmlspecialchars($_POST['AM_SP'], ENT_QUOTES);
	@$nom_representant = htmlspecialchars($_POST['nom_representant'], ENT_QUOTES);
	@$qualite_rep = htmlspecialchars($_POST['qualite_rep'], ENT_QUOTES);
	@$mot_rep = htmlspecialchars($_POST['mot_rep'], ENT_QUOTES);
	@$date_creation = date('d/m/y');
	@$id_representant=$nom_representant;
	@$statut="En attente";
	@$mot_pas = htmlspecialchars($_POST['mot_passe'], ENT_QUOTES);
	@$confirme_mot_passe= htmlspecialchars($_POST['confirme_mot_passe'], ENT_QUOTES);
	//
	@$AM ="";
	@$id_nat="";
	@$num_impo="";
	@$accord_de_siege="";
	@$pers_jur="";
	@$extension="";
	@$souscategorie="";
	//
	//Add entity
	
	@$tel=htmlspecialchars($_POST['tel'], ENT_QUOTES);
	@$siteweb=htmlspecialchars($_POST['siteweb'], ENT_QUOTES);
	//
	//
	@$EXTENSION_ENTR=htmlspecialchars($_POST['EXTENSION_ENTR'], ENT_QUOTES);
	@$SC_ENTR=htmlspecialchars($_POST['SC_ENTR'], ENT_QUOTES);
	@$import_export_ENTR=htmlspecialchars($_POST['import_export_ENTR'], ENT_QUOTES);
	//

	@$EXTENSION_O=htmlspecialchars($_POST['EXTENSION_O'], ENT_QUOTES);
	@$SOUSCAT_O=htmlspecialchars($_POST['SOUSCAT_O'], ENT_QUOTES);
	@$O_IDNAT=htmlspecialchars($_POST['O_IDNAT'], ENT_QUOTES);
	@$O_NUMIMPOT=htmlspecialchars($_POST['O_NUMIMPOT'], ENT_QUOTES);
	//
	@$EXTENSION_E=htmlspecialchars($_POST['EXTENSION_E'], ENT_QUOTES);
	@$SOUSCAT_E=htmlspecialchars($_POST['SOUSCAT_E'], ENT_QUOTES);
	@$PJ_E=htmlspecialchars($_POST['PJ_E'], ENT_QUOTES);
	@$NI_E=htmlspecialchars($_POST['NI_E'], ENT_QUOTES);
	//
	@$EXTENSION_EC=htmlspecialchars($_POST['EXTENSION_EC'], ENT_QUOTES);
	@$SOUSCAT_EC=htmlspecialchars($_POST['SOUSCAT_EC'], ENT_QUOTES);
	@$AM_EC=htmlspecialchars($_POST['AM_EC'], ENT_QUOTES);
	@$IDNAT_EC=htmlspecialchars($_POST['IDNAT_EC'], ENT_QUOTES);
	@$NUMIMPOT_EC=htmlspecialchars($_POST['NUMIMPOT_EC'], ENT_QUOTES);
	//
	//
	@$EXTENSION_U= htmlspecialchars($_POST['EXTENSION_U'], ENT_QUOTES);
	@$SOUSCAT_U=htmlspecialchars($_POST['SOUSCAT_U'], ENT_QUOTES);
	@$IDNAT_U=htmlspecialchars($_POST['IDNAT_U'], ENT_QUOTES);
	@$PERS_JUR_U=htmlspecialchars($_POST['PERS_JUR_U'], ENT_QUOTES);
	@$NUMIMPOT_U=htmlspecialchars($_POST['NUMIMPOT_U'], ENT_QUOTES);
	//
	@$EXTENSION_SP= htmlspecialchars($_POST['EXTENSION_SP'], ENT_QUOTES);
	@$SOUSCAT_SP=htmlspecialchars($_POST['SOUSCAT_SP'], ENT_QUOTES);
	@$AM_PROV_SP=htmlspecialchars($_POST['AM_PROV_SP'], ENT_QUOTES);
	@$AM_GOU_SP=htmlspecialchars($_POST['AM_GOU_SP'], ENT_QUOTES);
	@$DECRET=htmlspecialchars($_POST['DECRET'], ENT_QUOTES);
	//
	//
	//				
	//
	/*
		@$AM ="";
		@$id_nat="";
		@$num_impo="";
		@$accord_de_siege="";
		@$pers_jur="";
		@$extension="";
		@$souscategorie="";
	*/
	//
	if(isset($_POST['btn_soumettre']))
	{
		if ($RCCM<>"" or $IDNAT<>"" or $NUMIMP<>"") {
			$cat="ENTREPRISE";
			$extension= $EXTENSION_ENTR;
			$souscategorie= $SC_ENTR;
			$id_nat=$IDNAT;
			$num_impo=$NUMIMP;

		}elseif ($F92<>"" or $AS<>"" or $O_NUMIMPOT<>"") {
			$cat="ORGANISATION";
			$extension= $EXTENSION_O;
			$souscategorie= $SOUSCAT_O;
			$id_nat=$O_IDNAT;
			$num_impo=$O_NUMIMPOT;
			$accord_de_siege=$AS;
			//
		}elseif ($AM_E<>"" or $PJ_E<>"" or $NI_E<>"") {
			$AM= $AM_E;
			$cat="EGLISE";
			$extension= $EXTENSION_E;
			$souscategorie= $SOUSCAT_E;
			$num_impo=$NI_E;
			$pers_jur=$PJ_E;
			//
		}elseif ($PJ<>"") {
			$cat="ECOLE";
			$AM=$AM_EC;
			$extension= $EXTENSION_EC;
			$souscategorie= $SOUSCAT_EC;
			$num_impo=$NUMIMPOT_EC;
			$id_nat=$IDNAT_EC;
			$pers_jur=$PJ;
		}elseif ($AM_U<>"") {
			$AM= $AM_U;
			$extension= $EXTENSION_U;
			$souscategorie= $SOUSCAT_U;
			$num_impo=$NUMIMPOT_U;
			$id_nat=$IDNAT_U;
			$pers_jur=$PERS_JUR_U;
			$cat="UNIVERSITE";
		}elseif ($AM_SP<>"") {
			$AM= $AM_SP;
			$cat="SERVICE PUBLIC";
			$extension= $EXTENSION_SP;
			$souscategorie= $SOUSCAT_SP;
		}else {
			$cat="";
		}
		//
		//
		//
		//
		//
		if (empty($denomination) or empty($specialite) or empty($slogan) or empty($email) or empty($ville) or empty($pays) or empty($adresse) or empty($description) or empty($cat) or empty($nom_representant) or empty($qualite_rep) or empty($mot_rep)or empty($mot_pas) ) {
			//
			echo'
				 <script>
				 	alert("Certains champs sont vides, veuillez remplire tous les champs svp !");
				 </script>
				';
			//
		}else{ // DEBUT X

			if ($mot_pas==$confirme_mot_passe) {
				//
				//
				//
				$logo=$_FILES['logo_img']['name'];
					if($logo!=""){
					require "uploadimage.php";
					if($sortie==false){$logo=$dest_dossier . $dest_fichier;}
					else {$logo="notdid";}
					}
					if($logo!="notdid"){
					$logo_img = $logo;
					
								try
				                {
				                	$identifiant=$cat."_".$denomination."_".str_replace(" ","_", $nom_representant);
				                	//
				                	$mot_pas= md5($mot_pas);
				                	//
				                	/*
										@$AM ="";
										@$id_nat="";
										@$num_impo="";
										@$accord_de_siege="";
										@$pers_jur="";
										@$extension="";
										@$souscategorie="";
									*/
				                    include_once("fonction/connexion.php");
				                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				                    $con->exec("INSERT INTO entite VALUES ('$identifiant','$denomination','$specialite','$logo_img','$couverture_img','$couverture_img','$slogan','$description','$ville','$pays','$adresse','$mot_rep','$nom_representant','$profil_img','$qualite_rep','$cat','$RCCM','$id_nat','$num_impo','$F92','$accord_de_siege','$AM','$pers_jur','$date_creation','$email','$statut','$mot_pas','$tel','$siteweb','$extension','$souscategorie','$import_export_ENTR','$AM_PROV_SP','$AM_GOU_SP','$DECRET')");
				                    //
				                    echo "<Script>";
				                    echo "alert('Merci cher(e) $nom_representant, votre demande a été bien réçu, nous analysons cela dans un delai de 48h, une fois c\'est bon vous aurez une notification et votre espace foire sera ouvert. Pour plus d\'info, prière de contacter notre support d\'aide. VOTRE IDENTIFIANT DE CONNEXION : $identifiant')";
				                    echo "</Script>";
				                    //
				                    $_SESSION["id"]=$identifiant;
					                 $_SESSION["logo"]=$logo_img;
					                 $id_entite= $_SESSION['id'];
					                // header("location:details_affichage.php?k=$id_entite");
					                // die();
					                 echo'
					                  <script>
					                     location.href="details_affichage.php?k='.$_SESSION['id'].'";
					                  </script>
					                 ';
				                   //
				                }
				                catch(PDOException $e)
				                {
				                	
				                	echo"Echec d'enregistrement veuillez réessayer !".$e;
				                	  
				                }
				                
					}
					else{
					echo"recommence!!!";
					}
				//
				//
				
			}else{

				echo'
				 <script>
				 	alert("Vos deux mots de passe ne sont pas identique !");
				 </script>
				';
			}
					
		}//FIN X
		
	}
?>