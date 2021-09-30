<?php
if (@$_GET['page']=="activite") {
	if (@$_GET['etat']=="suppr") {
	echo '
	<script>
	    if (confirm("Voulez-vous vraiment supprimer cette activité ?")) {
	    	';
	    	@$id=$_GET['as'];
			include_once("fonction/connexion2.php");
			@$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    @$con2->exec("DELETE FROM activite WHERE identifiant='$id'");	
	 echo'
	 		alert("Suppresion activité réussie !");
	    }else{
	    	
	    }
	</script>
	';	
	}
}else{
	if (@$_GET['etat']=="suppr") {
	echo '
	<script>
	    if (confirm("Voulez-vous vraiment supprimer cette actualité ?")) {
	    	';
	    	@$id=$_GET['actu'];
			include_once("fonction/connexion2.php");
			@$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    @$con2->exec("DELETE FROM actualite WHERE identifiant='$id'");	
	 echo'
	 		alert("Suppresion actualité réussie !");
	    }else{
	    	
	    }
	</script>
	';	
	}
	
}


?>