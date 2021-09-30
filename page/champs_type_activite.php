<?php
  if ($row[15]=="ENTREPRISE") {
  		//
 ?>
 		<label>Type d'activité<span>*</span></label><br>
		<select name="type_activite">
			<option selected >REUNION</option>
			<option>ATELIER</option>
			<option>FORMATION</option>
			<option>MISSION</option>
			<option>SEMINAIRE</option>
			<option>MANIFESTATION</option>
			<option>CONFERENCE</option>
			<option>RETRAITE</option>
			<option>CELEBRATION</option>
			<option>PREPARATIFS</option>
			<option>INTERVIEW</option>
			<option>INITIATIVES</option>
			<option>TALENTS</option>
			<option>CHRONIQUES ET ANALYSES</option>
			<option>DIVERS</option>
			<option>AUTRE</option>
		</select>
 <?php
  		//
  	}elseif($row[15]=="ORGANISATION"){
 ?>
 		<label>Type d'activité<span>*</span></label><br>
		<select name="type_activite" >
			<option selected >REUNION</option>
			<option>ATELIER</option>
			<option>FORMATION</option>
			<option>MISSION</option>
			<option>SEMINAIRE</option>
			<option>MANIFESTATION</option>
			<option>ENQUETE</option>
			<option>RAPPORT</option>
			<option>AUTRE</option>
		</select>
 <?php
  	}elseif ($row[15]=="EGLISE") {
 ?>
 		<label>Type d'activité<span>*</span></label><br>
		<select name="type_activite" >
			<option selected >CULTE</option>
			<option>REUNION</option>
			<option>CHAINE DE PRIERE</option>
			<option>SORTIE EVANGELIQUE</option>
			<option>PELERINAGE</option>
			<option>INTERCESSION</option>
			<option>JEUNES ET PRIERES</option>
			<option>CELEBRATION</option>
			<option>MISSION</option>
			<option>PREPARATIFS</option>
			<option>FORMATION</option>
			<option>INTERVIEW</option>
			<option>INITIATIVES</option>
			<option>TALENTS</option>
			<option>CHRONIQUES ET ANALYSES</option>
			<option>DIVERS</option>
		</select>
 <?php
  	}elseif ($row[15]=="UNIVERSITE") {
  ?>
 		<label>Type d'activité<span>*</span></label><br>
		<select name="type_activite" >
			<option selected >JOURNEE SCIENTIFIQUE</option>
			<option>CONFERENCE</option>
			<option>COLLATION DES GRADES</option>
			<option>DEFENSES DE MEMOIRES</option>
			<option>SOUTENANCE DE THESE</option>
			<option>AUTRE</option>
		</select>
 <?php
  	}elseif ($row[15]=="ECOLE") {
  ?>
 		<label>Type d'activité<span>*</span></label><br>
		<select name="type_activite" >
			<option selected >JOURNEE CULTURELLE</option>
			<option>PROMO SCOLAIRE</option>
			<option>REUNION DES PARENTS</option>
			<option>SPORT ET LOISIR</option>
			<option>REUNION</option>
			<option>SORTIE & EXCURSION</option>
			<option>RECOLLECTION</option>
			<option>RETRAITE</option>
			<option>PROMO SCOLAIRE</option>
			<option>JOURNEE COULTURELLE</option>
			<option>SOIREE CULTURELLE</option>
			<option>CELEBRATION</option>
			<option>PREPARATIFS</option>
			<option>INTERVIEW</option>
			<option>INITIATIVES</option>
			<option>TALENTS</option>
			<option>CHRONIQUES ET ANALYSES</option>
			<option>DIVERS</option>
			<option>AUTRES</option>
		</select>
 <?php
  	}elseif ($row[15]=="SERVICE PUBLIC") {
  ?>
 		<label>Type d'activité<span>*</span></label><br>
		<select name="type_activite" >
			<option selected >REUNION</option>
			<option>ATELIER</option>
			<option>FORMATION</option>
			<option>MISSION</option>
			<option>SEMINAIRE</option>
			<option>MANIFESTATION</option>
			<option>CONFERENCE</option>
			<option>RETRAITE</option>
			<option>AUTRE</option>
		</select>
 <?php
  	}
?>
