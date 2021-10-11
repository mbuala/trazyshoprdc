<?php
session_start();
   if ($_SESSION["isLogged"] == true) {
        unset($_SESSION["id"]);
        unset($_SESSION["nom"]);
        unset($_SESSION["isLogged"]);
        $_SESSION["isLogged"]=false;
        unset($_SESSION["prenom"]);
        unset($_SESSION["email"]);
        header("Location:index.php");   
    }
