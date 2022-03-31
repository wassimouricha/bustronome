<?php

require('actions/database.php');

//recuperer l'identifiant de l'utilisateur
if(isset($_GET['id']) AND !empty($_GET['id'])){
            //l'identifiant de l'utilisateur
        $idofuser = $_GET['id'];

            //verifier si l'utilisateur existe
        $checkifuserexist = $bdd->prepare('SELECT pseudo, nom, prenom, binu FROM users WHERE id = ? ');
        $checkifuserexist->execute(array($idofuser));

        if($checkifuserexist->rowCount() > 0){

                //recuperer toutes les données de l'utilisateur
                $userinfo = $checkifuserexist->fetch();

                $userpseudo = $userinfo['pseudo'];
                $usernom = $userinfo['nom'];
                $userprenom = $userinfo['prenom'];
                $userpic = $userinfo['binu'];

                //recuperer tout les menu de l'utilisateur 
                //on selectionne tout les menu de la table menu qui ont l'id_auteur qui correspond à l'id dans l'url (order by desc pour mettre par odre décroissant)
                $gethismenu = $bdd->prepare('SELECT * FROM menu WHERE id_auteur = ?  ORDER BY id DESC');
                $gethismenu->execute(array($idofuser));

        }else{
            $errorMsg = "Aucun Utilisateur trouvé";
        }

} else{
    $errorMsg = "Aucun Utilisateur trouvé";
}