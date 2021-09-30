
<div class="shopping-cart section" style="margin-top:0px; padding-top:0px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Shopping Summery -->
				<hr>
				<h6>| &nbsp; Portefeuille 
				<?php if($page_active=="moi") { ?>
					&nbsp;&nbsp; | &nbsp;&nbsp; 
					<a href="ajout.php?k=<?= $row[0]; ?>&pg=ajout_portefeuille">
						Ajouter portefeuille
					</a>
				<?php } ?>
				</h6>
				<br>
				<div class="product-info">
					<div class="nav-main">
						<!-- Tab Nav -->
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item"><a class="nav-link <?= @$act_prog; ?>" data-toggle="tab" href="#prog" role="tab">Programme</a></li>
							<li class="nav-item"><a class="nav-link <?= @$act_as; ?>" data-toggle="tab" href="#as" role="tab">Activité speciale</a></li>
						</ul>
						<!--/ End Tab Nav -->
					</div>
					<div class="tab-content" id="myTabContent">
						<!-- Start Single Tab -->
						<div class="tab-pane fade <?= @$show_prog; ?>" id="prog" role="tabpanel">
							<!-- Start recherche  -->
								<section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0; width:100%">
								        <div class="container">
								            <div class="inner-top">
								                <div class="row">
								                    <div class="col-lg-8 offset-lg-2 col-12">
								                        <!-- Start Newsletter Inner -->
								                        <div class="inner">
								                            <form method="get" class="newsletter-inner" style="padding:10px">
								                                <input name="recherche_prog" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_prog']; ?>" type="text" style="width: 250px;">
								                                <input type="hidden" name="k" value="<?= $row[0]; ?>">
								                                <button class="btn" name="btn_recherche_prog" value="recherche"><i class="ti-search"></i></button>
								                            </form>
								                        </div>
								                        <!-- End Newsletter Inner -->
								                    </div>
								                </div>
								            </div>
								        </div>
								    </section>
								    <!-- End recherche -->
							<table border="true" style="padding: 10px; box-shadow: 1px 1px 12px #555;">
								<thead>
									<tr style="background:rgb(2, 0, 97) !important; color:#fff">
										<th class="text-center">Titre</th>
										<th class="text-center" >Financé par</th>
										<th class="text-center">Executé par</th> 
										<th class="text-center"><!--<i class="ti-trash remove-icon"></i>-->
											Durée
										</th> 
									</tr>
								</thead>
								<tbody>
									<?php
										$id_user=$_GET['k'];
										$port="Programme";
										$port=htmlspecialchars($port, ENT_QUOTES);
										include_once("fonction/connexion2.php");
										//
										if (isset($_GET['btn_recherche_prog'])) {
											if (!empty($_GET['recherche_prog'])) {
												//Recherche dans la base 
												$mot_cle= strtoupper($_GET['recherche_prog']);
												$mot_cle=htmlspecialchars($mot_cle, ENT_QUOTES);
												//
												$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										        $resultat2 = $con2->query("SELECT * FROM portefeuille WHERE entite='$id_user' AND portefeuille='$port' AND (UPPER(intitule) LIKE '%$mot_cle%' OR UPPER(lieu) LIKE '%$mot_cle%' OR UPPER(finance_par) LIKE '%$mot_cle%' OR UPPER(executer_par) LIKE '%$mot_cle%') ORDER BY date_debut DESC");
											} else {
												//
										        $con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										        $resultat2 = $con2->query("SELECT * FROM portefeuille WHERE entite='$id_user' AND portefeuille='$port' ORDER BY date_debut DESC");
											}
											
										} else {
											$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$resultat2 = $con2->query("SELECT * FROM portefeuille WHERE entite='$id_user' AND portefeuille='$port' ORDER BY date_debut DESC");
										}
										if (!$resultat2) {
											$mes_erreur2=$con2->errorInfo();
											echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
										}else{
											while ($row2 = $resultat2->fetch(PDO::FETCH_NUM)) {
									?>
												
												<tr style="background:white">
													<td style="padding:15px">
														<a href="details_portefeuille.php?k=<?= $id_user; ?>&l=<?= $row2[0]; ?>&pg=prog">
															<?= $row2[1]; ?>
														</a>
													</td>
													<td style="padding:15px">
														<a href="details_portefeuille.php?k=<?= $id_user; ?>&l=<?= $row2[0]; ?>&pg=prog">
														<?= $row2[11]; ?>
													</a>
													</td>
													<td style="padding:15px">
														<a href="details_portefeuille.php?k=<?= $id_user; ?>&l=<?= $row2[0]; ?>&pg=prog">
														<?= $row2[12]; ?>
													</a>
													</td>
													<td style="padding:15px">
														<a href="details_portefeuille.php?k=<?= $id_user; ?>&l=<?= $row2[0]; ?>&pg=prog">
														<?= $row2[4]; ?>
													</a>
													</td>
												</tr>
									<?php
											//
											}
										}
									?>
								</tbody>
							</table>						
						<!-- End Comment Form -->
						</div>
						<!--/ End Single Tab -->
						<!-- Start Single Tab -->
						<div class="tab-pane fade <?= @$show_as; ?>" id="as" role="tabpanel">
							<!-- Start recherche  -->
								    <section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0; width:100%">
								        <div class="container">
								            <div class="inner-top">
								                <div class="row">
								                    <div class="col-lg-8 offset-lg-2 col-12">
								                        <!-- Start Newsletter Inner -->
								                        <div class="inner">
								                            <form method="get" class="newsletter-inner" style="padding:10px">
								                                <input name="recherche_as" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_as']; ?>" type="text" style="width: 250px;">
								                                <input type="hidden" name="k" value="<?= $row[0]; ?>">
								                                <button class="btn" name="btn_recherche_as" value="recherche"><i class="ti-search"></i></button>
								                            </form>
								                        </div>
								                        <!-- End Newsletter Inner -->
								                    </div>
								                </div>
								            </div>
								        </div>
								    </section>
								    <!-- End recherche -->
							<table border="true" style="padding: 10px; box-shadow: 1px 1px 12px #555;">
								<thead>
									<tr style="background:rgb(2, 0, 97) !important; color:#fff">
										<th class="text-center">Titre</th>
										<th class="text-center">Organisé par</th> 
										<th class="text-center"><!--<i class="ti-trash remove-icon"></i>-->
											Durée
										</th> 
									</tr>
								</thead>
								<tbody>
									<?php
										$id_user=$_GET['k'];
										$port="Activité spéciale";
										$port=htmlspecialchars($port, ENT_QUOTES);
										include_once("fonction/connexion2.php");
										if (isset($_GET['btn_recherche_as'])) {
											if (!empty($_GET['recherche_as'])) {
												//Recherche dans la base 
												$mot_cle= strtoupper($_GET['recherche_as']);
												$mot_cle=htmlspecialchars($mot_cle, ENT_QUOTES);
												//
												$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
												$resultat2 = $con2->query("SELECT * FROM portefeuille WHERE entite='$id_user' AND portefeuille='$port' AND (UPPER(intitule) LIKE '%$mot_cle%' OR UPPER(lieu) LIKE '%$mot_cle%' OR UPPER(finance_par) LIKE '%$mot_cle%' OR UPPER(executer_par) LIKE '%$mot_cle%') ORDER BY date_debut DESC");
												//
											} else {
												$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
												$resultat2 = $con2->query("SELECT * FROM portefeuille WHERE entite='$id_user' AND portefeuille='$port' ORDER BY date_debut DESC");
											}
											
										} else {
											$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$resultat2 = $con2->query("SELECT * FROM portefeuille WHERE entite='$id_user' AND portefeuille='$port' ORDER BY date_debut DESC");
										}
										//
										if (!$resultat2) {
											$mes_erreur2=$con2->errorInfo();
											echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
										}else{
											while ($row2 = $resultat2->fetch(PDO::FETCH_NUM)) {
									?>
												
												<tr style="background:white">
													<td style="padding:15px">
														<a href="details_portefeuille.php?k=<?= $id_user; ?>&l=<?= $row2[0]; ?>&pg=as">
														<?= $row2[1]; ?>
														</a>
													</td>
													<td style="padding:15px">
														<?= $row2[2]; ?>
													</td>
													<td style="padding:15px">
														<?= $row2[4]; ?>
													</td>
												</tr>
									<?php
											//
											}
										}
									 ?>
								</tbody>
							</table>				
						<!-- End Comment Form -->
						</div>
						<!--/ End Single Tab -->
					</div>
				</div>
			<!--/ End Shopping Summery -->
			</div>
		</div>
	</div>
</div>