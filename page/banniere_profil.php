<?php 
	if ($page_active=="moi") {
?>
	<?php 
		if ($row[25]=="En attente") {
			echo '
			<marquee scrolldelay="200" style="font-weight:bold">
			IMPORTANT : Nous sommes en phase de verification sur l\'authentification de votre structure, pour cette raison, votre structure n\'est pas encore visible à la foire. Nous vous prions de partienter et vous remercions beaucoup.
			</marquee>
			';
			$etat="En attente";
		} else {
			$etat="Approuvé";
		}
		
	?>
		
	<div class="image" style="background:url(<?= $row[5]; ?>); height:300px; background-size: 100%; background-repeat: no-repeat;">
		<div style="background: white; margin: 5px; padding: 5px; font-size: 20px; text-align: center; font-weight: bold; position: relative; top: 10px; border-radius: 3px; ">
			<?= $row[6]; ?>
		</div>
		<a href="modifier.php?k=<?= $row[5]; ?>&h=<?= $row[3]; ?>&i=<?= $row[13]; ?>&j=<?= $row[0]; ?>">
		  <img src="<?= $row[3]; ?>" style="width:150px;height:150px; position:relative; top:90px;left:5px; box-shadow: 1px 1px 12px #555; background: #fff; border-radius: 10px;"/>
		</a>
		<a href="modifier.php?k=<?= $row[5]; ?>&h=<?= $row[3]; ?>&i=<?= $row[13]; ?>&j=<?= $row[0]; ?>" class="lien" style="padding: 3%; font-size:20px">
			Modifier
		</a>
		<span style="background:#000; color:#fff; padding:5px; border-radius:5px">
			Etat actuel : <?= $etat; ?>
		</span>
	</div>
	<?php } else { ?>
	<div class="image" style="background:url(<?= $row[5]; ?>); height:300px; background-size: 100%; background-repeat: no-repeat;">
		<div style="background: white; margin: 5px; padding: 5px; font-size: 20px; text-align: center; font-weight: bold; position: relative; top: 10px; border-radius: 3px; ">
			<?= $row[6]; ?>
		</div>
		<img src="<?= $row[3]; ?>" style="width:150px;height:150px; position:relative; top:90px;left:5px; box-shadow: 1px 1px 12px #555; background: #fff; border-radius: 10px;"/>
														  
	</div>
<?php
	}
?>