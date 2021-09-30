<?php session_start();
		if (@$_SESSION['id']<>"") {
			@$intitule="Deconnexion";
			@$ident=$_SESSION['id'];
		} else{
			@$intitule="Connexion";
			@$ident="Non connecté";
		}
 ?>