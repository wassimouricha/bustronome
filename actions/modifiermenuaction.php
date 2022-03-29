<?php

require('actions/database.php');
// if isset permet de demander si la variable est déclaré, la methode $_GET sert a récuperer les données de l'url
// donc si vous voulez modifier un menu dans l'url de la page modifier-menu.php vous ajouter ?id= puis le numéro de l'id du menu que vous voulez modifier
if(isset($_GET['id'])  AND !empty($_GET['id'])){

    $idofmenu = $_GET['id'];  //je met le get id dans une variable pour éviter de le réecrire
    //on va venir récuperer l'id d'un menu qui se trouve dans la base de donnée menu(sus phpmyadmin) qui possede l'id que l'on a mis dans l'url
    $checkIfMenuExist = $bdd->prepare('SELECT id FROM menu WHERE id = ?');
    $checkIfMenuExist->execute(array($idofmenu));

    //rowcount nous permet de compter le nombre de donéne récuperer par cette requete
    // et donc sir le nombre de donnée est bien supérieur à 0 ça veut dire que le menu existe bien et possède l'id que l'on a mis dans l'url
    if($checkIfMenuExist->rowCount() > 0){

        //ici on va verifier que l'identifiant de l'auteur qui est connecté est bien l'auteur du menu que l'on veut modifier
        

    }else{
        $errorMsg = "Aucun menu ne possède l'id en question !" ;
    }

}else{
    $errorMsg = "Aucun menu n'a été trouvé !" ;
}