<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta charset="utf-8">
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="images/favicon.png">
  
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">



    <!-- StyleSheet -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Magnific Popup -->

    <link rel="stylesheet" href="../css/magnific-popup.min.css">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="../css/font-awesome.css">

    <!-- Fancybox -->

    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

    <!-- Themify Icons -->

    <link rel="stylesheet" href="../css/themify-icons.css">

    <!-- Nice Select CSS -->

    <link rel="stylesheet" href="../css/niceselect.css">

    <!-- Animate CSS -->

    <link rel="stylesheet" href="../css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="../css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="../css/slicknav.min.css">
    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
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
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!"> <?= $_SESSION["nom"]  ?> <?= $_SESSION["prenom"]  ?> </a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>