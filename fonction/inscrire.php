<?php
  include_once("connexion.php");
    @$nom=htmlspecialchars($_POST['nom'], ENT_QUOTES);
    @$prenom=htmlspecialchars($_POST['prenom'], ENT_QUOTES);
    @$email=htmlspecialchars($_POST['email'], ENT_QUOTES);
    @$adresse=htmlspecialchars($_POST['adresse'], ENT_QUOTES);
    @$telephone=htmlspecialchars($_POST['telephone'], ENT_QUOTES);
    @$sexe=htmlspecialchars($_POST['sexe'], ENT_QUOTES);
    @$motdepasse=htmlspecialchars($_POST['motdepasse'], ENT_QUOTES);  
    @$identifiant ="";
    if ($_POST) {
       $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $stmt =$con->prepare("SELECT * FROM utilisateur WHERE email=:email");
       $stmt->execute(array(":email"=>$email));
       $count = $stmt->rowCount();
       if($count==0){
            $mot_de_passe= md5($motdepasse);  
            $identifiant= rand();
            $stmt = $con->prepare("INSERT INTO utilisateur
            (nom,prenom,email,adresse,telephone,motdepasse) 
            VALUES
            (:nom,:prenom,:email,:adresse,:telephone,:motdepasse)");
          
            $stmt->bindParam(":nom",$nom);
            $stmt->bindParam(":prenom",$prenom);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":adresse",$adresse);
            $stmt->bindParam(":telephone",$telephone);
           // $stmt->bindParam(":sexe",$sexe);
            $stmt->bindParam(":motdepasse",$mot_de_passe);
            if($stmt->execute()){
                echo "registered";
            }
            else{
                echo "Query could not execute !";
            }
       }else{
        echo "1"; //  not available
       }   
    }
    

?>