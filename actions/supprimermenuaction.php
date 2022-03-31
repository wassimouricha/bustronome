<?php

session_start();
if(!isset($_SESSION['auth'])){
    header('Location : ../login.php');
}

require('database.php');
//la fonctions isset est une fonction php qui permet de savoir si une variable est bien déclaré
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //on va verifier si l'identifiant utiliser par l'utilisateur possede bien une question

    $idofthemenu = $_GET['id'];
    //selectionner l'id_auteur d'un menu dans la table menu qui possède l'identifiant entré par l'utilisateur
    $checkifmenuexist = $bdd->prepare('SELECT id_auteur FROM menu WHERE id = ?');
    $checkifmenuexist->execute(array($idofthemenu));

    //verifier si la question existe
    if($checkifmenuexist->rowCount() > 0){
            //avec cette variable et la methode fetch ça va me permettre de récuperer toutes les données lors de la requete
        $userinfo = $checkifmenuexist->fetch();
            if($userinfo[['id_auteur'] == $_SESSION['id']]){
                    //on dit de supprimer un menu dans la table menu qui possede l'id de l'identifiant de notre menu ($idofthemenu qui est passé dans l'url)
                $deletethismenu = $bdd->prepare('DELETE FROM menu WHERE id = ?');
                $deletethismenu->execute(array($idofthemenu));

                header('location: ../mes-menu.php');
            }else{
                echo "vous n'avez pas le droit de supprimer un menu qui ne vous appartient pas !";
            }

    }else{
        echo "Aucun menu n'a été trouvé !";
    }

}else{
    echo "Aucun menu n'a été trouvé !";
}