<div class="col-lg-7 col-md-12 col-12">
	<!-- Top Right -->
	<div class="right-content">
		<ul class="list-main">
			<?php 
			if (@$_SESSION['type_compte']<>"super-user") {
			?>
					<li title="Un Super-user est celui qui a la capacité de créer sa structure dans notre plaforme et la gerer seul."><i class="ti-user"></i> <a href="creation_user.php?k=Super-user">Espace utilisateur</a></li>	
			<?php
			}
			 ?>
		<?php if (@$ident=="Non connecté") { ?>		
			<li title=""><i class="ti-user"></i> <a href="#"><?= @$ident;?></a></li>
		<?php }else {?>
			<li title="Compte Super-utilisateur"><i class="ti-user"></i> <a href="details_affichage.php?k=<?= @$ident;?>"><?= @$ident;?></a></li>
		<?php } ?>
			<li><i class="ti-power-off"></i><a href="login.php?k=<?= $intitule; ?>"><?= @$intitule;?></a></li>
		</ul>
	</div>
	<!-- End Top Right -->
</div>