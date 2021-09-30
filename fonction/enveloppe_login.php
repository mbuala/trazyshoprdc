<?php 
//se rassurer que la session est ouverte dans la page 
	if (empty($_SESSION['id'])) {
		$page_active="Non connecté";
	}else{
		if ($_SESSION['id']==$_GET['k']) {
			$page_active="moi";
		}else{
			$page_active="pas moi";
		}
	}
?>