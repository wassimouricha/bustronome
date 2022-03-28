<?php


require('actions/database.php');

// je vais vérifier si l'utilisateur à bien cliquer sur le bouton publier
if(isset($_POST['validate'])){


    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])){

       $question_title = htmlspecialchars($_POST['title']);
       $question_description = nl2br(htmlspecialchars($_POST['description']));   //nl2br permet d'autoriser les sauts de ligne dans le textarea
       $question_content = nl2br(htmlspecialchars($_POST['content']));
       $question_date = date('d/m/Y');
       $question_id_author = $_SESSION['id'];
       $question_pseudo_author = $_SESSION['pseudo'];

        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO question(titre, description, contenu, id_auteur, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?,)');
        $insertQuestionOnWebsite->execute(
            array(
                $question_title,  
                $question_description, 
                $question_content, 
                $question_id_author, 
                $question_pseudo_author,  
                $question_date
                )
            );

            $successMsg = "Votre Menu à bien été publié sur le site !";

    }else{
            $errorMsg = "Veuillez compléter tous les champs";
        }


}