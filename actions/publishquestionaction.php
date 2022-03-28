<?php


require('actions/database.php');

// je vais vérifier si l'utilisateur à bien cliquer sur le bouton publier
if(isset($_POST['validate'])){


    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){

    }else{
            $errorMsg = "Veuillez compléter tous les champs";
        }


}