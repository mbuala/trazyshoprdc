<?php
session_start();
@$email = $_POST["email"];
@$motpasse = $_POST["motpasse"];
@$loginadmin = $_POST["loginadmin"];
//$message="uudududuududududuudu";
$erreur = "";
include_once('../fonction/connexion.php');
if (isset($loginadmin)) {

    if ($email == "" or $motpasse == "") {
        $message = "Un des champs est vide !";
    } else {
        $mot_pass = md5($motpasse);


        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $resultat = $con->query("SELECT * FROM utilisateur WHERE email='$email' AND motdepasse='$mot_pass'");

        if (!$resultat) {

            $mes_erreur = $con->errorInfo();

            $message = "Lecture impossible, code : " . $con->errorCode() . $mes_erreur[2];
        } else {

            $row = $resultat->fetch(PDO::FETCH_NUM);

            if ($row) {

                $_SESSION["id"] = $row[0];
                $_SESSION["isLogged"]=true;
                $_SESSION["nom"] = $row[1];
                $_SESSION["prenom"] = $row[2];
                $_SESSION["email"] = $row[3];
                //header('Location: ./dashboard.php');
                include('dashboard.php');
                exit;
            } else {

                $message = 'Ce compte est inexistant, veuillez changer et réessayer ! ';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login admin panel</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="">
                                        <?php
                                        if (isset($message)) {
                                        ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?= @$message; ?>
                                            </div>

                                        <?php
                                        }
                                        ?>

                                        <div class="form-floating mb-3">
                                            <input value="<?= @$email; ?>" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="motpasse" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <button class="btn btn-primary" type="submit" name="loginadmin" class="btn ">Connexion</button>


                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>