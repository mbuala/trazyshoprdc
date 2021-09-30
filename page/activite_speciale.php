<div class="shopping-cart section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Shopping Summery -->
				<h6>| &nbsp; Les activités speciales &nbsp;&nbsp; | &nbsp;&nbsp; <a href="ajout.php?k=<?= $row[0]; ?>&pg=ajout_as">Ajouter une activité speciale</a></h6>
				<br>
				<table class="table shopping-summery" border="true" style="width:100%; box-shadow: 1px 1px 12px #555;">
					<thead>
						<tr class="main-hading">
							<th>Activités specialee</th>
							<th class="text-center">Action</th> 
							<th class="text-center"><i class="ti-trash remove-icon"></i></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$id_user=$_GET['k'];
							include_once("fonction/connexion2.php");
							$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$resultat2 = $con2->query("SELECT * FROM activite WHERE entite='$id_user' ORDER BY date_debut");
							if (!$resultat2) {
								$mes_erreur2=$con2->errorInfo();
								echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
							}else{
								while ($row2 = $resultat2->fetch(PDO::FETCH_NUM)) {
									echo '
									<tr>
										<td class="product-des" data-title="Activité spaciale">
											<p class="product-name">
			                                    <a href="#">'.strtoupper($row2[1]).'</a>
			                                    <br>
			                                    <a href="#">'.ucfirst($row2[2]).'</a>
			                                </p>
											<p class="product-des">
												'.$row2[3].'
												<br>
												<br>
			                                    Date de deroulement :<strong> De '.$row2[7].' à '.$row2[8].'</strong>
												<br>
			                                    Lieu de deroulement : <strong>'.$row2[4].' &nbsp;&nbsp; '.$row2[6].' / '.$row2[5].'</strong>
			                                    <br>
			                                    <br>
												<span>Publié le '.$row2[9].'</span>
											</p>
										</td>
										<td class="total-amount" data-title="Action">
											<span><a href="jack.php?k='.$row[0].'&as='.$row2[0].'&etat=modif">modifier</a></span>
										</td>
										<td class="action" data-title="Action">
											<a href="details_affichage.php?k='.$row[0].'&as='.$row2[0].'&etat=suppr&page=activite"><i class="ti-trash remove-icon"></i></a>
										</td>
									</tr>
									';
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