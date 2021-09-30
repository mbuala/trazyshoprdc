
<!-- Start Most Popular -->
   <div class="product-area most-popular section" style="margin-top:5px; padding-top:0px">
        <div class="container">
            <div class="row" style="margin-bottom:0px; padding-bottom:0px">
				<div class="col-12">
					<div class="section-title">
						<hr>
						<h5 style="">Les activités liées à ce programme</h5>
						<hr>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                    	<?php 
							$con2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$resultat2 = $con2->query("SELECT * FROM activite WHERE entite='$id_user' AND programme='$id_portefeuille'");
							if (!$resultat2) {
								$mes_erreur2=$con2->errorInfo();
								echo "Lecture impossible, code : ", $con2->errorCode(),$mes_erreur2[2];
							}else{
								while ($row2 = $resultat2->fetch(PDO::FETCH_NUM)) {
						?>
							<!-- Start Single Product -->
						<div class="single-product" style="margin-top:0px; padding-top:0px">
							<div class="product-img">
								<h6 style="text-align: center; margin-bottom:5px"><?= $row2[1]; ?></h6>
								<a href="slider_activite.php?prog=<?=$titre_programme?>&progid=<?=$id_portefeuille?>&ent=<?= $row[1]; ?>&logo=<?= $row[3]; ?>&k=<?= $row[0]; ?>&actid=<?= $row2[0]; ?>">
									<img class="default-img" src="<?= $row2[6]; ?>" style="width: 850px; height: 320px;" alt="img activité">
									<img class="hover-img" src="<?= $row2[6]; ?>" style="width: 850px; height: 320px;" alt="img activité">
									<span class="out-of-stock"><?= $row2[2]; ?></span>
								</a>
								<div class="button-head">
									<div class="product-action-2">
										<a title="Add to cart" href="slider_activite.php?prog=<?=$titre_programme?>&progid=<?=$id_portefeuille?>&ent=<?= $row[1]; ?>&logo=<?= $row[3]; ?>&k=<?= $row[0]; ?>&actid=<?= $row2[0]; ?>"><?= $row2[3]; ?></a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="slider_activite.php?prog=<?=$titre_programme?>&progid=<?=$id_portefeuille?>&ent=<?= $row[1]; ?>&logo=<?= $row[3]; ?>&k=<?= $row[0]; ?>&actid=<?= $row2[0]; ?>"> <?= substr($row2[5],0,80).'...'; ?></a></h3>
								<div class="product-price">
									<span>En date de : <?= $row2[4]; ?></span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
						<?php
									
								}	
							}
						?>
                    </div>
                </div>
            </div>
        </div>
   </div>
<!-- End Most Popular Area -->