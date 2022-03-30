<?php


require('database.php');
//la fonctions isset est une fonction php qui permet de savoir si une variable est bien déclaré
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //on va verifier si l'identifiant utiliser par l'utilisateur possede bien une question

    $idofthemenu = $_GET['id'];
    //selectionner toutes les données d'un menu dans la table menu qui possède l'identifiant entré par l'utilisateur
    $checkifmenuexist = $bdd->prepare('SELECT * FROM menu WHERE id = ?');
    $checkifmenuexist->execute(array($idofthemenu));

    //verifier si la question existe
    if($checkifmenuexist->rowCount() > 0){

    }else{
        echo "Aucun menu n'a été trouvé !";
    }

}else{
    echo "Aucun menu n'a été trouvé !";
}