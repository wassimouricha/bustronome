<?php

require('actions/securiteaction.php'); 
require('actions/database.php');


// je vais vérifier si l'utilisateur à bien cliquer sur le bouton publier
if(isset($_POST['validate'])){


    if(!empty($_POST['title']) AND !empty($_POST['descriptioned']) AND !empty($_POST['content'])){

       $question_title = htmlspecialchars($_POST['title']);
       $question_description = nl2br(htmlspecialchars($_POST['descriptioned']));   //nl2br permet d'autoriser les sauts de ligne dans le textarea
       $question_content = nl2br(htmlspecialchars($_POST['content']));
       $question_id_author = $_SESSION['id'];
       $question_pseudo_author = $_SESSION['pseudo'];
       $question_date = date('d/m/Y');
       $question_image = file_get_contents($_FILES['bin']['tmp_name']);
      

        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO menu(titre, descriptioned, content, id_auteur, pseudo_auteur, date_publication, bin  )VALUES(?, ?, ?, ?, ?, ?, ?)');
        $insertQuestionOnWebsite->execute(array( $question_title,   $question_description,  $question_content,  $question_id_author,  $question_pseudo_author,  $question_date, $question_image));

            $successMsg = "Votre Menu à bien été publié sur le site !";
            header('location: mes-menu.php');

    }else{
            $errorMsg = "Veuillez compléter tous les champs";
        }


}