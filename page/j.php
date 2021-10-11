<!-- Start Product Area -->

    <div class="product-area section" style="margin-top:0px; padding-top:0px;">

            <div class="container">

				<div class="row">

					<div class="col-12">

						<div class="product-info">

							<div class="nav-main">

								<!-- Tab Nav -->

								<ul class="nav nav-tabs" id="myTab" role="tablist">

									<li class="nav-item"><a class="nav-link <?= @$act_actu; ?>" data-toggle="tab" href="#man" role="tab">Actualités</a></li>

									<li class="nav-item"><a class="nav-link <?= @$act_port; ?>" data-toggle="tab" href="#kids" role="tab">Portefeuillle</a></li>

									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Palmares</a></li>

									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#apropos" role="tab">A propos</a></li>

								</ul>

								<!--/ End Tab Nav -->

							</div>

							<div class="tab-content" id="myTabContent">

								<!-- Start Single Tab -->

								<div class="tab-pane fade <?= @$show_actu; ?>" id="man" role="tabpanel">

									<!-- Start recherche  -->

								    <section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0; background:white; width:100%">

								        <div class="container">

								            <div class="inner-top">

								                <div class="row">

								                    <div class="col-lg-8 offset-lg-2 col-12">

								                        <!-- Start Newsletter Inner -->

								                        <div class="inner">

								                            <form method="get" class="newsletter-inner" style="padding:10px">

								                                <input name="recherche_actu" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_actu']; ?>" required="" type="text" style="width: 250px;">

								                                <input type="hidden" name="k" value="<?= $row[0]; ?>">

								                                <button class="btn" name="btn_recherche_actu" value="recherche" style=""><i class="ti-search"></i></button>

								                            </form>

								                        </div>

								                        <!-- End Newsletter Inner -->

								                    </div>

								                </div>

								            </div>

								        </div>

								    </section>

								    <!-- End recherche -->

									<?php include_once("actu.php"); ?>

								</div>

								<!--/ End Single Tab -->

								<!-- Start Single Tab -->

								<div class="tab-pane fade <?= @$show_port; ?>" id="kids" role="tabpanel">

									<?php include_once("page/portefeuille.php"); ?>

								</div>

								<!--/ End Single Tab -->

								<!-- Start Single Tab -->

								<div class="tab-pane fade" id="accessories" role="tabpanel">

									<?php include_once("page/palmares.php"); ?>

								</div>

								<!--/ End Single Tab -->

								<!-- Start Single Tab -->

								<div class="tab-pane fade" id="apropos" role="tabpanel">

									<div class="content" style="background:#eeeeff; padding: 15px; text-align:justify;">

										<?php 

										try {

												$con5->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

												$resultat3= $con5->query("SELECT * FROM apropos WHERE entite='$row[0]'");

												if (!$resultat3) {

													$mes_erreur3=$con5->errorInfo();

											        echo "Lecture impossible, code : ", $con5->errorCode(),$mes_erreur3[2];

												} else {

													$row4 = $resultat3->fetch(PDO::FETCH_NUM);								

												}

											

											} catch (PDOException $e_apropos) {

												echo $e_apropos;

											}

											

										?>

										<h5>Apropos 

											<?php if($page_active=="moi"){ ?>

											 <a href="ajout.php?k=<?= $row[0] ?>&pg=apropos&id=<?= $row4[0] ?>">

											 |	Editer

											</a>

											<?php } ?>

										</h5>

										<hr>

										<p>

											<?= $row4[1] ?>

										</p>

										<?php if(!empty($row4[2])){ ?>

											<h6>Vision</h6>

											<p>

												<?= $row4[2] ?>

											</p>

										<?php } ?>

										<?php if(!empty($row4[3])){ ?>

											<h6>Mission</h6>

											<p>

												<?= $row4[3] ?>

											</p>

										<?php } ?>

									</div>

								</div>

								<!--/ End Single Tab -->

							</div>

						</div>

					</div>

				</div>

            </div>

    </div>

<!-- End Product Area -->