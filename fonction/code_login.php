<?php 
   @$id_login=$_POST["login"];
   @$mot_pass=$_POST["mot_passe"];
   @$btn_connexion=$_POST["btn_connexion"];
   $erreur="";
   if(isset($btn_connexion)){
      if ($id_login=="" or $mot_pass=="") {
         echo'
            <script>
               alert("Un des champs est vide !");
            </script>
            ';
      }else{
         $mot_pass=md5($mot_pass);
         include_once("fonction/connexion.php");
         $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $resultat = $con->query("SELECT * FROM entite WHERE identifiant='$id_login' AND mot_passe='$mot_pass'");
         if (!$resultat) {
           $mes_erreur=$con->errorInfo();
           echo "Lecture impossible, code : ", $con->errorCode(),$mes_erreur[2];
         }else{
            $row = $resultat->fetch(PDO::FETCH_NUM);
                  if ($row[0]<>"") {
                  $_SESSION["id"]=$row[0];
                  $_SESSION["logo"]=$row[3];
                 $id_entite= $_SESSION['id'];
                // header("location:details_affichage.php?k=$id_entite");
                  //die();
                 echo'
                  <script>
                     location.href="details_affichage.php?k='.$id_entite.'";
                  </script>
                 ';
               }else{
                     $message='Ce compte est inexistant, veuillez changer et réessayer !';
          }    
       }
      } 
   }
?>