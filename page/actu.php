<div class="shopping-cart section" style="margin-top:0px; padding-top:0px;">

<div class="container">

<div class="row">

 <div class="col-12">

	<!-- Shopping Summery -->

	<hr>

	<h6>| &nbsp; Les actualités 

		<?php if($page_active=="moi") { ?>

		&nbsp;&nbsp; 

		| &nbsp;&nbsp; 

		<a href="ajout.php?k=<?= $row[0]; ?>&pg=ajout_actu">

			Ajouter une actualité

		</a>

		<?php } ?>

	</h6>

	<br>

	<table border="true" style="width:100%; box-shadow: 1px 1px 12px #555;">

		<thead>

			<tr style="background:rgb(2, 0, 97) !important; color:#fff">

				<th class="text-center">Image</th>

				<th class="text-center">Titre de l'actualité</th>

			<?php if($page_active=="moi") { ?>

				<th class="text-center">Action</th> 

				<th class="text-center"><i class="ti-trash remove-icon"></i></th>

			<?php } ?>

			</tr>

		</thead>

		<tbody>

			<?php

				$id_user=$_GET['k'];

				include_once("fonction/connexion2.php");

				if (isset($_GET['btn_recherche_actu'])) {

					if (!empty($_GET['recherche_actu'])) {

						//Recherche dans la base 

							$mot_cle= strtoupper($_GET['recherche_actu']);

							$mot_cle=htmlspecialchars($mot_cle, ENT_QUOTES);

						//

						$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$resultat2 = $con2->query("SELECT * FROM actualite WHERE entite='$id_user' AND UPPER(titre) LIKE '%$mot_cle%' ORDER BY date_publication DESC");

					} else {

						$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$resultat2 = $con2->query("SELECT * FROM actualite WHERE entite='$id_user' ORDER BY date_publication DESC");

						

					}

					

				}else{

					$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$resultat2 = $con2->query("SELECT * FROM actualite WHERE entite='$id_user' ORDER BY date_publication DESC");

					

				}

				if (!$resultat2) {

					$mes_erreur2=$con2->errorInfo();

					echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];

				}else{

					while ($row2 = $resultat2->fetch(PDO::FETCH_NUM)) {

			?>

						<tr style="background:white">

							<td style="padding:15px">

								<img src="<?= $row2[5]; ?>" style="width:100px; height: 50px;" alt="Image">

							</td>

							<td style="padding:15px">

								<p class="product-name"><a href="details_actualite.php?k=<?= $id_user; ?>&logo=<?= $row[3]; ?>&actid=<?= $row2[0]; ?>"><?= strtoupper($row2[1]); ?></a></p>

							</td>

						<?php if($page_active=="moi") { ?>

							<td style="padding:15px">

								<span><a href="jack.php?k=<?= $row[0]; ?>&actu=<?= $row2[0]; ?>&etat=modif">modifier</a></span>

							</td>

							<td style="padding:15px">

								<a href="details_affichage.php?k=<?= $row[0]; ?>&actu=<?= $row2[0]; ?>&etat=suppr"><i class="ti-trash remove-icon"></i></a>

							</td>

						<?php } ?>

						</tr>

			<?php

					}

				}

			 ?>

		</tbody>

	</table>

<!--/ End Shopping Summery -->

</div>

</div>

</div>

</div>