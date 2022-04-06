<?php


//je vais faire une condition pour permettre de voir si l'admin est connecté
session_start();
if(isset($_POST['validate'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_admin = "admin";
        $mdp_admin = "1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_admin AND $mdp_saisi == $mdp_admin ){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: booked.php');
        }else{
            $errorMsg = " votre mdp admin n'est pas le bon vous n'etes pas l'admin";
        }

    }else{
        $errorMsg = " vous n'etes pas l'admin";
    }

}