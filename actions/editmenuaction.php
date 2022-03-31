<?php

require('actions/database.php');

//on va d'abord verifier si l'utilisateur clic bien sur le bouton modifier 

if(isset($_POST['validate'])){

    if(!empty($_POST['title']) AND !empty($_POST['descriptioned']) AND !empty($_POST['content']) ){

        $newmenutitle = htmlspecialchars($_POST['title']);
        $newmenudescriptioned = htmlspecialchars($_POST['descriptioned']);
        $newmenucontent = htmlspecialchars($_POST['content']);
        $newmenuimage = file_get_contents($_FILES['bin']['tmp_name']);

            //update est une requete permettant de mettre à jour des informations dans notre table
            //ici on lui dit de mettre a jour la table menu , il va mettre à jour le titre, le description et le contenu du menu qui possede l'id soit donc un id existant déjà dans la table menu
        $editmenu = $bdd->prepare('UPDATE menu SET titre = ?, descriptioned = ?, content = ?, bin = ? WHERE id = ?');
        //on execute la requete qui dans un tableau va venir récuperer le $_GET['id'] (ou ici la variable $idofmenu) soit donc la variable id 
        $editmenu->execute(array($newmenutitle, $newmenudescriptioned, $newmenucontent, $newmenuimage, $_GET['id']));

        header('Location: mes-menu.php');


    }else{
        $errorMsg = "Veuillez compléter tout les champs" ;
    }

}

