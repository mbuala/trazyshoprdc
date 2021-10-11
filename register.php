<?php

?>
<?php

include_once("fonction/session.php");

//

include_once('fonction/code_identification.php');

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <!-- Start of Async Callbell Code -->

    <script>
        window.callbellSettings = {

            token: "JAReCdWRNiPpetVwHJK9XSoa"

        };
    </script>

    <script>
        (function() {
            var w = window;
            var ic = w.callbell;
            if (typeof ic === "function") {
                ic('reattach_activator');
                ic('update', callbellSettings);
            } else {
                var d = document;
                var i = function() {
                    i.c(arguments)
                };
                i.q = [];
                i.c = function(args) {
                    i.q.push(args)
                };
                w.Callbell = i;
                var l = function() {
                    var s = d.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = 'https://dash.callbell.eu/include/' + window.callbellSettings.token + '.js';
                    var x = d.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                };
                if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            }
        })()
    </script>

    <!-- End of Async Callbell Code -->

    <!-- Meta Tag -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name='copyright' content=''>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Tag  -->

    <title>Formulaire | création de l'entité</title>

    <!-- Favicon -->

    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Web Font -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">



    <!-- StyleSheet -->



    <!-- Bootstrap -->

    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->

    <link rel="stylesheet" href="css/magnific-popup.min.css">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- Fancybox -->

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <!-- Themify Icons -->

    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Nice Select CSS -->

    <link rel="stylesheet" href="css/niceselect.css">

    <!-- Animate CSS -->

    <link rel="stylesheet" href="css/animate.css">

    <!-- Flex Slider CSS -->

    <link rel="stylesheet" href="css/flex-slider.min.css">

    <!-- Owl Carousel -->

    <link rel="stylesheet" href="css/owl-carousel.css">

    <!-- Slicknav -->

    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- Eshop StyleSheet -->

    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="css/responsive.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->



    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-207299206-1');
    </script>





</head>

<body class="js">



    <!-- Preloader -->

    <div class="preloader">

        <div class="preloader-inner">

            <div class="preloader-icon">

                <span></span>

                <span></span>

            </div>

        </div>

    </div>

    <!-- End Preloader -->

    <?php

    include_once('page/entete2.php');



    ?>

    <!-- Start Contact -->

    <section class="shop checkout section">
        <div class="signin-form">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8 col-12">

                        <div class="checkout-form">

                            <div class="title">

                                <h6>creation d'un nouveau compte</h6>
                                <hr>

                            </div>

                            <form class="form form-signin" method="post" id="register-form">


                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">

                                            <label>Votre Nom<span>*</span></label>

                                            <input name="nom" type="text" placeholder="" id="nom">

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">

                                            <label>Votre prenom<span>*</span></label>

                                            <input name="prenom" type="text" placeholder="" id="prenom">

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">

                                            <label>email<span>*</span></label>

                                            <input name="email" type="email" placeholder="" id="email">

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">

                                            <label>TELELPHONE<span>*</span></label>

                                            <input name="tele^pho e" type="phone" id="telephone" placeholder="+243892808999">

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">

                                            <label>Sexe<span>*</span></label>

                                            <select style="width: 10px; height: 50px;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="sexe" id="sexe">
                                                <option selected>sexe</option>
                                                <option value="masculin">masculin</option>
                                                <option value="feminin">feminin</option>

                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">

                                            <label>ADRESSE<span>*</span></label>

                                            <input name="adresse" type="text" id="adresse" placeholder="">

                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">

                                            <label>mot de passe <span>*</span></label>

                                            <input name="motdepasse" type="password" placeholder="" id="motdepasse">

                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">

                                        <div class="form-group">

                                            <label>Confirmer votre mot de passe <span>*</span></label>

                                            <input name="confirme_mot_passe" type="password" placeholder="" id="confirme_mot_passe">

                                        </div>

                                    </div>

                                    <div class="col-12">
                                    <div id="error"> </div>
                                    <div id="success"></div>
                                        <div class="form-group button">

                                            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                                                <span class="glyphicon glyphicon-log-in"></span> Create Account
                                            </button>
                                        </div>

                                    </div>
                                   

                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--/ End Contact -->



    <?php

    include_once('page/terme1.php');

    include_once('page/pieds.php');

    ?>

</body>

</html>