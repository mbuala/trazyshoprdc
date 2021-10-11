<?php
session_start();
include_once('../fonction/connexion.php');
if ($_SESSION["isLogged"] == true) {
    $btn_text = "Approuver";
    if (isset($_GET['btn_appr'])) {

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $con->exec("UPDATE entite SET statut='Approuvé' WHERE identifiant='" . $_GET['k'] . "'");

        echo '
    
                <script>
    
                    alert("L\'operation résussie !");
    
                    location.href="gestion_entite.php";
    
                </script>
    
            ';
    }

    if (isset($_GET['btn_suppr'])) {

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $con->exec("DELETE FROM entite WHERE identifiant='" . $_GET['k'] . "'");

        $con->exec("DELETE FROM activite WHERE entite='" . $_GET['k'] . "'");

        $con->exec("DELETE FROM actualite WHERE entite='" . $_GET['k'] . "'");

        $con->exec("DELETE FROM portefeuille WHERE entite='" . $_GET['k'] . "'");

        //

        echo '
    
                <script>
    
                    alert("Vous venez de supprimer la structure avec tout ce qui l\'accompagne (Portefeuilles, actualités, palmares, etc. ) !");
    
                    location.href="gestion_entite.php";
    
                </script>
    
            ';
    }


?>
    <?php include_once('header.php'); ?>
  
    <div id="layoutSidenav">
        <?php include_once('nav.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Primary Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <?php

                        if (isset($_GET['recherche'])) {

                            $act_e = "active";

                            $act_o = "";

                            $act_eg = "";

                            $act_ec = "";

                            $act_u = "";

                            $act_sp = "";

                            //

                            $show_e = "show active";

                            $show_o = "";

                            $show_eg = "";

                            $show_ec = "";

                            $show_u = "";

                            $show_sp = "";
                        } elseif (isset($_GET['recherche_o'])) {

                            $act_e = "";

                            $act_o = "active";

                            $act_eg = "";

                            $act_ec = "";

                            $act_u = "";

                            $act_sp = "";

                            //

                            $show_e = "";

                            $show_o = "show active";

                            $show_eg = "";

                            $show_ec = "";

                            $show_u = "";

                            $show_sp = "";
                        } elseif (isset($_GET['recherche_eg'])) {

                            $act_e = "";

                            $act_o = "";

                            $act_eg = "active";

                            $act_ec = "";

                            $act_u = "";

                            $act_sp = "";

                            //

                            $show_e = "";

                            $show_o = "";

                            $show_eg = "show active";

                            $show_ec = "";

                            $show_u = "";

                            $show_sp = "";
                        } elseif (isset($_GET['recherche_ec'])) {

                            $act_e = "";

                            $act_o = "";

                            $act_eg = "";

                            $act_ec = "active";

                            $act_u = "";

                            $act_sp = "";

                            //

                            $show_e = "";

                            $show_o = "";

                            $show_eg = "";

                            $show_ec = "show active";

                            $show_u = "";

                            $show_sp = "";
                        } elseif (isset($_GET['recherche_u'])) {

                            $act_e = "";

                            $act_o = "";

                            $act_eg = "";

                            $act_ec = "";

                            $act_u = "active";

                            $act_sp = "";

                            //

                            $show_e = "";

                            $show_o = "";

                            $show_eg = "";

                            $show_ec = "";

                            $show_u = "show active";

                            $show_sp = "";
                        } elseif (isset($_GET['recherche_sp'])) {

                            $act_e = "";

                            $act_o = "";

                            $act_eg = "";

                            $act_ec = "";

                            $act_u = "";

                            $act_sp = "active";

                            //

                            $show_e = "";

                            $show_o = "";

                            $show_eg = "";

                            $show_ec = "";

                            $show_u = "";

                            $show_sp = "show active";
                        } else {

                            $act_e = "active";

                            $act_o = "";

                            $act_eg = "";

                            $act_ec = "";

                            $act_u = "";

                            $act_sp = "";

                            //

                            $show_e = "show active";

                            $show_o = "";

                            $show_eg = "";

                            $show_ec = "";

                            $show_u = "";

                            $show_sp = "";
                        }

                        ?>
                        <div class="product-area section" style="margin-top:0px; padding-top:0px">

                            <div class="container">

                                <div class="row">

                                    <div class="col-12">

                                        <div class="product-info">

                                            <div class="nav-main">

                                                <!--/ End Tab Nav -->

                                            </div>

                                            <div class="nav-main">

                                                <!-- Tab Nav -->

                                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                                    <li class="nav-item"><a class="nav-link <?= @$act_e; ?>" data-toggle="tab" href="#man" role="tab" style="font-size:20px">ENTREPRISE</a></li>

                                                    <li class="nav-item"><a class="nav-link <?= @$act_o; ?>" data-toggle="tab" href="#women" role="tab" style="font-size:20px">ORGANISATION</a></li>

                                                    <li class="nav-item"><a class="nav-link <?= @$act_eg; ?>" data-toggle="tab" href="#kids" role="tab" style="font-size:20px">EGLISE</a></li>

                                                    <li class="nav-item"><a class="nav-link <?= @$act_ec; ?>" data-toggle="tab" href="#accessories" role="tab" style="font-size:20px">ECOLE</a></li>

                                                    <li class="nav-item"><a class="nav-link <?= @$act_u; ?>" data-toggle="tab" href="#essential" role="tab" style="font-size:20px">UNIVERSITE</a></li>

                                                    <li class="nav-item"><a class="nav-link <?= @$act_sp; ?>" data-toggle="tab" href="#prices" role="tab" style="font-size:20px">SERVICES PUBLIQUES</a></li>

                                                </ul>

                                                <!--/ End Tab Nav -->

                                            </div>

                                            <div class="tab-content" id="myTabContent" style="background: #F9F9F9; padding-left:25px; text-align: center;">

                                                <!-- Start Single Tab -->

                                                <div class="tab-pane fade <?= @$show_e; //show active 
                                                                            ?>" id="man" role="tabpanel">

                                                    <hr>

                                                    <!-- Start recherche  -->

                                                    <section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

                                                        <div class="container">

                                                            <div class="inner-top">

                                                                <div class="row">

                                                                    <div class="col-lg-8 offset-lg-2 col-12">

                                                                        <!-- Start Newsletter Inner -->

                                                                        <div class="inner">

                                                                            <form method="get" class="newsletter-inner">

                                                                                <input name="recherche" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche']; ?>" required="" type="text">

                                                                                <button class="btn" name="btn_recherche" value="recherche"><i class="ti-search"></i></button>

                                                                            </form>

                                                                        </div>

                                                                        <!-- End Newsletter Inner -->

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </section>

                                                    <!-- End recherche -->

                                                    <hr>

                                                    <div class="tab-single">

                                                        <div class="row">

                                                            <?php



                                                            // code affichage des entreprises

                                                            //

                                                            try {

                                                                if (isset($_GET['btn_recherche'])) {

                                                                    if (!empty($_GET['recherche'])) {

                                                                        //Variable recherche 

                                                                        $mot_cle = strtoupper($_GET['recherche']);

                                                                        $mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

                                                                        //

                                                                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                        $resultat = $con->query("SELECT * FROM entite WHERE categorie='ENTREPRISE' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
                                                                    }
                                                                } else {

                                                                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $resultat = $con->query("SELECT * FROM entite WHERE categorie='ENTREPRISE' ORDER BY statut DESC");
                                                                }

                                                                //

                                                                //

                                                                if (!$resultat) {

                                                                    $mes_erreur = $con->errorInfo();

                                                                    echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
                                                                } else {

                                                                    while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

                                                                        //style en attente

                                                                        if ($row[25] == "En attente") {

                                                                            $style_enattente = "#710120";

                                                                            $etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

                                                                            $btn_approuv = "submit";
                                                                        } else {

                                                                            $style_enattente = "#fff";

                                                                            $etat = "";

                                                                            $btn_approuv = "hidden";
                                                                        }



                                                            ?>



                                                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">



                                                                            <form method="get" style="background: <?= $style_enattente; ?>;">

                                                                                <input type="hidden" name="k" value="<?= $row[0]; ?>">

                                                                                <input type="<?= $btn_approuv; ?>" name="btn_appr" value="<?= $btn_text; ?>" style="width: 150px; padding:5px;">

                                                                                <br>

                                                                                <input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">

                                                                                <hr>

                                                                            </form>

                                                                            <span style="font-size: 11px;"><?= $etat ?></span>

                                                                            <div class="single-product" style="padding-top: 0px;">

                                                                                <div class="product-img">

                                                                                    <h6 style="text-align:center;text-shadow: 2px 2px 4px #999;"><?= $row[1]; ?>

                                                                                    </h6>

                                                                                    <br>

                                                                                    <a href="../gestion_details_affichage_entite.php?k=<?= $row[0]; ?>">

                                                                                        <img style="width:150px; height: 120px;" class="default-img" src="<?= $row[3]; ?>" alt="#">

                                                                                    </a>

                                                                                    <div class="button-head">

                                                                                        <div class="product-action">

                                                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="../gestion_details_affichage_entite.php?k=<?= $row[0]; ?>"><i class=" ti-eye"></i><span><?= $row[10]; ?></span></a>

                                                                                        </div>

                                                                                        <div class="product-action-2">

                                                                                            <a title="Add to cart" href="../gestion_details_affichage_entite.php?k=<?= $row[0]; ?>">

                                                                                                <?= $row[9]; ?>

                                                                                            </a>

                                                                                        </div>

                                                                                    </div>

                                                                                </div>

                                                                                <div class="product-content">

                                                                                    <div class="product-price">

                                                                                        <hr>

                                                                                        <span style="font-size:15px; font-weight:bold;">

                                                                                            <i>

                                                                                                <?= $row[25]; ?>

                                                                                            </i>

                                                                                        </span>

                                                                                        <br>

                                                                                        <a href="../gestion_details_affichage_entite.php?k=<?= $row[0]; ?>" style="font-size: 11px;">

                                                                                            <strong>ID :</strong> <?= $row[0]; ?>

                                                                                        </a>

                                                                                    </div>

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                            <?php

                                                                    }
                                                                }

                                                                $resultat->closeCursor();
                                                            } catch (PDOException $e) {



                                                                echo "ERREUR :" . $e;
                                                            }





                                                            //

                                                            //

                                                            ?>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!--/ End Single Tab -->

                                                <!-- Start Single Tab -->

                                                <div class="tab-pane fade <?= @$show_o; //show active 
                                                                            ?>" id="women" role="tabpanel">

                                                    <hr>

                                                    <!-- Start recherche  -->

                                                    <section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

                                                        <div class="container">

                                                            <div class="inner-top">

                                                                <div class="row">

                                                                    <div class="col-lg-8 offset-lg-2 col-12">

                                                                        <!-- Start Newsletter Inner -->

                                                                        <div class="inner">

                                                                            <form method="get" class="newsletter-inner">

                                                                                <input name="recherche_o" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_o']; ?>" required="" type="text">

                                                                                <button class="btn" name="btn_recherche_o" value="recherche"><i class="ti-search"></i></button>

                                                                            </form>

                                                                        </div>

                                                                        <!-- End Newsletter Inner -->

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </section>

                                                    <!-- End recherche -->

                                                    <hr>

                                                    <div class="tab-single">

                                                        <div class="row">

                                                            <?php



                                                            // code affichage des entreprises

                                                            //

                                                            try {

                                                                if (isset($_GET['btn_recherche_o'])) {

                                                                    if (!empty($_GET['recherche_o'])) {

                                                                        //Variable recherche 

                                                                        $mot_cle = strtoupper($_GET['recherche_o']);

                                                                        $mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

                                                                        //

                                                                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                        $resultat = $con->query("SELECT * FROM entite WHERE categorie='ORGANISATION' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
                                                                    }
                                                                } else {

                                                                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $resultat = $con->query("SELECT * FROM entite WHERE categorie='ORGANISATION' ORDER BY date_creation DESC");
                                                                }

                                                                //

                                                                //

                                                                if (!$resultat) {

                                                                    $mes_erreur = $con->errorInfo();

                                                                    echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
                                                                } else {

                                                                    while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

                                                                        if ($row[25] == "En attente") {

                                                                            $style_enattente = "#710120";

                                                                            $etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

                                                                            $btn_approuv = "submit";
                                                                        } else {

                                                                            $style_enattente = "#fff";

                                                                            $etat = "";

                                                                            $btn_approuv = "hidden";
                                                                        }

                                                                        echo '

                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

                                                <form method="get" style="background: ' . $style_enattente . ';">

                                                    <input type="hidden" name="k" value="' . $row[0] . '">

                                                    <input type="' . $btn_approuv . '" name="btn_appr" value="' . $btn_text . '" style="width: 150px; padding:5px;">	

                                                    <br>

                                                    <input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">	

                                                    <hr>

                                                </form>

                                                <span style="font-size: 11px;">' . $etat . '</span>

                                                        <div class="single-product">

                                                            <div class="product-img">

                                                            <h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

                                                                <a href="../gestion_details_affichage_entite.php?k=' . $row[0] . '">

                                                                    <img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

                                                                </a>

                                                                <div class="button-head">

                                                                <div class="product-action">

                                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="../gestion_details_affichage_entite.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

                                                                    </div>

                                                                    <div class="product-action-2">

                                                                        <a title="Add to cart" href="../gestion_details_affichage_entite.php?k=' . $row[0] . '">' . $row[9] . '</a>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="product-content">

                                                                

                                                                <div class="product-price">

                                                                    <hr>

                                                                    <span style="font-size:15px; font-weight:bold;">

                                                                    <i>

                                                                        ' . $row[25] . '

                                                                    </i>

                                                                    </span>

                                                                    <br>

                                                                <a href="../gestion_details_affichage_entite.php?k=' . $row[0] . '" style="font-size: 11px;">

                                                                <strong>ID :</strong> 	

                                                                ' . $row[0] . '

                                                                </a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                ';
                                                                    }
                                                                }

                                                                $resultat->closeCursor();
                                                            } catch (PDOException $e) {



                                                                echo "ERREUR :" . $e;
                                                            }





                                                            //

                                                            //

                                                            ?>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!--/ End Single Tab -->

                                                <!-- Start Single Tab -->

                                                <div class="tab-pane fade <?= @$show_eg; //show active 
                                                                            ?>" id="kids" role="tabpanel">

                                                    <hr>

                                                    <!-- Start recherche  -->

                                                    <section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

                                                        <div class="container">

                                                            <div class="inner-top">

                                                                <div class="row">

                                                                    <div class="col-lg-8 offset-lg-2 col-12">

                                                                        <!-- Start Newsletter Inner -->

                                                                        <div class="inner">

                                                                            <form method="get" class="newsletter-inner">

                                                                                <input name="recherche_eg" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_eg']; ?>" required="" type="text">

                                                                                <button class="btn" name="btn_recherche_eg" value="recherche"><i class="ti-search"></i></button>

                                                                            </form>

                                                                        </div>

                                                                        <!-- End Newsletter Inner -->

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </section>

                                                    <!-- End recherche -->

                                                    <hr>

                                                    <div class="tab-single">

                                                        <div class="row">

                                                            <?php



                                                            // code affichage des entreprises

                                                            //

                                                            try {

                                                                if (isset($_GET['btn_recherche_eg'])) {

                                                                    if (!empty($_GET['recherche_eg'])) {

                                                                        //Variable recherche 

                                                                        $mot_cle = strtoupper($_GET['recherche_eg']);

                                                                        $mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

                                                                        //

                                                                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                        $resultat = $con->query("SELECT * FROM entite WHERE categorie='EGLISE' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
                                                                    }
                                                                } else {

                                                                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $resultat = $con->query("SELECT * FROM entite WHERE categorie='EGLISE' ORDER BY date_creation DESC");
                                                                }

                                                                //

                                                                if (!$resultat) {

                                                                    $mes_erreur = $con->errorInfo();

                                                                    echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
                                                                } else {

                                                                    while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

                                                                        if ($row[25] == "En attente") {

                                                                            $style_enattente = "#710120";

                                                                            $etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

                                                                            $btn_approuv = "submit";
                                                                        } else {

                                                                            $style_enattente = "#fff";

                                                                            $etat = "";

                                                                            $btn_approuv = "hidden";
                                                                        }

                                                                        echo '

                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

                                                <form method="get" style="background: ' . $style_enattente . ';">

                                                <input type="hidden" name="k" value="' . $row[0] . '">

                                                    <input type="' . $btn_approuv . '" name="btn_appr" value="' . $btn_text . '" style="width: 150px; padding:5px;">	

                                                    <br>

                                                    <input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">	

                                                    <hr>

                                                </form>

                                                <span style="font-size: 11px;">' . $etat . '</span>

                                                        <div class="single-product">

                                                            <div class="product-img">

                                                            <h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

                                                                <a href="../gestion_details_affichage_entite.php?k=' . $row[0] . '">

                                                                    <img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

                                                                </a>

                                                                <div class="button-head">

                                                                <div class="product-action">

                                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="../gestion_details_affichage_entite.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

                                                                    </div>

                                                                    <div class="product-action-2">

                                                                        <a title="Add to cart" href="../gestion_details_affichage_entite.php?k=' . $row[0] . '">' . $row[9] . '</a>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="product-content">

                                                                

                                                                <div class="product-price">

                                                                    <hr>

                                                                    <span style="font-size:15px; font-weight:bold;">

                                                                    <i>

                                                                        ' . $row[25] . '

                                                                    </i>

                                                                    </span>

                                                                    <br>

                                                                <a href="../gestion_details_affichage_entite.php?k=' . $row[0] . '" style="font-size: 11px;">

                                                                <strong>ID :</strong> 	

                                                                ' . $row[0] . '

                                                                </a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                ';
                                                                    }
                                                                }

                                                                $resultat->closeCursor();
                                                            } catch (PDOException $e) {



                                                                echo "ERREUR :" . $e;
                                                            }





                                                            //

                                                            //

                                                            ?>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!--/ End Single Tab -->

                                                <!-- Start Single Tab -->

                                                <div class="tab-pane fade <?= @$show_ec; //show active 
                                                                            ?>" id="accessories" role="tabpanel">

                                                    <hr>

                                                    <!-- Start recherche  -->

                                                    <section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

                                                        <div class="container">

                                                            <div class="inner-top">

                                                                <div class="row">

                                                                    <div class="col-lg-8 offset-lg-2 col-12">

                                                                        <!-- Start Newsletter Inner -->

                                                                        <div class="inner">

                                                                            <form method="get" class="newsletter-inner">

                                                                                <input name="recherche_ec" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_ec']; ?>" required="" type="text">

                                                                                <button class="btn" name="btn_recherche_ec" value="recherche"><i class="ti-search"></i></button>

                                                                            </form>

                                                                        </div>

                                                                        <!-- End Newsletter Inner -->

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </section>

                                                    <!-- End recherche -->

                                                    <hr>

                                                    <div class="tab-single">

                                                        <div class="row">

                                                            <?php



                                                            // code affichage des entreprises

                                                            //

                                                            try {

                                                                if (isset($_GET['btn_recherche_ec'])) {

                                                                    if (!empty($_GET['recherche_ec'])) {

                                                                        //Variable recherche 

                                                                        $mot_cle = strtoupper($_GET['recherche_ec']);

                                                                        $mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

                                                                        //

                                                                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                        $resultat = $con->query("SELECT * FROM entite WHERE categorie='ECOLE' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
                                                                    }
                                                                } else {

                                                                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $resultat = $con->query("SELECT * FROM entite WHERE categorie='ECOLE' ORDER BY date_creation DESC");
                                                                }

                                                                //

                                                                if (!$resultat) {

                                                                    $mes_erreur = $con->errorInfo();

                                                                    echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
                                                                } else {

                                                                    while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

                                                                        if ($row[25] == "En attente") {

                                                                            $style_enattente = "#710120";

                                                                            $etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

                                                                            $btn_approuv = "submit";
                                                                        } else {

                                                                            $style_enattente = "#fff";

                                                                            $etat = "";

                                                                            $btn_approuv = "hidden";
                                                                        }

                                                                        echo '

                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

                                                <form method="get" style="background: ' . $style_enattente . ';">

                                                <input type="hidden" name="k" value="' . $row[0] . '">

                                                    <input type="' . $btn_approuv . '" name="btn_appr" value="' . $btn_text . '" style="width: 150px; padding:5px;">	

                                                    <br>

                                                    <input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">	

                                                    <hr>

                                                </form>

                                                <span style="font-size: 11px;">' . $etat . '</span>

                                                        <div class="single-product">

                                                            <div class="product-img">

                                                            <h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

                                                                <a href="../gestion_details_affichage_entite.php?k=' . $row[0] . '">

                                                                    <img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

                                                                </a>

                                                                <div class="button-head">

                                                                <div class="product-action">

                                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="../gestion_details_affichage_entite.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

                                                                    </div>

                                                                    <div class="product-action-2">

                                                                        <a title="Add to cart" href="../gestion_details_affichage_entite.php?k=' . $row[0] . '">' . $row[9] . '</a>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="product-content">

                                                                

                                                                <div class="product-price">

                                                                    <hr>

                                                                    <span style="font-size:15px; font-weight:bold;">

                                                                    <i>

                                                                        ' . $row[25] . '

                                                                    </i>

                                                                    </span>

                                                                    <br>

                                                                <a href="../gestion_details_affichage_entite.php?k=' . $row[0] . '" style="font-size: 11px;">

                                                                <strong>ID :</strong> 	

                                                                ' . $row[0] . '

                                                                </a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                ';
                                                                    }
                                                                }

                                                                $resultat->closeCursor();
                                                            } catch (PDOException $e) {



                                                                echo "ERREUR :" . $e;
                                                            }





                                                            //

                                                            //

                                                            ?>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!--/ End Single Tab -->

                                                <!-- Start Single Tab -->

                                                <div class="tab-pane fade <?= @$show_u; //show active 
                                                                            ?>" id="essential" role="tabpanel">

                                                    <hr>

                                                    <!-- Start recherche  -->

                                                    <section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

                                                        <div class="container">

                                                            <div class="inner-top">

                                                                <div class="row">

                                                                    <div class="col-lg-8 offset-lg-2 col-12">

                                                                        <!-- Start Newsletter Inner -->

                                                                        <div class="inner">

                                                                            <form method="get" class="newsletter-inner">

                                                                                <input name="recherche_u" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_u']; ?>" required="" type="text">

                                                                                <button class="btn" name="btn_recherche_u" value="recherche"><i class="ti-search"></i></button>

                                                                            </form>

                                                                        </div>

                                                                        <!-- End Newsletter Inner -->

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </section>

                                                    <!-- End recherche -->

                                                    <hr>

                                                    <div class="tab-single">

                                                        <div class="row">

                                                            <?php



                                                            // code affichage des entreprises

                                                            //

                                                            try {

                                                                if (isset($_GET['btn_recherche_u'])) {

                                                                    if (!empty($_GET['recherche_u'])) {

                                                                        //Variable recherche 

                                                                        $mot_cle = strtoupper($_GET['recherche_u']);

                                                                        $mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

                                                                        //

                                                                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                        $resultat = $con->query("SELECT * FROM entite WHERE categorie='UNIVERSITE' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
                                                                    }
                                                                } else {

                                                                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $resultat = $con->query("SELECT * FROM entite WHERE categorie='UNIVERSITE' ORDER BY date_creation DESC");
                                                                }

                                                                //

                                                                if (!$resultat) {

                                                                    $mes_erreur = $con->errorInfo();

                                                                    echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
                                                                } else {

                                                                    while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

                                                                        if ($row[25] == "En attente") {

                                                                            $style_enattente = "#710120";

                                                                            $etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

                                                                            $btn_approuv = "submit";
                                                                        } else {

                                                                            $style_enattente = "#fff";

                                                                            $etat = "";

                                                                            $btn_approuv = "hidden";
                                                                        }

                                                                        echo '

                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

                                                <form method="get" style="background: ' . $style_enattente . ';">

                                                <input type="hidden" name="k" value="' . $row[0] . '">

                                                    <input type="' . $btn_approuv . '" name="btn_appr" value="' . $btn_text . '" style="width: 150px; padding:5px;">	

                                                    <br>

                                                    <input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">	

                                                    <hr>

                                                </form>

                                                <span style="font-size: 11px;">' . $etat . '</span>

                                                        <div class="single-product">

                                                            <div class="product-img">

                                                            <h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

                                                                <a href="../gestion_details_affichage_entite.php?k=' . $row[0] . '">

                                                                    <img style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

                                                                </a>

                                                                <div class="button-head">

                                                                <div class="product-action">

                                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="../gestion_details_affichage_entite.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

                                                                    </div>

                                                                    <div class="product-action-2">

                                                                        <a title="Add to cart" href="../gestion_details_affichage_entite.php?k=' . $row[0] . '">' . $row[9] . '</a>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="product-content">

                                                                

                                                                <div class="product-price">

                                                                    <hr>

                                                                    <span style="font-size:15px; font-weight:bold;">

                                                                    <i>

                                                                        ' . $row[25] . '

                                                                    </i>

                                                                    </span>

                                                                    <br>

                                                                <a href="../gestion_details_affichage_entite.php?k=' . $row[0] . '" style="font-size: 11px;">

                                                                <strong>ID :</strong> 	

                                                                ' . $row[0] . '

                                                                </a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                ';
                                                                    }
                                                                }

                                                                $resultat->closeCursor();
                                                            } catch (PDOException $e) {



                                                                echo "ERREUR :" . $e;
                                                            }





                                                            //

                                                            //

                                                            ?>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!--/ End Single Tab -->

                                                <!-- Start Single Tab -->

                                                <div class="tab-pane fade <?= @$show_sp; //show active 
                                                                            ?>" id="prices" role="tabpanel">

                                                    <hr>

                                                    <!-- Start recherche  -->

                                                    <section class="shop-newsletter section" style="margin:0 30px 0 0; padding:0;">

                                                        <div class="container">

                                                            <div class="inner-top">

                                                                <div class="row">

                                                                    <div class="col-lg-8 offset-lg-2 col-12">

                                                                        <!-- Start Newsletter Inner -->

                                                                        <div class="inner">

                                                                            <form method="get" class="newsletter-inner">

                                                                                <input name="recherche_sp" placeholder="Tapez votre mot clé" value="<?= @$_GET['recherche_sp']; ?>" required="" type="text">

                                                                                <button class="btn" name="btn_recherche_sp" value="recherche"><i class="ti-search"></i></button>

                                                                            </form>

                                                                        </div>

                                                                        <!-- End Newsletter Inner -->

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </section>

                                                    <!-- End recherche -->



                                                    <hr>

                                                    <div class="tab-single">

                                                        <div class="row">

                                                            <?php



                                                            // code affichage des entreprises

                                                            //

                                                            try {

                                                                if (isset($_GET['btn_recherche_sp'])) {

                                                                    if (!empty($_GET['recherche_sp'])) {

                                                                        //Variable recherche 

                                                                        $mot_cle = strtoupper($_GET['recherche_sp']);

                                                                        $mot_cle = htmlspecialchars($mot_cle, ENT_QUOTES);

                                                                        //

                                                                        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                        $resultat = $con->query("SELECT * FROM entite WHERE categorie='SERVICE PUBLIC' AND (UPPER(denomination) LIKE '%$mot_cle%' OR UPPER(specialite) LIKE '%$mot_cle%' OR UPPER(ville) LIKE '%$mot_cle%' OR UPPER(pays) LIKE '%$mot_cle%' OR UPPER(extension) LIKE '%$mot_cle%' OR UPPER(souscategorie) LIKE '%$mot_cle%')  ORDER BY date_creation DESC");
                                                                    }
                                                                } else {

                                                                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                                                    $resultat = $con->query("SELECT * FROM entite WHERE categorie='SERVICE PUBLIC' ORDER BY date_creation DESC");
                                                                }

                                                                //

                                                                //

                                                                if (!$resultat) {

                                                                    $mes_erreur = $con->errorInfo();

                                                                    echo "Lecture impossible, code : ", $con->errorCode(), $mes_erreur[2];
                                                                } else {

                                                                    while ($row = $resultat->fetch(PDO::FETCH_NUM)) {

                                                                        if ($row[25] == "En attente") {

                                                                            $style_enattente = "#710120";

                                                                            $etat = "En attente depuis " . date("d/m/Y", strtotime($row[23]));

                                                                            $btn_approuv = "submit";
                                                                        } else {

                                                                            $style_enattente = "#fff";

                                                                            $etat = "";

                                                                            $btn_approuv = "hidden";
                                                                        }

                                                                        echo '

                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12" style="border-radius: 30px; background:white; margin:15px; max-width: 250px; padding-bottom: 15px; box-shadow: 1px 1px 12px #555; padding-top: 0px;">

                                                <form method="get" style="background: ' . $style_enattente . ';" >

                                                <input type="hidden" name="k" value="' . $row[0] . '">

                                                    <input type="' . $btn_approuv . '" name="btn_appr" value="' . $btn_text . '" style="width: 150px; padding:5px;">	

                                                    <br>

                                                    <input type="submit" name="btn_suppr" value="Supprimer" style="width: 150px; padding:5px;">	

                                                    <hr>

                                                </form>

                                                <span style="font-size: 11px;">' . $etat . '</span>

                                                        <div class="single-product">

                                                            <div class="product-img">

                                                            <h6 style="text-align:center;text-shadow: 2px 2px 4px #999;">' . $row[1] . '</h6><br>

                                                                <a href="../gestion_details_affichage_entite.php?k=' . $row[0] . '">

                                                                    style="width:150px; height: 120px;" class="default-img" src="' . $row[3] . '" alt="#">

                                                                </a>

                                                                <div class="button-head">

                                                                <div class="product-action">

                                                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="../gestion_details_affichage_entite.php?k=' . $row[0] . '"><i class=" ti-eye"></i><span>' . $row[10] . '</span></a>

                                                                    </div>

                                                                    <div class="product-action-2">

                                                                        <a title="Add to cart" href="../gestion_details_affichage_entite.php?k=' . $row[0] . '">' . $row[9] . '</a>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="product-content">

                                                                

                                                                <div class="product-price">

                                                                    <hr>

                                                                    <span style="font-size:15px; font-weight:bold;">

                                                                    <i>

                                                                        ' . $row[25] . '

                                                                    </i>

                                                                    </span>

                                                                    <br>

                                                                <a href="../gestion_details_affichage_entite.php?k=' . $row[0] . '" style="font-size: 11px;">

                                                                <strong>ID :</strong> 	

                                                                ' . $row[0] . '

                                                                </a>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                ';
                                                                    }
                                                                }

                                                                $resultat->closeCursor();
                                                            } catch (PDOException $e) {



                                                                echo "ERREUR :" . $e;
                                                            }





                                                            //

                                                            //

                                                            ?>

                                                        </div>

                                                    </div>

                                                </div>

                                                <!--/ End Single Tab -->

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </main>
            <?php include_once('footer.php');
  
    } else {
        include_once('404.php');
    }
        ?>